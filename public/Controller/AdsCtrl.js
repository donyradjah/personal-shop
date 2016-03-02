/**
 * Created by dony on 2/23/16.
 */
$(document).ready(function () {
    var currentRequest = null;
    getAjax(1);

    $("#Create").submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            ads = $form.find("input[name='ads']").val(),
            link = $form.find("input[name='link']").val(),
            area = $form.find("input[name='area']").val();


        var posting = $.post('/api/v1/ads', {
            ads: ads,
            link: link,
            area_id: area
        });

        // Put the results in a div
        posting.done(function (data) {
//                    console.log(data);
//            $("#Create").reset();
            window.alert(data.result.message);
            getAjax(1);
        });
        posting.error(function (data) {
            window.alert(data.result.message);
        });
        return false;
    });

    // Event When Form Edit was submited
    $("#Edit").submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            id = $form.find("input[name='id']").val(),
            ads = $form.find("input[name='ads']").val(),
            link = $form.find("input[name='link']").val(),
            area = $form.find("input[name='area']").val();
//                console.log(currentRequest + ' |' + id);
        currentRequest = $.ajax({
            method: "PUT",
            url: '/api/v1/ads/' + id,
            data: {
                ads: ads,
                link: link,
                area_id: area
            },
            beforeSend: function () {
                if (currentRequest != null) {
                    currentRequest.abort();
                }
            },
            success: function (data) {
                window.alert(data.result.message);
                getAjax(1);
            },
            error: function (data) {
                window.alert(data.result.message);
                getAjax(1);
            }
        });
    });
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
                $("#dataAds").append("<tr><td>" + no + "</td><td>" + data.area_id + "</td><td>" + data.ads + "</td><td>" + data.link + "</td><td> <a data-toggle='modal' href='#formEdit'><button type='button' class='btn btn-outline btn-primary' onclick='Edit("+ data.id +")'><i class='glyphicon glyphicon-pencil'></i></button></a> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'><i class='glyphicon glyphicon-remove' </button></td></tr>");
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
        });;
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
            $("input[name='area']").val(data.area_id);

        });
}

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