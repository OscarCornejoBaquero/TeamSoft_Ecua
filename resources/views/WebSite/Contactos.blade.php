@extends('Layouts.template')
@section('titulo')
    Contactos
@endsection
@section('contenidoPrincipal')
    <div class="page-title" style="background-image: url({{asset('css/frontend/images/contactosBanner.png')}})">
        <h1>Contactos</h1>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 centrarNosotros content_contacto">
                    <h1>Conoce un más de nosotros</h1>
                </div>
                <div class="col-md-6 ">
                    <div class="col-md-12 centrarNosotros content_contacto">
                        <h2>Nuestra Ubicacion</h2>
                    </div>
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d352.4111499694169!2d-79.93674421248718!3d-
                    2.12404663536824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d737f218ca483%3A0xf1b76dc20bc41d8c!
                    2sTeamsoftEcu!5e0!3m2!1ses-419!2sec!4v1635295203692!5m2!1ses-419!2sec"
                                width="100%" height="auto" style="border:1px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="col-md-12 centrarNosotros content_contacto">
                            <h2>Escanea el Código QR</h2>
                        </div>
                        <div class="col-md-12" style="    margin-left: auto;    margin-right: auto;    display: block;">
                            <img src="{{asset('css/frontend/images/qr_teamSoft.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 centrarNosotros content_contacto">
                            <h2>Link Directo al WhatsApp</h2>
                        </div>
                        <div class="col-md-12" style="    margin-left: auto;    margin-right: auto;    display: block;">
                            <a href="https://wa.me/message/L5QMUI2YXFGKO1"><img src="{{asset('css/frontend/images/WhatsApp.svg.webp')}}" alt=""></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
