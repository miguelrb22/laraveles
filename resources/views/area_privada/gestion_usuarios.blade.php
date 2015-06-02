@extends('area_privada.multifranquicias')


@section('main')
    <section id="widget-grid" class="">
        <div class="row">
            <br>

            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!--<div class="well well-sm well-light">-->
                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false"
                     data-widget-custombutton="false" role="widget" style="">

                    <header role="heading">
                        <div class="widget-toolbar" role="menu"><a data-toggle="dropdown"
                                                                   class="dropdown-toggle color-box selector"
                                                                   href="javascript:void(0);"></a>
                            <ul class="dropdown-menu arrow-box-up-right color-select pull-right">
                                <li><span class="bg-color-green" data-widget-setstyle="jarviswidget-color-green"
                                          rel="tooltip" data-placement="left" data-original-title="Green Grass"></span>
                                </li>
                                <li><span class="bg-color-greenDark" data-widget-setstyle="jarviswidget-color-greenDark"
                                          rel="tooltip" data-placement="top" data-original-title="Dark Green"></span>
                                </li>
                                <li><span class="bg-color-greenLight"
                                          data-widget-setstyle="jarviswidget-color-greenLight" rel="tooltip"
                                          data-placement="top" data-original-title="Light Green"></span></li>
                                <li><span class="bg-color-purple" data-widget-setstyle="jarviswidget-color-purple"
                                          rel="tooltip" data-placement="top" data-original-title="Purple"></span></li>
                                <li><span class="bg-color-magenta" data-widget-setstyle="jarviswidget-color-magenta"
                                          rel="tooltip" data-placement="top" data-original-title="Magenta"></span></li>
                                <li><span class="bg-color-pink" data-widget-setstyle="jarviswidget-color-pink"
                                          rel="tooltip" data-placement="right" data-original-title="Pink"></span></li>
                                <li><span class="bg-color-pinkDark" data-widget-setstyle="jarviswidget-color-pinkDark"
                                          rel="tooltip" data-placement="left" data-original-title="Fade Pink"></span>
                                </li>
                                <li><span class="bg-color-blueLight" data-widget-setstyle="jarviswidget-color-blueLight"
                                          rel="tooltip" data-placement="top" data-original-title="Light Blue"></span>
                                </li>
                                <li><span class="bg-color-teal" data-widget-setstyle="jarviswidget-color-teal"
                                          rel="tooltip" data-placement="top" data-original-title="Teal"></span></li>
                                <li><span class="bg-color-blue" data-widget-setstyle="jarviswidget-color-blue"
                                          rel="tooltip" data-placement="top" data-original-title="Ocean Blue"></span>
                                </li>
                                <li><span class="bg-color-blueDark" data-widget-setstyle="jarviswidget-color-blueDark"
                                          rel="tooltip" data-placement="top" data-original-title="Night Sky"></span>
                                </li>
                                <li><span class="bg-color-darken" data-widget-setstyle="jarviswidget-color-darken"
                                          rel="tooltip" data-placement="right" data-original-title="Night"></span></li>
                                <li><span class="bg-color-yellow" data-widget-setstyle="jarviswidget-color-yellow"
                                          rel="tooltip" data-placement="left" data-original-title="Day Light"></span>
                                </li>
                                <li><span class="bg-color-orange" data-widget-setstyle="jarviswidget-color-orange"
                                          rel="tooltip" data-placement="bottom" data-original-title="Orange"></span>
                                </li>
                                <li><span class="bg-color-orangeDark"
                                          data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip"
                                          data-placement="bottom" data-original-title="Dark Orange"></span></li>
                                <li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red"
                                          rel="tooltip" data-placement="bottom" data-original-title="Red Rose"></span>
                                </li>
                                <li><span class="bg-color-redLight" data-widget-setstyle="jarviswidget-color-redLight"
                                          rel="tooltip" data-placement="bottom" data-original-title="Light Red"></span>
                                </li>
                                <li><span class="bg-color-white" data-widget-setstyle="jarviswidget-color-white"
                                          rel="tooltip" data-placement="right" data-original-title="Purity"></span></li>
                                <li><a href="javascript:void(0);" class="jarviswidget-remove-colors"
                                       data-widget-setstyle="" rel="tooltip" data-placement="bottom"
                                       data-original-title="Reset widget color to default">Remove</a></li>
                            </ul>
                        </div>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>

                        <h2>Nuevo usuario</h2>

                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                    <!-- widget div-->

                    <div class="row">
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <form id="nuevo-usuario" class="smart-form col-xs-12 col-md-12 col-sm-12"
                                  novalidate="novalidate">
                                <div class="row" style="margin:0px">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                    <div id="datos_personales" class="col-xs-12 col-md-6 col-sm-6">
                                        <fieldset>
                                            <div class="row">
                                                <section class="col col-xs-12 col-md-12 col-sm-12">
                                                    <label>Usuario</label>
                                                    <label class="input"><i class="icon-prepend fa fa-user"></i>
                                                        <input type="text" name="user" placeholder="Nombre de usuario">
                                                    </label>
                                                </section>


                                            </div>
                                            <div class="row">
                                                <section class="col col-xs-12 col-md-12 col-sm-12">
                                                    <label>Contraseña</label>
                                                    <label class="input"><i class="icon-prepend fa fa-key"></i>
                                                        <input type="text" name="pass" placeholder="Cotraseña">
                                                    </label>
                                                </section>


                                            </div>

                                        </fieldset>
                                    </div>

                                </div>

                                <footer>
                                    <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Crear usuario&nbsp;&nbsp;</button>
                                </footer>
                            </form>

                        </div>
                        <!-- end widget content -->

                        <!--</div>-->

                        <!-- end widget div -->
                    </div>

                </div>
                <!--</div> <!-- END WELL -->

            </article>
        </div>
    </section>

@endsection

@section('ready')

    $('#dashboard').removeClass("active")
    $('#categorias').addClass("active");

@endsection