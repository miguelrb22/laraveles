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
                        <section>
                            <div class="row">
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
                                <hr id="separador">
                            </div>
                            <div class="row noticias">

                                <?php
                                    $meses = array ("","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                                        "Septiembre", "Octube", "Noviembre","Diciembre");

                                    $dias = array ("Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                                ?>

                                @foreach($articulos as $articulo)
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                            <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'. preg_replace("/[^a-zA-Z0-9\s\-]/","", $articulo->titulo).'/'.$articulo->id)))}}"><img class ="img-responsive img-rounded" src="{{ asset($articulo->url_imagen)}}" alt="Responsive image" width='110' height="110"></a>
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

                                                    $ffinal = $dias[$fecha->dayOfWeek]. " " . $fecha->day . " de " . $meses[$fecha->month] . " de " . $fecha->year . " " .
                                                            $hora . ":" . $minutos;

                                                    echo $ffinal;
                                                ?>

                                            </p>
                                        </div>

                                    </div>
                                    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <hr>
                                    </section>
                                @endforeach

                            </div>

                            <div class="paginacion"></div>
                        </section>
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