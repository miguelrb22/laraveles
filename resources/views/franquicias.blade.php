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
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <section class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            @if(!$franInIzq->isEmpty())
                                <?php

                                $a1 = mt_rand(0, count($franInIzq)-1);
                                $a2 = mt_rand(0, count($franInIzq)-1);

                                do{
                                    $a2 = mt_rand(0, count($franInIzq)-1);
                                }while($a2 == $a1)
                                ?>
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a1]->nombre."/".$franInIzq[$a1]->nombre_comercial)))}}">
                                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a1]->logo_url) }}"  alt="prueba" style="width: auto">
                                    </a>
                                </div>
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a2]->nombre."/".$franSupDer[$a2]->nombre_comercial)))}}">
                                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a2]->logo_url) }}"  alt="prueba" style="width: auto">
                                    </a>
                                </div>
                            @else
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                                </div>
                                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                                    <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                                </div>

                            @endif
                        </section>
                        <section class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
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
                                                            @for($j=1 ; $j < count($lista[$i+1]); $j++)
                                                                <a href="{{URL::to('franquicias-de-'.$lista[$i+1][$j])}}" class="list-group-item small"> {{$lista[$i+1][$j]}} </a>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                @else
                                                    @if(count($lista[$i+1]) == 1)
                                                        <div class="panel">
                                                            <a href="{{URL::to('franquicias-de-'.strtr(utf8_decode(strtolower(str_replace(' ','-',$lista[$i]))),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),
                                                                        'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))}}" class="list-group-item"  data-parent="#accordion">{{$lista[$i]}}</a>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endfor
                                        </div>
                            </div>
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