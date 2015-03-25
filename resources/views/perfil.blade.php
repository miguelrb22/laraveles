@extends('master')

@section('main')
<div class="row" >
    <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="{{ asset('images/publicidad.gif') }}" class="img-responsive" alt="Responsive image">
            </div>
        </div>
        <!-- CONTENIDO AQUI -->
        <br>
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <section class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-rounded img-responsive" src="{{ asset('images/logo_perfil.jpg') }}">
                            <p>Prestación de Servicios deportivos, especializados en impartir el métido pilates</p>

                            <table class="table-responsive">
                                <tr>
                                    <td>Karoon Pilates S.L.</td>
                                </tr>
                                <tr>
                                    <td>C/ Micer Mascó, 26 pta2</td>
                                </tr>
                                <tr>
                                    <td>46010 Valencia (Valencia)</td>
                                </tr>
                                <td>http://www.karoonpilates.com</td>
                                </td>
                            </table>

                            <hr>
                            <h5>Galería de imágenes</h5>

                            <table class="table-responsive">
                                <tr>
                                    <td>
                                        <a class="fancybox" rel="group" href="1.png" title="imagen 1">
                                            <img class="img-responsive" src="{{ asset('images/1.png') }}"></img>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fancybox" rel="group" href="2.jpg" title="imagen 1">
                                            <img class="img-responsive" src="{{ asset('images/2.jpg') }}"></img>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fancybox" rel="group" href="3.jpg" title="imagen 1">
                                            <img class="img-responsive" src="{{ asset('images/3.jpg') }}"></img>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fancybox" rel="group" href="1.png" title="imagen 1">
                                            <img class="img-responsive" src="{{ asset('images/1.png') }}"></img>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                        </div>
                    </section>
                    <div class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <section>
                            <br/>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row well">pagination aquí </div>
                                <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                                <h2>Nombre Franquicia </h2>
                                <p>Sweet Pharm es un concepto innovador de dulces y golosinas con formato de medicamento y, lo que es más importante, concebido para arrancar una sonrisa al paciente-cliente con cada tratamiento de esta terapia dulce.

                                    Es un modelo de negocio innovador, adaptado a los tiempos que corren, y lo más importante, de BAJA INVERSION.

                                    Contamos con dos modelos de negocio: Tienda o Quisco, para que puedas elegir el modelo que más se adapte a sus necesidades.

                                    Nuestro cuidado en los productos como en el local esta estudiado al más mínimo detalle, ofreciendo al cliente una experiencia nunca vivida anteriormente en la compra de unos dulces.

                                    Tras toda esta experiencia vivida, creemos que tenemos todos esos factores para ofrecer, con toda confianza, un modelo de negocio único y exitoso.

                                    Actualmente estamos presentes en dos centros comerciales de reconocido prestigio, CC Rio Shopping y CC La vaguada.</p>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table class="responsive table table-hover">
                                    <tbody>
                                    <tr>
                                        <td class="text-center">Franquicias y Negocio</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inversion incial:</td>
                                        <td>60.000  </td>
                                    </tr>
                                    <tr>
                                        <td>Derecho a entrada:</td>
                                        <td>No hay</td>
                                    </tr>
                                    <tr>
                                        <td>Royalty</td>
                                        <td>No hay</td>
                                    </tr>
                                    <tr>
                                        <td>Zona de exclusividad:</td>
                                        <td>No</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTENIDO AQUI-->
    </section>

    <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>


        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row panel panel-info text-center">
                <div class="panel-heading" id="panelfe" style="background:#333">
                    <i class="glyphicon glyphicon-thumbs-up"></i> Destacadas
                </div>
                <div class="panel-body" style="margin-bottom: -16px;">
                    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h3>NOMBRE</h3>
                        <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                    </div>
                    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:30px">
                        <h3>NOMBRE</h3>
                        <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop