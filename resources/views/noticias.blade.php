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
                        <div class="row">
                            <table class="table table-striped mitabla">
                                @foreach($articulos as $articulo) 
                                <tr>
                                    <td>  {{ $articulo->titulo }} </td>
                                    <td>  {{ $articulo->contenido }}  </td>
                                </tr>
                                 @endforeach
                            </table>
                        </div>
                        <div class="paginacion"></div>
                    </section>

                </div>
            </div>
        </div>
    @endsection

    @section('der')
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
            <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>
    @endsection

@section('javascript')
    <script type="text/javascript" src="{{ URL::asset('area_privada/js/plugin/botmoster.js')}}"></script>

    <script type="text/javascript">
        var count = "{{ $total }}"//variable para contar el total de franquicias y mostrar en relacion con el nº de paginas
        $(document).ready(function() {
            $('.paginacion').bootpag({
                total: count/3,
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

               alert(ruta);

                /*$.getJSON(ruta,{'page' : num}, function(result){
                    var html = '';
                    for(var i = 0; i<result.length; i++){
                        html += "<tr>";
                        html += "<td>";
                        html += result[i].idfranquicia;
                        html += "</td>"

                        html += "<td>"
                        html += result[i].nombre_comercial;
                        html += "</td>"
                        html += "</tr>"
                    }
                    $(".mitabla").html("");
                    $(".mitabla").append(html); // or some ajax content loading...
                },'json');*/

                $.ajax({
                    type: 'PUT',
                    url: ruta,
                    data: {"page" : num},
                    dataType: 'JSON',
                    success: function (json) {
                        alert('test');
                        return true;
                    },
                    error: alert('fail')
                });


            });
        });
    </script>
@stop