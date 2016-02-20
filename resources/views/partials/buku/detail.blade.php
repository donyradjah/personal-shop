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
                    Detail Buku # {{ $data->id }}
                </div>
                <div class="panel-body">
                    <form role="form">
                        @if (count($data) > 0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table">
                                        <tr>
                                            <td><label>Judul</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->judul }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Pengarang</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->pengarang }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Penerbit</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->penerbit }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Kategori</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->kategori }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Status</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->status }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Tahun Terbit</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->tahun_terbit }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Bahasa</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->bahasa }}</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>
                                                <button type="button" class="btn btn-outline btn-info"
                                                        onclick="location.href='/edit-buku/{{ $data->id }}';">Edit
                                                </button>
                                                <button type="button" class="btn btn-outline btn-primary"
                                                        onclick="location.href='/buku';">Kembali
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