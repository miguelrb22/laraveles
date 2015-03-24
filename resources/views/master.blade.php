<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Multifranquicias</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome-animated.min.css') }}" />
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">


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
        <a class="navbar-brand atext" href="index.php">
            <img src="logo_1.png" width="150" height="30" alt="Multifranquicias">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle atext" data-toggle="dropdown">Franquicias<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="box"><a href="#" class="atext">Franquicias de éxito</a></li>
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
                    <li><a href="#" class="atext">Franquiciados</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Franquiciadores &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="atext">Seguimiento</a></li>
                </ul>
            </li>
            <li><a href="#" class="atext">Contacto</a></li>

        </ul>

        <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" style="margin-top: 0.5%; margin-bottom: 5px;"> Area privada</button>



    </div>
    <!-- /.navbar-collapse -->

</nav>

<div class="container-fluid">


    <div class="row" >
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="publicidad.gif" class="img-responsive" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php require_once 'extras/carousel.blade.php' ?>
                </div>
            </div>

            <!-- INICIO BUSCADOR -->
            <div class="row"  style="background:#A4C7A8;margin:0;padding:10px;margin-top: 1%">
                <div id="busquedaT"class="row col col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">
                    <h4>Búsqueda de franquicias: </h4>
                </div>
                <div class="row col col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">
                </div>
                <form class="form-inline col col-xs-12 col-sm-12 col-md-10 col-lg-10" style="margin:auto">
                    <div class="form-group">
                        <select class="form-control" name="categoria">
                            <option value="1" selected="">- Selecciona categoría -</option>
                            <option value="2">Abogados</option>
                            <option value="3">Administración de Fincas</option>
                            <option value="4">Agencias de Viajes</option>
                            <option value="5">Alimentación</option>
                            <option value="6">Deportes</option>
                            <option value="7">Educación</option>
                            <option value="8">Eficiencia Energética</option>
                            <option value="9">Fotografía</option>
                            <option value="10">Hogar</option>
                            <option value="11">Informática</option>
                            <option value="12">Regalos, Fiestas y Juguetes</option>
                            <option value="13">Inmobiliarias</option>
                            <option value="14">Librerías y Material de oficina</option>
                            <option value="15">Limpieza</option>
                            <option value="16">Mensajería y Transporte</option>
                            <option value="17">Modas</option>
                            <option value="18">Negocios Especializados</option>
                            <option value="19">Ocio</option>
                            <option value="20">Ópticas</option>
                            <option value="21">Publicidad e Impresión</option>
                            <option value="22">Reciclaje Consumibles</option>
                            <option value="23">Reformas y Suministros</option>
                            <option value="24">Restauración</option>
                            <option value="25">Salud y Belleza</option>
                            <option value="26">Seguros</option>
                            <option value="27">Servicios a Pymes</option>
                            <option value="28">Servicios Asistenciales</option>
                            <option value="29">Servicios Financieros</option>
                            <option value="30">Telecomunicaciones</option>
                            <option value="31">Tintorería y Arreglos</option>
                            <option value="32">Vending</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="1" selected="">- Rango de inversión -</option>
                            <option value="2">0 - 20.000</option>
                            <option value="3">20.001 - 40.000</option>
                            <option value="4">40.001 - 60.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Nombre de franquicia">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <div id="patrocinadoT" class="form-group pull-right">
                        <label>Patrocinado por: </label>
                    </div>

                </form>
                <div class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <img id="patrocinado" class="img-responsive" src="anunci.jpg" alt="prueba" style="width: auto">
                </div>
            </div>
            <!-- FIN BUSCADOR -->
            <!--Seccion franquicias especiales -->
            <br>
            <div class="row">
                <section class="col col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right:0">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias de éxito</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong><a href="perfil.php">Nombre franquicia</a></strong></h4>
                            <img class="img-responsive" src="anunci.jpg" alt="prueba" >
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias rentables</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong>Nombre franquicia</strong></h4>
                            <img class="img-responsive" src="anunci.jpg" alt="prueba" >
                        </div>
                    </div>
                </section>
                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias baratas</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong>Nombre franquicia</strong></h4>
                            <img class="img-responsive" src="anunci.jpg" alt="prueba" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias low cost</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong>Nombre franquicia</strong></h4>
                            <img class="img-responsive" src="anunci.jpg" alt="prueba" >
                        </div>
                    </div>
                </section>
            </div>
            <!-- PARTE NOTICAS -->
            <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                                <img class="img-responsive" src="seform.gif" alt="prueba" >
                            </div>
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
                                <img class="img-responsive" src="seform.gif" alt="prueba" >
                            </div>
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-3" style="display:none">
                                <img class="img-responsive" src="seform.gif" alt="prueba">
                            </div>
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-4" style="display:none">
                                <img class="img-responsive" src="seform.gif" alt="prueba" >
                            </div>
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-5" style="display:none">
                                <img class="img-responsive" src="seform.gif" alt="prueba" >
                            </div>
                        </div>
                        <div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <section>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <img src="multifranquicias_anucio.png" class="img-responsive" alt="Responsive image">
                                    </div>
                                </div>
                                <div class="row panel panel-inf" id="panelNoticias">
                                    <div class="panel-heading  text-center" id="noticiasHeader">
                                        <h3> Noticias de franquicias </h3>
                                    </div>
                                    <div class="panel-body" style="margin-bottom: -16px;">
                                        <div class="row">
                                            <div class="col col-xs-10 col-sm-10 col-md-9 col-lg-9">
                                                <h4>tilulo noticia</h4>
                                                <p id="noticiaDes">Sweet Pharma cambia su estrategia redefiniendo las categorías de sus productos pasando a ocho categorías de tratamientos enfocadas según las necesidades del paciente: Ellos, Ellas, Amor, Salud, Emergencias, Dinero, Energía, Días grises. Esas cateogrías engloban todos sus productos y pretenden ser reflejo de todos los aspectos de Sweet Pharma. Sin embargo, sus productos como tal no cambian y ofrecen una amplia variedad de golosinas y chucherías para todos los que quieran endulzarse el día a día. </p>
                                            </div>
                                            <div class="col col-xs-2 col-sm-2 col-md-3 col-lg-3">
                                                <br>
                                                <br>
                                                <img class="img-responsive" src="anunci.jpg" alt="prueba" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" if="noticia1">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="img_noticia.jpg" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">No+Vello, franquicia española entre las 50 mas rentables del mundo</h3>
                                    <p id="textoNoticia">Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.</p>
                                </div>
                                <hr class='separador_post'/>
                                <div class="row" if="noticia2">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="img_noticia2.jpg" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">Las 10 franquicias más rentables</h3>
                                    <p id="textoNoticia">   Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Según el último informe publicado en 2015 por Tormo Franchise, el sector de la franquicia en España creó el pasado año, 4.200 nuevas empresas y 25.700 nuevos puestos de trabajo. La franquicia se consolidó así como una de las mejores y más fiables inversiones generadoras de autoempleo. bles del mundo según la consultora Franchis</p>
                                </div>
                                <hr class='separador_post'/>
                                <div class="row" if="noticia3">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="img_noticia2.jpg" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">Las 10 franquicias más rentables</h3>
                                    <p id="textoNoticia">   Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Según el último informe publicado en 2015 por Tormo Franchise, el sector de la franquicia en España creó el pasado año, 4.200 nuevas empresas y 25.700 nuevos puestos de trabajo. La franquicia se consolidó así como una de las mejores y más fiables inversiones generadoras de autoempleo. bles del mundo según la consultora Franchis</p>
                                </div>
                                <hr class='separador_post'/>
                                <div class="row" if="noticia4">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="img_noticia.jpg" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">No+Vello, franquicia española entre las 50 mas rentables del mundo</h3>
                                    <p id="textoNoticia">Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.</p>
                                </div>
                                <br>
                                <hr style="border-top: 4px solid #ccc;">
                                <div class="row" style="margin-bottom: 5%">
                                    <h3 class="col col-xs-12 col-sm-12 col-md-12 col-lg-12"><strong>Más...</strong></h3>
                                    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left:5%; margin-top:-1%">
                                        <a id="newsEnlace" href="#"><h6><i class="fa fa-share"></i></i> Las franquicias estéticas, un sector en crecimiento</h6></a>
                                        <a id="newsEnlace" href="#"><h6><i class="fa fa-share"></i> Empresarios extremeños asisten el foro sobre franquicias de Mérida</h6></a>
                                        <a id="newsEnlace" href="#"><h6><i class="fa fa-share"></i> Cómo, donde y cuando internacionalizar una franquicia</h6></a>
                                        <a id="newsEnlace" href="#"><h6><i class="fa fa-share"></i> Burger King invertirá 70 millones en Andalucía</h6></a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN PARTE NOTICIAS -->
        </section>

        <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
                <img class="img-responsive" src="seform.gif" alt="prueba" >
            </div>


            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
                <img class="img-responsive" src="seform.gif" alt="prueba" >
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading" id="panelfe" style="background:#333">
                        <i class="glyphicon glyphicon-thumbs-up"></i> Destacadas
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">
                        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h3>NOMBRE</h3>
                            <img class="img-responsive img-rounded" src="anunci.jpg" alt="prueba" >
                        </div>
                        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:30px">
                            <h3>NOMBRE</h3>
                            <img class="img-responsive img-rounded" src="anunci.jpg" alt="prueba">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- INICIO FOOTER -->
    <hr id="subir">
    <div class="row" style="background: #F0F0F0;margin-top: 5%">
        <section class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="subir-icon">
            <img src="go-to-top.png"  id="subir-click">
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:4%">
            <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <p>Copyright © 2014 Multifranquicias.com | Todos los derechos reservados. </p>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4" id="footer2">
                <div class="row">
                    <ul class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 list-unstyled lista-footer">
                        <label>Multifranquicias</label>
                        <li><a href="#"> ¿Quienes somos?</a></li>
                        <li><a href="#"> Registro de franquicias</a></li>
                        <li><a href="#"> Publicidad <a></li>
                        <li><a href="#"> Aviso Legal</a></li>
                    </ul>
                    <ul class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 list-unstyled lista-footer">
                        <label>Consultas<label>
                                <li><a href="#"> Dudas generales</a></li>
                                <li><a href="#"> Dudas franquiciados y franquiciadores</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3 caja-redes" id="footer3">
                <a href="#" class="icon-button youtube" style="margin-right:-1%"><i class="fa fa-youtube fa-smile-o icon-youtube"></i><span></span></a>
                <a href="#" class="icon-button twitter" style="margin-right:-1%"><i class="fa fa-twitter icon-twitter"></i><span></span></a>
                <a href="#" class="icon-button facebook" style="margin-right:-1%"><i class="fa fa-facebook icon-facebook"></i><span></span></a>
                <a href="#" class="icon-button google-plus"><i class="fa fa-google-plus icon-google-plus"></i><span></span></a>
            </div>
        </section>
    </div>
    <!-- FIN FOOTER -->

</div>



<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../private/js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

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

        $(".fancybox").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });

    });
</script>


</body>

</html>