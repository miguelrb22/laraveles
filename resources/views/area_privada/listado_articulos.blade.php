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
                                    <th data-class="expand">Título</th>
                                    <th data-hide="phone,tablet"><i
                                                class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>
                                        Fecha
                                    </th>
                                    <th data-hide="phone,tablet"> Acciones</th>
                                    <th id="id" class="hidden"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($publicaciones as $publicacion)

                                    <tr id="articulo{{$publicacion->id }}">

                                        <td>{{$publicacion->titulo }}</td>
                                        <td>{{$publicacion->created_at }}</td>
                                        <td>
                                            <button class="btn btn-xs btn-danger"
                                                    onclick="deletearticulo({{$publicacion->id }})"> <i class="fa fa-trash-o"></i> Borrar
                                            </button>
                                            <span>&nbsp;&nbsp;</span>


                                                <input class="hidden" value="{{$publicacion->id }}">
                                                <button class="btn btn-xs btn-warning"><a style="color:white" href="{{ URL::to('areaprivada/editar-publicacion/'.$publicacion->id ) }}"> <i class="fa fa-pencil-square-o"></i> Editar</a></button>

                                        </td>
                                        <td class="hidden">{{$publicacion->id }}</td>

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


<script>


    function deletearticulo(id) {

        var token = "{{ csrf_token()}}";


        Lobibox.confirm({

            title: 'Borrar artículo',

            msg: "¿Estas seguro que deseas eliminar el artículo?",
            callback: function ($this, type, ev) {
                if (type === 'yes') {

                    $('#articulo' + id).hide();

                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('delnoticia') }}",
                        data: {aux: id ,_token: token},
                        dataType: "html",
                        error: function () {
                            alert("error petición ajax");
                        },
                        success: function (data) {

                            Lobibox.notify('success', {
                                title: 'Borrado',
                                msg: 'Artículo borrado correctamente'
                            });

                        }
                    });

                } else if (type === 'no') {
                    Lobibox.notify('info', {
                        msg: 'Te has salvado por los pelos'
                    });
                }
            }
        });
    }
</script>