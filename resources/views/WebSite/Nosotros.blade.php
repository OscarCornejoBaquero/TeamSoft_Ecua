@extends('Layouts.template')
@section('titulo')
    Nosotros
@endsection
@section('contenidoPrincipal')
    <div class="page-title" style="background-image: url({{asset('css/frontend/images/page-title.png') }})">
        <h1>Sobre Nosotros</h1>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7" style="padding-top: 5rem">
                    <div class="about-img">
                        <img src="{{asset('css/frontend/images/teamsoft-ecua.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2 class="centrarNosotros">Teamsoft-Ecua </h2>
                        <p>
                            En TeamSoft-Ecua nos especializamos en brindar soluciones informáticas de primer nivel,
                            somos una empresa dedica al cliente siempre orientando calidad y servicio a todos nuestros clientes.
                            En el año 2019 nacio la idea de crear una empresa de soluciones informáticas justo con un grupo de amigos
                            de la Carrera de Ing. de Software, a partir de ese momento la idea se fue plasmando hasta que en el 2020,
                            en pandemia comenzamos este gran sueño.
                            A principios del 2021 nuestra empresa se ha venido posicionando en las redes sociales ofertando nuestros servicios.
                            Mi persona Oscar junto con mi esposa, estamos formando los cimientos de esta pequeña empresa,
                            que con la bendición de Dios sera reconocida a nivel local y nacional.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 about-content">
                    <div class="col-md-12 centrarNosotros">
                        <h2>Misión</h2>
                    </div>
                    <div class="col-md-12 justificarNosotros">
                        <div >
                            <p>
                                Ser una empresa innovadora y con gran sentido de responsabilidad social que busca el máximo beneficio
                                de nuestros clientes a través de la calidad de nuestras soluciones, productos y servicios, manteniendo
                                las mejores condiciones de trabajo para nuestros colaboradores y una alta rentabilidad para nuestros accionistas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 about-content">
                    <div class="col-md-12 centrarNosotros">
                        <h2>Visión</h2>
                    </div>
                    <div class="col-md-12 justificarNosotros">
                        <div >
                            <p>
                                Ser reconocidos como una empresa con servicios de calidad, excelencia e integralidad. Ser percibidos como un
                                aliado estratégico, a través de la generación de valor y con un alto nivel de satisfacción de sus clientes, empleados y socios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

