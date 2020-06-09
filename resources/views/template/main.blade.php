<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RAIM">
    <meta name="author" content="GAIA - Universidad Nacional de Colombia Sede Manizales">

    <title>@yield('title', 'RAIM')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}" />
    <link href="{{ asset('plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>

        <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template/bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('template/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
    <!-- HOVER CSS -->
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ asset('template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    {{--
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('template/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    --}}

    <!-- Custom CSS -->
    <link href="{{ asset('template/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('template/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


    {{--
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    --}}

</head>
<body>

<div id="wrapper">

    <div class="nav">

        @include('template.partials.nav2')

    </div>

    <div id="page-wrapper">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
            @include('flash::message')

        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('template/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('template/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('template/dist/js/sb-admin-2.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{ asset('template/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('template/bower_components/datatables-responsive/js/dataTables.responsive.js') }}"></script>





<!-- Scripts -->
{{--

<script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

--}}
<script src="{{ asset('js/modifyStyle.js') }}"></script>
<script src="{{asset('plugins/turnjs4/lib/turn.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

@yield('javascript')
</body>
</html>