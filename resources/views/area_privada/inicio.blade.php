
@extends('area_privada.multifranquicias')

<style>

    body {

        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
    }

    td{
        cursor: pointer;
        font-size: 12px;
    }


</style>
@section('main')

    <section id="widget-grid" class="">
        <div class="row">
                <br>
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                    <!-- boton nueva areaprivada -->

                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <a style="margin-bottom: 15px;" class="btn btn-success" id="nuevo-franquicia" href="{{ URL::route('nueva_alta') }}"><i class="fa fa-plus"></i> Alta Franquicia</a>
                        </div>

                        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9" style="margin-top: 5px;">
                            <h4 id="franquiciacargada"> <?php

                                $ses = Session::get('franquicia');

                                    if($ses){
                                           echo $ses->nombre_comercial;
                                    } else echo "Ninguna franquicia cargada";?>
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

                                <table id="dt_basic_inicio" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-class="expand">Nombre Comercial</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> CIF </th>
                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Direccion</th>
                                        <th data-hide="pc">Telefono</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> web</th>
                                        <th data-class="expand"><i class="fa fa-fw fa-key txt-color-blue hidden-md hidden-sm hidden-xs"></i> Cargar </th>

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
                                        <td><button class="btn btn-info btn-xs" onclick="cargarfranquicia({{$franquicia->id }})"> Cargar</button></td>

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


    function  cargarfranquicia (idd) {


        var id = idd;
        var token = "{{ csrf_token()}}";

        $.blockUI({

            message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: 'transparent'}

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