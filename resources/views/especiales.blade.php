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
                                        <img onclick="estadisticas(26,'{{$franInIzq[$i]->id}}');" class="img-responsive img-rounded" src="{{ asset($franInIzq[$i]->url_imagen) }}"  alt="prueba" style="width: auto">
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
                        <label>Resultados de busqueda: <span class="badge badge-info"> {{count($franquicias)}} </span> franquicias  </label>
                    </div>

                    @if(!$banner_int->isEmpty())
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a  href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($banner_int[0]->nombre."/".$bannerSup[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}" title="perfil">
                                    <img onclick="estadisticas(9,'{{$banner_int[0]->id}}');" id="publicidad" src="{{ asset($banner_int[0]->url_imagen) }}" class="img-responsive" alt="Responsive image">
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                            </div>
                        </div>
                    @endif


                    <h2>
                        @if($tipo === 'exito')
                         {{"Franquicias de éxito"}}
                        @else
                          {{"franquicias ".str_replace('-',' ',$tipo)}}
                         @endif
                    </h2>

                    <hr id="separador">
                    @if(!$franquicias->isEmpty())
                        @foreach($franquicias as $franquicia)
                            <div class="row">
                                <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(" ","-",$franquicia->nombre."/".strtr(utf8_decode($franquicia->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><img class="img-rounded img-responsive f-logo" src="{{ asset($franquicia->logo_url) }}">
                                </div>
                                <div class="col col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <p>
                                        <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicia->nombre."/".strtr(utf8_decode($franquicia->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><h3>{{$franquicia->nombre_comercial}}</h3></a>
                                        <p>{{ substr(strip_tags($franquicia->descripcion) ,0,250)}}</p>
                                        <label>Actividad : {{ $franquicia->nombre }}</label>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3>No hay franquicias de este tipo</h3>
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