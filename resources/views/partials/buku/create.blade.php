@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Buku</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Buku
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="Form">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="judul">
                                </div>
                                <div class="form-group">
                                    <label>Pengarang</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="pengarang">
                                </div>
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="penerbit">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="kategori">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tahun_terbit">
                                </div>
                                <div class="form-group">
                                    <label>Bahasa</label>
                                    <label>:</label>
                                    <input type="text" name="bahasa" class="form-control">
                                </div>
                                <div class="form-group">

                                    <input class="btn btn-outline btn-info" type="submit" id="Submit" value="Simpan">
                                    {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/buku';">Kembali
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->

    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
//            $('#dataTables-example').DataTable({
//                responsive: true
//            });
            $("#Form").submit(function (event) {

                event.preventDefault();
//                $.post('/ajax-get', function (data) {
//                    console.log(data);
//                });
                var $form = $(this),
                        judul = $form.find("input[name='judul']").val(),
                        pengarang = $form.find("input[name='pengarang']").val(),
                        penerbit = $form.find("input[name='penerbit']").val(),
                        kategori = $form.find("input[name='kategori']").val(),
                        status = $form.find("input[name='status']").val(),
                        tahun_terbit = $form.find("input[name='tahun_terbit']").val(),
                        bahasa = $form.find("input[name='bahasa']").val();

                var posting = $.post('/buku', {
                    judul: judul,
                    pengarang: pengarang,
                    penerbit: penerbit,
                    kategori: kategori,
                    status: status,
                    tahun_terbit: tahun_terbit,
                    bahasa: bahasa
                });

                // Put the results in a div
                posting.done(function (data) {
//                    console.log(data);
                    window.alert(data.result.message);
//                    window.location = '/buku';
                    $("#page-wrapper").load("/buku");
                    $('form').hide();
                });
            });
        });
    </script>

@endsection