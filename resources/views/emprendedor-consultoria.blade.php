@extends('master')



    @section('anuncio')
        @include('extras.anuncio')
    @endsection
    <div>

    @section('contenido')
        </br>
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="row panel panel-info text-center">
                        <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                            Servicios para franquiciadores
                        </div>
                        <div class="panel-body" style="margin-bottom: -16px;">
                            <ul class="list-unstyled pull-left text-justify">
                                <li><a class="content-1">Proyecto de la franquicia</a></li>
                                <li><a class="content-2">Asistencia jurídica</a></li>
                                <li><a class="content-3">Captación de candidatos</a></li>
                                <li><a class="content-4">Comunicación e imagen corporativa</a></li>
                                <li><a class="content-5">Expansión internacional</a></li>
                                <li><a class="content-6">Financiación</a></li>
                                <li><a class="content-7">Formación</a></li>
                                <li><a class="content-8">Gestión de la red</a></li>
                                <li><a class="content-9">Seguimiento</a></li>
                                <li><a class="content-10">Seguridad y protección del patrimonio</a></li>
                                <li><a class="content-11">Valoración de locales candidatos</a></li>
                                <li><a class="content-12">Análisis financiero y patrimonial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row panel panel-info text-center">
                        <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                            Servicios para franquiciados
                        </div>
                        <div class="panel-body" style="margin-bottom: -16px;">
                            <ul class="list-unstyled pull-left text-justify">
                                <li><a class="content-13">Análisis financiero y patrimonial</a></li>
                                <li><a class="content-14">Asistencia jurídica</a></li>
                                <li><a class="content-15">Apoyo a la búsqueda y selección de la franquicia</a></li>
                                <li><a class="content-16">Base de la negociación y planificación de la franquicia</a></li>
                                <li><a class="content-17">Financiación</a></li>
                                <li><a class="content-18">Formación</a></li>
                                <li><a class="content-19">Seguimiento</a></li>
                                <li><a class="content-20">Seguridad patrimonial</a></li>
                                <li><a class="content-21">Valores de locales candidatos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row panel panel-info text-center">
                        <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                            Le interesa conocer
                        </div>
                        <div class="panel-body" style="margin-bottom: -16px;">
                            <ul class="list-unstyled pull-left text-justify">
                                <li><a class="content-22">Ser franquiciador</a></li>
                                <li><a class="content-23">Franquicia: qué debemos saber</a></li>
                                <li><a class="content-24">Qué es ser franquiciado</a></li>
                                <li><a class="content-25">Tipos de franquicia</a></li>
                            </ul>
                            <div class="row col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr/>
                            </div>
                            <ul class="list-unstyled pull-left text-justify">
                                <li><a href="#">Dudas generales</a></li>
                                <li><a href="#">Dudas franquiciados y franquiciadores</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 dinamico">
                    <!-- Dinamic content here -->
                    <div class="well"></div>
                    <div>
                        <h2><a href="#">Servicios Franquiciados</a></h2>
                    </div>
                    <hr/>
                    <p>Multifraquicias ofrece a franquicias rentables así como económicas y de éxito servicios que a continuación le detallamos. Consúltenos sin compromiso.</p>
                    <table class="table-responsive table table-hover">
                        <tr>
                            <td colspan="2" class="text-center">Servicios a franquiciados</td>
                        </tr>
                        <tr>
                            <td class="text-justify tservices">Apoyo a la búsqueda y selección de la franquicia:</td>
                            <td class="text-justify">Dependerá de su situación financiera actual, por ello recomendamos realizar con nosotros un análisis financiero y patrimonial gratuito y sin compromiso.
                                Sus datos no serán filtrados a terceros, ya que el tratamiento de los mismos será únicamente en su beneficio. Estará protegido por la Ley de Protección de Datos.</td>
                        </tr>

                    </table>
                </div>
            </div>

    @endsection
    @section('der')
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
            </div>
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
            </div>
    @endsection
    </div>


@section('javascript')

    <script type="text/javascript">

        $('a').on("click",function(){
            alert ( $(this)[0].getAttribute('class')    )

            //var
        })

        //EVENTOS
        $("content-").on("click",function()
        {
            $("body").animate({ scrollTop: 0 }, "slow");
            return false;

        });

        $(".content-13").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/analisis.blade.php");
        });
        $(".content-14").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/asistencia.blade.php");
        });
        $(".content-15").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/apoyo.blade.php");
        });
        $(".content-16").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/negociacion.blade.php");
        });
        $(".content-17").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/financiacion.blade.php");
        });
        $(".content-18").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/formacion.blade.php");
        });
        $(".content-19").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/seguimiento.blade.php");
        });
        $(".content-20").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/seguridad.blade.php");
        });
        $(".content-21").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/valores.blade.php");
        });
        $(".content-22").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/franquiciador.blade.php");
        });
        $(".content-23").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/franquiciado.blade.php");
        });
        $(".content-24").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/franquicia.blade.php");
        });
        $(".content-25").on('click',function()
        {
            $(".dinamico").load( "http://localhost/laraveles/resources/views/extras/tipos.blade.php");
        });
        //aqui mas rutas comentario para commit
    </script>

@endsection

