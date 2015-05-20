<!DOCTYPE html>
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
        <h1 id="logo"><a class="navbar-brand atext" href="{{ URL::route('home') }}" title="logotipo de multifranquicias">
           <img src="{{ asset('images/logo_1.png') }}" width="150" height="30" alt="Multifranquicias">
        </a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="dropdown lipersonal">
                <a href="" class="dropdown-toggle atext" data-toggle="dropdown"><i class="fa fa-building"></i> Franquicias<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="box"><a href="{{ URL::route('franquicias') }}" class="atext">Todas las franquicias</a></li>
                    <li class="divider"></li>
                    <li class="box"><a href="{{ URL::route('especiales',array('tipo' => 'exito')) }}" class="atext">Franquicias de éxito</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('especiales',array('tipo' => 'rentables')) }}"  class="atext">Franquicias rentables</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('especiales',array('tipo' => 'baratas')) }}"  class="atext">Franquicias baratas</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('especiales',array('tipo' => 'lowcost')) }}"  class="atext">Franquicias low cost</a></li>
                </ul>
            </li>
            <li class="dropdown lipersonal">
                <a  class="dropdown-toggle atext" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i> Actualidad<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::route('reportajes_web') }}" class="atext">Reportajes</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('noticias_web') }}" class="atext">Noticias</a></li>
                </ul>
            </li>
            <li class="dropdown lipersonal">
                <a href="" class="dropdown-toggle atext" data-toggle="dropdown"><i class="fa fa-check"></i> Servicios y garantías<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::route('servicios_garantias') }}" class="atext">Nuestros Servicios y garantías</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('emprendedor') }}" class="atext">Franquiciados</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('franquiciadores') }}" class="atext">Franquiciadores</a></li>
                </ul>
            </li>
            <li class="lipersonal"><a href="{{ URL::route('contacto') }}" class="atext"><i class="fa fa-envelope"></i> Contacto</a></li>

        </ul>

        <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" style="margin-top: 0.5%; margin-bottom: 5px;"> Area privada</button>



    </div>
    <!-- /.navbar-collapse -->

</nav>

<div class="container-fluid" id="main">
    <div class="row" >
        <section class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @yield('completa')
        </section>

        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            @yield('anuncio')
            @yield('carousel')
            @yield('buscador')
            @yield('contenido')
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
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
    <section class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 dfooter">
        <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-5" id="footer1">
            Copyright © 2014 Multifranquicias.com | Todos los derechos reservados.
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4" id="footer2">
            <div class="row">
                <ul class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 list-unstyled lista-footer">
                    <label>Multifranquicias</label>
                    <li><a href="{{ URL::route('quien-soy') }}"> ¿Quienes somos?</a></li>
                    <li><a href="{{ URL::route('contacto') }}"> Publicidad </a></li>
                    <li><a href="{{ URL::route('privacidad') }}"> Politica de privacidad </a></li>
                    <li><a href="{{ URL::route('aviso') }}"> Aviso Legal</a></li>
                </ul>
                <ul class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 list-unstyled lista-footer">
                    <label>Consultas</label>
                            <li><a href="{{ URL::route('dudas-generales') }}"> Dudas generales</a></li>
                            <li><a href="{{ URL::route('dudas-franquicias') }}"> Dudas franquiciados y franquiciadores</a></li>
                </ul>
            </div>
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3 caja-redes" id="footer3">
            <a href="https://www.youtube.com/channel/UCRh_w3XQzc9fE7CELuq0hXA" class="icon-button youtube" style="margin-right:-1%"><i class="fa fa-youtube fa-smile-o icon-youtube"></i><span></span></a>
            <a href="https://twitter.com/multifranquicia" class="icon-button twitter" style="margin-right:-1%"><i class="fa fa-twitter icon-twitter"></i><span></span></a>
            <a href="https://www.facebook.com/pages/MultiFranquiciascom/1504669119817051" class="icon-button facebook" style="margin-right:-1%"><i class="fa fa-facebook icon-facebook"></i><span></span></a>
            <a href="https://plus.google.com/u/0/103455979226239102770/posts" class="icon-button google-plus"><i class="fa fa-google-plus icon-google-plus"   ></i><span></span></a>
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

        $(".subcategoria").on('click',function(){


        });

        //Parseo de fechas de articulos
        var a = $(".fecha_publicacion");
        alert(a[0]);
    });

</script>


</body>

@include('extras.modal')

</html>