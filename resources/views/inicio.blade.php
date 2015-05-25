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
            @include('carousel')
        @endsection

        @section('buscador')
            @include('extras.buscador')
        @endsection

        @section('contenido')
            <!--Seccion franquicias especiales -->
            <br>
            <div class="row">
                <section class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @if(!$franquicias_exito->isEmpty())
                        <?php
                            $a1 = mt_rand(0,count($franquicias_exito)-1);
                        ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well_efect">
                                <h4 class="text-center">
                                    <a href="{{ URL::route('especiales',array('tipo' => 'exito')) }}" >
                                        <strong>Franquicias de éxito</strong>
                                    </a>
                                </h4>
                                <hr/>
                                <h4 class="text-center letra">
                                    <strong>
                                        <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_exito[$a1]->nombre."/".$franquicias_exito[$a1]->nombre_comercial)))}}" title="perfil">
                                            {{$franquicias_exito[$a1]->nombre_comercial}}
                                        </a>
                                    </strong>
                                </h4>
                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_exito[$a1]->nombre."/".$franquicias_exito[$a1]->nombre_comercial)))}}" title="perfil">
                                    <img  class="img-responsive c_especial" src="{{ asset($franquicias_exito[$a1]->logo_url) }}" alt="prueba" width="100" height="100">
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well_efect">
                                <h4 class="text-center">
                                    <a href="{{ URL::route('especiales',array('tipo' => 'exito')) }}" >
                                        <strong>Franquicias de éxito</strong>
                                    </a>
                                </h4>
                                <hr/>
                                <h4 class="text-center letra">
                                    <strong>
                                        <a href="#" title="perfil">
                                          Multifranquicias
                                        </a>
                                    </strong>
                                </h4>
                                <img class="img-responsive c_especial" src="{{ asset('multifranquicias_anucio.png') }}" alt="prueba" >
                            </div>
                        </div>
                    @endif

                    @if(!$franquicias_rentables->isEmpty())
                        <?php
                            $a2 = mt_rand(0,count($franquicias_rentables)-1);
                        ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('especiales',array('tipo' => 'rentables')) }}" ><strong>Franquicias rentables</strong></a></h4>
                            <hr/>
                            <h4 class="text-center letra">
                                <strong>
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_rentables[$a2]->nombre."/".$franquicias_rentables[$a2]->nombre_comercial)))}}" title="perfil">{{$franquicias_rentables[$a2]->nombre_comercial}}</a>
                                </strong>
                            </h4>
                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_rentables[$a2]->nombre."/".$franquicias_rentables[$a2]->nombre_comercial)))}}" title="perfil">
                                <img class="img-responsive c_especial" src="{{ asset($franquicias_rentables[$a2]->logo_url)}}" alt="prueba" >
                            </a>
                        </div>
                    </div>
                    @else
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="well well_efect">
                                    <h4 class="text-center">
                                        <a href="{{ URL::route('especiales',array('tipo' => 'rentables')) }}" >
                                            <strong>Franquicias rentables</strong>
                                        </a>
                                    </h4>
                                    <hr/>
                                    <h4 class="text-center letra">
                                        <strong>
                                            <a href="#" title="perfil">
                                                Multifranquicias
                                            </a>
                                        </strong>
                                    </h4>
                                    <img class="img-responsive c_especial" src="{{ asset('multifranquicias_anucio.png') }}" alt="prueba" >
                                </div>
                            </div>
                    @endif

                </section>

                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @if(!$franquicias_baratas->isEmpty())
                    <?php
                        $a3 = mt_rand(0,count($franquicias_baratas)-1);
                    ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('especiales',array('tipo' => 'baratas')) }}"  ><strong>Franquicias baratas</strong></a></h4>
                            <hr/>
                            <h4 class="text-center letra">
                                <strong>
                                    <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_baratas[$a3]->nombre."/".$franquicias_baratas[$a3]->nombre_comercial)))}}" title="perfil">{{$franquicias_baratas[$a3]->nombre_comercial}}</a>
                                </strong>
                            </h4>
                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_baratas[$a3]->nombre."/".$franquicias_baratas[$a3]->nombre_comercial)))}}" title="perfil">
                                <img class="img-responsive c_especial" src="{{ asset($franquicias_baratas[$a3]->logo_url) }}" alt="prueba" >
                            </a>
                        </div>
                    </div>
                    @else
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well_efect">
                                <h4 class="text-center">
                                    <a href="{{ URL::route('especiales',array('tipo' => 'baratas')) }}" >
                                        <strong>Franquicias Baratas</strong>
                                    </a>
                                </h4>
                                <hr/>
                                <h4 class="text-center letra">
                                    <strong>
                                        <a href="" title="perfil">
                                            Multifranquicias
                                        </a>
                                    </strong>
                                </h4>
                                <img class="img-responsive c_especial" src="{{ asset('multifranquicias_anucio.png') }}" alt="prueba" >
                            </div>
                        </div>
                    @endif

                    @if(!$franquicias_lowcost->isEmpty())
                    <?php
                        $a4 = mt_rand(0,count($franquicias_lowcost)-1);
                    ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('especiales',array('tipo' => 'lowcost')) }}" ><strong>Franquicias low cost</strong></a></h4>
                            <hr/>
                            <h4 class="text-center letra">
                                <strong>
                                    <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_lowcost[$a4]->nombre."/".$franquicias_lowcost[$a4]->nombre_comercial)))}}" title="perfil">{{$franquicias_lowcost[$a4]->nombre_comercial}}</a>
                                </strong>
                            </h4>
                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicias_lowcost[$a4]->nombre."/".$franquicias_lowcost[$a4]->nombre_comercial)))}}" title="perfil">
                                <img class="img-responsive c_especial" src="{{ asset($franquicias_lowcost[$a4]->logo_url) }}" alt="prueba" >
                            </a>
                        </div>
                    </div>
                    @else
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well_efect">
                                <h4 class="text-center">
                                    <a href="{{ URL::route('especiales',array('tipo' => 'lowcost')) }}" >
                                        <strong>Franquicias lowcost</strong>
                                    </a>
                                </h4>
                                <hr/>
                                <h4 class="text-center letra">
                                    <strong>
                                        <a href="" title="perfil">
                                            Multifranquicias
                                        </a>
                                    </strong>
                                </h4>
                                <img class="img-responsive c_especial" src="{{ asset('multifranquicias_anucio.png') }}" alt="prueba" >
                            </div>
                        </div>
                    @endif
                </section>
            </div>
            <!-- PARTE NOTICAS -->
            <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            @if(!$franInIzq->isEmpty())
                                <?php

                                $a1 = mt_rand(0, count($franInIzq)-1);
                                $a2 = mt_rand(0, count($franInIzq)-1);

                                do{
                                    $a2 = mt_rand(0, count($franInIzq)-1);
                                }while($a2 == $a1)
                                ?>
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a1]->nombre."/".$franInIzq[$a1]->nombre_comercial)))}}">
                                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a1]->logo_url) }}"  alt="prueba" style="width: auto">
                                    </a>
                                </div>
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a2]->nombre."/".$franSupDer[$a2]->nombre_comercial)))}}">
                                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a2]->logo_url) }}"  alt="prueba" style="width: auto">
                                    </a>
                                </div>
                            @else
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                                </div>
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                                </div>

                            @endif
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

                                            @if(!$noticiaDestacada->isEmpty())
                                                <?php
                                                    $a1 = mt_rand(0,count($noticiaDestacada)-1)
                                                ?>
                                                <div class="col col-xs-12 col-sm-8 col-md-9 col-lg-9">
                                                    <h4>{{ $noticiaDestaca[$a1]->titulo }}</h4>
                                                    <p id="noticiaDes"> {{ $noticiaDestaca[$a1]->resumen }} </p>
                                                    <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.$noticiaDestaca->titulo.'/'.$noticiaDestaca->id)))}}">seguir leyendo</a>
                                                </div>
                                                <div class="col col-xs-12 col-sm-4 col-md-3 col-lg-3" style="margin-bottom: 2%">
                                                    <br>
                                                    <br>
                                                    <img class="img-responsive" id="imagen-noticia" src="{{ asset($publicaciones[$i]->url_imagen)  }}" alt="prueba" >
                                                </div>
                                            @else
                                                <div class="col col-xs-12 col-sm-8 col-md-9 col-lg-9">
                                                    <a href="#"><h4>Sweet Pharma cambia su estrategia</h4></a>
                                                    <p id="noticiaDes">Sweet Pharma cambia su estrategia redefiniendo las categorías de sus productos pasando a ocho categorías de tratamientos enfocadas según las necesidades del paciente: Ellos, Ellas, Amor, Salud, Emergencias, Dinero, Energía, Días grises. Esas cateogrías engloban todos sus productos y pretenden ser reflejo de todos los aspectos de Sweet Pharma. Sin embargo, sus productos como tal no cambian y ofrecen una amplia variedad de golosinas y chucherías para todos los que quieran endulzarse el día a día. </p>
                                                </div>
                                                <div class="col col-xs-12 col-sm-4 col-md-3 col-lg-3" style="margin-bottom: 2%">
                                                    <br>
                                                    <br>
                                                    <a href="#"><img class="img-responsive img-rounded" id="imagen-noticia" src="{{ asset('images/sweet_pharma.jpg') }}" alt="prueba" ></a>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <?php

                                ?>

                                @if(!$publicaciones->isEmpty())

                                    <?php
                                        $meses = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                                                        "Septiembre", "Octube", "Noviembre", "Diciembre");

                                        $dias = array ("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado","Domingo");
                                    ?>

                                    @for($i=0; $i< 6; $i++)
                                        <div class="row" id="noticia1">
                                            <div class="col col-xs-5 col-sm-3 col-md-2 col-lg-2">
                                                <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","",$publicaciones[$i]->titulo).'/'.$publicaciones[$i]->id)))}}"><img src="{{ asset($publicaciones[$i]->url_imagen) }}" class="img-prenoticia" width='' height=""></a>
                                            </div>
                                            <div class="col col-xs-7 col-sm-9 col-md-10 col-lg-10">
                                                <h3 id="tituloNotica"><a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","",$publicaciones[$i]->titulo).'/'.$publicaciones[$i]->id)))}}">{{$publicaciones[$i]->titulo}}</a></h3>
                                                <p id="textoNoticia"> {{$publicaciones[$i]->resumen.' ...'}}
                                                    <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","",$publicaciones[$i]->titulo).'/'.$publicaciones[$i]->id)))}}">seguir leyendo</a>
                                                </p>
                                                <p class="fecha_publicacion pull-right">

                                                    <?php
                                                        $fecha = $publicaciones[$i]->created_at;

                                                        //si los minutos aparecen con un dígito
                                                        $minutos = $fecha->minute;
                                                        //si la hora aparece con un dígito
                                                        $hora = $fecha->hour;

                                                        if(strlen($minutos) < 2){$minutos = "0".$minutos;}
                                                        if(strlen($hora) < 2){$hora = "0".$hora;}


                                                        $ffinal = $dias[$fecha->dayOfWeek-1]. " " . $fecha->day . " de " . $meses[$fecha->month-1] . " de " . $fecha->year . " " .
                                                                      $hora . ":" . $minutos;

                                                        echo $ffinal;
                                                    ?>

                                                </p>
                                            </div>
                                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                @if($i+1 < 6)
                                                    <hr class="separador_post">
                                                @endif
                                            </div>
                                        </div>
                                    @endfor
                                @else

                                    <div class="row" id="noticia1">

                                        <div class="col col-xs-7 col-sm-7 col-md-10 col-lg-10">
                                            <h3 id="tituloNotica"> No hay articulos</h3>

                                        </div>

                                    </div>

                                @endif

                                <hr style="border-top: 4px solid #ccc">
                                <div class="row" style="margin-bottom: 5%">
                                    <h3 class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <strong>Más....</strong>
                                    </h3>
                                    @for($i=6; $i<count($publicaciones); $i++)
                                        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left:5%; margin-top:-1%">
                                            <a id="newsEnlace" href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.$publicaciones[$i]->titulo.'/'.$publicaciones[$i]->id)))}}"><h6><i class="fa fa-share"></i> {{$publicaciones[$i]->titulo}}</h6></a>
                                        </div>
                                    @endfor
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

            <?php

                if(!$franquicias_destacadas->isEmpty() && count($franquicias_destacadas) >= 2){

                    $a1 = mt_rand(0,count($franquicias_destacadas)-1);
                    $a2 = mt_rand(0,count($franquicias_destacadas)-1);

                    do {
                        $a2 = rand(0,count($franquicias_destacadas)-1);
                    }while ($a2 === $a1);
            ?>

            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading textoblanco" style="background:#333">
                        <i class="glyphicon glyphicon-thumbs-up textoblanco"></i> <span class="textoblanco">Destacados</span>
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 text-center">
                                <h3><a href="{{URL::to('franquicias-de-'.$franquicias_destacadas[$a1]->nombre."/".$franquicias_destacadas[$a1]->nombre_comercial)}}">{{$franquicias_destacadas[$a1]->nombre_comercial}}</a></h3>
                                <a href="{{URL::to('franquicias-de-'.$franquicias_destacadas[$a1]->nombre."/".$franquicias_destacadas[$a1]->nombre_comercial)}}"><img class="img-responsive img_destacados" src="{{ asset($franquicias_destacadas[$a1]->logo_url) }}" alt="prueba" ></a>
                                <br>
                            </div>

                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12" style="margin-bottom:30px">
                                <br/>
                                <h3><a href="{{URL::to('franquicias-de-'.$franquicias_destacadas[$a2]->nombre."/".$franquicias_destacadas[$a2]->nombre_comercial)}}">{{$franquicias_destacadas[$a2]->nombre_comercial}}</a></h3>
                                <a href="{{URL::to('franquicias-de-'.$franquicias_destacadas[$a2]->nombre."/".$franquicias_destacadas[$a2]->nombre_comercial)}}"><img class="img-responsive img_destacados" src="{{ asset($franquicias_destacadas[$a2]->logo_url) }}" alt="prueba"></a>
                            </div>
                    </div>
                </div>
            </div>

            <?php
                }
            ?>
        @endsection




    @section('ready')

        $('.carousel').carousel({
        interval: 3000
        })
    @stop





