
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
                        <!-- numPublicaicones[3] el el numero de recuadros que va a haber en la izquierda-->
                        @for($i = 0 ;$i < $numPublicaciones[3]->recuadros; $i++)
                            @if($i < count($franInIzq))
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$i]->nombre."/".$franInIzq[$i]->nombre_comercial)))}}">
                                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$i]->url_imagen) }}"  alt="prueba" style="width: auto">
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

                <section class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="well">
                        <label>Resultados de busqueda: <span class="badge badge-info"> {{ $resultados }} </span> franquicias  </label>
                    </div>
                    <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">

                    <hr id="separador">

                    @if(!$franquicias->isEmpty())
                        @foreach($franquicias as $franquicia)
                            <div class="row">
                                <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicia->nombre."/".strtr(utf8_decode($franquicia->nombre_comercial),utf8_decode('ÀÁÂÄÅàáâäÒÓÔÖòóôöÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿ'),'AAAAAaaaaOOOOooooEEEEeeeeCcIIIIiiiiUUUUuuuuy'))))}}"><img class="img-rounded img-responsive f-logo" src="{{ asset($franquicia->logo_url) }}"></a>
                                </div>
                                <div class="col col-xs-8 col-sm-8 col-md-8 col-lg-8 f-desc">
                                    <p>
                                        <!--<label class="pull-right badge badge-success">Inversión: {!! $franquicia->inversion !!}</label> -->
                                        <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franquicia->nombre."/".strtr(utf8_decode($franquicia->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><h3>{{$franquicia->nombre_comercial}}</h3></a>
                                        <p>{{ substr(strip_tags($franquicia->descripcion),0,250)."..." }}</p>
                                        <label>Actividad : {{$franquicia->nombre}}</label>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3>No hay resultados para esta búsqueda.</h3>
                    @endif
                    <br>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('der')
    @include('extras.derecha')
@endsection
@endsection