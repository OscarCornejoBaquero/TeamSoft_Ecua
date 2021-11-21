@extends('Layouts.template')
@section('titulo')
    TeamSoft-Ecua
@endsection
@section('contenidoPrincipal')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{asset('css/frontend/images/slider/bg1.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Desarrollo de Software</h1>
                                    <div class="animation animated-item-2">
                                        Soluciones ajustadas a la realidad de su negocio.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#">Leer Más</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Realiza tu cotización</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url({{asset('css/frontend/images/slider/bg2.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Soluciones Informáticas</h1>
                                    <div class="animation animated-item-2">
                                        Soporte Técnico informático para empresas y persona naturales.
                                    </div>
                                    <a class="btn-slide  animation animated-item-3" href="#">Leer Más</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Realiza tu cotización</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url({{asset('css/frontend/images/slider/bg3.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Servicios y Productos</h1>
                                    <div class="animation animated-item-2">
                                        En TeamSoft-Ecua ponemos a sus disposición una amplia gama de servicios informáticos y de entretenimiento.
                                        Disponemos de accesorios y repuestos de Computadoras.
                                    </div>
                                    <a class="btn-slide  animation animated-item-3" href="#">Leer Más</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Consulta nuestros Servicios</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Desarrollo de Software</h2>
                <p class="lead">
                    En TeamSoft-Ecua realizamos un desarrollo completo e integral de software para tu empresa o negocio,
                    nos encargamos de realizar todo el proceso de desarrollo desde el análisis de requisitos hasta el código
                    funcional de despliegue.

                </p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h2>Facil</h2>
                            <p>Software facil de Utilizar y altamente adaptable a sus necesidades. </p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h2>Compatible</h2>
                            <p>Todos nuestros software tienen una compatibilidad con diferentes dispositivos.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h2>Economico</h2>
                            <p>Disponemos de diferentes opciones para el desarrollo de tu software,
                                nuestros productos se adaptan a tus necesidades (LA LICENCIA SE CANCELA UNA SOLA VEZ Y EL SOFTWARE ES TUYO)</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fas fa-arrows-alt"></i>
                            </div>
                            <h2>Personalizable</h2>
                            <p>Todos nuestros software son totalmente personalizados para tu negocio o emprendimiento. </p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Nuestros Productos</h2>
                <p class="lead">
                    En TeamSoft-Ecua ofrecemos una variedad de servicios y productos para tus necesidades.
                    No dudes en contactarnos para mayor información.
                </p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('css/frontend/images/portfolio/item-1.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{asset('css/frontend/images/portfolio/item-1.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('css/frontend/images/portfolio/item-2.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{asset('css/frontend/images/portfolio/item-2.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('css/frontend/images/portfolio/item-3.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{asset('css/frontend/images/portfolio/item-3.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('css/frontend/images/portfolio/item-4.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{asset('css/frontend/images/portfolio/item-4.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('css/frontend/images/portfolio/item-5.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{asset('css/frontend/images/portfolio/item5.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('css/frontend/images/portfolio/item-6.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{asset('css/frontend/images/portfolio/item-6.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Servicios en Desarrollo de Software</h2>
                <p class="lead">
                    Contamos con una amplia variedad de servicios al momento de desarrollar tu software
                    nuestro personal esta capacitado para comprender tus necesidades en todo momento.
                    Cada étapa del desarrollo estara debidamente documentada.
                </p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('css/frontend/images/services/ux.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Diseño UI/UX</h3>
                            <p>Nos enfocamos en mejorar tu Experiencia de Usuario.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('css/frontend/images/services/web.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Diseño Web</h3>
                            <p>Nuestros productos utilizan estandares actualizados.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('css/frontend/images/services/motion.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Interfaz Gráfica</h3>
                            <p>Damos vida a tu interfaz gráfica en tu APP. </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('css/frontend/images/services/mobile-ui.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Diseño UI/UX Movil</h3>
                            <p>Mejoramos tu Experiencia de Usuario Movil.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('css/frontend/images/services/web-app.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Aplicaciones Web</h3>
                            <p>Todos tus procesos en un potente Aplicativo Web. </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('css/frontend/images/services/mobile-ui.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Manejamos la publicidad de tu empresa.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <section id="middle" class="skill-area" style="background-image: url({{asset('css/frontend/images/skill-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="skill">
                        <h2>Dominio de las Tecnologías de Desarrollo</h2>
                        <p>
                            Todos nuestros desarrolladores tienen una amplia experiencia en las diferentes tecnologías
                            que dominan el mundo del Desarrollo de Software.
                        </p>
                    </div>
                </div>
                <!--/.col-sm-6-->

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Tecnología Web (PHP - C# - HTML5 - CSS3 - JS) </h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>JAVA Desktop</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                                <span class="bar-width">99%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Framework FrontEnd</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="bar-width">100%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>CDN para el Desarrollo</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="bar-width">100%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Framework Web</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">TeamSoft-Ecua Educativo</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">TeamSoft-Ecua Manager</a></li>

                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="{{asset('css/frontend/images/tab2.png') }}" style="width: 200px">
                                            </div>
                                            <div class="media-body">
                                                <h2>Bootstrap</h2>
                                                <p>
                                                    El kit de herramientas de código abierto front-end más popular del mundo, con variables y mezclas de Sass, sistema de cuadrícula receptivo, amplios componentes prediseñados y potentes complementos de JavaScript.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active in text-right" id="tab2">
                                        <div class="video-box">
                                            <img src="{{asset('css/frontend/images/tab-video-bg.png') }}" alt="video">
                                            <a class="video-icon" href="https://youtu.be/131Rl-YFT_I" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="{{asset('css/frontend/images/ceo.png') }}" style="width: 180px">
                                        </div>
                                        <div class="media-body" style="padding-left: 2rem">
                                            <h2>Ing. Oscar Cornejo Baquero</h2>
                                            <p>
                                                Ing. de Software con más de 4 años de experiencia en el ambito del desarrollo.
                                            </p>
                                            <p>
                                                Docente de Bachillerato durante más de 6 años brindando conocimientos de informática a jovenes.
                                            </p>
                                            <p>
                                                Técnico de Sistemas y administrador de centros de computo.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                    </div>
                                </div>
                                <!--/.tab-content-->
                            </div>
                            <!--/.media-body-->
                        </div>
                        <!--/.media-->
                    </div>
                    <!--/.tab-wrap-->
                </div>
                <!--/.col-sm-6-->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#content-->

    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonios de Nuestros Clientes</h2>
                <p class="lead">La opinión de nuestros clientes una vez realizado nuestro trabajo.</p>
            </div>
        <!-- <div class="testimonial-slider owl-carousel">
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{asset('css/frontend/images/client1.jpg') }}" alt="" style="width: 80px;">
                </div>
                <div class="content">
                    <img src="{{asset('css/frontend/images/review.png') }}" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{asset('css/frontend/images/client2.jpg') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{asset('css/frontend/images/review.png') }}" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{asset('css/frontend/images/client3.jpg') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{asset('css/frontend/images/review.png') }}" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{asset('css/frontend/images/client2.jpg') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{asset('css/frontend/images/review.png') }}" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{asset('css/frontend/images/client1.jpg') }}" alt=""style="width: 80px;">
                </div>
                <div class="content">
                    <img src="{{asset('css/frontend/images/review.png') }}" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{asset('css/frontend/images/client3.jpg') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{asset('css/frontend/images/review.png') }}" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
        </div> -->
        </div>
    </section>
@endsection
