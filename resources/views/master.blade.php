<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Multifranquicias</title>
    <link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome-animated.min.css') }}" />
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('lolibox/dist/css/LobiBox.min.css') }}">
    @yield('css')

    @yield('include')

</head>

<body>
<nav class="navbar navbar-default" id="navpersonal" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand atext" href="{{ URL::route('home') }}">
           <img src="{{ asset('images/logo_1.png') }}" width="150" height="30" alt="Multifranquicias">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::route('home') }}">Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle atext" data-toggle="dropdown">Franquicias<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="box"><a href="{{ URL::route('exito') }}" class="atext">Franquicias de éxito</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Franquicias rentables</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Franquicias baratas</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Franquicias low cost</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle atext" data-toggle="dropdown">Noticias<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="atext">Reportajes</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Noticias de franqucias</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle atext" data-toggle="dropdown">Servicios y garantías<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::route('emprendedor') }}" class="atext">Franquiciados</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Franquiciadores</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Seguimiento</a></li>
                </ul>
            </li>
            <li><a href="{{ URL::route('contacto') }}" class="atext">Contacto</a></li>

        </ul>

        <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" style="margin-top: 0.5%; margin-bottom: 5px;"> Area privada</button>



    </div>
    <!-- /.navbar-collapse -->

</nav>

<div class="container-fluid" id="main">
    <div class="row" >
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            @yield('anuncio')
            @yield('carousel')
            @yield('buscador')
            @yield('contenido')
        </section>
        <section class="col col-xs-2 col-sm-2 col-md-2 col-lg-2">
            @yield('der')
        </section>
    </div>
</div> <!-- Contenido dinámico

<!-- INICIO FOOTER -->
<hr id="subir">
<div class="row myfooter" style="background: #F0F0F0;margin-top: 5%">
    <section class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="subir-icon">
        <img src="{{ asset('images/go-to-top.png') }}"  id="subir-click">
    </section>
    <section class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 4%">
        <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <p>Copyright © 2014 Multifranquicias.com | Todos los derechos reservados. </p>
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4" id="footer2">
            <div class="row">
                <ul class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 list-unstyled lista-footer">
                    <label>Multifranquicias</label>
                    <li><a href="{{ URL::route('quien-soy') }}"> ¿Quienes somos?</a></li>
                    <li><a href="#"> Registro de franquicias</a></li>
                    <li><a href="#"> Publicidad </a></li>
                    <li><a href="{{ URL::route('privacidad') }}"> Politica de privacidad </a></li>
                    <li><a href="{{ URL::route('aviso') }}"> Aviso Legal</a></li>
                </ul>
                <ul class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 list-unstyled lista-footer">
                    <label>Consultas</label>
                            <li><a href="#"> Dudas generales</a></li>
                            <li><a href="#"> Dudas franquiciados y franquiciadores</a></li>
                </ul>
            </div>
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3 caja-redes" id="footer3">
            <a href="#" class="icon-button youtube" style="margin-right:-1%"><i class="fa fa-youtube fa-smile-o icon-youtube"></i><span></span></a>
            <a href="#" class="icon-button twitter" style="margin-right:-1%"><i class="fa fa-twitter icon-twitter"></i><span></span></a>
            <a href="#" class="icon-button facebook" style="margin-right:-1%"><i class="fa fa-facebook icon-facebook"></i><span></span></a>
            <a href="#" class="icon-button google-plus"><i class="fa fa-google-plus icon-google-plus"   ></i><span></span></a>
        </div>
    </section>
</div>
<!-- FIN FOOTER -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ URL::asset('js/boostrap.min.js') }}"></script>
<script src="{{ URL::asset('lolibox/dist/js/lobibox.min.js') }}"></script>
<script src="{{ URL::asset('js/blockUI.js') }}"></script>


@yield('javascript')




<script type="text/javascript">

    $(document).ajaxStop($.unblockUI);

    $(document).ready(function() {


        @yield('ready')

        $(window).on("load resize", function() {

            if ($(window).width() >= 768) {

                $('.dropdown').hover(function() {

                    $(this).find('.dropdown-menu').slideDown(500);


                }, function() {

                    $(this).find('.dropdown-menu').finish().hide();

                });
            }

            else{

                $('.dropdown').find('.dropdown-menu').unbind("hover");

            }
        });

        //EVENTOS
        $("#subir-click").on("click",function()
        {
            $("body").animate({ scrollTop: 0 }, "slow");
            return false;

        });

        //para formulario de contacto que se desplega
        $(".desplegar").on("click", function() {
            $(".f-contacto").show("slow");
            $(".desplegar")[0].setAttribute("style", "display:none");
            $(".ocultar")[0].setAttribute("style", "display:block");
            $('html, body').animate({
                scrollTop: $(document).height()
            }, 'slow');

        });

        $(".ocultar").on("click", function() {
            $(".f-contacto").hide("slow");
            //un pequeño delay para que la flecha no aparezca antes de que termine de ocultarse el form
            setTimeout(function()
            {
                $(".desplegar")[0].setAttribute("style", "display:block");
            },600);
            $(".ocultar")[0].setAttribute("style", "display:none");
        });

    });

</script>


</body>

</html>