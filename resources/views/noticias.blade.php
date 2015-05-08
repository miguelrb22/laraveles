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
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                        </div>
                    </section>
                    <section class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">

                        <div class="row">
                        <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                        <hr id="separador">
                            </div>
                        <div class="row noticias">



                            @foreach($articulos as $articulo)

                                <div class="row" >
                                    <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2">
                                        <img src = "{{ URL::asset($articulo->url_imagen)}} " alt="Responsive image" width='110' height="110">
                                    </div>
                                    <div class="col col-xs-7 col-sm-7 col-md-10 col-lg-10">
                                        <h3 id="tituloNotica"><a href="{{ URL::route('publicacion_individual', array($articulo->titulo)) }}"> {{ $articulo->titulo }}</a></h3>
                                        <p  id="textoNoticia"> {{ substr(strip_tags($articulo->contenido),0,400)."... " }}<a>seguir leyendo</a></p>
                                        <p class="fecha_publicacion pull-right">{{ '21-02-2012' }}</p>
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