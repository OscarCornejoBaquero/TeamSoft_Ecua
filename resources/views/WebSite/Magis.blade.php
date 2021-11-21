@extends('Layouts.template')
@section('titulo')
    MagisTv
@endsection
@section('contenidoPrincipal')
    <div class="page-title" style="background-image: url({{asset('css/frontend/images/page-title-magis.png')}})">
        <h1>MagisTV</h1>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="tituloMagis">
                        Descargas Directas de MagisTv para tu Dispositivo
                    </h1>
                    <p class="pMagis">
                        Descarga de forma directa y sin complicaciones a todos tus dispositivos, el servicio de video streaming más
                        estable del mercado, cambiate a MagisTv no lo pienses más....
                    </p>
                </div>
                <div class="col-md-4">
                    <h2 class="tituloMagis">TvBox</h2>
                    <a href="http://teamsoft-ecua.com/Assets/magis/magis_tv_v3.9.1.apk">
                        <img  src="{{asset('css/frontend/images/androidTv.png')}}" alt="" title="Descargar" class="imagenMagis">
                    </a>

                </div>
                <div class="col-md-4">
                    <h2 class="tituloMagis">FireTV - FireDL :557858 </h2>
                    <a href="http://teamsoft-ecua.com/Assets/magis/magis_tv_v3.9.1.apk">
                        <img src="{{asset('css/frontend/images/amazon.png')}}" alt=""title="Descargar" class="imagenMagis">
                    </a>

                </div>
                <div class="col-md-4">
                    <h2 class="tituloMagis">Celular</h2>
                    <a href="http://teamsoft-ecua.com/Assets/magis/magis_phone_v3.9.1.apk">
                        <img src="{{asset('css/frontend/images/telefono.png')}}" alt="" title="Descargar"class="imagenMagis">
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
