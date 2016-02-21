{{--@extends('layout.master')--}}
@section('title', 'Page Title')
@section('content')

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboad</a></li>
                    <li class="active">Ads</li>
                </ol>

                <h1>Advertisment</h1>
                {{--<div class="options">--}}
                {{--<div class="btn-toolbar">--}}
                {{--<div class="btn-group hidden-xs">--}}
                {{--<a href='#' class="btn btn-muted dropdown-toggle" data-toggle='dropdown'><i class="icon-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">Text File (*.txt)</a></li>--}}
                {{--<li><a href="#">Excel File (*.xlsx)</a></li>--}}
                {{--<li><a href="#">PDF File (*.pdf)</a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<a href="#" class="btn btn-muted"><i class="icon-cog"></i></a>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-midnightblue">
                            <div class="panel-heading">
                                <h4>Data Advertisment</h4>

                                <div class="options">

                                </div>
                            </div>
                            <div class="panel-body">
                                {{--<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>--}}
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Ads</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="dataAds">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- container -->
        </div>
        <!--wrap -->
    </div> <!-- page-content -->
    <script type='text/javascript' src="{!! asset('assets/js/jquery-1.10.2.min.js') !!}"></script>

    <script language="javascript">
        CKEDITOR.replace('message');

    </script>

    <script>
        $(document).ready(function () {
            getAjax();
        });
        function getAjax() {
            $("#dataAds").children().remove();

//            $("#loader2").delay(2000).animate({
//                opacity:0,
//                width: 0,
//                height:0
//            }, 500);
            $.getJSON("/api/v1/ads", function (data) {
                var ads = data.data;
                var jumlah = ads.length;
                $.each(ads.slice(0, jumlah), function (i, data) {
                    $("#dataAds").append("<tr><td>" + data.area_id + "</td><td>" + data.ads + "</td><td>" + data.link + "</td></tr>");
                })
            });

        }
    </script>
@endsection
