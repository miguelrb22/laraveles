@extends('master')

@section('anuncio')
    @include('extras.anuncio')
@endsection
<div>

    @section('contenido')
        </br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                        Consultas de interés
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">

                        <div class="row col col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        </div>
                        <ul class="list-unstyled pull-left text-justify">
                            <li><a href="#">Dudas generales</a></li>
                            <li><a href="#">Dudas franquiciados y franquiciadores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 col-lg-offset-1 dinamico">
                <div class="row">

                    <div class="panel-group" id="accordion">

                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span>
                                Ser franquiciador
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="list-group-item "> <p>Desarrollar una actividad empresarial con el fin de extenderla a otros ámbitos geográficos es el mayor objetivo de cualquier proyecto. El modelo de negocio tiene que ser tan nítido, desde el nombre comercial hasta su marca para una fácil implantación y difusión en el mercado correspondiente.</p>

                                    <p>Además de establecer el estándar a seguir por los franquiciados el franquiciador debe crear un red óptima para el excelente desarrollo de la misma, por lo tanto tenemos otra estructura más, es decir la “gestión” de la red. Teniendo también que establecer un establecimiento piloto para la dirección de todo el proceso.</p>

                                    <p>En consecuencia, el franquiciador deberá haber experimentado y realizar diferentes funciones, las cuales pueden distinguirse en:</p><br>

                                    <ul>
                                   <li> Haber realizado un proyecto de negocio y experimentar en primera persona con excelentes resultados obtenidos del proyecto ahora convertido en negocio tangible y rentable.<br><br>
                                   <li> Debe ser el propietario de la marca distribuida.<br><br>
                                    <li>Debe disponer de todo el apoyo logístico para sus futuros franquiciados, formativo, humano, técnico…etc. </ul></div>

                            </div>
                        </div>
                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-plus"></span>
                                ¿Que es ser Franquiciado?
                            </a>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="list-group-item"><p>Partiremos de la definición del art. 62 de la Ley 7/1996, de 15 de enero, de Ordenación del Comercio Minorista. Es franquiciado todo aquel al que se cede un mercado determinado, a cambio de una contraprestación financiera directa, indirecta o ambas, el derecho a explotación de una franquicia, sobre un negocio o actividad mercantil que el primero venga desarrollando anteriormente con suficiente experiencia y éxito.</p>

                                    <p>Obligaciones más comunes de un franquiciado:</p><br>

                                    <ul>

                                        <li>Abonar el total de la inversión para instalar y decorar el establecimiento donde se vaya a situar la franquicia. <br><br>
                                        <li>Realizar los pagos de cánones de entrada y periódicos pactados entre franquiciador y franquiciado. Estos pagos periódicos son contraprestaciones a los servicios continuados a cargo del franquiciador.<br><br>
                                        <li> No bajar del stock minimo establecido por el franquiciador<br><br>
                                        <li>Tener en cuenta lo precios del franquiciador<br><br>
                                        <li>Obligación de respeto hacia la imagen de la marca<br><br>
                                        <li>Llevar a cabo todos los controles que se hayan pactado en el contrato de franquicia<br><br>
                                        <li>Respetar los espacios físicos de otras franquicias.<br><br>
                                        <li>Deber de asistencia a las formaciones que se programen<br><br>
                                        <li>Realizar los mismos métodos de trabajo, método de comercialización y de gestión establecidos en los manuales de la franquicia.</ul></div>

                            </div>
                        </div>
                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-plus"></span>
                                Tipos de franquicia
                            </a>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="list-group-item">

                                    <p>Tipos de franquicias:</p>

                                    <strong>1. Franquicia comercial</strong><br><br>
                                    <p>Se produce cuando el franquiciador desde a sus franquiciados, todos los elementos necesarios para la venta de productos o servicios al consumidor final</p>

                                    2. Franquicia industrial<br><br>
                                   <p> Cesión del derecho de fabricación, la infraestructura y el modo de comercialización, un ejemplo muy utilizado son las franquicias de comida</p>

                                    3. Franquicia de distribución o de producto<br><br>
                                    <p> Es aquella que tiene como objeto la distribución de productos o servicios</p>
                                    4. Franquicia de servicio<br><br>
                                    <p> Se identifica con aquellas franquicias cuyo lucro se realiza mediante la realización de servicios a consumidores.</p>
                                    5. Franquicia de córner<br><br>
                                    <p> Parte de un espacio físico en el cual se define otro menor en él se desarrolla la franquicia</p>
                                    6. Shop in shop<br><br>
                                    <p>Es una recreación de la decoración de otro establecimiento integrado dentro de la cadena. Además de la distinción anterior, las franquicias también se pueden dividir por mercado y estructura:</p>
                                    Franquicia individual: contrato especifico a favor de una persona
                                    Franquicia múltiple: un franquiciado de un territorio podrá abrir otras franquicias en un determinado periodo de tiempo
                                    Franquicia regional: franquiciado en un área geográfico, que en caso de funcionar se modificará la limitación pudiendo abrir más franquicias. </div>

                            </div>
                        </div>
                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-plus"></span>
                                Franquicia: qué debemos hacer
                            </a>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <a class="list-group-item small">Cocinas</a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    @endsection
    @section('der')
            @include('extras.derecha')
    @endsection
</div>


@section('javascript')

    <script type="text/javascript">


        $(".content-24").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/franquicia.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });
        $(".content-25").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/tipos.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });


    </script>

@endsection

