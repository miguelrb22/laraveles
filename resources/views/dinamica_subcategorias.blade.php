@extends('master')

@section('css')
    <style>
        .subcategoria {

        }
    </style>
@endsection

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
                    <h2>{{ ucfirst (str_replace('-',' ',$categoria)) }}</h2>
                    <hr id="separador">
                    <div class="row" style="padding-left: 2%;padding-right: 2%">
                        <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <div class="row panel panel-info text-center subcategoria">

                                    <div class="panel-heading textoblanco" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                        <span class="textoblanco">Congelados</span>
                                    </div>
                                    <div class="panel-body" style="margin-bottom: -16px;">
                                        <div class="col col-xs-12 col-sm-6 col-md-12 col-lg-12 text-center" style="margin-bottom:30px">
                                            <h3>NOMBRE</h3>
                                            <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                        <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="row panel panel-info text-center subcategoria">
                                <div class="panel-heading textoblanco" id=""  style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                    <span class="textoblanco">Delicatessem</span>
                                </div>
                                <div class="panel-body" style="margin-bottom: -16px;">
                                    <div class="col col-xs-12 col-sm-6 col-md-12 col-lg-12 text-center" style="margin-bottom:30px">
                                        <h3>nombre de la franquicia</h3>
                                        <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                                    </div>
                                </div>
                            </div>
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

@section('javascript')

    <script type="text/javascript">

        //var randomColor = Math.floor(Math.random()*16777215).toString(16);
    </script>
@endsection