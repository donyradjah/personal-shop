/**
 * Created by dony on 2/23/16.
 */
$(document).ready(function () {
   getAjax(1);

    $("#Create").submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            ads = $form.find("input[name='ads']").val(),
            link = $form.find("input[name='link']").val(),
            area = $form.find("input[name='area']").val();
         ;

        var posting = $.post('/api/v1/ads', {
            ads: ads,
            link: link,
            area_id: area
        });

        // Put the results in a div
        posting.done(function (data) {
//                    console.log(data);
            $("#Create").reset();
            window.alert(data.result.message);
           getAjax(1);
        });
        return false;
    });

    // Event When Form Edit was submited
    $("#Form-Edit").submit(function (event) {
        event.preventDefault();
        var $form = $(this),
            id = $form.find("input[name='id']").val(),
            nama = $form.find("input[name='nama']").val(),
            alamat = $form.find("input[name='alamat']").val(),
            kota = $form.find("input[name='kota']").val(),
            no_telp = $form.find("input[name='no_telp']").val(),
            tgl_lahir = $form.find("input[name='tgl_lahir']").val();
//                console.log(currentRequest + ' |' + id);
        currentRequest = $.ajax({
            method: "PUT",
            url: '/anggota/' + id,
            data: {
                nama: nama,
                alamat: alamat,
                kota: kota,
                no_telp: no_telp,
                tgl_lahir: tgl_lahir
            },
            beforeSend: function () {
                if (currentRequest != null) {
                    currentRequest.abort();
                }
            },
            success: function (data) {
                window.alert(data.result.message);
                Index();
            },
            error: function (data) {
                window.alert(data.result.message);
                Index();
            }
        });
    });
});


function getAjax(page) {
    $("#dataAds").children().remove();
    $("#pag").children().remove();
    $("#Create")[0].reset();
    $('#loader-wrapper').show();
    setTimeout(function(){  $.getJSON("api/v1/ads?page="+page, function (data) {
        var no = data.from;
        var ads = data.data;
        //console.log(ads);
        $.each(ads.slice(0, data.total), function (i, data) {
            $("#dataAds").append("<tr><td>"+ no +"</td><td>" + data.area_id + "</td><td>" + data.ads + "</td><td>" + data.link + "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
            no++;
        });
        $("#loader-wrapper").hide();
        if(data.current_page ==  1){
            $("#pag").append("<li class='previus disabled'><a href='#'>newer</a></li>");
        } else{
            $("#pag").append("<li class='previus'><a href='javascript:getAjax("+ (data.current_page-1) +");'>newer</a></li>");

        }
        if(data.last_page == data.current_page){
            $("#pag").append("<li class='next disabled'><a href='#'>older</a></li>");
        } else{
            $("#pag").append("<li class='next'><a href='javascript:getAjax("+ (data.current_page+1) +");'>older</a></li>");

        }

    });}, 1000);

}