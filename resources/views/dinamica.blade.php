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
                            <label>Resultados de búsqueda .... </label>
                        </div>
                        <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                        <h2>{{ ucfirst(str_replace('-',' ',$categoria)) }}</h2>
                        <hr id="separador">
                        <div class="row">
                            <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <img class="img-rounded img-responsive" src="{{ asset('images/logo_perfil.jpg') }}">
                            </div>
                            <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8">
                                <p>
                                    <a href="#"><h3>Karoon Pilates Studios</h3></a>
                                    <p>Comercialización de dulces Sweet Pharm C/ Me falta un tornillo, 7 47195 Arroyo de la Encomienda (Valladolid) http://www.sweet-pharm.com 5553 Sweet Pharm es un concepto innovador…</p>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endsection

    @section('der')
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
            <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>
    @endsection
@endsection