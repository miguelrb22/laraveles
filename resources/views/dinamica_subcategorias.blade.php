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
                    <h2>{{ "Franquicias " .str_replace('-',' ',$categoria )}}</h2>
                    <hr id="separador">

                        @if(count($franquicias) > 0)

                            @for($i=0 ; $i< count($franquicias); $i++)
                                <div class="row">
                                    <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <img class="img-rounded img-responsive" src="{{ asset($franquicias[$i]->logo_url) }}">

                                    </div>
                                    <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8">
                                        <p>
                                            <label class="pull-right badge badge-success">Inversión: {{$franquicias[$i]->inversion}}</label>
                                            <a href="{{URL::to('franquicias-de-'.$franquicias[$i]->nombre."/".$franquicias[$i]->nombre_comercial)}}"><h3>{{$franquicias[$i]->nombre_comercial}}</h3></a>
                                            <p>{{ substr($franquicias[$i]->descripcion,0,255) }}</p>
                                            <labe> Actividad : {{$franquicias[$i]->nombre}}</labe>
                                        </p>
                                    </div>
                                </div>
                            @endfor
                        @else
                            <h3>No hay franquicias de esta categoria.</h3>
                        @endif

                </section>
            </div>
        </div>
    </div>
@endsection

@section('der')
    @include('extras.derecha')
@endsection
@endsection