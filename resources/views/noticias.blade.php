@extends('master')


    @section('anuncio')
        @include('extras.anuncio')
    @endsection

    @section('buscador')
        @include('extras.buscador')
    @endsection

    @section('content')

    @section('contenido')
        <br>
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                        <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                        <hr id="separador">
                        <div class="row noticias">
                            @foreach($articulos as $articulo)
                              <!--<div class="well">-->
                            <div class="col col-xs-5 col-sm-5 col-md-2 col-lg-2 ">
                                <img src="{{ asset($articulo->url_imagen.'.jpg') }}" class="img-responsive" alt="Responsive image">
                            </div>
                                <h3 id="tituloNotica">{{ $articulo->titulo }} </h3>
                                <p id="textoNoticia">{{ $articulo->contenido }}</p>
                            <br>
                                <p class="fecha_publicacion pull-right">{{ $articulo->fecha_publicacion }}</p>
                            <br>
                            @endforeach    
                        </div>
                        <div class="paginacion"></div>
                    </section>

                </div>
            </div>
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
            paginas = count/5 //4 es el número de items que queremos que aparezcan.
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

                var ruta = "{{ URL::route('peticion') }}";
                var html = "";
                $.getJSON(ruta,{'page' : num}, function(result){
                    var html = '';
                    for(var i = 0; i<result.length; i++){
                        html += "<div class='col col-xs-5 col-sm-5 col-md-2 col-lg-2'>";
                        html += "<img src='{!! asset('"+result[i].url_imagen+".jpg') !!}' class='img-responsive' alt='Responsive image'>";
                        html += "</div>";
                        html += "<h3 id='tituloNotica'>" + " {!!' "+result[i].titulo +" '!!} " + "</h3>";
                        html += "<p id='textoNoticia'> " + " {!!' " +result[i].contenido+ " '!!} " + "</p>";
                        html += "<br>";
                        html += "<label class='fecha_publicacion pull-right'> " + " {!!' " +result[i].fecha_publicacion+ " '!!}" + "</label>"
                        html += "<br>";
                    }
                    $(".noticias").html("");
                    $(".noticias").append(html); // or some ajax content loading...
                },'json');


                /*$.ajax({
                 type: 'POST',
                 url: ruta,
                 data: {"page" : num, _token: token},
                 dataType: 'JSON',
                 success: function (result) {
                 for(var i = 0; i<result.length; i++){
                 html += "<tr>";
                 html += "<td>";
                 html += result[i].titulo;
                 html += "</td>"

                 html += "<td>"
                 html += result[i].contenido;
                 html += "</td>"
                 html += "</tr>"
                 }
                 $(".mitabla").html("");
                 $(".mitabla").append(html);
                 }
                 });*/


            });
        });
    </script>
@stop