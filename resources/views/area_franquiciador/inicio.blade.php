@extends('area_franquiciador.multifranquicias')

@section('main')

    <div class="row">

        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Elige la franquicia a consultar</h1>
            </br>
        </div>
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <form id="checkout-form" class="smart-form col-xs-12 col-md-12 col-sm-12" novalidate="novalidate">


                <div class="row">
                    <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">

                        <div class="" style="margin-top:5px">
                            <label class="radio">
                                <input class="form-control" type="radio" name="perfil" value="1">
                                <i></i>Franquicia numero 1</label>
                            <label class="radio">
                                <input  class="form-control" type="radio" name="perfil" value="0">
                                <i></i>Franquicia numero 2</label>
                        </div>
                    </section>
                </div>

                <div class="row">
                    <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">

                        <button type="submit" class="btn btn-success btn-sm">Cargar franquicia</button>
                    </section>
                </div>

            </form>

        </div>




    </div>
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
    $("#titulo-tabla").html("Cargar franquicia");

@endsection