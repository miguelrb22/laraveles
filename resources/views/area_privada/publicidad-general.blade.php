@extends('area_privada.multifranquicias')

<style>
    .fa-mal {
        margin-top: 30%;
    }

    .lobibox-confirm{
        margin-top: -10%;
    }
</style>
@section('main')

    <section id="widget-grid" class="">
        <div class="row">
            <br>
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                <!-- boton nueva areaprivada -->

                <br>

                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

                    <header>
                        <span class="widget-icon"> <i class="fa fa-table fa-mal"></i> </span>

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
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($publi as $p)
                                    <tr id="articulo{{$p->id}}">

                                        <td>{{ $p->nombre_comercial }}</td>
                                        <td>{{ $p->descripcion}}</td>

                                        <td>

                                            <span class="hidden">{{$p->inicio}}</span>

                                            <input class="date" id="inicio" type="text" value="{{$p->inicio}}" readonly>
                                        </td>
                                        <td>
                                            <span class="hidden">{{$p->final}}</span>

                                            <input class="date" id="fin" type="text" value="{{$p->final}}" readonly>
                                        </td>
                                        <td>

                                            <?php

                                            $hoy = time();
                                            $hoy = date('Y-m-d', $hoy);

                                            $inicio =$p->inicio;
                                            $fin = $p->final;

                                            if($inicio > $fin || $fin < $inicio ) echo "<span style='color:#000000; font-weight: bold''>Error intervalo</span>";
                                            else if ($hoy < $inicio) echo "<span style='color:darkorange; font-weight: bold'>Esperando</span>";
                                            else if ($fin < $hoy) echo "<span style='color:#ff0000; font-weight: bold''>Caducado</span>";
                                            else  echo "<span style='color:green; font-weight: bold''>Activado</span>";


                                            ?>

                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-danger"
                                                    onclick="borrar({{$p->id}})"><i class="fa fa-trash-o"></i> Borrar
                                            </button>

                                            <input id="id" type="hidden" value="{{$p->id}}" readonly>


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

    <div class="row">

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button id="borrartodo" class="btn btn-danger"  onclick="borrartodo()"><i class="fa fa-trash-o"></i> Limpiar caducadas <i class="fa fa-warning"></i></button>
        </div>

    </div>

    <div class="row">

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Recuadros variables</h2>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Izquierda: <span> &nbsp;&nbsp;&nbsp;  </span></label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="izquierda" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Derecha:</label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="derecha" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Destacados:</label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="destacados" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Carousel:</label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="carousel" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Noticias destacadas:</label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="noticia_des" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Entrevistas:</label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="entrevista" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="inline-form recuadros">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-3 col-md-2 col-sm-2 col-lg-2">
                    <label>Noticias general:</label>
                </div>
                <div class="col-xs-9 col-md-6 col-sm-6-col-lg-6">
                    <input name="noticias" type="number" width="20" onkeypress="return isNumberKey(event)"/>
                    <button type="submit" class="btn btn-success btn-xs" style="margin-top: -3px;">Cambiar</button>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('area_privada/datepickersandbox/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('area_privada/datepickersandbox/locales/bootstrap-datepicker.es.min.js') }}"></script>

    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection

<script>

    function borrar(id) {
        var token = "{{ csrf_token()}}";


        Lobibox.confirm({

            title: 'Borrar publicidad',

            msg: "¿Estas seguro que deseas eliminar este paquete?",
            callback: function ($this, type, ev) {
                if (type === 'yes') {

                    $('#articulo' + id).hide();

                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('borrar-publicidad-general') }}",
                        data: {aux: id, _token: token},
                        dataType: "html",
                        error: function () {
                            alert("error petición ajax");
                        },
                        success: function (data) {

                            Lobibox.notify('success', {
                                title: 'Borrado',
                                msg: 'Borrado correctamente'
                            });

                        }
                    });

                } else if (type === 'no') {
                    Lobibox.notify('info', {
                        msg: 'Una vez borrado no se puede recuperar, lleve cuidado'
                    });
                }
            }
        });
    }

</script>

<script>

    function borrartodo(){

        var token = "{{ csrf_token()}}";

        Lobibox.confirm({

            title: 'Borrar todo',

            msg: "Vas a eliminar todas las publicidades caducadas",
            callback: function ($this, type, ev) {
                if (type === 'yes') {

                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('borrar-publicidad-general-todo') }}",
                        data: { _token: token},
                        dataType: "html",
                        error: function () {
                            alert("error petición ajax");
                        },
                        success: function (data) {

                            Lobibox.notify('success', {
                                title: 'Borrado',
                                msg: 'Borrado correctamente'
                            });



                            location.reload();



                        }
                    });

                } else if (type === 'no') {
                    Lobibox.notify('info', {
                        msg: 'Una vez borrado no se puede recuperar, lleve cuidado'
                    });
                }
            }
        });
    }
</script>
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
    "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    "rowCallback": function (nRow) {
    responsiveHelper_dt_basic.createExpandIcon(nRow);
    },
    "drawCallback": function (oSettings) {
    responsiveHelper_dt_basic.respond();
    }
    });



    $('.date').datepicker({

    format: "yyyy-mm-dd",
    language: "es",
    multidate: false,
    autoclose: true,
    todayHighlight: true
    });


    $('body').on('focus',".date", function(){
        $(this).datepicker({

        format: "yyyy-mm-dd",
        language: "es",
        multidate: false,
        autoclose: true,
        todayHighlight: true
        });
    });

@endsection