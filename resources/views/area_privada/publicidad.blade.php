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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">

                                                                @if ($paquetes[0]->carousel === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif

                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>

                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio1"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>

                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final1"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>



                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->banner_sup === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio2"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final2"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->destacados === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio3"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final3"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->sup_derecha === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->izquierda === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->especial_lc === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->especial_ex === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->especial_ba === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->especial_re === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

                                            <form id="checkout-form" class="smart-form" novalidate="novalidate">

                                                <fieldset>

                                                    <div class="row">
                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <label class="toggle">
                                                                @if ($paquetes[0]->destacado_categoria === 0)
                                                                    <input type='checkbox' name='checkbox-toggle'>
                                                                @else
                                                                    <input type='checkbox' name='checkbox-toggle'
                                                                           checked="checked">
                                                                @endif
                                                                <i data-swchon-text="ON" data-swchoff-text="OFF"></i>Activar/Desactivar</label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label class="input">Inicio:</label>
                                                            <label class="input"><i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="inicio" id="inicio" class="calendar"
                                                                       placeholder="Fecha Alta Ficha">
                                                            </label>
                                                        </section>
                                                        <section class="col col-xs-12 col-md-6 col-sm-6">
                                                            <label>Fin</label>
                                                            <label class="input"> <i
                                                                        class="icon-append fa fa-calendar"></i>
                                                                <input type="text" name="final" id="final" class="calendar"
                                                                       placeholder="Fecha Fin Ficha">
                                                            </label>
                                                        </section>


                                                        <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                            <div class="input input-file">
                                                                <span class="button"><input type="file" id="file"
                                                                                            name="file"
                                                                                            onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                        type="text" placeholder="Seleciona una imagen"
                                                                        readonly="">
                                                            </div>
                                                        </section>
                                                    </div>

                                                </fieldset>


                                                <footer>
                                                    <label><strong>Disponible el:</strong></label>
                                                    <label>fecha</label>


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

    $('#dashboard').removeClass("active")
    $('#publi').addClass("active");
    $('#gestion').addClass("active");
    $("#tc").html("Carousel");

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#inicio1').datepicker({
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
    $('#final1')[0].focus();
    }).data('datepicker');
    var checkout = $('#final1').datepicker({
    onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout.hide();
    }).data('datepicker');








@endsection

<script>


</script>

