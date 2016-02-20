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
                    Detail Anggota # {{ $data->id }}
                </div>
                <div class="panel-body">
                    <form role="form">
                        @if (count($data) > 0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table">
                                        <tr>
                                            <td><label>Nama</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->nama }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Alamat</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->alamat }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Kota</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->kota }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>No Telpon</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->no_telp }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Tanggal Lahir</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->tgl_lahir }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Tanggal Daftar</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->tgl_daftar }}</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>
                                                <button type="button" class="btn btn-outline btn-info"
                                                        onclick="location.href='/edit-anggota/{{ $data->id }}';">Edit
                                                </button>
                                                <button type="button" class="btn btn-outline btn-primary"
                                                        onclick="location.href='/anggota';">Kembali
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
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