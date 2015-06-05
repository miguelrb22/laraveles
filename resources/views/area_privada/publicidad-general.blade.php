@extends('area_privada.multifranquicias')


@section('main')

    <section id="widget-grid" class="">
        <div class="row">
            <br>
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                <!-- boton nueva areaprivada -->

                <br>

                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>

                        <h2 id="titulo-tabla">Tus artículos</h2>
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

                            <table id="dt_basic_articulos" class="table table-striped table-bordered table-hover"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th data-class="expand">Franquicia</th>
                                    <th data-hide="phone,tablet"><i
                                                class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>
                                        Publicidad
                                    </th>
                                    <th data-hide="phone,tablet"><i
                                                class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>
                                        Fecha inicio
                                    </th>

                                    <th data-hide="phone,tablet"><i
                                                class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>
                                        Fecha fin
                                    </th>
                                    <th data-hide="phone,tablet">Estado</th>

                                    <th data-hide="phone,tablet"> Acciones</th>
                                    <th id="id" class="hidden"></th>
                                </tr>
                                </thead>
                                <tbody>


                                    <tr id="articulo{{1}}">

                                        <td>{{1}}</td>
                                        <td>{{1}}</td>
                                        <td>{{1}}</td>
                                        <td>{{1}}</td>
                                        <td>{{1}}</td>
                                        <td>
                                            <button class="btn btn-xs btn-danger"
                                                    onclick="deletearticulo({{1}})"> <i class="fa fa-trash-o"></i> Borrar
                                            </button>

                                        </td>
                                        <td class="hidden">{{1}}</td>

                                    </tr>

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


@section('ready')

    $('#dt_basic_articulos').dataTable({
    "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
    "t" +
    "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
    "autoWidth": true,

    "preDrawCallback": function () {
    // Initialize the responsive datatables helper once.
    if (!responsiveHelper_dt_basic) {
    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic_articulos'), breakpointDefinition);
    }
    },
    "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
    "rowCallback": function (nRow) {
    responsiveHelper_dt_basic.createExpandIcon(nRow);
    },
    "drawCallback": function (oSettings) {
    responsiveHelper_dt_basic.respond();
    }
    });
@endsection