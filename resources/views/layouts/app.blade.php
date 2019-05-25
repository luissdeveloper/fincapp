<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title', 'Fincapp')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet"/>

</head>
@yield('styles')
<body class="@yield('body-class')"> 
    <nav class="navbar navbar-fixed-top navbar-color-on-scroll navbar-transparent">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Fincapp</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown nav-item" align="center">
                            <a href="{{url('/products/store')}}" class="dropdown-toggle nav-link" >
                                <i class="material-icons">group_work</i> Tienda
                            </a>
                        </li>
                        <li class="nav-item app-view">
                            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()" align="center">
                                <i class="material-icons">android</i> Aplicación Android
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com" target="_blank" data-original-title="Dale me gusta en Facebook" align="center">
                                <i class="fa fa-facebook-square"></i>Facebook
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com" target="_blank" data-original-title="Siguenos Instagram" align="center">
                                <i class="fa fa-instagram"></i>Instagram
                            </a>
                        </li>
                        @guest
                            <li><a href="{{ route('login') }}" align="center">Ingresar</a></li>
                            <li><a href="{{ route('register') }}" align="center">Registro</a></li>
                        @else
                            <li class="dropdown" style="margin: 0 auto">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/home') }}">Carrito de compras</a>
                                    </li>
                                    @if (auth()->user()->admin)
                                    <li>
                                        <a href="{{ url('/admin/users') }}">Gestionar usuarios</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/products') }}">Gestionar productos</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/categories') }}">Gestionar categorías</a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        @yield('content')
    </div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/material.min.js') }}"></script>

    <!--veryfy-->

    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
    <script src="{{ asset('/js/moment.min.js') }}"></script>


    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script src="{{ asset('/js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script src="{{ asset('/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
    <script src="{{ asset('/js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>


    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
    <script src="{{ asset('/js/bootstrap-tagsinput.js') }}"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script src="{{ asset('/js/jasny-bootstrap.min.js') }}"></script>

    <!--    Plugin For Google Maps   -->
    <!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script src="{{ asset('/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>
    @yield('scripts')


</html>
