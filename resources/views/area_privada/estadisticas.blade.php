
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

                <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <h2>Altas</h2>
                    <span>12323 &nbsp;  <i class="fa fa-arrow-up" style="color:green">2.00%</i></span>
                </div>
                <!-- end widget -->

                <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <h2>Bajas</h2>
                    <span>12345&nbsp;  <i class="fa fa-arrow-down" style="color:red">1.2%</i></span>



                </div>


                <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <h2>Impresiones de anuncios</h2>
                    <span>12345&nbsp;  <i class="fa fa-long-arrow-right" style="color:darkorange">0.0%</i></span>

                </div>

                <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <h2>Clicks en anuncios</h2>
                    <span>12345&nbsp;  <i class="fa fa-arrow-down" style="color:red">1.2%</i></span>

                </div>

                <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">


                    <h2>Envio de emails</h2>
                    <span>12323 &nbsp;  <i class="fa fa-arrow-up faa-bounce animated" style="color:green">2.00%</i></span>

                </div>

                <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">


                    <h2>Anuncios contratados</h2>
                    <span>12323 &nbsp;  <i class="fa fa-arrow-up" style="color:green">2.00%</i></span>

                </div>

            </article>
            <!-- WIDGET END -->
        </div>
        <br>
        <br>
        <div class="row">
            <br>
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">


                <form method="get" action="{{ URL::route('generarestadisticas') }}">
                    <input type="text" name="fecha" id="date" required placeholder="Elige la fecha"> <br><br>
                    <select required name="rango">
                        <option value="1">Diaria</option>
                        <option value="2">Mensual</option>
                        <option value="3">Anual</option>
                    </select><br><br><br><br><br>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-file-excel-o"></i>   Generar estadísticas detalladas</button>
                </form>
            </article>
            <!-- WIDGET END -->
        </div>
    </section>

@endsection

@section('js')
    <script src="{{ asset('area_privada/datepickersandbox/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('area_privada/datepickersandbox/locales/bootstrap-datepicker.es.min.js') }}"></script>

@endsection

@section('ready')

    $('#date').datepicker({

    format: "yyyy-mm-dd",
    language: "es",
    multidate: false,
    autoclose: true,
    todayHighlight: true
    });

    $('#dt_basic_estadisticas').dataTable({
    "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
    "t" +
    "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
    "autoWidth": true,

    "preDrawCallback": function () {
    // Initialize the responsive datatables helper once.
    if (!responsiveHelper_dt_basic) {
    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic_estadisticas'), breakpointDefinition);
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

</script>