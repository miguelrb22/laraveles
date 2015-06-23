@section('keywords') franquicias, franquicias rentables, franquicias baratas, franquiciaslow cost, franquicias destacadas @endsection
@section('description')En multifranquicias.com encontrarás toda la información de las franquicias más rentables y destacadas en españa, para hacer de su inversión un buen negocio @endsection
@section('title') Franquicias rentables y destacadas en España @endsection
@section('og:title') Franquicias rentables y destacadas en España @endsection
@section('og:description')En multifranquicias.com encontrarás toda la información de las franquicias más rentables y destacadas en españa, para hacer de su inversión un buen negocio @endsection
@section('og:url') http://www.multifranquicias.com @endsection
@section('dc:title') Franquicias rentables y destacadas en España @endsection


@extends('master')

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
            <div class="row especiales">
                <section class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @if(!$exito->isEmpty())
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well_efect">
                                <h4 class="text-center">
                                    <a href="{{ URL::route('especiales',array('tipo' => 'exito')) }}" >
                                        <strong>Franquicias de éxito</strong>
                                    </a>
                                </h4>
                            </div>
                            <div class="well well_efect">
                                <h4 class="text-center letra">
                                    <strong>
                                        <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($exito[0]->nombre."/".$exito[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}" title="perfil" id="{{$exito[0]->id}}">
                                            {{$exito[0]->nombre_comercial}}
                                        </a>
                                    </strong>
                                </h4>
                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($exito[0]->nombre."/".$exito[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}" title="perfil">
                                    <img  class="img-responsive c_especial" src="{{ asset($exito[0]->logo_url) }}" alt="prueba" width="100" height="100">
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
                            </div>
                            <div class="well well_efect">
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

                    @if(!$rentables->isEmpty())
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well_efect">
                                <h4 class="text-center">
                                    <a href="{{ URL::route('especiales',array('tipo' => 'rentables')) }}">
                                        <strong>Franquicias rentables</strong>
                                    </a>
                                </h4>
                            </div>
                            <div class="well well_efect">
                                <h4 class="text-center letra">
                                    <strong>
                                        <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$rentables[0]->nombre."/".$rentables[0]->nombre_comercial)))}}" title="perfil">{{$rentables[0]->nombre_comercial}}</a>
                                    </strong>
                                </h4>
                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$rentables[0]->nombre."/".$rentables[0]->nombre_comercial)))}}" title="perfil">
                                    <img class="img-responsive c_especial" src="{{ asset($rentables[0]->logo_url)}}" alt="prueba" >
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
                            </div>
                            <div class="well well_efect">
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
                    @if(!$baratas->isEmpty())

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center">
                                <a href="{{ URL::route('especiales',array('tipo' => 'baratas')) }}">
                                    <strong>Franquicias baratas</strong>
                                </a>
                            </h4>
                        </div>
                        <div class="well well_efect">
                            <h4 class="text-center letra">
                                <strong>
                                    <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$baratas[0]->nombre."/".$baratas[0]->nombre_comercial)))}}" title="perfil">{{$baratas[0]->nombre_comercial}}</a>
                                </strong>
                            </h4>
                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$baratas[0]->nombre."/".$baratas[0]->nombre_comercial)))}}" title="perfil">
                                <img class="img-responsive c_especial" src="{{ asset($baratas[0]->logo_url) }}" alt="prueba" >
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
                            </div>
                            <div class="well well_efect">
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

                    @if(!$lowcost->isEmpty())
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="well well_efect">
                            <h4 class="text-center"><a href="{{ URL::route('especiales',array('tipo' => 'lowcost')) }}" ><strong>Franquicias low cost</strong></a></h4>
                        </div>
                        <div class="well well_efect">
                            <h4 class="text-center letra">
                                <strong>
                                    <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$lowcost[0]->nombre."/".$lowcost[0]->nombre_comercial)))}}" title="perfil">{{$lowcost[0]->nombre_comercial}}</a>
                                </strong>
                            </h4>
                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$lowcost[0]->nombre."/".$lowcost[0]->nombre_comercial)))}}" title="perfil">
                                <img class="img-responsive c_especial" src="{{ asset($lowcost[0]->logo_url) }}" alt="prueba" >
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
                            </div>
                            <div class="well well_efect">
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
                    <div class="">
                        <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">

                            @if(!$franInIzq->isEmpty())
                                <!-- numPublicaicones[3] el el numero de recuadros que va a haber en la izquierda-->
                                @for($i = 0 ;$i < $numPublicaciones[3]->recuadros; $i++)
                                    @if($i < count($franInIzq))
                                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                            <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$i]->nombre."/".$franInIzq[$i]->nombre_comercial)))}}">
                                                <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$i]->url_imagen) }}"  alt="prueba" style="width: auto">
                                            </a>
                                        </div>
                                    @else
                                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                            <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                                        </div>
                                    @endif
                                @endfor
                            @else

                                @for($i = 0 ; $i < $numPublicaciones[3]->recuadros ; $i++)
                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                        <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                                    </div>
                                @endfor
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

                                                @foreach($noticiaDestacada as $noticia)
                                                    <div class="col col-xs-12 col-sm-8 col-md-9 col-lg-9">
                                                        <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.$noticia->titulo.'/'.$noticia->id)))}}"><h4>{{ $noticia->titulo }}</h4></a>
                                                        <p id="noticiaDes"> {{ $noticia->resumen }} </p>
                                                        <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.$noticia->titulo.'/'.$noticia->id)))}}">seguir leyendo</a>
                                                    </div>
                                                    <div class="col col-xs-12 col-sm-4 col-md-3 col-lg-3" style="margin-bottom: 2%">
                                                        <br>
                                                        <br>
                                                        <img class="img-responsive" id="imagen-noticia" src="{{ asset($noticia->url_imagen)  }}" alt="prueba" >
                                                    </div>
                                                @endforeach
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

                                        $tam = count($publicaciones) - (floor(count($publicaciones)/3))
                                    ?>

                                    @for($i=0; $i < $tam; $i++)
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
                                                @if($i+1 < $tam)
                                                    <hr class="separador_post">
                                                @endif
                                            </div>
                                        </div>
                                    @endfor

                                    <hr style="border-top: 4px solid #ccc">
                                    <div class="row" style="margin-bottom: 5%">
                                        <h3 class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <strong>Más....</strong>
                                        </h3>
                                        @for($i=$tam; $i<count($publicaciones); $i++)
                                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left:5%; margin-top:-1%">
                                                <a id="newsEnlace" href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.$publicaciones[$i]->titulo.'/'.$publicaciones[$i]->id)))}}"><h6><i class="fa fa-share"></i> {{$publicaciones[$i]->titulo}}</h6></a>
                                            </div>
                                        @endfor
                                    </div>
                                @else

                                    <div class="row" id="noticia1">

                                        <div class="col col-xs-7 col-sm-7 col-md-10 col-lg-10">
                                            <h3 id="tituloNotica"> No hay articulos</h3>

                                        </div>

                                    </div>

                                @endif

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
                    <div class="panel-heading textoblanco" style="background:#333">
                        <i class="glyphicon glyphicon-thumbs-up textoblanco"></i> <span class="textoblanco">Destacados</span>
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">

                        @if(!$destacadas->isEmpty())

                            @for($i = 0; $i < $numPublicaciones[7]->recuadros; $i++)

                                @if($i < count($destacadas))
                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 text-center">
                                        <h3><a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(" ","-",$destacadas[$i]->nombre."/".$destacadas[$i]->nombre_comercial)))}}">{{$destacadas[$i]->nombre_comercial}}</a></h3>
                                        <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(" ","-",$destacadas[$i]->nombre."/".$destacadas[$i]->nombre_comercial)))}}"><img class="img-responsive img_destacados" src="{{ asset($destacadas[$i]->url_imagen) }}" alt="prueba" ></a>
                                        <br>
                                    </div>
                                @else

                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12" style="margin-bottom:30px">
                                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                            <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                                        </div>
                                    </div>
                                @endif

                            @endfor

                        @else

                            @for($i = 0; $i < $numPublicaciones[7]->recuadros; $i++)
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12" style="margin-bottom:30px">
                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                        <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                                    </div>
                                </div>
                            @endfor

                        @endif

                    </div>
                </div>
            </div>

            @include('extras.entrevistas')

        @endsection




    @section('ready')

        $('.carousel').carousel({
        interval: 3000
        })

        $(".especiales").on('click',function(){
            console.log(this.getAttribute("id"));
        })

    @stop



<script type="text/javascript">


</script>

