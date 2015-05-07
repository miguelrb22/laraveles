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
        <section class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
            </div>
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
            </div>
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">

            <div class="row">
                <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                <hr id="separador">
            </div>
            <div class="row noticias">


                <div class="row" >
                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                        <img src = "{{ URL::asset($articulo[0]->url_imagen)}} " alt="Responsive image" width='110' height="110">
                    </div>

                    <div class="col col-xs-7 col-sm-7 col-md-10 col-lg-10">
                        <h3 id="tituloNotica"> {{ $articulo[0]->titulo }}></h3>
                        <br>
                        <p  id="textoNoticia"> {!! $articulo[0]->contenido !!}</p>
                        <p class="fecha_publicacion pull-right">{{ '21-02-2012' }}</p>
                    </div>
                </div>
                <hr>


            </div>
            <div class="paginacion"></div>
        </section>

    </div>
@endsection

@section('der')

    @include('extras.derecha')

@endsection