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
                    <h2>{{ "Franquicias " .str_replace('-',' ',$categoria )}}</h2>
                    <hr id="separador">

                        @if(count($franquicias) > 0)

                            @for($i=0 ; $i< count($franquicias); $i++)
                                <div class="row">
                                    <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($franquicias[$i]->nombre."/".$franquicias[$i]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><img class="img-rounded img-responsive f-logo" src="{{ asset($franquicias[$i]->logo_url) }}"></a>
                                    </div>
                                    <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8 f-desc">
                                        <p>
                                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($franquicias[$i]->nombre."/".$franquicias[$i]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}"><h3>{{$franquicias[$i]->nombre_comercial}}</h3></a>
                                            <p>{{ substr(strip_tags($franquicias[$i]->descripcion),0,255)."..." }}</p>
                                            <label> Actividad : {{$franquicias[$i]->nombre}}</label>
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