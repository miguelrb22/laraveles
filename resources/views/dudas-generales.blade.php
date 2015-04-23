@extends('master')

@section('anuncio')
    @include('extras.anuncio')
@endsection
<div>

    @section('contenido')
        <br>
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
                            <li><a class="content-26">Dudas generales</a></li>
                            <li><a href="{{ URL::route('dudas-franquicias') }}">Dudas franquiciados y franquiciadores</a></li>
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

                                    <strong>1. Franquicia comercial</strong>
                                    <p>Se produce cuando el franquiciador desde a sus franquiciados, todos los elementos necesarios para la venta de productos o servicios al consumidor final</p><br>

                                    2. Franquicia industrial
                                    <p> Cesión del derecho de fabricación, la infraestructura y el modo de comercialización, un ejemplo muy utilizado son las franquicias de comida</p><br>

                                    3. Franquicia de distribución o de producto
                                    <p> Es aquella que tiene como objeto la distribución de productos o servicios</p><br><br>
                                    4. Franquicia de servicio
                                    <p> Se identifica con aquellas franquicias cuyo lucro se realiza mediante la realización de servicios a consumidores.</p><br>
                                    5. Franquicia de córner
                                    <p> Parte de un espacio físico en el cual se define otro menor en él se desarrolla la franquicia</p><br>
                                    6. Shop in shop
                                    <p>Es una recreación de la decoración de otro establecimiento integrado dentro de la cadena. Además de la distinción anterior, las franquicias también se pueden dividir por mercado y estructura:</p>
                                    Franquicia individual: contrato especifico a favor de una persona<br><br>
                                    Franquicia múltiple: un franquiciado de un territorio podrá abrir otras franquicias en un determinado periodo de tiempo<br><br>
                                    Franquicia regional: franquiciado en un área geográfico, que en caso de funcionar se modificará la limitación pudiendo abrir más franquicias. <br><br></div>

                            </div>
                        </div>
                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-plus"></span>
                                Franquicia: qué debemos hacer
                            </a>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="list-group-item">

                                    <P>Una franquicia es un modelo de negocio ya establecido en un mercado, que desarrolla una actividad bien recibida por los consumidores ya sean productos o servicios. </p>

                                    <P> Como todo modo de negocio tiene un fin lucrativo propio pero en el caso de franquicia también hay interés ajeno, es decir; siempre busca la expansión mediante todos los tipos de franquicias existentes. El franquiciador va a cuidar tanto el progreso de su establecimiento como el de sus franquiciados porque todo ello integra una red comercial. Dicha red es la mayor fuerza que va a tener una franquicia en un mercado. Por lo tanto un franquiciado podrá aprovecharse de la fuerza empresarial que tiene la red a la que él pertenece.</p>



                                    <P>La gran mayoría de los emprendedores ven como la franquicia como un negocio a priori caro porque exigen un canon de entrada, aunque hay casos en los que no es así.</p>

                                    <P> Pues bien debemos establecer el modo de ver este primer paso, tenemos dos opciones; ¿el canon es el precio que me exige por explotar su marca? O ¿el canon es el precio que debo de pagar por no asumir riesgos en la demanda del mercado?</p>

                                    <P>Para nosotros en Multifranquicias la opción correcta es la segunda, porque efectivamente el emprendedor no emprende como un desconocido sino como participe de una red con negocio propio. Y de éste modo al no correr el riesgo de la demanda del mercado se beneficia de una red ya creada anteriormente.</p>



                                    <P> Pongamos un ejemplo:</p>

                                    <P> ¿Comenzaría un negocio propio invirtiendo 10.000 euros sin saber de forma certera la viabilidad? O ¿Abonaría un canon de entrada de 10.000 euros para la explotación de una franquicia que factura anualmente 60.000 euros?</p>

                                    <P> El canon de entrada debe verse como canon de no riesgo</p></div>

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

