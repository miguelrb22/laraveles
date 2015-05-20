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
                        <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive f-logo" alt="Responsive image">
                        <h2>{{ "Franquicias " .str_replace('-',' ',$categoria )}}</h2>
                        <hr id="separador">
                        @foreach($franquicias as $franquicia)
                        <div class="row">
                            <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicia->nombre."/".$franquicia->nombre_comercial)))}}"><img class="img-rounded img-responsive" src="{{ asset($franquicia->logo_url) }}"></a>
                            </div>
                            <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8">
                                <p>
                                    <a href="{{Request::url().'/'.$franquicia->nombre_comercial}}"><h3>{{$franquicia->nombre_comercial}}</h3></a>
                                    <p>{{ substr($franquicia->descripcion,0,250)."..." }}</p>
                                </p>
                            </div>
                        </div>

                            @endforeach
                    </section>
                </div>
            </div>
        </div>
    @endsection

    @section('der')
        @include('extras.derecha')
    @endsection
@endsection