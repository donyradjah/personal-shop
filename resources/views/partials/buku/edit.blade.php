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
                    Edit Buku # {{ $data->id }}
                </div>
                <div class="panel-body">
                    {{--<form role="form">--}}
                    @if (count($data) > 0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form" action="/buku/{{ $data->id }}">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->judul }}"
                                               name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarang</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->pengarang }}"
                                               name="pengarang">
                                    </div>
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->penerbit }}"
                                               name="penerbit">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->kategori }}"
                                               name="kategori">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->status }}"
                                               name="status">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->tahun_terbit }}"
                                               name="tahun_terbit">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahasa</label>
                                        <label>:</label>
                                        <input type="text" name="bahasa" class="form-control"
                                               value="{{ $data->bahasa }}">
                                    </div>
                                    <div class="form-group">
                                        {{--{{ csrf_field() }}--}}
                                        {{--{{ method_field('PUT') }}--}}

                                        <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                        {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="location.href='/buku';">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    {{--</form>--}}

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $("#Form").submit(function (event) {
                event.preventDefault();

                var action = $("#Form").attr('action');

                var $form = $(this),
                        judul = $form.find("input[name='judul']").val(),
                        pengarang = $form.find("input[name='pengarang']").val(),
                        penerbit = $form.find("input[name='penerbit']").val(),
                        kategori = $form.find("input[name='kategori']").val(),
                        status = $form.find("input[name='status']").val(),
                        tahun_terbit = $form.find("input[name='tahun_terbit']").val(),
                        bahasa = $form.find("input[name='bahasa']").val();

                $.ajax({
                    method: "PUT",
                    url: action,
                    data: {
                        judul: judul,
                        pengarang: pengarang,
                        penerbit: penerbit,
                        kategori: kategori,
                        status: status,
                        tahun_terbit: tahun_terbit,
                        bahasa: bahasa
                    }
                })
                        .done(function (data) {
                            window.alert(data.result.message);
                            $("#page-wrapper").load("/buku");
                            $('form').hide();
                        });
            });
        });
    </script>

    <!-- /.row -->
@endsection