@extends('Layouts.template')
@section('titulo')
    Servicios
@endsection
@section('contenidoPrincipal')

    <div class="page-title" style="background-image: url({{asset('css/frontend/images/page-servicios.png')}})">
        <h1>Servicios</h1>
    </div>

    <section >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4" style="padding-top: 4rem">
                                <img src="{{asset('css/frontend/images/servicios/soporte_tecnico.jpg')}}" class="img-fluid rounded-start" alt="Soporte Técnico">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title card_servicios"><a href="">Soporte Técnico Informático</a></h3>
                                    <p class="card-text card_servicios_p">
                                        Soporte Técnico de calidad, realizamos la evaluación de su equipo con un costo mínimo,
                                        dicho valor en caso de proceder a realizar el trabajo ya no se cobra.
                                    </p>
                                    <p class="card-text "><small class="text-muted card_servicios_p">Costo de la Revisión Técnica: </small></p>
                                    <p class="card-text"><small class="text-muted card_servicios_p">$5 en el Local. </small></p>
                                    <p class="card-text"><small class="text-muted card_servicios_p">$10 en Domicilio. </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4" style="padding-top: 4rem">
                                <img src="{{asset('css/frontend/images/servicios/desarrollo_software.jpg')}}" class="img-fluid rounded-start" alt="Soporte Técnico">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title card_servicios"><a href="">Desarrollo de Software</a></h3>
                                    <p class="card-text card_servicios_p">
                                        Desarrollo de Software para pequeñas, medianas y grandes empresas, nos especializamos en diferentes
                                        marcos de desarrollo actuales, nuestro personal esta altamente capacitado para la ejecución
                                        de diferentes tareas.
                                        Nuestros software se crean en base a sus necesidades.
                                    </p>
                                    <p class="card-text "><small class="text-muted card_servicios_p">Levantamiento de Requerimientos, Gratis si la entrevista se realiza en oficina de la empresa o centro comercial </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4" style="padding-top: 4rem">
                                <img src="{{asset('css/frontend/images/servicios/componentes.png')}}" class="img-fluid rounded-start" alt="Soporte Técnico">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title card_servicios"><a href="">Venta de Componentes / Accesorios</a></h3>
                                    <p class="card-text card_servicios_p">
                                        En teamSoft-Ecua te brindamos el mejor asesoramiento en componentes y accesorios,
                                        todos nuestros productos tienen garantia de fabricante y de nuestra empresa.
                                    </p>
                                    <p class="card-text"><small class="text-muted card_servicios_p">Envio a domicilio </small></p>
                                    <p class="card-text"><small class="text-muted card_servicios_p">Venta directa en nuestro local </small></p>
                                    <p class="card-text"><small class="text-muted card_servicios_p">Contraentrega </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4" style="padding-top: 4rem">
                                <img src="{{asset('css/frontend/images/servicios/magis.png')}}" class="img-fluid rounded-start" alt="Soporte Técnico">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title card_servicios"><a href="">MagisTv - Plataformas Digitales</a></h3>
                                    <p class="card-text card_servicios_p">
                                        Disponemos de cuentas para diferentes plataformas digitales, MagisTv, DirecTvGo, Netflix, Amazon Prime,
                                        Disney + , HBOGO, GolTVPlay.
                                        Todas estas cuentas son personalizadas y autoadministrables.
                                    </p>
                                    <p class="card-text "><small class="text-muted card_servicios_p">Planes desde 1 mes hasta 1 año. </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
