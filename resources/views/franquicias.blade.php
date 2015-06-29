@extends('master')

            @section('anuncio')
                @include('extras.anuncio')
            @endsection

            @section('buscador')
                @include('extras.buscador')
            @endsection

            @section('contenido')
            <br/>
            <div class="row">
                <section class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">

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

                <section class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">

                    @if(!$banner_int->isEmpty())
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($banner_int[0]->nombre."/".$bannerSup[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}" title="perfil">
                                    <img  id="publicidad" src="{{ asset($banner_int[0]->url_imagen) }}" class="img-responsive" alt="Responsive image">
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

                    <h2>Listado de franquicias</h2>
                    <hr id="separador">
                    <div class="row">

                                <div class="panel-group" id="accordion">
                                    @for($i=0 ; $i < count($lista); $i+=2)

                                        @if(count($lista[$i+1])>1)
                                            <div class="panel">
                                                <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}"><span class="glyphicon glyphicon-plus"></span>
                                                    {{$lista[$i]}}
                                                </a>
                                                <div id="collapse{{$i}}" class="panel-collapse collapse">

                                                    <a href="{{URL::to('franquicias-de-'.strtr(utf8_decode(strtolower(str_replace(' ','-',$lista[$i]))),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),
                                                                'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))}}" class="list-group-item small"> {{$lista[$i]}} </a>
                                                    @for($j=0 ; $j < count($lista[$i+1]); $j++)

                                                        @if(!($lista[$i+1][$j] === $lista[$i]))

                                                        <a href="{{URL::to('franquicias-de-'.strtr(utf8_decode(strtolower(str_replace(' ','-',$lista[$i+1][$j]))),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),
                                                                'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))}}" class="list-group-item small"> {{$lista[$i+1][$j]}} </a>
                                                        @endif

                                                    @endfor
                                                </div>
                                            </div>
                                        @else

                                            <div class="panel">
                                                <a href="{{URL::to('franquicias-de-'.strtr(utf8_decode(strtolower(str_replace(' ','-',$lista[$i]))),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),
                                                            'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))}}" class="list-group-item"  data-parent="#accordion">{{$lista[$i]}}</a>
                                            </div>
                                        @endif

                                    @endfor
                                </div>
                    </div>
                </section>
            </div>
@endsection

@section('der')
    @include('extras.derecha')
@endsection

@section('javascript')
    <script type="text/javascript">
    $(document).ready(function() {

        $('.collapse').on('shown.bs.collapse', function(){
            $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hidden.bs.collapse', function(){
            $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });


        $('#list-group-item').on('shown', function () {
            alert("entra");
            $(".icon-chevron-down").removeClass("icon-chevron-down").addClass("icon-chevron-up");
        });

        $(".list-group-item").on('click' ,function(){
            if($(this).attr("data-target"))
            {
                if($(this).hasClass("collapse")){

                }
            }
        });
    });
    </script>
@endsection