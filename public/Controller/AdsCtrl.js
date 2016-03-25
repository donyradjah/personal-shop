/**
 * Created by dony on 2/23/16.
 */
$(document).ready(function () {
    var currentRequest = null;
    getAjax(1);
    $('#image').hide();

    $("#image_ads").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });

    $('#image_edit').hide();

    $("#image_ads_edit").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoadedEdit;
            reader.readAsDataURL(this.files[0]);
        }
    });



$("#Create").submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            ads = $form.find("input[name='ads']").val(),
            link = $form.find("input[name='link']").val(),
            area = $form.find("input[name='area']").val();




        //var posting = $.post('/api/v1/ads', {
        //    ads: ads,
        //    link: link,
        //    area_id: area
        //});
        var upload =   $.ajax({
            url: "/api/v1/ads",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) {
                window.alert(data.result.message);
                getAjax(1);
                $("#formCreate").modal("hide");

                $('#image').hide();
                $('#image').attr('src', '');
            },
            error: function (data){
                window.alert(data.result.message);
            }
            });
        // Put the results in a div
//        upload.done(function (data) {
//
//            window.alert(data.result.message);
//            getAjax(1);
//        });
//        upload.error(function (data) {
//            window.alert(data.result.message);
//        });
        return false;
    });

    // Event When Form Edit was submited
    $("#Edit").submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            id = $form.find("input[name='id']").val(),
            ads = $form.find("input[name='ads']").val(),
            link = $form.find("input[name='link']").val(),
            area = $form.find("input[name='area_id']").val();
//                console.log(currentRequest + ' |' + id);
        if($("#image_ads_edit").val()==null || $("#image_ads_edit").val() == "") {
            currentRequest = $.ajax({
                url: "/api/v1/ads/"+id,
                type: "PUT",
                data:  {

                    ads : ads,
                    area_id : area,
                    link : link


                },
                beforeSend: function () {
                    if (currentRequest != null) {
                        currentRequest.abort();
                    }
                },
                success: function (data) {
                    window.alert(data.result.message);
                    getAjax(1);
                    $("#formEdit").modal("hide");

                    $('#image_edit').hide();
                    $('#image_edit').attr('src', '');

                },
                error: function (data) {
                    window.alert(data.result.message);
                    getAjax(1);
                }
            });
        }else{
            var $form = $(this),
                id = $form.find("input[name='id']").val(),
                ads = $form.find("input[name='ads']").val(),
                link = $form.find("input[name='link']").val(),
                area = $form.find("input[name='area_id']").val();
            image = $("#image_ads_edit").val();
            var upload =   $.ajax({
                url: "/api/v1/upload-image/"+id,
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    window.alert(data.result.message);
                    getAjax(1);
                    $("#formEdit").modal("hide");


                    $('#image_edit').hide();
                    $('#image_edit').attr('src', '');
                },
                error: function (data){
                    window.alert(data.result.message);
                }
            });
            $.ajax({
                url:"/api/v1/ads-upload/"+id,
                type:"PUT",
                data:{
                    area_id:area,
                    ads:ads,
                    link:link,
                    image:image
                },
                success: function(data) {
                    window.alert(data.result.message);
                    getAjax(1);
                    $("#formEdit").modal("hide");


                    $('#image_edit').hide();
                    $('#image_edit').attr('src', '');
                },
                error: function (data){
                    window.alert(data.result.message);
                }
            });

        }

    })
});


function getAjax(page) {
    $("#dataAds").children().remove();
    $("#pag").children().remove();
    $('#loader-wrapper').show();
    $("#Create")[0].reset();
    $("#Edit")[0].reset();
    setTimeout(function () {
        $.getJSON("api/v1/ads?page=" + page, function (data) {
            var no = data.from;
            var ads = data.data;
            //console.log(ads);
            $.each(ads.slice(0, data.total), function (i, data) {
                $("#dataAds").append("<tr><td>" + no + "</td><td>" + data.ads + "</td><td>" + data.link + "</td><td> <a data-toggle='modal' href='#formEdit'><button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'><i class='glyphicon glyphicon-pencil'></i></button></a> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'><i class='glyphicon glyphicon-remove' </button></td></tr>");
                no++;
            });
            $("#loader-wrapper").hide();
            if (data.current_page == 1) {
                $("#pag").append("<li class='previus disabled'><a href='#'>newer</a></li>");
            } else {
                $("#pag").append("<li class='previus'><a href='javascript:getAjax(" + (data.current_page - 1) + ");'>newer</a></li>");

            }
            if (data.last_page <= data.current_page) {
                $("#pag").append("<li class='next disabled'><a href='#'>older</a></li>");
            } else {
                $("#pag").append("<li class='next'><a href='javascript:getAjax(" + (data.current_page + 1) + ");'>older</a></li>");

            }

        }).error(function (data) {
            $("#loader-wrapper").hide();
            $("#dataCat").append("<tr><td colspan='4'>Data Kosong</td></tr>");
        });
        ;
    }, 1000);

}

function Edit(id) {
    $.ajax({
        method: "Get",
        url: '/api/v1/ads/' + id,
        data: {}
    })
        .done(function (data) {
            $("input[name='id']").val(data.id);
            $("input[name='ads']").val(data.ads);
            $("input[name='link']").val(data.link);
            $("input[name='area_id']").val(data.area_id);
            $('#image_edit').show();
            $('#image_edit').attr('src', "image/ads/"+data.image);
        });
}
function imageIsLoaded(e) {
    $('#image').show();
    $('#image').attr('src', e.target.result);
};
function imageIsLoadedEdit(e) {
    $('#image_edit').show();
    $('#image_edit').attr('src', e.target.result);
};

function Hapus(id) {
    var result = confirm("Apakah Anda Yakin ingin Menghapus Data Ini?");
    if (result) {
        $.ajax({
            method: "DELETE",
            url: '/api/v1/ads/' + id,
            data: {}
        })
            .done(function (data) {
                window.alert(data.result.message);
//                            table.ajax.reload(null, false);
                getAjax(1);
            });
    }

}