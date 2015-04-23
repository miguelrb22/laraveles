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
                        Servicios para franquiciadores
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">
                        <ul class="list-unstyled pull-left text-justify">
                            <li><a class="content-01">Proyecto de la franquicia</a></li>
                            <li><a class="content-02">Asistencia jurídica</a></li>
                            <li><a class="content-03">Captación de candidatos</a></li>
                            <li><a class="content-04">Comunicación e imagen corporativa</a></li>
                            <li><a class="content-05">Expansión internacional</a></li>
                            <li><a class="content-06">Financiación</a></li>
                            <li><a class="content-07">Formación</a></li>
                            <li><a class="content-08">Gestión de la red</a></li>
                            <li><a class="content-09">Seguimiento</a></li>
                            <li><a class="content-10">Seguridad y protección del patrimonio</a></li>
                            <li><a class="content-11">Valoración de locales candidatos</a></li>
                            <li><a class="content-12">Análisis financiero y patrimonial</a></li>
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
                            <li><a href="{{ URL::route('dudas-generales') }}">Dudas generales</a></li>
                            <li><a href="{{ URL::route('dudas-franquicias') }}">Dudas franquiciados y franquiciadores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 col-lg-offset-1 dinamico">

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

        /*$('a').on("click",function(){
         var number = $(this)[0].getAttribute('class').substring(8,10);
         alert(number);
         subir(number);
         })*/
        $(".dinamico").load( "{{ asset('informacion/proyecto-franquicia.blade.php') }}");
        $(".content-01").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/proyecto-franquicia.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-02").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/asistencia.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-03").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/captacion.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-04").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/comunicacion.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-05").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/expansion.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-06").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/financiacion.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-07").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/formacion.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-08").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/gestionred.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-09").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/seguimiento.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-10").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/seguridad.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-11").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/valores.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-12").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/analisis.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

        $(".content-20").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/seguridad.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });
        $(".content-21").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/valores.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });
        $(".content-22").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/franquiciador.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });
        $(".content-23").on('click',function()
        {
            $(".dinamico").load( "{{ asset('informacion/franquiciado.blade.php') }}");
            $("body").animate({scrollTop: 0}, "slow");
        });

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

