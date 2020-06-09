<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RAIM">
    <meta name="author" content="GAIA - Universidad Nacional de Colombia Sede Manizales">

    <title>@yield('title', 'RAIM')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('template/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

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

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">RAIM</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                @if(Auth::user())
                        Bienvenido {{ Auth::user()->name }}
                    @else
                        Usuario
                    @endif
                    <i class="fa fa-caret-down"></i>
                </a>
            @if(Auth::user())
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                @else
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Iniciar Sesión</a>
                        </li>
                    </ul>
                    @endif

                    <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" aria-expanded="true">Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" aria-expanded="true">
                            <li>
                                <a href="#">Flot Charts</a>
                            </li>
                            <li>
                                <a href="#">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#">Tables</a>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                    </li>
                    <li>
                        <a href="#">UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="#">Buttons</a>
                            </li>
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Typography</a>
                            </li>
                            <li>
                                <a href="#"> Icons</a>
                            </li>
                            <li>
                                <a href="#">Grid</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#">Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#">Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

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
<script src="{{asset('plugins/turnjs4/lib/turn.js')}}"></script>
<script src="{{asset('js/modifyStyle.js') }}"></script>
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