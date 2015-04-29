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
                    <h2>{{ "Franquicias " .str_replace('-',' ',$categoria)/*ucfirst(str_replace('-',' ',$categoria))*/ }}</h2>
                    <hr id="separador">

                        @for($i = 0; $i < count($subcategorias) ; $i+=2)
                            @if(count($subcategorias)-$i === 1)
                            <div class="row panel_subcategorias">
                                <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin-left: 30px;">
                                    <div class="row panel panel-info subcategoria">
                                        <div class="panel-heading text-center" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                            <span><a href="/laraveles/public/franquicias-de-{{$subcategorias[$i]->nombre}}" class="textoblanco">{{$subcategorias[$i]->nombre}}</a></span>
                                        </div>
                                        <div class="panel-body" style="margin-bottom: -16px;">
                                            <div class="row">
                                                <div class="col col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center">
                                                    <img class="img-responsive img-rounded thumbnail" src="{{ asset('images/anunci.jpg') }}" alt="prueba" style="width: 250px">
                                                </div>
                                                <div class="col col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                                    <h3 class="text-center">La sureña</h3>
                                                </div>
                                                <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">Bar y cerveceria la sureña Av.Europa, mucho mas texto que esto es una bazofia</p>
                                                <div>
                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">+kcopas</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tasca joselito</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">+kcopas</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tasca joselito</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="row panel_subcategorias" >
                                <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin-left: 30px;">
                                    <div class="row panel panel-info subcategoria">
                                        <div class="panel-heading text-center" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                            <span><a href="/laraveles/public/franquicias-de-{{$subcategorias[$i]->nombre}}" class="textoblanco">{{$subcategorias[$i]->nombre}}</a></span>
                                        </div>
                                        <div class="panel-body" style="margin-bottom: -16px;">
                                            <div class="row">
                                                <div class="col col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center">
                                                    <img class="img-responsive img-rounded thumbnail" src="{{ asset('images/anunci.jpg') }}" alt="prueba" style="width: 250px">
                                                </div>
                                                <div class="col col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                                    <h3 class="text-center">La sureña</h3>
                                                </div>
                                                <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">Bar y cerveceria la sureña Av.Europa, mucho mas texto que esto es una bazofia</p>
                                                <div>
                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">+kcopas</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tasca joselito</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">+kcopas</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tasca joselito</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-right: -60px;"></div>
                                <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                    <div class="row panel panel-info subcategoria">
                                        <div class="panel-heading text-center" id="" style="background:{{ '#'.$color = dechex(rand(0x000000, 0xFFFFFF))  }}; box-shadow: 0 0 7px {{ '#' .$color  }}">
                                            <span><a href="/laraveles/public/franquicias-de-{{$subcategorias[$i+1]->nombre}}" class="textoblanco">{{$subcategorias[$i+1]->nombre}}</a></span>
                                        </div>
                                        <div class="panel-body" style="margin-bottom: -16px;">
                                            <div class="row">
                                                <div class="col col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center">
                                                    <img class="img-responsive img-rounded thumbnail" src="{{ asset('images/anunci.jpg') }}" alt="prueba" style="width: 250px">
                                                </div>
                                                <div class="col col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                                    <h3 class="text-center">La sureña</h3>
                                                </div>
                                                <p class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">Bar y cerveceria la sureña Av.Europa, mucho mas texto que esto es una bazofia</p>
                                                <div>
                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">+kcopas</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tasca joselito</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#">+kcopas</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tasca joselito</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

@section('javascript')

    <script type="text/javascript">

    </script>
@endsection