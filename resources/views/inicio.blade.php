@extends('master')

    <style>
        #publicidad{

            width: 1920px;
            height: 90px;
        }

    </style>

        @section('anuncio')
            @include('extras.anuncio')
        @endsection
        @section('carousel')
            @include('extras.carousel')
        @endsection

        @section('buscador')
            @include('extras.buscador')
        @endsection

        @section('contenido')
            <!--Seccion franquicias especiales -->
            <br>
            <div class="row">
                <section class="col col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right:0">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('categoria',array('tipo' => 'exito')) }}" ><strong>Fraquicias de éxito</strong></a></h4>
                            <hr/>
                            <h4 class="text-center"><strong><a href="http://localhost/laraveles/public/perfil/prueba1" title="perfil">Prueba1</a></strong></h4>
                            <img  class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('categoria',array('tipo' => 'rentables')) }}"><strong>Fraquicias rentables</strong></a></h4>
                            <hr/>
                            <h4 class="text-center"><strong><a href="http://localhost/laraveles/public/perfil/prueba2" title="perfil">Prueba2</a></strong></h4>
                            <img class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                    </div>
                </section>
                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('categoria',array('tipo' => 'baratas')) }}"><strong>Fraquicias baratas</strong></a></h4>
                            <hr/>
                            <h4 class="text-center"><strong>Nombre franquicia</strong></h4>
                            <img class="img-responsive" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('categoria',array('tipo' => 'lowcost')) }}"><strong>Fraquicias low cost</strong></a></h4>
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
        @endsection
        @section('der')
            @include('extras.derecha')
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading textoblanco" id="panelDes" style="background:#333">
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
        @endsection




    @section('ready')

        $('.carousel').carousel({
        interval: 3000
        })
    @stop





