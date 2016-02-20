@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Anggota</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Anggota # {{ $data->id }}
                </div>
                <div class="panel-body">
                    <form role="form">
                        @if (count($data) > 0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->kota }}">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telpon</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->no_telp }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->tgl_lahir }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline btn-info"
                                                    onclick="">Simpan
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/anggota';">Kembali
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </form>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->
@endsection