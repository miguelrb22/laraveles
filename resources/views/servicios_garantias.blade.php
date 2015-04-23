@extends('master')

    @section('anuncio')
        @include('extras.anuncio')
    @endsection

    @section('buscador')
        @include('extras.buscador')
    @endsection

    @section('contenido')
        <br>
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-3" style="display:none">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba">
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-4" style="display:none">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-5" style="display:none">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                        </div>
                    </div>
                    <div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9 servicios">
                        <h2>Servicios y garantías</h2>
                        <hr id="separador">
                        <p class="capital"> Proyectos de franquicias: planificación estratégica de la nueva franquicia, análisis financiero y situación patrimonial y realización de documentos para el desarrollo del negocio, informativos, jurídicos o métodos de actuación para la franquicia.</p>

                        <ul>
                            <li> <p><strong>INTERNACIONALIZACIÓN</strong>:
                                    Valoración de locales candidatos para su franquicia: organización estratégica adecuada de locales y puntos de venta/servicios.
                                </p>
                            </li>
                            <li>
                                <p><strong>FINANCIACIÓN</strong>: Financiación bancaria (a interés menor del mercado), búsqueda de inversores, tramitación de subvenciones. Además disponemos de asesoramiento gratuito de productos financieros, contamos con todo el mercado financiero para realizar la mejor estrategia financiera.
                                <br>
                                <p> Además disponemos de: asesoramiento gratuito de productos financieros, contamos con todo el mercado financiero para realizar la mejor estrategia financiera. Ya que contamos con convenios con entidades del sector.</p>
                                <p>Asesoramiento gratuito sobre su seguridad patrimonial: conseguimos asegurar todos sus bienes al mejor precio.</p>
                            </li>
                            <li>
                                <p><strong>GESTIÓN</strong>: Auxilio, en la creación, organización y control de la red franquiciada a cargo de nuestros responsables.</p>
                            </li>
                            <li>
                                <p><strong>DIAGNÓSTICO PREVIO DE LA GESTIÓN</strong>: mejorar la implantación de la red franquiciada.</p>
                            </li>
                            <li>
                                <p><strong>FORMACIÓN</strong>: Cursos gratuitos para franquiciador, franquiciado y empleados en el desarrollo de la franquicia y otros conocimientos académicos como profesionales. Todo ello gracias a nuestra magnífica relación con entidades prestatarias de estos servicios.</p>
                            </li>
                            <li>
                                <p><strong>COMUNICACIÓN E IMAGEN COPRORATIVA</strong>: una plataforma de calidad para presentar su franquicia a potenciales franquiciados.</p>
                            </li>
                            <li>
                                <p><strong>ASISTENCIA JURÍDICA</strong>: derecho mercantil, civil, administrativo, labora y derecho tributario obteniendo ventajas fiscales.</p>
                            </li>
                            <li>
                                <p><strong>SEGUIMINETO DE LA FRANQUICIA</strong>: no olvide que usted ha confiado en nosotros para iniciarse. Somos los mejores conocedores de su situación.</p>
                            </li>
                            <li>
                                <p><strong>CAPTACIÓN DE CANDIDATOS</strong>: La intermediación es la función básica de multifranquicias.com basándose en su amplia gama de servicios y garantías atrayendo de tal forma a un número incalculable de emprendedores pondrá a estos en contacto con las franquicias.</p>
                            </li>
                        </ul>

                        <br>

                        <p>Apoyo a la búsqueda y selección de la franquicia: Dependerá de su situación financiera actual, por ello recomendamos realizar con nosotros un análisis financiero y patrimonial gratuito y sin compromiso. Sus datos no serán filtrados a terceros, ya que el tratamiento de los mismos será únicamente en su beneficio. Estará protegido por la Ley de Protección de Datos. Planteamos un proyecto personalizado en base a la información que nos manifieste. Recuerde que todo dato manifestado debe ser veraz, ya que nuestro objetivo es crear un proyecto tangible y no una ilusión. Deje valorar por nuestros profesionales su capacidad financiera de forma gratuita.</p>
                        <ul>
                            <li>
                                <p><strong>BASE EN LA NEGOCIACIÓN Y CAMPAÑA DE LA FRANQUICIA</strong>: si le presentan algún contrato de franquicia o análogo consúltenos antes de obligarse a nada, le realizaremos un informe objetivo antes de firmar.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('der')
        @include('extras.derecha')
    @endsection