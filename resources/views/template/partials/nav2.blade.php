<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">


    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- /.navbar-header -->
<!-- <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ route('flogin') }}">Login</a></li>
            <li><a href="{{ route('fregistry') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </li>
        @endif
    </ul> -->
    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown-user -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                @if(Auth::user())
                    Bienvenido {{ Auth::user()->name }}
                @else
                    @yield('nav2usuario','Usuario')
                @endif
                <i class="fa fa-caret-down"></i>
            </a>
            @if(Auth::user())
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="{{ url('/logout') }}">
                            <i class="fa fa-sign-out fa-fw"></i>
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            @else
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{route('flogin')}}" ><i class="fa fa-user fa-fw"></i> Iniciar sesion</a>
                    <li><a href="{{ route('fregistry')}}"><i class="fa fa-user fa-fw"></i> Registrar</a>
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
                <li class="text-center" id="applicationLogo">
                    @yield('icon')
                </li>
                <li id="accessibilityNav">
                    <a href="#">Accesibilidad<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a>
                                <label id="fontSizeLabel" for="fontSizeNav">Cambiar Tamaño</label>
                                <br>
                                <input style="color: #555;" type="number" name="fontSizeNav" id="fontSizeNav" class="fontSize" min="1" max="99">
                            </a>
                        </li>
                        <li>
                            <a>
                                <label id="interlineLabel" for="interlineNav">Cambiar Interlineado</label>
                                <br>
                                <input style="color: #555;" type="number" name="interlineNav" id="interlineNav" class="interline" min="1" max="99">
                            </a>
                        </li>
                        <!--li>
                            <a><label id="increaseInterline" for="">Aumentar Interlineado</label></a>
                        </li>
                        <li>
                            <a><label id="decreaseInterline" for="">Disminuir Interlineado</label></a>
                        </li-->

                        <li>
                            <a><label id="" for="font">Fuente</label>
                                <select class="form-control" id="fontNav">
                                    <option value="">Normal</option>
                                    <option value="Arial">Arial</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Helvetica">Helvetica</option>
                                    <option value="Courier">Courier</option>
                                    <option value="monospace">Monospace</option>
                                    <option value="Serif">Serif</option>
                                    <option value="Comic Sans MS">Comic Sans</option>
                                </select>
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ route('Public.index') }}">Inicio<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('Book.inicioB') }}" style="display:block">Libro</a>
                            <ul>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Book.inicioB') }}" style="text-decoration: none; display:block;">Instrucciones</a>
                                </li>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Book.crear') }}" style="text-decoration: none; display:block">Crear</a>
                                </li>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Book.mostrarB') }}" style="text-decoration: none; display:block">Mostrar</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('Contenido.inicioC') }}">Contenido</a>
                            <ul>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Contenido.inicioC') }}" style="text-decoration: none; display:block;">Instrucciones</a>
                                </li>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Contenido.creador') }}" style="text-decoration: none; display:block">Editor</a>
                                </li>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Contenido.mostrarC') }}" style="text-decoration: none; display:block">Mostrar</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('Question.inicioQ') }}">Questionarios</a>
                            <ul>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Question.inicioQ') }}" style="text-decoration: none; display:block">Instrucciones</a>
                                </li>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Question.crear') }}" style="text-decoration: none; display:block">Crear</a>
                                </li>
                                <li style="list-style-type: none">
                                    <a href="{{ route('Question.mostrarQ') }}" style="text-decoration: none; display:block">Mostrar</a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                </li>
                <li><a href="{{ route('Public.mostrarT') }}">Ver Recursos educativos</a></li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<footer>
    <div class="text-center">
        <a href="http://www.colciencias.gov.co/" target="_blank">
            <img width="260px" height="60px" src="{{ asset('docs/logo_colciencias.png') }}" alt="Logo Colciencias" title="Logo Colciencias">
        </a>
        <a href="http://www.mineducacion.gov.co/1759/w3-channel.html" target="_blank">
            <img width="245px" height="60px" src="{{ asset('docs/logo_min_educacion.png') }}" alt="Logo Ministerio de Educación" title="Logo Ministerio de Educación">
        </a>
        <a href="http://www.manizales.unal.edu.co/" target="_blank">
            <img width="144px" height="60px" src="{{ asset('docs/escudo_un_sede_manizales.jpg') }}" alt="Escudo Universidad Nacional de Colombia - Sede Manizales" title="Escudo Universidad Nacional de Colombia - Sede Manizales">
        </a>
        <a href="http://medellin.unal.edu.co/" target="_blank">
            <img width="145px" height="60px" src="{{ asset('docs/escudo_un_sede_medellin.png') }}" alt="Escudo Universidad Nacional de Colombia - Sede Medellín" title="Escudo Universidad Nacional de Colombia - Sede Medellín">
        </a>
        <a href="http://froac.manizales.unal.edu.co/GAIA/" target="_blank">
            <img width="110px" height="60px" src="{{ asset('docs/logo_gaia.jpg') }}" alt="Logo Grupo de Ambientes Inteligentes Adaptativos - GAIA" title="Logo Grupo de Ambientes Inteligentes Adaptativos - GAIA">
        </a>
    </div>
</footer>
