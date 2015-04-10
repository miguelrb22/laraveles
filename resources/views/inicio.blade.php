@extends('master')

@section('main')

    <div class="row" >
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="{{ asset('images/publicidad.gif') }}" class="img-responsive" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('extras.carousel')
                    <?php //require_once 'extras/carousel.blade.php' ?>
                </div>
            </div>

            <!-- INICIO BUSCADOR -->
            <div class="row"  id="buscador" style="background:#6C9600;margin:0;padding:10px;margin-top: 1%">
                <div id="busquedaT" class="row col col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">
                    <h4 class="textoblanco">Búsqueda de franquicias </h4>
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
                        <label class="textoblanco">Patrocinado por </label>
                    </div>

                </form>
                <div class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <img id="patrocinado" class="img-responsive" src="{{ asset('images/anunci.jpg') }}"  alt="prueba" style="width: auto">
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
                            <h4 class="text-center"><strong><a href="http://localhost/laraveles/public/perfil/prueba1" title="perfil">Prueba1</a></strong></h4>
                            <img  class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias rentables</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong><a href="http://localhost/laraveles/public/perfil/prueba2" title="perfil">Prueba2</a></strong></h4>
                            <img class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                    </div>
                </section>
                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias baratas</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong>Nombre franquicia</strong></h4>
                            <img class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well">
                            <h4 class="text-center"><strong>Fraquicias low cost</strong></h4>
                            <hr/>
                            <h4 class="text-center"><strong>Nombre franquicia</strong></h4>
                            <img class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
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
                        <div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <section>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
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
                                                <img class="img-responsive" id="imagen-noticia" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="noticia1">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="{{ asset('images/img_noticia.jpg') }}" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">No+Vello, franquicia española entre las 50 mas rentables del mundo</h3>
                                    <p id="textoNoticia">Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.</p>
                                </div>
                                <hr class='separador_post'/>
                                <div class="row" id="noticia2">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="{{ asset('images/img_noticia2.jpg') }}" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">Las 10 franquicias más rentables</h3>
                                    <p id="textoNoticia">   Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Según el último informe publicado en 2015 por Tormo Franchise, el sector de la franquicia en España creó el pasado año, 4.200 nuevas empresas y 25.700 nuevos puestos de trabajo. La franquicia se consolidó así como una de las mejores y más fiables inversiones generadoras de autoempleo. bles del mundo según la consultora Franchis</p>
                                </div>
                                <hr class='separador_post'/>
                                <div class="row" id="noticia3">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="{{ asset('images/img_noticia2.jpg') }}" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <h3 id="tituloNotica">Las 10 franquicias más rentables</h3>
                                    <p id="textoNoticia">   Después de abrir 87 nuevos establecimientos en 9 países diferentes durante el año pasado y contar con más de 1.000 franquicias en todo el mundo, No + Vello se posiciona en el puesto 41 de la lista de franquicias internacionales más rentables del mundo según la consultora Franchise Direct.
                                        Según el último informe publicado en 2015 por Tormo Franchise, el sector de la franquicia en España creó el pasado año, 4.200 nuevas empresas y 25.700 nuevos puestos de trabajo. La franquicia se consolidó así como una de las mejores y más fiables inversiones generadoras de autoempleo. bles del mundo según la consultora Franchis</p>
                                </div>
                                <hr class='separador_post'/>
                                <div class="row" id="noticia4">
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src="{{ asset('images/img_noticia.jpg') }}" class="img-responsive" alt="Responsive image">
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
                <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                        <i class="glyphicon glyphicon-thumbs-up textoblanco"></i> <span class="textoblanco">Destacados</span>
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">
                        <div class="col col-xs-12 col-sm-6 col-md-12 col-lg-12 text-center">
                            <h3>NOMBRE</h3>
                            <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                        <div class="col col-xs-12 col-sm-6 col-md-12 col-lg-12" style="margin-bottom:30px">
                            <h3>NOMBRE</h3>
                            <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    @include('extras.modal')
    @stop





