{{--@extends('layout.master')--}}
@section('title', 'Page Title')
@section('content')

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Ads</li>
                </ol>
                <div id="loader-wrapper">
                    <div id="loader"></div>
                </div>
                <h1>Advertisment</h1>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-midnightblue">
                            <div class="panel-heading">
                                <h4>Data Advertisment</h4>


                                <!-- Modal -->

                                <div class="options">
                                    <a data-toggle="modal" href="#formCreate"><i
                                                class="glyphicon glyphicon-plus"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                {{--<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>--}}
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="400">Ads</th>
                                        <th width="400">Link</th>
                                        <th width="400">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="dataAds">

                                    </tbody>
                                </table>
                                <ul class="pagination" id="pag">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!--wrap -->
    </div> <!-- page-content -->


    <div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h4>Create Ads</h4>

                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <form id="Create" class="form-horizontal row-border" enctype="multipart/form-data"/>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama Iklan</label>

                                <div class="col-sm-6">
                                    <input name="ads" id="ads" required="required" type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Link</label>

                                <div class="col-sm-6">
                                    <input name="link" data-type="url" id="link" required="required" type="text"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Area</label>

                                <div class="col-sm-6">
                                    <input name="area_id" id="area_id" required="required" type="text"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Image</label>

                                <div class="col-sm-6">
                                    <input name="image_ads" id="image_ads" required="required" type="file"
                                           class="form-control"/>
                                    </br>
                                    <img src="" id="image" width="320px" height="180px">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h4>Edit Ads</h4>

                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <form id="Edit" class="form-horizontal row-border" enctype="multipart/form-data"/>
                            <input type="hidden" name="id">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama Iklan</label>

                                <div class="col-sm-6">
                                    <input name="ads" id="ads"  type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Link</label>

                                <div class="col-sm-6">
                                    <input name="link" data-type="url" id="link" type="text"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Area</label>

                                <div class="col-sm-6">
                                    <input name="area_id" id="area_id" type="text"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Image</label>

                                <div class="col-sm-6">
                                    <input name="image_ads" id="image_ads_edit"  type="file"
                                           class="form-control"/>
                                    </br>
                                    <img src="" id="image_edit" width="320px" height="180px">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type='text/javascript' src="{!! asset('assets/js/jquery-1.10.2.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('Controller/AdsCtrl.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/demo/demo-formvalidation.js') !!}"></script>

@endsection
