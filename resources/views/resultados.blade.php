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
                <section class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
                </section>
                <section class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
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
                                            <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin-left: 30px;">
                                                <div class="row panel panel-info">
                                                    <div class="panel-heading text-center" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                                        <span><a href="{{URL::to('busqueda-'.strtolower(str_replace(' ','-',$subcategorias[$i]->nombre)))}}" class="textoblanco subcategoria">{{$subcategorias[$i]->nombre}}</a></span>
                                                    </div>
                                                    <div class="panel-body" style="margin-bottom: -16px;">
                                                        <div class="row">
                                                            <div class="col col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".$fran_categ[0]->nombre_comercial)))}}"><img class="img-responsive img-rounded thumbnail" src="{{ asset($fran_categ[0]->logo_url) }}" alt="prueba" style="width: 250px"></a>
                                                            </div>
                                                            <div class="col col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".$fran_categ[0]->nombre_comercial)))}}"><h3 class="text-center">{{$fran_categ[0]->nombre_comercial}}</h3></a>
                                                            </div>
                                                            <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">{{$fran_categ[0]->direccion}}</p>
                                                            <div>


                                                                @if(count($fran_categ)>1)
                                                                    <div class="text-center"><label>Más de esta categoría</label></div>
                                                                    <hr>
                                                                @endif

                                                                @for($j = 1; $j<count($fran_categ); $j++)
                                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <a href="{{URL::to('franquicias-de-'.$fran_categ[$j]->nombre."/".$fran_categ[$j]->nombre_comercial)}}">{{$fran_categ[$j]->nombre_comercial}}</a>
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
                                            <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin-left: 30px;">
                                                <div class="row panel panel-info">
                                                    <div class="panel-heading text-center" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                                        <span><a href="{{URL::to('busqueda-'.strtolower(str_replace(' ','-',$subcategorias[$i]->nombre)))}}"  class="textoblanco subcategoria">{{$subcategorias[$i]->nombre}}</a></span>
                                                    </div>
                                                    <div class="panel-body" style="margin-bottom: -16px;">
                                                        <div class="row">
                                                            <div class="col col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center">
                                                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".$fran_categ[0]->nombre_comercial)))}}"><img class="img-responsive img-rounded thumbnail" src="{{asset($fran_categ[0]->logo_url)}} " alt="prueba" style="width: 250px"></a>
                                                            </div>
                                                            <div class="col col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                                               <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$fran_categ[0]->nombre."/".$fran_categ[0]->nombre_comercial)))}}"> <h3 class="text-center">{{$fran_categ[0]->nombre_comercial}}</h3></a>
                                                            </div>
                                                            <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">{{$fran_categ[0]->descripcion}}</p>
                                                            <div>

                                                                @if(count($fran_categ)>1)
                                                                    <div class="text-center"><label>Más de esta categoría</label></div>
                                                                    <hr>
                                                                @endif

                                                                @for($j = 1; $j<count($fran_categ); $j++)
                                                                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                                            <ul class="list-unstyled">
                                                                                <li>
                                                                                    <a href="{{URL::to(strtolower(str_replace(' ','-','franquicias-de-'.$fran_categ[$j]->nombre."/".$fran_categ[$j]->nombre_comercial)))}}">{{$fran_categ[$j]->nombre_comercial}}</a>
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
                                            <div class="col col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: -60px;"></div>
                                            <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <div class="row panel panel-info">
                                                    <div class="panel-heading text-center" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                                        <span><a href="{{URL::to('busqueda-'.$subcategorias[$i+1]->nombre)}}" class="textoblanco subcategoria">{{$subcategorias[$i+1]->nombre}}</a></span>
                                                    </div>
                                                    <div class="panel-body" style="margin-bottom: -16px;">
                                                        <div class="row">
                                                            <div class="col col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center">
                                                                <a href="{{URL::to('franquicias-de-'.$fran_categ1[0]->nombre."/".$fran_categ1[0]->nombre_comercial)}}"><img class="img-responsive img-rounded thumbnail" src="{{ asset($fran_categ1[0]->logo_url) }}" alt="prueba" style="width: 250px"></a>
                                                            </div>
                                                            <div class="col col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                                                <a href="{{URL::to('franquicias-de-'.$fran_categ1[0]->nombre."/".$fran_categ1[0]->nombre_comercial)}}" ><h3 class="text-center">{{$fran_categ1[0]->nombre_comercial}}</h3></a>
                                                            </div>
                                                            <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">{{$fran_categ1[0]->descripcion}}</p>
                                                            <div>
                                                                @if(count($fran_categ1)>1)
                                                                    <div class="text-center"><label>Más de esta categoría</label></div>
                                                                    <hr>
                                                                @endif
                                                                @for($j = 1; $j<count($fran_categ1); $j++)
                                                                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                                            <ul class="list-unstyled">
                                                                                <li>
                                                                                    <a href="{{URL::to('franquicias-de-'.$fran_categ1[$j]->nombre."/".$fran_categ1[$j]->nombre_comercial)}}">{{$fran_categ1[$j]->nombre_comercial}}</a>
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