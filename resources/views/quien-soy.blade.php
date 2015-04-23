@extends('master')

@section('css')

    <!--<link rel="stylesheet" type="text/css" href="{{ URL::asset('PieProgress/css/prelude.css')}}" />-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('PieProgress/css/progress.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('PieProgress/css/rainbow.css')}}"/>

    @endsection
@section('completa')
    </br>
        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                <h2>Su franquicia, nuestro compromiso</h2>
                <h1>El portal definitivo para anunciar su franquicia.</h1>
                <br>

                <p><span>Multifranquicias aspira en 2015 a ser un portal referencia para la expansión de franquicias tanto en España como en el resto del mundo.</span></p>

                <p><span>Contamos con los instrumentos necesarios tanto humanos como logísticos para crear un gran portal auxiliar y permanente para toda clase de franquicias.</span></p>
                <p>Bienvenido a Multifranquicias,</p>

                <p>“Hacemos del emprendedor su franquiciado” </p>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <img class="img-responsive" src="{{ URL::asset('images/quienes-somos.png')}}" alt="Quienes somos" />

            </div>

        </div>

        <br/>
        <div class="row well" style="margin-left:10px; margin-right:10px;">


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="pie_progress--slow" role="progressbar">
                            <span class="pie_progress__number"  style="font-size:21px;"></span>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <center><h2>Satisfaccion de nuestros clientes</h2></center>
                    </div>


                    <div class="col-lg-12" style="margin-top:10px;">
                        <center>Ningún otro portal apuesta por su crecimiento con herramientas de analítica.</center>

                    </div>

                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="pie_progress--slow2" role="progressbar">
                            <span class="pie_progress__number" style="font-size:21px;"></span>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <center><h2>Mejor posicionados</h2></center>
                    </div>

                    <div class="col-lg-12" style="margin-top:10px;">
                        <center>Crecemos de manera clara en los últimos meses en los rankings de posicionamiento de nuestra plataforma. Nos estamos convirtiendo en una plataforma sólida para mostrar franquicias como la suya.</center>

                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="pie_progress--slow3" role="progressbar">
                            <span class="pie_progress__number"  style="font-size:21px;"></span>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <center><h2>Acciones publicitarias</h2></center>
                    </div>

                    <div class="col-lg-12" style="margin-top:10px;">
                        <center>Multifranquicias.com es capaz de impulsar su negocio gracias a nuestras herramientas de marketing y publicidad.</center>

                    </div>

                </div>
            </div>


        </div>
    @endsection

@section('javascript')

    <script src="{{ URL::asset('PieProgress/js/jquery-asPieProgress.js')}}"></script>
    <script src="{{ URL::asset('PieProgress/js/rainbow.min.js')}}"></script>

    @endsection

@section('ready')

    $('.pie_progress').asPieProgress({
    namespace: 'pie_progress'
    });

    // Example with grater loading time - loads longer
    $('.pie_progress--slow').asPieProgress({
    namespace: 'pie_progress',
    size: 110,
    goal: 730,
    barsize: '6',
    barcolor: '#606',
    min: 5,
    max: 1000,
    speed: 30,
    easing: 'linear',


    numberCallback: function(n) {
    var percentage = Math.floor(this.getPercentage(n));
    return percentage+1 + '%'; }




    });


    // Example with grater loading time - loads longer
    $('.pie_progress--slow2').asPieProgress({
    namespace: 'pie_progress',
    size: 110,
    goal: 630,
    barsize: '6',
    barcolor: '#606',
    min: 5,
    max: 1000,
    speed: 40,
    easing: 'linear',


    numberCallback: function(n) {
    var percentage = Math.floor(this.getPercentage(n));
    return percentage+1 + '%'; }




    });


    // Example with grater loading time - loads longer
    $('.pie_progress--slow3').asPieProgress({
    namespace: 'pie_progress',
    size: 110,
    goal: 750,
    barsize: '6',
    barcolor: '#606',
    min: 5,
    max: 1000,
    speed: 40,
    easing: 'linear',


    numberCallback: function(n) {
    var percentage = Math.floor(this.getPercentage(n));
    return percentage+1 + '%'; }

    });

    $('.pie_progress').asPieProgress('start');

    @endsection