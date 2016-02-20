<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Admin Personal Shop</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Avant"/>
    <meta name="author" content="The Red Team"/>

    <link href="{!! asset('assets/css/styles.min.css') !!}" rel="stylesheet" type='text/css' media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'/>


    <link href="{!! asset('assets/demo/variations/default.css') !!}" rel='stylesheet' type='text/css' media='all'
          id='styleswitcher'/>

    <link href="{!! asset('assets/demo/variations/default.css') !!}" rel='stylesheet' type='text/css' media='all'
          id='headerswitcher'/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>

    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/codeprettifier/prettify.css') !!}"/>
    <link rel='stylesheet' type='text/css' href="{!! asset('assets/plugins/form-toggle/toggles.css') !!}"/>
    <script type="text/javascript" src="{!! asset('ckeditor/ckeditor.js') !!}"></script>
    <script type="text/javascript">
        function klikAlert() {
            var editordata = CKEDITOR.instances.template_body.getData();
            alert(editordata)
        }
    </script>

    <style>
    </style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body class="">

        @include('includes.header')

        @include('includes.sidebar')


        @yield('content')

    @include('includes.footer')

<script language="javascript">
    CKEDITOR.replace('message');

</script>
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
<script type='text/javascript'
        src="{!! asset('assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js') !!}"></script>
<script type='text/javascript' src="{!! asset('assets/demo/demo-mask.js') !!}"></script>
<script type='text/javascript' src="{!! asset('assets/js/placeholdr.js') !!}"></script>
<script type='text/javascript' src={!! asset('assets/js/application.js') !!}></script>
<script type='text/javascript' src={!! asset('assets/demo/demo.js') !!}></script>

{{--<script type='text/javascript' src='assets/plugins/datatables/jquery.dataTables.js'></script>--}}
{{--<script type='text/javascript' src='assets/plugins/datatables/dataTables.bootstrap.js'></script>--}}
{{--<script type='text/javascript' src='assets/demo/demo-datatables.js'></script>--}}

</body>

</html>
