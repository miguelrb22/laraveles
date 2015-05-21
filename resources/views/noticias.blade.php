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

                        <div class="row">
                        <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                        <hr id="separador">
                            </div>
                        <div class="row noticias">

                            <?php
                                $meses = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                                    "Septiembre", "Octube", "Noviembre", "Diciembre");

                                $dias = array ("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado","Domingo");
                            ?>

                            @foreach($articulos as $articulo)
                                <div class="row col-xs-12 col-md-12 col-xs-12 col-lg-12" >
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'. preg_replace("/[^a-zA-Z0-9\s\-]/","", $articulo->titulo).'/'.$articulo->id)))}}"><img class ="img-responsive img-rounded" src="{{ URL::asset($articulo->url_imagen)}} " alt="Responsive image" width='110' height="110"></a>
                                    </div>
                                    <div class="col col-xs-7 col-sm-7 col-md-10 col-lg-10">
                                        <h3 id="tituloNotica"><a href="{{  strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","", $articulo->titulo).'/'.$articulo->id)))}}"> {{ $articulo->titulo }}</a></h3>
                                        <p  id="textoNoticia"> {{ substr(strip_tags($articulo->resumen),0,400)."... " }}<a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","", $articulo->titulo).'/'.$articulo->id)))}}">seguir leyendo</a></p>
                                        <p class="fecha_publicacion pull-right">

                                            <?php
                                                $fecha = $articulo->created_at;

                                                //si los minutos aparecen con un dígito
                                                $minutos = $fecha->minute;
                                                $hora = $fecha->hour;

                                                if(strlen($minutos) < 2) {$minutos = "0".$minutos;}

                                                if(strlen($hora) < 2){$hora = "0".$hora;}

                                                $ffinal = $dias[$fecha->dayOfWeek-1]. " " . $fecha->day . " de " . $meses[$fecha->month-1] . " " .
                                                        $hora . ":" . $minutos;

                                                echo $ffinal;
                                            ?>

                                        </p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                                                          
                        </div>

                        <div class="paginacion"></div>
                    </section>

                </div>
    @endsection

    @section('der')
        @include('extras.derecha')
    @endsection

@section('javascript')
    <script type="text/javascript" src="{{ URL::asset('area_privada/js/plugin/botmoster.js')}}"></script>

    <script type="text/javascript">
        var count = "{{ $total }}"//variable para contar el total de franquicias y mostrar en relacion con el nº de paginas
        var paginas = 0;
        if (count%5 != 0){
            paginas = Math.floor(count/5)+1;
        }else{
            paginas = count/5; //4 es el número de items que queremos que aparezcan.
        }
        $(document).ready(function() {
            $('.paginacion').bootpag({
                total: paginas,
                page: 1,
                maxVisible: 3,
                leaps: true,
                firstLastUse: true,
                first: '←',
                last: '→',
                wrapClass: 'pagination',
                activeClass: 'active',
                disabledClass: 'disabled',
                nextClass: 'next',
                prevClass: 'prev',
                lastClass: 'last',
                firstClass: 'first'

            }).on("page", function(event, num) {

                var tipo_publicacion = "{{ $tipo }}";
                var ruta = "{{ URL::route('peticion') }}";

                var html = "";

                $.ajax({

                    type: "get",
                    url: ruta,
                    data: {page : num, tipo: tipo_publicacion},
                    dataType: "html",
                    error: function () {
                        //$('#loading').show();
                        alert("Error en la petición");
                    },
                    success: function (data) {

                        $(".noticias").html(data)

                    }
                });


                });


        });

    </script>
@stop