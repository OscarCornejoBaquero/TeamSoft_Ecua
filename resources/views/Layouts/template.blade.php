<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sistema Facturación e Inventario">
    <meta name="author" content="TeamSoft-Ecua">

    <link href="{{asset('css/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{asset('css/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{asset('css/frontend/css/icomoon.css') }}" rel="stylesheet">

    <link href="{{asset('css/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{asset('css/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{asset('css/frontend/css/styleFront.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="{{asset('css/frontend/js/html5shiv.js') }}"></script>
    <script src="{{asset('css/frontend/js/respond.min.js') }}"></script>

    <link rel="shortcut icon" href="{{asset('image/icono.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('css/frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('css/frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('css/frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('css/frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <title>
        @yield('titulo')
    </title>
</head>
<body>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="top-number">
                        <p><i class="fa fa-phone-square"></i> 0981814691  - <i class="fas fa-at"></i> oscar.cornejo@teamsoft-ecua.com</p>

                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Buscar">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Home"><img src="{{asset('image/logo_negro.png') }}" alt="logo" STYLE="padding-bottom: 1rem"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav" style="padding-top: 1rem">
                    <li><a href="Home">Inicio</a></li>
                    <li><a href="Nosotros">Sobre Nosotros</a></li>
                    <li><a href="Servicios">Servicios</a></li>
                    <li><a href="Magis">Magis</a></li>
                <!--  <li><a href="Portafolio">Portafolio de Servicios</a></li>-->
                    <li><a href="Contactos">Contactos</a></li>
                    <li><a href="Login">Sistema</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->

</header>
<!--/header-->
@yield('contenidoPrincipal')

<section id="bottom">
    <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="footer-logo">
                    <img src="{{asset('image/login_imagen2.png') }}" alt="logo">
                </a>
            </div>
            <div class="col-md-10">
                <div class="row">

                    <!--/.col-md-3-->

                    <div class="col-md-4 col-sm-6">
                        <div class="widget">
                            <h3>Empresa</h3>
                            <ul>
                                <li><a href="Nosotros">Misión</a></li>
                                <li><a href="Nosotros">Visión</a></li>
                                <li><a href="Nosotros">Objetivos</a></li>
                                <li><a href="Equipo_trabajo">Equipo de Trabajo</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-4 col-sm-6">
                        <div class="widget">
                            <h3>Desarrollo de Software </h3>
                            <ul>
                                <li><a href="info_web">Desarrollo Web</a></li>
                                <li><a href="info_escritorio">Desarrollo de Escritorio</a></li>
                                <li><a href="info_movil">Desarrollo Movil</a></li>
                                <li><a href="info_documentacion">Documentación de Software</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-4 col-sm-6">
                        <div class="widget">
                            <h3>Servicios Informáticos</h3>
                            <ul>
                                <li><a href="info_software">Actualización de Software</a></li>
                                <li><a href="info_hardware">Actualización de Hardware</a></li>
                                <li><a href="info_redes">Soporte Técnico de Redes</a></li>
                                <li><a href="info_servicios">Otros Servicios</a></li>

                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
            </div>


        </div>
    </div>
</section>
<!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2021 TeamSoft-Ecua Todos los derechos Reservados
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="Home">Inicio</a></li>
                    <li><a href="Nosotros">Sobre Nosotros</a></li>
                    <li><a href="Servicios">Servicios</a></li>
                <!-- <li><a href="Portafolio">Portafolio de Servicios</a></li>-->
                    <li><a href=">Contactos">Contactos</a></li>
                    <li><a href="Login">Sistema</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<script src="{{asset('css/frontend/js/jquery.js') }}"></script>
<script src="{{asset('css/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{asset('css/frontend/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{asset('css/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{asset('css/frontend/js/jquery.isotope.min.js') }}"></script>
<script src="{{asset('css/frontend/js/main.js') }}"></script>

</body>
</html>
