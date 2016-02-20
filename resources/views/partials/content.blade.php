@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li class='active'><a href="index.php">Dashboard</a></li>
                </ol>

                <h1>Dashboard</h1>
                <div class="options">
                    <div class="btn-toolbar">
                        <button class="btn btn-default" id="daterangepicker2">
                            <i class="icon-calendar-empty"></i>
                            <span class="hidden-xs hidden-sm">September 30, 2013 - October 30, 2013</span> <b class="caret"></b>
                        </button>
                        <div class="btn-group hidden-xs">
                            <a href='#' class="btn btn-muted dropdown-toggle" data-toggle='dropdown'><i class="icon-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Text File (*.txt)</a></li>
                                <li><a href="#">Excel File (*.xlsx)</a></li>
                                <li><a href="#">PDF File (*.pdf)</a></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-muted hidden-xs"><i class="icon-cog"></i></a>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 col-xs-12 col-sm-6">
                                <a class="info-tiles tiles-brown" href="#">
                                    <div class="tiles-heading">Profit</div>
                                    <div class="tiles-body-alt">
                                        <div class="text-center"><span class="text-top">$</span>854</div>
                                        <small>+8.7% from last period</small>
                                    </div>
                                    <div class="tiles-footer">more info</div>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6">
                                <a class="info-tiles tiles-grape" href="#">
                                    <div class="tiles-heading">Revenue</div>
                                    <div class="tiles-body-alt">
                                        <div class="text-center"><span class="text-top">$</span>22.7<span class="text-smallcaps">k</span></div>
                                        <small>-13.5% from last week</small>
                                    </div>
                                    <div class="tiles-footer">go to accounts</div>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6">
                                <a class="info-tiles tiles-success" href="#">
                                    <div class="tiles-heading">Members</div>
                                    <div class="tiles-body-alt">
                                        <i class="icon-group"></i>
                                        <div class="text-center">109</div>
                                        <small>new users registered</small>
                                    </div>
                                    <div class="tiles-footer">manage members</div>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6">
                                <a class="info-tiles tiles-midnightblue" href="#">
                                    <div class="tiles-heading">Orders</div>
                                    <div class="tiles-body-alt">
                                        <i class="icon-shopping-cart"></i>
                                        <div class="text-center">57</div>
                                        <small>new orders received</small>
                                    </div>
                                    <div class="tiles-footer">manage orders</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 clearfix">
                                        <h4 class="pull-left" style="margin: 0 0 20px;">User Report <small>(weekly)</small></h4>
                                        <div class="btn-group pull-right">
                                            <a href="javascript:;" class="btn btn-default btn-xs active">this week</a>
                                            <a href="javascript:;" class="btn btn-default btn-xs ">previous week</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="site-statistics" style="height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 clearfix">
                                        <h4 class="pull-left" style="margin: 0 0 20px;">Annual Sales <small>(by quarter)</small></h4>
                                        <div class="btn-group pull-right">
                                            <a href="javascript:;" class="btn btn-default btn-xs active">2012</a>
                                            <a href="javascript:;" class="btn btn-default btn-xs ">2011</a>
                                            <a href="javascript:;" class="btn btn-default btn-xs ">2010</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="budget-variance" style="height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                        <a class="info-tiles tiles-midnightblue" href="#">
                            <div class="tiles-heading">
                                <div class="pull-left">Comments</div>
                                <div class="pull-right">+15.6%</div>
                            </div>
                            <div class="tiles-body">
                                <div class="pull-left"><i class="icon-comments-alt"></i></div>
                                <div class="pull-right">35</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                        <a class="info-tiles tiles-success" href="#">
                            <div class="tiles-heading">
                                <div class="pull-left">Likes</div>
                                <div class="pull-right">-5.5%</div>
                            </div>
                            <div class="tiles-body">
                                <div class="pull-left"><i class="icon-thumbs-up-alt"></i></div>
                                <div class="pull-right">318</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                        <a class="info-tiles tiles-grape" href="#">
                            <div class="tiles-heading">
                                <div class="pull-left">Bugs Fixed</div>
                                <div class="pull-right">+14.9%</div>
                            </div>
                            <div class="tiles-body">
                                <div class="pull-left"><i class="icon-check-sign"></i></div>
                                <div class="pull-right">21</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                        <a class="info-tiles tiles-brown" href="#">
                            <div class="tiles-heading">
                                <div class="pull-left">Downloads</div>
                                <div class="pull-right">-9.8%</div>
                            </div>
                            <div class="tiles-body">
                                <div class="pull-left"><i class="icon-download-alt"></i></div>
                                <div class="pull-right">128</div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-orange">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 clearfix">
                                        <h4 class="pull-left" style="margin: 0 0 20px;">Server Load <small>(%)</small></h4>
                                        <div class="btn-group pull-right">
                                            <a href="javascript:;" class="btn btn-default btn-xs active">Server #1</a>
                                            <a href="javascript:;" class="btn btn-default btn-xs ">Server #2</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="server-load" style="height:102px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-success">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 clearfix">
                                        <h4 class="pull-left" style="margin:0 0 10px">Site Statistics</h4>
                                        <div class="btn-group pull-right">
                                            <a href="javascript:;" id="updatePieCharts" class="btn btn-default-alt btn-xs"><i style="color:#808080;" class="icon-refresh"></i></a>
                                            <a href="javascript:;" class="btn btn-default-alt btn-xs"><i style="color:#808080;" class="icon-wrench"></i></a>
                                            <a href="javascript:;" class="btn btn-default-alt btn-xs"><i style="color:#808080;" class="icon-cog"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                        <div class="easypiechart" id="newvisits" data-percent="65">
                                            <span class="percent"></span>
                                        </div>
                                        <label for="newvisits">New Visits</label>
                                        <hr class="visible-sm visible-xs" />
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                    <span class="easypiechart" id="bouncerate" data-percent="81">
                                        <span class="percent"></span>
                                    </span>
                                        <label for="bouncerate">Bounce Rate</label>
                                        <hr class="visible-sm visible-xs" />
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                    <span class="easypiechart" id="clickrate" data-percent="42">
                                        <span class="percent"></span>
                                    </span>
                                        <label for="clickrate">Click Rate</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel gray">
                            <div class="panel-heading">
                                <h4>User Accounts</h4>
                                <div class="options">
                                    <a href="javascript:;"><i class="icon-cog"></i></a>
                                    <a href="javascript:;"><i class="icon-wrench"></i></a>
                                    <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="panel-body collapse in">
                                <div class="table-responsive" style="overflow-x:auto">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th width="6%"><input type="checkbox" id="select-all" /></th>
                                            <th width="22%">User ID</th>
                                            <th width="50%">Email Address</th>
                                            <th width="22%">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody class="selects">
                                        <tr>
                                            <td><input type="checkbox" class="" /></td>
                                            <td>cranston</td>
                                            <td>cranstonb@gmail.com</td>
                                            <td><span class="label label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="" /></td>
                                            <td>aaron</td>
                                            <td>ppaul@live.com</td>
                                            <td><span class="label label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="" /></td>
                                            <td>norris</td>
                                            <td>j.norris@gmail.com</td>
                                            <td><span class="label label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="" /></td>
                                            <td>gunner</td>
                                            <td>gunner@outlook.com</td>
                                            <td><span class="label label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="" /></td>
                                            <td>mrford</td>
                                            <td>fordm@gmail.com</td>
                                            <td><span class="label label-info">Pending</span></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="4" class="text-left">
                                                <label for="action" style="margin-bottom:0">Action </label>
                                                <select name="action">
                                                    <option value="Edit" />Edit
                                                    <option value="Aprove" />Aprove
                                                    <option value="Move" />Move
                                                    <option value="Delete" />Delete
                                                </select>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Calendar</h4>
                                <div class="options">
                                    <a href="javascript:;"><i class="icon-cog"></i></a>
                                    <a href="javascript:;"><i class="icon-wrench"></i></a>
                                    <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="panel-body collapse in">
                                <div id='calendar-drag'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-midnightblue">
                            <div class="panel-heading">
                                <h4>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#threads" data-toggle="tab">Threads</a></li>
                                        <li class=""><a href="#comments" data-toggle="tab">Comments</a></li>
                                        <li class=""><a href="#users" data-toggle="tab">Users</a></li>
                                    </ul>
                                </h4>
                                <div class="options">
                                    <a href="javascript:;"><i class="icon-cog"></i></a>
                                    <a href="javascript:;"><i class="icon-wrench"></i></a>
                                    <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="panel-body collapse in">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="threads">
                                        <ul class="panel-threads">
                                            <li>
                                                <img src="assets/demo/avatar/aniss.png" alt="Aniss" />
                                                <div class="content">
                                                    <span class="time">20 mins</span>
                                                    <a href="#" class="title">Envato’s Most Wanted – $5,000 Reward for Music & Band Themes and Templates</a>
                                                    <span class="thread">asked by <a href="#">Jim Gordon</a> in <a href="#">Section #3</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/corbett.png" alt="Corbett" />
                                                <div class="content">
                                                    <span class="time">2 hrs</span>
                                                    <a href="#" class="title">How to create a corporate wordpress theme?</a>
                                                    <span class="thread">asked by <a href="#">Simon Corbett</a> in <a href="#">Section #15</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" />
                                                <div class="content">
                                                    <span class="time">4 hrs</span>
                                                    <a href="#" class="title">Which cart is growing in popularity - WOOCOMMERCE or OPENCART? And which one would you choose?</a>
                                                    <span class="thread">asked by <a href="#">Jeff Dangerfield</a> in <a href="#">Section #9</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/doyle.png" alt="Doyle" />
                                                <div class="content">
                                                    <span class="time">13 hrs</span>
                                                    <a href="#" class="title">Pros and Cons of Using Grids in Responsive Web Design</a>
                                                    <span class="thread">asked by <a href="#">Alan Doyle</a> in <a href="#">Section #11</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/jackson.png" alt="Jackson" />
                                                <div class="content">
                                                    <span class="time">19 hrs</span>
                                                    <a href="#" class="title">Best Web & Graphic Design Proposal Software</a>
                                                    <span class="thread">asked by <a href="#">Eric Jackson</a> in <a href="#">Section #18</a></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="btn btn-default btn-sm pull-right">Show More</a>
                                    </div>
                                    <div class="tab-pane" id="comments">
                                        <ul class="panel-comments">
                                            <li>
                                                <img src="assets/demo/avatar/aniss.png" alt="Aniss" />
                                                <div class="content">
                                                    <span class="commented"><a href="#">Jim Gordon</a> commented on <a href="#">Article #121</a></span>
                                                    Just wondering - can random users see our comments? If so, allow them to comment!
                                                    <span class="actions"><a href="#"><i class="icon-trash"></i> Trash</a> <a href="#"><i class="icon-edit-sign"></i> Edit</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/corbett.png" alt="Corbett" />
                                                <div class="content">
                                                    <span class="commented"><a href="#">Simon Corbett</a> commented on <a href="#">Article #55</a></span>
                                                    Not sure what changed but for the last few weeks a few of my regulars are having their comments held for moderation.
                                                    <span class="actions"><a href="#"><i class="icon-trash"></i> Trash</a> <a href="#"><i class="icon-edit-sign"></i> Edit</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/paton.png" alt="Corbett" />
                                                <div class="content">
                                                    <span class="commented"><a href="#">Polly Paton</a> commented on <a href="#">Article #12</a></span>
                                                    I’m sure there is a tool for that.
                                                    <span class="actions"><a href="#"><i class="icon-trash"></i> Trash</a> <a href="#"><i class="icon-edit-sign"></i> Edit</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/watson.png" alt="Watson" />
                                                <div class="content">
                                                    <span class="commented"><a href="#">Annie Watson</a> commented on <a href="#">Article #223</a></span>
                                                    We have enough problems with Spammers already without letting non members leave comments.
                                                    <span class="actions"><a href="#"><i class="icon-trash"></i> Trash</a> <a href="#"><i class="icon-edit-sign"></i> Edit</a></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="btn btn-default btn-sm pull-right">Show More</a>
                                    </div>
                                    <div class="tab-pane" id="users">
                                        <ul class="panel-users">
                                            <li>
                                                <img src="assets/demo/avatar/paton.png" alt="Paton" />
                                                <div class="content">
                                                    <span class="time">11 mins</span>
                                                    <span class="desc"><a href="#">Polly Paton</a> followed <a href="#">John White</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/tennant.png" alt="Tennant" />
                                                <div class="content">
                                                    <span class="time">48 mins</span>
                                                    <span class="desc"><a href="#">David Tennant</a> unfollowed <a href="#">Tony Doubleday</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/jobs.png" alt="Jobs" />
                                                <div class="content">
                                                    <span class="time">5 hrs</span>
                                                    <span class="desc"><a href="#">Howard Jobs</a> commented on <a href="#">Selling PSD Template Rights!</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" />
                                                <div class="content">
                                                    <span class="time">6 hrs</span>
                                                    <span class="desc"><a href="#">Jeff Dangerfield</a> posted on <a href="#">Please help with Theme Design</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/aniss.png" alt="Aniss" />
                                                <div class="content">
                                                    <span class="time">22 hrs</span>
                                                    <span class="desc"><a href="#">Jim Gordon</a> followed <a href="#">Polly Paton</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/demo/avatar/corbett.png" alt="Corbett" />
                                                <div class="content">
                                                    <span class="time">3 days</span>
                                                    <span class="desc"><a href="#">Simon Corbett</a> followed <a href="#">Anna Johansson</a></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="btn btn-default btn-sm pull-right">Show More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->
        </div> <!--wrap -->
    </div> <!-- page-content -->

    <script type='text/javascript' src="{!! asset('assets/js/jquery-1.10.2.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/jqueryui-1.10.3.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/enquire.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/jquery.cookie.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/jquery.touchSwipe.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/jquery.nicescroll.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/codeprettifier/prettify.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/easypiechart/jquery.easypiechart.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/sparklines/jquery.sparklines.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/form-toggle/toggle.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/form-wysihtml5/wysihtml5-0.3.0.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/form-wysihtml5/bootstrap-wysihtml5.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/fullcalendar/fullcalendar.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/form-daterangepicker/daterangepicker.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/form-daterangepicker/moment.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/charts-flot/jquery.flot.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/charts-flot/jquery.flot.resize.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/plugins/charts-flot/jquery.flot.orderBars.min.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/demo/demo-index.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/placeholdr.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/js/application.js') !!}"></script>
    <script type='text/javascript' src="{!! asset('assets/demo/demo.js') !!}"></script>
@endsection