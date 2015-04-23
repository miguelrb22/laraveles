
@extends('area_privada.multifranquicias')

@section('main')

    <section id="widget-grid" class="">
        <div class="row">
                <br>
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                    <!-- boton nueva areaprivada -->
                    <a style="margin-bottom: 15px;" class="btn btn-success" id="nuevo-franquicia" href="{{ URL::route('nueva_alta') }}"><i class="fa fa-plus"></i> Alta Franquicia</a>
                    <!-- Widget ID (each widget will need unique ID)-->
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

                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-class="expand">Nombre Comercial</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> CIF </th>
                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Direccion</th>
                                        <th>Telefono</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i>email</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> web</th>
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
                                        <td>{{$franquicia->email_contacto }}</td>
                                        <td>{{$franquicia->web }}</td>
                                        <td class="hidden">{{$franquicia->id }}</td>
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

            pageSetUp();
            /* BASIC ;*/
            var responsiveHelper_dt_basic = undefined;


            var breakpointDefinition = {
                tablet : 1024,
                phone : 480
            };

            $('#dt_basic').dataTable({
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                "autoWidth" : true,

                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_dt_basic) {
                        responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                    }
                },
            "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
                "rowCallback" : function(nRow) {
                    responsiveHelper_dt_basic.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_dt_basic.respond();
                }
            });

            /* END BASIC */

            /* COLUMN FILTER  */


            // custom toolbar
            $("div.toolbar").html('<div class="text-right"><img src="{{ asset('area_privada/js/libs/jquery-ui-1.10.3.min.js') }}" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

            // Apply the filter
            $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {

                otable
                        .column( $(this).parent().index()+':visible' )
                        .search( this.value )
                        .draw();

            } );
            /* END COLUMN FILTER */
            /* Jquery varios */
            $("#titulo-tabla").html("Lista Franquicias");

            $('tr').dblclick(function(e){

            e.preventDefault();

            var id = $(this)[0].children[6].textContent;

            $.ajax({
            type: "POST",
            url: "{{ URL::route('email') }}",
            data: "id="+id,
            dataType: "html",
            error: function() {
            $('#loading').show();
            alert("error petición ajax");
            },
            success: function(data) {


            Lobibox.notify('success', {
            title: 'Enviado!',
            showClass: 'flipInX',
            delay: 4000,
            delayIndicator: false,

            position: 'bottom left',
            msg: 'Tu mensaje ha sido enviado con éxito. En breve nos pondremos en contacto con usted.'
            });



            });

@endsection