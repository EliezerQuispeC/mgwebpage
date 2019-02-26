@extends ('layouts.mainglobal')
@section ('contenido')

<div id="carousel-area">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner carousel-two">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/slider/bg1.jpg')}}" alt="">
                <div class="carousel-caption text-left">
                    <h2 class="fadeInLeft wow" data-sppb-wow-delay="1.2s">
                        El mejor equipo <br> a tu servicio.
                    </h2>
                    <p class="fadeInLeft wow" data-sppb-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint illo <br> consequuntur ipsa cum placeat laboriosam mollitia quia omnis quam culpa.</p>
                    <a class="btn btn-lg btn-common fadeInLeft wow" data-sppb-wow-delay="1.2s" href="#">
                        Ver más
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/bg2.jpg')}}" alt="">
                <div class="carousel-caption text-left">
                    <h2 class="fadeInUp wow" data-sppb-wow-delay="1.2s">
                        Innovando <br> Soluciones.
                    </h2>
                    <p class="fadeInUp wow" data-sppb-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint illo <br> consequuntur ipsa cum placeat laboriosam mollitia quia omnis quam culpa.</p>
                    <a class="btn btn-lg btn-common fadeInUp wow" data-sppb-wow-delay="1.2s" href="#">
                        Ver más
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/bg3.jpg')}}" alt="">
                <div class="carousel-caption text-left">
                    <h2 class="fadeInDown wow" data-sppb-wow-delay="1.2s">
                        Productos <br> de primera.
                    </h2>
                    <p class="fadeInDown wow" data-sppb-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint illo <br> consequuntur ipsa cum placeat laboriosam mollitia quia omnis quam culpa.</p>
                    <a class="btn btn-lg btn-common fadeInDown wow" data-sppb-wow-delay="1.2s" href="#">
                        Ver más
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="service-block-main" class="section">

    <div class="container">
        <h1 class="section-title wow fadeIn animated" data-wow-delay=".2s">
            Soluciones Integrales : Experiencia total
        </h1>
        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-md-6 col-xs-12">

                <div class="service-item mb-4 wow fadeInUpQuick animated" data-wow-delay=".3s">
                    <div class="icon-wrapper">
                        <i class="fa fa-code">
                        </i>
                    </div>
                    <h2>
                        Eficiencia en los procesos
                    </h2>
                    <p>
                        Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas eget quam.
                    </p>
                </div>

            </div>
            <div class="col-sm-6 col-lg-4 col-md-6 col-xs-12">

                <div class="service-item mb-4 wow fadeInUpQuick animated" data-wow-delay=".6s">
                    <div class="icon-wrapper">
                        <i class="fa fa-chart-line">
                        </i>
                    </div>
                    <h2>
                        Gestión de recursos
                    </h2>
                    <p>
                        Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas eget quam.
                    </p>
                </div>

            </div>
            <div class="col-sm-6 col-lg-4 col-md-6 col-xs-12">

                <div class="service-item mb-4 wow fadeInUpQuick animated" data-wow-delay="0.9s">
                    <div class="icon-wrapper">
                        <i class="fa fa-tint">
                        </i>
                    </div>
                    <h2>
                        Eco-Sostenible
                    </h2>
                    <p>
                        Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas eget quam.
                    </p>
                </div>

            </div>
            <div class="col-sm-6 col-lg-4 col-xs-12">

                <div class="service-item mb-4 wow fadeInUpQuick animated" data-wow-delay="1.2s">
                    <div class="icon-wrapper">
                        <i class="fa fa-wrench">
                        </i>
                    </div>
                    <h2>
                        Servicios industriales
                    </h2>
                    <p>
                        Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas eget quam.
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-md-6 col-xs-12">

                <div class="service-item mb-4 wow fadeInUpQuick animated" data-wow-delay="1.2s">
                    <div class="icon-wrapper">
                        <i class="far fa-envelope">
                        </i>
                    </div>
                    <h2>
                        Comunicación asertiva
                    </h2>
                    <p>
                        Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas eget quam.
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-md-6 col-xs-12">

                <div class="service-item mb-4 wow fadeInUpQuick animated" data-wow-delay="1.2s">
                    <div class="icon-wrapper">
                        <i class="fa fa-paint-brush">
                        </i>
                    </div>
                    <h2>
                        Evaluación de procesos
                    </h2>
                    <p>
                        Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas eget quam.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="split section">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="content-inner">
                    <h2 class="title">Nuestras operaciones actuales: </h2>
                    <p class="lead">Nunca nos detenemos. Continuamos brindando los mejores servicios, contribuyendo al crecimiento exponencial de nuestros clientes. Un historial impecable confirma nuestro total compromiso y garantiza la efectividad de nuestros procedimientos</p>
                    <div class="details-list">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h3>Mineria</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <h3>Industria</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="about-btn">
                            <a href="#" class="btn btn-common">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <figure class="image">
                        <img class="img-fluid" src="{{asset('assets/img/about/img1.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>

    </section>

    <section id="clients" class="section">

        <div class="container">
            <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
                Clientes
            </h1>
            <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
            <div class="wow fadeInUpQuick" data-wow-delay="0.3s">

                <div id="clients-scroller" class="owl-carousel">
                    <div class="item item client-item-wrapper">
                        <img src="{{asset('assets/img/clients/img1.png')}}" alt="">
                    </div>
                    <div class="item item client-item-wrapper">
                        <img src="{{asset('assets/img/clients/img2.png')}}" alt="">
                    </div>
                    <div class="item item client-item-wrapper">
                        <img src="{{asset('assets/img/clients/img3.png')}}" alt="">
                    </div>
                    <div class="item item client-item-wrapper">
                        <img src="{{asset('assets/img/clients/img4.png')}}" alt="">
                    </div>
                    <div class="item item client-item-wrapper">
                        <img src="{{asset('assets/img/clients/img5.png')}}" alt="">
                    </div>
                    <div class="item item client-item-wrapper">
                        <img src="{{asset('assets/img/clients/img6.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection