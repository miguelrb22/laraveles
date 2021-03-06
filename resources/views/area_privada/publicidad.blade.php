@extends('area_privada.multifranquicias')

@section('main')

    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12  col-sm-12 col-lg-12">
                <br>
                <br>
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                    <section id="widget-grid" class="">

                        <!-- START ROW -->

                        <div class="row">
                            <?php
                            $ses = Session::get('franquicia');
                            $flagCarousel = false;

                            //Obtenemos las categorias de la franquicia seleccionada porque se necesita para activar paquete  destacados categoria
                            $categoriasFranquicia =  DB::table(DB::raw('franquicia_nom_subcategoria fns'))->select(DB::raw('fns.nombre,fns.subcategoria_id'))->where('fns.id', '=', $ses->id)->get(array('nombre'));
                            //Para saber cuantos carouseles hay activos, si están justos no se pueda dar de alta ningún carousel más
                            $tamCarousel = DB::table(DB::raw('tipo_publicidad tp'))->select(DB::raw('tp.recuadros'))->where('tp.id', '=', 1)->get();
                                //dd(intval($tamCarousel[0]->recuadros));
                            //Seleccionamos el total de franquicias activas en el carousel (Ojo, franquicias que pagan no de pega)
                            $carouselActivas = DB::table(DB::raw('publicidad p'))->select(DB::raw('count(p.id) as cantidad'))
                                                                                ->where('p.idtipo_publicidad', '=', 1)
                                                                                ->where('p.franquicia_id','<>', 1)    ->get();

                            if(intval($tamCarousel[0]->recuadros) > intval($carouselActivas[0]->cantidad))
                                $flagCarousel = true;
                            ?>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><h3>Franquicia: {{$ses->nombre_comercial}}</h3></div>


                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Carousel</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->


                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                                <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                    @if($flagCarousel)
                                                        <fieldset>
                                                            <div class="row">
                                                            <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                <label class="toggle">

                                                                    @if(!in_array(1,$paquetes))

                                                                        <input type='checkbox' name='checkbox-toggle' value="0" disabled>
                                                                    @else

                                                                        <input type='checkbox' name='checkbox-toggle' checked="checked" value="1" disabled>
                                                                    @endif

                                                                    <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado:</label>

                                                            </section>
                                                            <section class="col col-xs-12 col-md-6 col-sm-6">
                                                                <label class="input">Inicio:</label>
                                                                <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="inicio" id="inicio1" placeholder="Fecha Inicio" required>
                                                                </label>
                                                            </section>

                                                            <section class="col col-xs-12 col-md-6 col-sm-6">
                                                                <label>Fin</label>
                                                                <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="final" id="final1" placeholder="Fecha Fin" required>
                                                                </label>
                                                            </section>

                                                            <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                <div class="input input-file">
                                                                    <input type="file" id="file" name="url_imagen" required>
                                                                </div>
                                                            </section>

                                                            <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                <div class="input input-file">
                                                                   <input type="text" name="titulo_carousel" placeholder="Titulo carousel">
                                                                </div>
                                                            </section>

                                                            <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                <div class="input input-file">
                                                                    <input type="text" name="descripcion_carousel" placeholder="Texto carousel">
                                                                </div>
                                                            </section>

                                                            <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                <div class="input input-file">
                                                                    <input type="text" name="url_contenido" placeholder="Enlace a contenido" required>
                                                                </div>
                                                            </section>

                                                            <input type="text" value="1" name="idtipo_publicidad" hidden>
                                                            <input type="text" value="carousel" name="nombre_paquete" hidden>
                                                        </div>
                                                        </fieldset>
                                                    @else
                                                        <h3 class="text-justify">No se puede activar un nuevo carousel hay que añadir otro
                                                        o esperar a la fecha indicada.</h3>
                                                    @endif


                                                <footer class="carousel_footer">

                                                    <label><strong>1º en expirar:</strong></label>
                                                    <label class="fecha"></label>
                                                    <br>
                                                    <label><strong>Nº franquicias:</strong></label>
                                                    <label class="num"></label>
                                                    <br>
                                                    <label><strong>Nº recuadros:</strong></label>
                                                    <label class="recuadros"></label>

                                                    @if($flagCarousel)
                                                        <button type="submit" class="btn btn-primary">
                                                            Activar
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-primary" disabled>
                                                            Activar
                                                        </button>
                                                    @endif

                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Banner superior</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                {!! Form::Token() !!}
                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(2,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado:</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio2" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final2" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <input type="file" id="file" name="url_imagen" required>
                                                            </div>
                                                        </section>

                                                        <input type="text" value="2" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="banner_sup" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="banner_sup_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Destacados</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                {!! Form::Token() !!}
                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(8,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio3" placeholder="Fecha Inicio">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final3" placeholder="Fecha Fin">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <input type="file" id="file" name="url_imagen" required>
                                                            </div>
                                                        </section>


                                                        <input type="text" value="8" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="destacados" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="destacados_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                        </div>
                        <div class="row">

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Superior derecha</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if(!in_array(3,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio4" class="calendar" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final4" class="calendar" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <input type="file" id="file" name="url_imagen" required>
                                                            </div>
                                                        </section>

                                                        <input type="text" value="3" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="sup_derecha" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="sup_derecha_footer">
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <label><strong>1º en expirar:</strong></label>
                                                        <label class="fecha"></label>
                                                        <br>
                                                        <label><strong>Nº franquicias:</strong></label>
                                                        <label class="num"></label>
                                                        <br>
                                                        <label><strong>Nº recuadros:</strong></label>
                                                        <label class="recuadros"></label>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <button id="1" type="submit" class="btn btn-primary actualizar">
                                                            Activar
                                                        </button>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Izquierda</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(4,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio5" class="calendar" placeholder="Fecha Inicio">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final5" class="calendar" placeholder="Fecha Fin">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <input type="file" id="file" name="url_imagen" required>
                                                            </div>
                                                        </section>
                                                    </div>

                                                    <input type="text" value="4" name="idtipo_publicidad" hidden>
                                                    <input type="text" value="izquierda" name="nombre_paquete" hidden>

                                                </fieldset>


                                                <footer class="izquierda_footer">
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <label><strong>1º en expirar:</strong></label>
                                                        <label class="fecha"></label>
                                                        <br>
                                                        <label><strong>Nº franquicias:</strong></label>
                                                        <label class="num"></label>
                                                        <br>
                                                        <label><strong>Nº recuadros:</strong></label>
                                                        <label class="recuadros"></label>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <button id="1" type="submit" class="btn btn-primary actualizar">
                                                            Activar
                                                        </button>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Especiales low-cost</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(12,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio6" class="calendar" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final6" class="calendar" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>
                                                    </div>

                                                    <input type="text" value="12" name="idtipo_publicidad" hidden>
                                                    <input type="text" value="lowcost" name="nombre_paquete" hidden>

                                                </fieldset>


                                                <footer class="lowcost_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="">1</label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                        </div>
                        <div class="row">

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable"    >

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Especiales éxito</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                {!! Form::Token() !!}
                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(9,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado:</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio7" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final7" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>

                                                        <input type="text" value="9" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="exito" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="exito_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="">1</label>
                                                        </div>
                                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Especiales baratas</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                {!! Form::Token() !!}
                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(10,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado:</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio8" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final8" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>

                                                        <input type="text" value="10" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="baratas" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="baratas_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="">1</label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Especiales rentables</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                {!! Form::Token() !!}
                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(11,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado:</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio9" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final9" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>

                                                        <input type="text" value="11" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="rentables" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="rentables_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="">1</label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                        </div>
                        <div class="row">

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Destacados categoría</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(5,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio10" class="calendar"
                                                                       placeholder="Fecha Inicio">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final10" class="calendar"
                                                                       placeholder="Fecha Fin">
                                                            </label>
                                                        </section>

                                                        <section class="col col-xs-12 col-md-12 col-sm-12">
                                                            <select class="form-control" name="subcategoria" required>
                                                                <option value="" selected="">- ¿Para qué categoria? -</option>

                                                                @for($i=0; $i< count($categoriasFranquicia); $i++)
                                                                    <option value="{{$categoriasFranquicia[$i]->subcategoria_id}}">{{$categoriasFranquicia[$i]->nombre}}</option>
                                                                @endfor

                                                            </select>
                                                        </section>

                                                        <input type="text" value="5" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="destacado_categoria" name="nombre_paquete" hidden>


                                                    </div>

                                                </fieldset>


                                                <footer class="destacado_categoria_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Patrocinado buscador</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(6,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio11" id="inicio11" class="calendar" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final11" id="final11" class="calendar" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <input type="file" id="file" name="url_imagen" required>
                                                            </div>
                                                        </section>

                                                        <input type="text" value="6" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="patrocinado_b" name="nombre_paquete" hidden>

                                                    </div>

                                                </fieldset>


                                                <footer class="patrocinado_b_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Noticia</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(14,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio12" id="inicio12" class="calendar"
                                                                       placeholder="Fecha Inicio">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final12" id="final12" class="calendar"
                                                                       placeholder="Fecha Fin">
                                                            </label>
                                                        </section>
                                                    </div>


                                                    <input type="text" value="14" name="idtipo_publicidad" hidden>
                                                    <input type="text" value="noticias" name="nombre_paquete" hidden>

                                                </fieldset>

                                                <footer class="noticia_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº franquicias:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                        </div>


                        <div class="row">

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Entrevista</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(13,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio13" class="calendar" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final13" class="calendar" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>

                                                        <section class="col col-xs-12 col-md-6 col-sm-6">

                                                            <div class="input input-file">
                                                                <input type="text" name="cantidad" placeholder="Nº de entrevistas" required>
                                                            </div>

                                                        </section>

                                                        <input type="text" value="13" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="entrevista" name="nombre_paquete" hidden>


                                                    </div>

                                                </fieldset>


                                                <footer class="entrevista_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº entrevistas:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Noticias destacadas</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(7,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio14" class="calendar" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final14" class="calendar" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>

                                                        <section class="col col-xs-12 col-md-6 col-sm-6">

                                                            <div class="input input-file">
                                                                <input type="text" name="cantidad" placeholder="Nº de noticias" required>
                                                            </div>

                                                        </section>

                                                        <input type="text" value="7" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="noticia_des" name="nombre_paquete" hidden>


                                                    </div>

                                                </fieldset>


                                                <footer class="noticia_des_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº entrevistas:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                            <article class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 sortable-grid ui-sortable">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1"
                                     data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                                    <!-- widget options:
                                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                        data-widget-colorbutton="false"
                                        data-widget-editbutton="false"
                                        data-widget-togglebutton="false"
                                        data-widget-deletebutton="false"
                                        data-widget-fullscreenbutton="false"
                                        data-widget-custombutton="false"
                                        data-widget-collapsed="true"
                                        data-widget-sortable="false"

                                    -->
                                    <header role="heading">
                                        <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                       class="button-icon jarviswidget-toggle-btn"
                                                                                       rel="tooltip" title=""
                                                                                       data-placement="bottom"
                                                                                       data-original-title="Collapse"><i
                                                        class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                         class="button-icon jarviswidget-delete-btn"
                                                                                         rel="tooltip" title=""
                                                                                         data-placement="bottom"
                                                                                         data-original-title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </div>
                                        <h2 id="tc">Banner intermedio</h2>
                                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                    </header>
                                    <!-- widget div-->
                                    <div role="content">

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding">

                                            <form class="smart-form actualizar_paquete" accept-charset="UTF-8" enctype="multipart/form-data">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if (!in_array(15,$paquetes))
                                                                    <input type='checkbox' name='checkbox-toggle' disabled>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle' checked="checked" disabled>
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Estado</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio15" class="calendar" placeholder="Fecha Inicio" required>
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final15" class="calendar" placeholder="Fecha Fin" required>
                                                            </label>
                                                        </section>

                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <input type="file" id="file" name="url_imagen" required="">
                                                            </div>
                                                        </section>

                                                        <input type="text" value="15" name="idtipo_publicidad" hidden>
                                                        <input type="text" value="banner_int" name="nombre_paquete" hidden>


                                                    </div>

                                                </fieldset>


                                                <footer class="banner_int_footer">
                                                    <div row>
                                                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                            <label><strong>1º en expirar:</strong></label>
                                                            <label class="fecha"></label>
                                                            <br>
                                                            <label><strong>Nº entrevistas:</strong></label>
                                                            <label class="num"></label>
                                                            <br>
                                                            <label><strong>Nº recuadros:</strong></label>
                                                            <label class="recuadros"></label>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                            <button id="1" type="submit" class="btn btn-primary actualizar">
                                                                Activar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </form>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>
                            </article>

                        </div>

                        <!-- END ROW -->

                    </section>
                </article>


            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('area_privada/js/plugin/datepicker_mio/js/bootstrap-datepicker.js')}}"></script>
@endsection

@section('ready')

    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $.ajax({
    type: "POST",
    url: "{{ URL::route('fechasDisponibles') }}",
    processData: false,
    contentType: false,
    dataType: 'json',
    error: function (XMLHttpRequest,cadena) {

    /*Lobibox.notify('error', {
    title: 'No se ha podido crear la franquicia',
    showClass: 'flipInX',
    delay: 3000,
    delayIndicator: false,

    position: 'bottom left',
    msg: 'Compruebe la conexión a internet'
    });*/
    },
    success: function (data){


    for(var i = 0; i < data.length ; i++)
    {
    $("."+data[i][0]+"_footer").find('.fecha').html(data[i][1]);
    $("."+data[i][0]+"_footer").find('.num').html(data[i][2]);
    $("."+data[i][0]+"_footer").find('.recuadros').html(data[i][3]);
    }

    /*Lobibox.notify('success', {
    title: 'Franquicia creada con éxito',
    showClass: 'flipInX',
    delay: 3000,
    delayIndicator: false,

    position: 'bottom left',
    msg: 'Mas franquicias, mas dinero!'
    });*/
    }

    });

    $('#dashboard').removeClass("active")
    $('#publi').addClass("active");
    $('#gestion').addClass("active");
    $("#tc").html("Carousel");

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);


    var checkin1 = $('#inicio1').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout1.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout1.setValue(newDate);
    }
    checkin1.hide();
    $('#final1')[0].focus();
    }).data('datepicker');
    var checkout1 = $('#final1').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin1.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout1.hide();
    }).data('datepicker');



    var checkin = $('#inicio2').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
    }
    checkin.hide();
    $('#final2')[0].focus();
    }).data('datepicker');
    var checkout = $('#final2').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout.hide();
    }).data('datepicker');


    var checkin3 = $('#inicio3').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout3.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout3.setValue(newDate);
    }
    checkin3.hide();
    $('#final3')[0].focus();
    }).data('datepicker');
    var checkout3 = $('#final3').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin3.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout3.hide();
    }).data('datepicker');


    var checkin4 = $('#inicio4').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout4.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout4.setValue(newDate);
    }
    checkin4.hide();
    $('#final4')[0].focus();
    }).data('datepicker');
    var checkout4 = $('#final4').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin4.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout4.hide();
    }).data('datepicker');


    var checkin5 = $('#inicio5').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout5.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout5.setValue(newDate);
    }
    checkin5.hide();
    $('#final5')[0].focus();
    }).data('datepicker');
    var checkout5 = $('#final5').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin5.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout5.hide();
    }).data('datepicker');


    var checkin6 = $('#inicio6').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout6.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout6.setValue(newDate);
    }
    checkin6.hide();
    $('#final6')[0].focus();
    }).data('datepicker');
    var checkout6 = $('#final6').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin6.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout6.hide();
    }).data('datepicker');


    var checkin7 = $('#inicio7').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout7.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout7.setValue(newDate);
    }
    checkin7.hide();
    $('#final7')[0].focus();
    }).data('datepicker');
    var checkout7 = $('#final7').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin7.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout7.hide();
    }).data('datepicker');


    var checkin8 = $('#inicio8').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout8.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout8.setValue(newDate);
    }
    checkin8.hide();
    $('#final8')[0].focus();
    }).data('datepicker');
    var checkout8 = $('#final8').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin8.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout8.hide();
    }).data('datepicker');


    var checkin9 = $('#inicio9').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout9.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout9.setValue(newDate);
    }
    checkin9.hide();
    $('#final9')[0].focus();
    }).data('datepicker');
    var checkout9 = $('#final9').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin9.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout9.hide();
    }).data('datepicker');


    var checkin10 = $('#inicio10').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout10.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout10.setValue(newDate);
    }
    checkin10.hide();
    $('#final10')[0].focus();
    }).data('datepicker');
    var checkout10 = $('#final10').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin10.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout10.hide();
    }).data('datepicker');


    var checkin11 = $('#inicio11').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout11.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout11.setValue(newDate);
    }
    checkin11.hide();
    $('#final11')[0].focus();
    }).data('datepicker');
    var checkout11 = $('#final11').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin11.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout11.hide();
    }).data('datepicker');


    var checkin12 = $('#inicio12').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout12.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout12.setValue(newDate);
    }
    checkin12.hide();
    $('#final12')[0].focus();
    }).data('datepicker');
    var checkout12 = $('#final12').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin12.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout12.hide();
    }).data('datepicker');


    var checkin13 = $('#inicio13').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout13.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout13.setValue(newDate);
    }
    checkin13.hide();
    $('#final13')[0].focus();
    }).data('datepicker');
    var checkout13 = $('#final13').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin13.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout13.hide();
    }).data('datepicker');


    var checkin14 = $('#inicio14').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout14.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout14.setValue(newDate);
    }
    checkin14.hide();
    $('#final14')[0].focus();
    }).data('datepicker');
    var checkout14 = $('#final14').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin14.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout14.hide();
    }).data('datepicker');


    var checkin15 = $('#inicio15').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout15.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout15.setValue(newDate);
    }
    checkin15.hide();
    $('#final15')[0].focus();
    }).data('datepicker');
    var checkout15 = $('#final15').datepicker({
    format: 'dd-mm-yyyy',
    onRender: function(date) {
    return date.valueOf() <= checkin14.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout15.hide();
    }).data('datepicker');


    function fileSelect(id, e){
    console.log(e.target.files[0].name);
    }

@endsection

