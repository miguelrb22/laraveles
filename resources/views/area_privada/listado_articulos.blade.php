
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

                                <table id="dt_basic_inicio" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-class="expand">Título</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Fecha </th>
                                        <th data-hide="phone,tablet" > Acciones</th>
                                        <th id="id" class="hidden"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($publicaciones as $publicacion)

                                        <td>{{$publicacion->titulo }}</td>
                                        <td>{{$publicacion->created_at }}</td>
                                        <td><buton class="btn btn-xs btn-danger">Borrar</buton><span>&nbsp;&nbsp;</span><buton class="btn btn-xs btn-warning">Editar</buton></td>


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