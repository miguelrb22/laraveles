<script src="{{ asset('area_privada/js/angular.min.js') }}"></script>

<script>
        var app = angular.module("modulo-inicio",[]);

        app.controller("GreetingController",["$scope","$http",function(o,h){
            o.valor="1";
            o.paquetes = [];
            o.cargando = true;

            h.post("{{URL::route('apuntoCaducar')}}").success(function (data) {
                o.paquetes = data;
                o.cantidad = o.paquetes.length;
            }).error(function(error)
            {
            });

            h.post("{{URL::route('apuntoCaducarPaquetes')}}").success(function (data) {
                o.paquetes2 = data;
                o.cantidad2 = o.paquetes2.length;
                o.cargando = false;

            }).error(function(error)
            {
                cargando = false;

            });


        }]);

</script>

@extends('area_privada.multifranquicias')

@section('notifications')


    <div ng-app="modulo-inicio">
    <span id="activity" class="activity-dropdown"  ng-controller="GreetingController" > <i class="fa fa-user"></i> <b class="badge avisos" ng-show="!cargando && paquetes.length > 0"> @{{cantidad + cantidad2}} </b> </span>

    <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown"  ng-controller="GreetingController">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">

                <label class="btn btn-default" ng-click="valor=1">
                    <input type="radio" name="activityy" id="mail">
                    Franquicias (@{{cantidad}})
                </label>

                <label class="btn btn-default" ng-click="valor=2">
                    <input type="radio" name="activityy" id="notificacion">
                    Paquetes (@{{cantidad2}})
                </label>

            </div>

            <!-- notification content -->
                <div class="ajax-notifications custom-scroll">


                    <div class="alert alert-transparent" ng-show="valor == 1">

                        <div class="fluid-container">

                        <div ng-repeat="paquete in paquetes" class="row" style="left: 0;">

                                <p><span style="font-weight: bold">@{{ paquete['nombre_comercial'] }} </span> caducará el próximo: <br><span style="color: #ff0000; font-weight: bold; margin-right: 10px;"> @{{ paquete['fecha_vencimiento_ficha'] | date:'dd-MM-yyyy' }}</span><button class="btn btn-success btn-xs" style="background-color: #ffffff; color: green;" disabled><i class="fa fa-phone"></i><span ng-show=" paquete['tf_contacto']=='' "> No disponible</span> @{{ paquete['tf_contacto']}}</button></p>
                                <hr>
                        </div>

                            <div ng-show="cantidad == 0">

                                <h3>No hay franquicias próximas a caducar.</h3>
                               <center> <i class="fa fa-comment fa-5x" style=""></i></center>

                            </div>

                        </div>


                </div>

                <div class="alert alert-transparent" ng-show="valor == 2">
                    <div class="fluid-container">

                        <div ng-repeat="paquete in paquetes2" class="row" style="left: 0;">

                            <p><span>El paquete <span style="font-weight: bold; color: #00bfff">@{{ paquete['nombre_paquete'] }}</span> de </span><span style="font-weight: bold">@{{ paquete['nombre_comercial'] }} </span> caducará el próximo: <br><span style="color: #ff0000; font-weight: bold; margin-right: 10px;"> @{{ paquete['final'] | date:'dd-MM-yyyy' }}</span><button class="btn btn-success btn-xs" style="background-color: #ffffff; color: green;" disabled><i class="fa fa-phone"></i> <span ng-show=" paquete['tf_contacto']=='' ">No disponible</span>@{{ paquete['tf_contacto']}}</button></p>
                            <hr>
                        </div>

                        <div ng-show="cantidad2 == 0">

                            <h3>No hay paquetes próximas a caducar.</h3>
                            <center> <i class="fa fa-comment fa-5x" style=""></i></center>

                        </div>

                    </div>
                </div>

            </div>

            <!-- end notification content -->

            <!-- footer: refresh area -->

            <!-- end footer -->
        </div>
    </div>
@endsection
<style>
    body{-moz-user-select:none;-webkit-user-select:none;user-select:none}td{cursor:pointer;font-size:12px}
</style>
@section('main')
    <section id="widget-grid" class="">
        <div class="row">
            <br>
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                <!-- boton nueva areaprivada -->

                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a style="margin-bottom: 15px;" class="btn btn-success" id="nuevo-franquicia"
                           href="{{ URL::route('nueva_alta') }}"><i class="fa fa-plus"></i> Alta Franquicia</a>
                    </div>

                    <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9" style="margin-top: 5px;">
                        <h4 id="franquiciacargada"> <?php

                            $ses = Session::get('franquicia');

                            if ($ses) {
                                echo $ses->nombre_comercial;
                            } else echo "Ninguna franquicia cargada. Necesario para algunas opciones";?>
                        </h4>
                    </div>
                </div>
                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>

                        <h2 id="titulo-tabla">Lista Franquicias </h2>
                    </header>

                    <!-- widget div-->
                    <div>
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <table id="dt_basic_inicio" class="table table-striped table-bordered table-hover"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th data-class="expand">Nombre Comercial</th>
                                    <th data-hide="phone,tablet"><i
                                                class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>
                                        CIF
                                    </th>
                                    <th data-hide="phone"><i
                                                class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i>
                                        Direccion
                                    </th>
                                    <th data-hide="pc">Telefono</th>
                                    <th data-hide="phone,tablet"><i
                                                class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>
                                        web
                                    </th>
                                    <th data-class="expand"><i
                                                class="fa fa-fw fa-key txt-color-blue hidden-md hidden-sm hidden-xs"></i>
                                        Cargar
                                    </th>

                                    <th id="id" class="hidden"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($franquicias as $franquicia)
                                    <tr>
                                        <td>{{$franquicia->nombre_comercial }}</td>
                                        <td>{{$franquicia->cif }}</td>
                                        <td>{{$franquicia->direccion }}</td>
                                        <td>{{$franquicia->tf_contacto }}</td>
                                        <td>{{$franquicia->web }}</td>
                                        <td class="hidden">{{$franquicia->id }}</td>
                                        <td>
                                            <button class="btn btn-info btn-xs"
                                                    onclick="cargarfranquicia({{$franquicia->id }})"> Cargar
                                            </button>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end widget content -->
                    </div>
                    <!-- end widget div -->
                </div>
                <!-- end widget -->
            </article>
            <!-- WIDGET END -->
        </div>
    </section>
@endsection


<script>


    function cargarfranquicia(idd) {


        var id = idd;
        var token = "{{ csrf_token()}}";

        $.blockUI({

            message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: 'transparent'
            }

        });

        $.ajax({

            type: "POST",
            url: "{{ URL::route('cargarfranquicia') }}",
            data: {id: id, _token: token},
            dataType: "html",
            error: function () {
                //$('#loading').show();
                alert("Error en la petición");
            },
            success: function (data) {

                Lobibox.notify('success', {
                    title: 'Franquicia Carcaga con éxito',
                    showClass: 'flipInX',
                    delay: 3000,
                    delayIndicator: false,

                    position: 'bottom left',
                    msg: 'Sigue así y ganarás mucho dinero'
                });

                $("#franquiciacargada").html(data);
                $("#gestion").css("display", "block");

            }
        });
    }
</script>