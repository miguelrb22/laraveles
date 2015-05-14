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
                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                        <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                    </div>
                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                        <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                    </div>
                </section>
                <section class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="well">
                        <label>Resultados de busqueda: <span class="badge badge-info"> {{ $resultados }} </span> franquicias  </label>
                    </div>
                    <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                    <h2>{{ "Franquicias " .str_replace('-',' ',$categoria )}}</h2>
                    <hr id="separador">
                    @for($i=0; $i< count($franquicias); $i++)
                        @if(!$franquicias[$i]->isEmpty())
                            @for($j=0 ; $j< count($franquicias[$i]); $j++)
                                <div class="row">
                                    <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <img class="img-rounded img-responsive" src="{{ asset($franquicias[$i][$j]->logo_url) }}">

                                    </div>
                                    <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8 elegante">
                                        <p>
                                            <label class="pull-right badge badge-success">Inversión: {{$franquicias[$i][$j]->inversion}}</label>
                                            <a href="{{URL::to('franquicias-de-'.$franquicias[$i][$j]->nombre."/".$franquicias[$i][$j]->nombre_comercial)}}"><h3>{{$franquicias[$i][$j]->nombre_comercial}}</h3></a>
                                            <p>{{ $franquicias[$i][$j]->descripcion }}</p>
                                            <labe> Actividad : {{$franquicias[$i][$j]->nombre}}</labe>
                                        </p>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    @endfor
                </section>
            </div>
        </div>
    </div>
@endsection

@section('der')
    @include('extras.derecha')
@endsection
@endsection