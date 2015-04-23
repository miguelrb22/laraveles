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
                                        <div class="panel">
                                            <a href="#" class="list-group-item" data-toggle="collapse" data-parent="#accordion">Abogados</a>
                                        </div>
                                        <div class="panel">
                                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span>
                                                Alimentacion
                                            </a>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <a class="list-group-item small"> Congelados </a>
                                                <a class="list-group-item small"> Delicatessen</a>
                                                <a class="list-group-item small"> Fruterias</a>
                                                <a class="list-group-item small"> Frutos Secos y Dulces</a>
                                                <a class="list-group-item small"> Otros Alimentación </a>
                                                <a class="list-group-item small"> Panaderias y Pastelerias</a>
                                                <a class="list-group-item small"> Supermercados</a>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-plus"></span>
                                                Educación
                                            </a>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <a class="list-group-item small">Cocinas</a>
                                                <a class="list-group-item small">Decoración Hogar</a>
                                                <a class="list-group-item small">Descanso</a>
                                                <a class="list-group-item small">Mobiliario Hogar</a>
                                                <a class="list-group-item small">Textil Hogar</a>
                                            </div>
                                        </div>
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