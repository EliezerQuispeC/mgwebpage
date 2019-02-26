<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Main Global - Soluciones Integrales
    </title>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slicknav.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-switcher.css')}}">

    <link rel="stylesheet" media="screen" href="{{asset('assets/fonts/font-awesome/all.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/fonts/simple-line-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/extras/owl/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extras/owl/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extras/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extras/normalize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/green.css')}}" media="screen" />
</head>
<body>

<header id="header-wrap">

        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg">
            <div class="container">
                <div class="theme-header clearfix">

                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="collapse" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="fa fa-menu"></span>
                            <span class="fa fa-menu"></span>
                            <span class="fa fa-menu"></span>
                        </button>
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('assets/img/logo.jpg')}}" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">
                                        Inicio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('nosotros') }}">Empresa</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($ser_cats as $cat)
                                        <li><a class="dropdown-item" href="{{URL::action('PageController@servicios',$cat->ser_cat_id)}}">{{ $cat->ser_cat_nam }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($pro_cats as $cat)
                                        <li><a class="dropdown-item" href="{{URL::action('PageController@productos',$cat->pro_cat_id.'/'.'1')}}">{{ $cat->pro_cat_nam }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('home') }}">Intranet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mail</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="mobile-menu" data-logo="assets/img/logo.jpg"></div>
        </nav>
    </header>

@yield('contenido')
        <footer>

            <div class="container">

                <div class="row section">

                    <div class="footer-widget col-md-6 col-lg-3 col-xs-12">
                        <h3 class="small-title">
                            Contáctenos
                        </h3>
                        <p>
                            Estamos a su servicio, para mayor información comuniquese con nosotros por los siguientes medios:
                        </p>
                        <ul class="mb-3">
                            <li><i class="fa fa-envelope"></i> info@mainglobal.com.pe</li>
                            <li><i class="fa fa-envelope"></i> ventas@mainglobal.com.pe</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p class="copyright-text">Main Global SAC &copy Derechos reservados</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social-footer text-right">
                                <a href="#"><i class="fab fa-facebook-f icon-round"></i></a>
                                <a href="#"><i class="fab fa-twitter icon-round"></i></a>
                                <a href="#"><i class="fab fa-linkedin icon-round"></i></a>
                                <a href="#"><i class="fab fa-google-plus icon-round"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up">
            </i>
        </a>

        <div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>


        <script src="assets/js/jquery-min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/color-switcher.js"></script>
        <script src="assets/js/jquery.mixitup.js"></script>
        <script src="assets/js/smoothscroll.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

    </html>