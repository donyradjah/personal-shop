{{--@extends('layout.master')--}}
@section('title', 'Page Title')
@section('content')

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Category</li>
                </ol>
                <div id="loader-wrapper">
                    <div id="loader"></div>
                </div>
                <h1>Category</h1>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-midnightblue">
                            <div class="panel-heading">
                                <h4>Data Category</h4>


                                <!-- Modal -->

                                <div class="options">
                                    <a data-toggle="modal" href="#formCreate"><i
                                                class="glyphicon glyphicon-plus"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                {{--<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>--}}
                                <div class="col-xs-6">
                                    <div class="dataTables_length" ><label><select id="optionCategoryMain"
                                                    class="form-control" aria-controls="example" size="1"
                                                    name="category_main" onchange="getAjax(1,this.value)">
                                            </select> </label></div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Parent Category</th>
                                        <th width="400">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="dataCat">

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



    <div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h4>Create Category</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <form id="Create" class="form-horizontal row-border" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Category</label>
                                <div class="col-sm-6">
                                    <input name="category" id="category" required="required" type="text" class="form-control" />
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h4>Edit Category</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <form id="Edit" class="form-horizontal row-border" />
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Category</label>
                                <div class="col-sm-6">
                                    <input name="category" id="category" required="required" type="text" class="form-control" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script type='text/javascript' src="{!! asset('assets/js/jquery-1.10.2.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('Controller/CategoryChildCtrl.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/demo/demo-formvalidation.js') !!}"></script>

@endsection
