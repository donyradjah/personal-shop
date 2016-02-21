@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/form-daterangepicker/daterangepicker-bs3.css') !!}"/>
    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/fullcalendar/fullcalendar.css') !!}"/>
    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/form-markdown/css/bootstrap-markdown.min.css') !!}"/>
    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/codeprettifier/prettify.css') !!}"/>
    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/form-toggle/toggles.css') !!}"/>

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

@endsection