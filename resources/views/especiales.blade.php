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
                        <label>Resultados de busqueda: <span class="badge badge-info"> {{count($franquicias)}} </span> franquicias  </label>
                    </div>
                    <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                    <h2> @if($tipo === 'exito')
                         {{"Franquicias de éxito"}}
                        @else
                          {{"franquicias ".str_replace('-',' ',$tipo)/*ucfirst(str_replace('-',' ',$categoria))*/}}

                         @endif</h2>
                    <hr id="separador">
                    @foreach($franquicias as $franquicia)
                        <div class="row">
                            <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <img class="img-rounded img-responsive" src="{{ asset($franquicia->logo_url) }}">

                            </div>
                            <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8">
                                <p>
                                    <label class="pull-right badge badge-success">Inversión: {{$franquicia->inversion}}</label>
                                    <a href="{{URL::to('franquicias-de-'.$franquicia->nombre."/".$franquicia->nombre_comercial)}}"><h3>{{$franquicia->nombre_comercial}}</h3></a>
                                    <p>{{ $franquicia->descripcion }}</p>
                                    <label>Actividad : {{$franquicia->nombre}}</label>
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