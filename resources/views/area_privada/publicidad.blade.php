@extends('area_privada.multifranquicias')

@section('main')


    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12  col-sm-12 col-lg-12">
                <br>
                <br>
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
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
                        <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Tipos publicidad </h2>

                            <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                        <!-- widget div-->
                        <div role="content">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <form class="smart-form">
                                    <header>
                                        Selecciona los complementos a activar para la franquicia:
                                    </header>
                                    <fieldset>
                                        <section class="col col-xs-4 col-md-4 col-sm-4 col-lg-4">
                                            <label class="label text-center"><h2>Parte centro:</h2></label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle" checked="checked">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Carrousel 1</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Carrousel 2</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Carrousel 3</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Banner superior</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Franquicia de éxito
                                            </label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Franquicia rentables
                                            </label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Franquicia baratas
                                            </label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Franquicia low cost
                                            </label>
                                        </section>
                                        <section class="col col-xs-4 col-md-4 col-sm-4 col-lg-4">
                                            <label class="label text-center"><h2>Parte izquierda:</h2></label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle" checked="checked">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Superios izquierda</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Intermedio izquierda</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Inferior izquierda</label>
                                        </section>
                                        <section class="col col-xs-4 col-md-4 col-sm-4 col-lg-4">
                                            <label class="label text-center"><h2>Parte derecha:</h2></label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle" checked="checked">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Superior derecha</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Intermedio derecha</label>
                                            <label class="toggle">
                                                <input type="checkbox" name="checkbox-toggle">
                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Inferior derecha</label>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <button type="submit" class="btn btn-primary">
                                            Actualizar
                                        </button>
                                    </footer>
                                </form>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->
                </article>


            </div>
        </div>
    </section>
    @endsection

