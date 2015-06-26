{{\Illuminate\Support\Facades\Session::forget('franquicias',$franquicias)}}
{{\Illuminate\Support\Facades\Session::put('franquicias',$franquicias)}}
@extends('master')

@section('anuncio')
    @include('extras.anuncio')
@endsection

@section('buscador')
    @include('extras.buscador')
@endsection

@section('contenido')
    <br>
    <div class="row">
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <section class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">

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
                        @for($i = 0 ;$i<$numPublicaciones[3]->recuadros ; $i++)
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                            </div>
                        @endfor
                    @endif

                </section>
                <section class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="well">
                        <label>Resultados de busqueda: <span class="badge badge-info"> {{ $resultados }} </span> franquicias  </label>
                    </div>
                    <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                    <hr id="separador">

                    <div class="contenido">
                        @if(!$subcategorias->isEmpty())
                            @if(!$franquicias->isEmpty()) <!--Puede que haya subcategorias pero vacias por eso compruebo-->
                                @for($i = 0; $i < count($subcategorias) ; $i+=2)
                                    @if(count($subcategorias)-$i === 1)
                                        <?php

                                            $fran_categ = array();

                                            foreach($franquicias as $franquicia)
                                            {
                                                if($franquicia->nombre === $subcategorias[$i]->nombre)
                                                    array_push($fran_categ,$franquicia);
                                            }

                                        ?>
                                        <div class="row panel_subcategorias">
                                            <?php
                                                $color =  dechex(mt_rand(0x000000, 0xFFFFFF));
                                            ?>
                                            <div class="col col-xs-12 col-sm-5 col-md-5 col-lg-5 subcategorias3" style="margin-left: 30px;">
                                                <div class="row panel panel-info">
                                                    <div class="panel-heading text-center" id="" style="background:{{ '#'.$color  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                                        <span><a href="{{URL::to('busqueda-'.strtolower(str_replace(' ','-',$subcategorias[$i]->nombre)))}}" class="textoblanco subcategoria">{{$subcategorias[$i]->nombre}}</a></span>
                                                    </div>
                                                    <div class="panel-body" style="margin-bottom: -16px;">
                                                        <div class="row">
                                                            <div class="col col-xs-12 col-sm-12 col-md-7 col-lg-7 text-center">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".strtr(utf8_decode($fran_categ[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><img class="img-responsive img-rounded thumbnail" src="{{ asset($fran_categ[0]->logo_url) }}" alt="prueba" style="width: 250px"></a>
                                                            </div>
                                                            <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".strtr(utf8_decode($fran_categ[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><h3 class="text-center">{{$fran_categ[0]->nombre_comercial}}</h3></a>
                                                            </div>
                                                            <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">{{substr(strip_tags($fran_categ[0]->descripcion),0,70).'...'}}</p>
                                                            <div class="row col-xs-12 col-sd-12 col-md-12 col-lg-12">


                                                                @if(count($fran_categ)>1)
                                                                    <div class="text-center"><label>Más de esta categoría</label></div>
                                                                    <hr style="border-top:2px solid {{ '#'.$color  }}; margin-left:6%">
                                                                @endif

                                                                @for($j = 1; $j<count($fran_categ); $j++)
                                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[$j]->nombre."/".strtr(utf8_decode($fran_categ[$j]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}">{{$fran_categ[$j]->nombre_comercial}}</a>
                                                                            </li>
                                                                            <!--<li>
                                                                                <a href="#">Tasca joselito</a>
                                                                            </li>-->
                                                                        </ul>
                                                                    </div>

                                                                @endfor


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else

                                        <?php

                                        if(!$franquicias->isEmpty())
                                        {

                                            $fran_categ = array();
                                            $fran_categ1 = array();

                                            foreach($franquicias as $franquicia)
                                                {
                                                    if($franquicia->nombre === $subcategorias[$i]->nombre)
                                                        array_push($fran_categ,$franquicia);
                                                    if($franquicia->nombre === $subcategorias[$i+1]->nombre)
                                                        array_push($fran_categ1,$franquicia);
                                                }
                                        }
                                        ?>
                                        <div class="row panel_subcategorias" >
                                            <?php
                                                $color1 =  dechex(mt_rand(0x000000, 0xFFFFFF));
                                                $color2 =  dechex(mt_rand(0x000000, 0xFFFFFF));
                                            ?>
                                            <div class="col col-xs-12 col-sm-5 col-md-5 col-lg-5 subcategorias1" style="margin-left: 30px;">
                                                <div class="row panel panel-info">
                                                    <div class="panel-heading text-center" id="" style="background: {{"#".$color1}}}; box-shadow: 0 0 7px {{ '#' .$color1  }}">
                                                        <span><a href="{{URL::to('busqueda-'.strtolower(str_replace(' ','-',$subcategorias[$i]->nombre)))}}"  class="textoblanco subcategoria">{{$subcategorias[$i]->nombre}}</a></span>
                                                    </div>
                                                    <div class="panel-body" style="margin-bottom: -16px;">
                                                        <div class="row">
                                                            <div class="col col-xs-12 col-sm-12 col-md-7 col-lg-7 text-center">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".strtr(utf8_decode($fran_categ[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><img class="img-responsive img-rounded thumbnail" src="{{asset($fran_categ[0]->logo_url)}} " alt="prueba" style="width: 250px"></a>
                                                            </div>
                                                            <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".strtr(utf8_decode($fran_categ[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"> <h3 class="text-center">{{$fran_categ[0]->nombre_comercial}}</h3></a>
                                                            </div>
                                                            <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">{{substr(strip_tags($fran_categ[0]->descripcion),0,70).'...'}}</p>
                                                            <div class="row col-xs-12 col-sd-12 col-md-12 col-lg-12">
                                                                <br>
                                                                @if(count($fran_categ)>1)
                                                                    <div class="text-center"><label>Más de esta categoría</label></div>
                                                                    <hr style="border-top:2px solid {{ '#'.$color1  }}; margin-left:6%">
                                                                @endif

                                                                @for($j = 1; $j<count($fran_categ); $j++)
                                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <a href="{{URL::to(strtolower(str_replace(' ','-','franquicias-de-'.$fran_categ[$j]->nombre."/".strtr(utf8_decode($fran_categ[$j]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}">{{$fran_categ[$j]->nombre_comercial}}</a>
                                                                            </li>
                                                                            <!--<li>
                                                                                <a href="#">Tasca joselito</a>
                                                                            </li>-->
                                                                        </ul>
                                                                    </div>
                                                                @endfor

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-xs-2 col-sm-2 col-md-2 col-lg-2 subcategorias2" style="margin-right: -60px;"></div>
                                            <div class="col col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                                <div class="row panel panel-info">
                                                    <div class="panel-heading text-center" id="" style="background:{{ '#'.$color2 = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color2  }}">
                                                        <span><a href="{{URL::to('busqueda-'.strtolower(str_replace(' ','-',$subcategorias[$i+1]->nombre)))}}" class="textoblanco subcategoria">{{$subcategorias[$i+1]->nombre}}</a></span>
                                                    </div>
                                                    <div class="panel-body" style="margin-bottom: -16px;">
                                                        <div class="row">
                                                            <div class="col col-xs-12 col-sm-12 col-md-7 col-lg-7 text-center">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ1[0]->nombre."/".strtr(utf8_decode($fran_categ1[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><img class="img-responsive img-rounded thumbnail" src="{{ asset($fran_categ1[0]->logo_url) }}" alt="prueba" style="width: 250px"></a>
                                                            </div>
                                                            <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ1[0]->nombre."/".strtr(utf8_decode($fran_categ1[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}" ><h3 class="text-center">{{$fran_categ1[0]->nombre_comercial}}</h3></a>
                                                            </div>
                                                            <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">{{substr(strip_tags($fran_categ1[0]->descripcion),0,70).'...'}}</p>
                                                            <div class="row col-xs-12 col-sd-12 col-md-12 col-lg-12">
                                                                @if(count($fran_categ1)>1)
                                                                    <div class="text-center"><label>Más de esta categoría</label></div>
                                                                    <hr style="border-top:2px solid {{ '#'.$color2  }}; margin-left:6%">
                                                                @endif
                                                                @for($j = 1; $j<count($fran_categ1); $j++)
                                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ1[$j]->nombre."/".strtr(utf8_decode($fran_categ1[$j]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}">{{$fran_categ1[$j]->nombre_comercial}}</a>
                                                                            </li>
                                                                            <!--<li>
                                                                                <a href="#">Tasca joselito</a>
                                                                            </li>-->
                                                                        </ul>
                                                                    </div>
                                                                @endfor

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            @else
                                <h3>No hay resultados para esta búsqueda.</h3>
                            @endif
                        @else
                            <h3>No hay resultados para esta búsqueda.</h3>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('der')
    @include('extras.derecha')
@endsection

@section('javascript')

@endsection