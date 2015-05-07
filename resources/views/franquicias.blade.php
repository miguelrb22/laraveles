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
                        <section class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                            </div>
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                            </div>
                        </section>
                        <section class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
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
                                                            @for($j=0 ; $j < count($lista[$i+1]); $j++)
                                                                <a href="{{URL::to('franquicias-de-'.$lista[$i+1][$j])}}" class="list-group-item small"> {{$lista[$i+1][$j]}} </a>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                @else
                                                    @if(count($lista[$i+1]) != 0)
                                                        <div class="panel">
                                                            <a href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$lista[$i])))}}" class="list-group-item"  data-parent="#accordion">{{$lista[$i]}}</a>
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
                    alert("entra");
                }
                /*$(this).on('shown.bs.collapse', function(){
                    $(this).removeClass("glyphicon-plus").addClass("glyphicon-minus");
                }).on('hidden.bs.collapse', function(){
                    $(this).removeClass("glyphicon-minus").addClass("glyphicon-plus");
                });*/
            }
        });
    });
    </script>
@endsection