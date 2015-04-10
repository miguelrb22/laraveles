@extends('area_privada.multifranquicias')

@section('main')


    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                <br/>
                <br/>
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!--<div class="well well-sm well-light">-->
                    <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                            role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab"
                                tabindex="0" aria-controls="tabs-a" aria-labelledby="ui-id-25" aria-selected="true">
                                <a href="#tabs-a" class="ui-tabs-anchor" role="presentation" tabindex="-1"
                                   id="ui-id-25">Datos franquicia</a>
                            </li>
                        </ul>
                        <div id="tabs-a" aria-labelledby="ui-id-25"
                             class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel"
                             aria-expanded="true" aria-hidden="false" style="display: block;">
                            <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false"
                                 data-widget-custombutton="false" role="widget" style="">

                                <header role="heading">
                                    <div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);"
                                                                                   class="button-icon jarviswidget-toggle-btn"
                                                                                   rel="tooltip" title=""
                                                                                   data-placement="bottom"
                                                                                   data-original-title="Collapse"><i
                                                    class="fa fa-minus "></i></a> <a href="javascript:void(0);"
                                                                                     class="button-icon jarviswidget-fullscreen-btn"
                                                                                     rel="tooltip" title=""
                                                                                     data-placement="bottom"
                                                                                     data-original-title="Fullscreen"><i
                                                    class="fa fa-expand "></i></a> <a href="javascript:void(0);"
                                                                                      class="button-icon jarviswidget-delete-btn"
                                                                                      rel="tooltip" title=""
                                                                                      data-placement="bottom"
                                                                                      data-original-title="Delete"><i
                                                    class="fa fa-times"></i></a></div>
                                    <div class="widget-toolbar" role="menu"><a data-toggle="dropdown"
                                                                               class="dropdown-toggle color-box selector"
                                                                               href="javascript:void(0);"></a>
                                        <ul class="dropdown-menu arrow-box-up-right color-select pull-right">
                                            <li><span class="bg-color-green"
                                                      data-widget-setstyle="jarviswidget-color-green" rel="tooltip"
                                                      data-placement="left" data-original-title="Green Grass"></span>
                                            </li>
                                            <li><span class="bg-color-greenDark"
                                                      data-widget-setstyle="jarviswidget-color-greenDark" rel="tooltip"
                                                      data-placement="top" data-original-title="Dark Green"></span></li>
                                            <li><span class="bg-color-greenLight"
                                                      data-widget-setstyle="jarviswidget-color-greenLight" rel="tooltip"
                                                      data-placement="top" data-original-title="Light Green"></span>
                                            </li>
                                            <li><span class="bg-color-purple"
                                                      data-widget-setstyle="jarviswidget-color-purple" rel="tooltip"
                                                      data-placement="top" data-original-title="Purple"></span></li>
                                            <li><span class="bg-color-magenta"
                                                      data-widget-setstyle="jarviswidget-color-magenta" rel="tooltip"
                                                      data-placement="top" data-original-title="Magenta"></span></li>
                                            <li><span class="bg-color-pink"
                                                      data-widget-setstyle="jarviswidget-color-pink" rel="tooltip"
                                                      data-placement="right" data-original-title="Pink"></span></li>
                                            <li><span class="bg-color-pinkDark"
                                                      data-widget-setstyle="jarviswidget-color-pinkDark" rel="tooltip"
                                                      data-placement="left" data-original-title="Fade Pink"></span></li>
                                            <li><span class="bg-color-blueLight"
                                                      data-widget-setstyle="jarviswidget-color-blueLight" rel="tooltip"
                                                      data-placement="top" data-original-title="Light Blue"></span></li>
                                            <li><span class="bg-color-teal"
                                                      data-widget-setstyle="jarviswidget-color-teal" rel="tooltip"
                                                      data-placement="top" data-original-title="Teal"></span></li>
                                            <li><span class="bg-color-blue"
                                                      data-widget-setstyle="jarviswidget-color-blue" rel="tooltip"
                                                      data-placement="top" data-original-title="Ocean Blue"></span></li>
                                            <li><span class="bg-color-blueDark"
                                                      data-widget-setstyle="jarviswidget-color-blueDark" rel="tooltip"
                                                      data-placement="top" data-original-title="Night Sky"></span></li>
                                            <li><span class="bg-color-darken"
                                                      data-widget-setstyle="jarviswidget-color-darken" rel="tooltip"
                                                      data-placement="right" data-original-title="Night"></span></li>
                                            <li><span class="bg-color-yellow"
                                                      data-widget-setstyle="jarviswidget-color-yellow" rel="tooltip"
                                                      data-placement="left" data-original-title="Day Light"></span></li>
                                            <li><span class="bg-color-orange"
                                                      data-widget-setstyle="jarviswidget-color-orange" rel="tooltip"
                                                      data-placement="bottom" data-original-title="Orange"></span></li>
                                            <li><span class="bg-color-orangeDark"
                                                      data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip"
                                                      data-placement="bottom" data-original-title="Dark Orange"></span>
                                            </li>
                                            <li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red"
                                                      rel="tooltip" data-placement="bottom"
                                                      data-original-title="Red Rose"></span></li>
                                            <li><span class="bg-color-redLight"
                                                      data-widget-setstyle="jarviswidget-color-redLight" rel="tooltip"
                                                      data-placement="bottom" data-original-title="Light Red"></span>
                                            </li>
                                            <li><span class="bg-color-white"
                                                      data-widget-setstyle="jarviswidget-color-white" rel="tooltip"
                                                      data-placement="right" data-original-title="Purity"></span></li>
                                            <li><a href="javascript:void(0);" class="jarviswidget-remove-colors"
                                                   data-widget-setstyle="" rel="tooltip" data-placement="bottom"
                                                   data-original-title="Reset widget color to default">Remove</a></li>
                                        </ul>
                                    </div>
                                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>

                                    <h2>Nueva Franquicia: </h2>

                                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                </header>

                                <!-- widget div-->

                                <div class="row">
                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body no-padding">
                                        <!-- comienzo form -->
                                        <form id="form-alta" class="smart-form col-xs-12 col-md-12 col-sm-12"
                                              novalidate="novalidate">
                                            <div class="row" style="margin:0px">
                                                <h3 class="text-center"><span> Datos Públicos</span></h3>

                                                <div id="datos_publicos" class="col-xs-12 col-md-6 col-sm-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos ficha franquicia:</h5>
                                                        <br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6 has-feedback">
                                                                    <label>Nombre Comercial:</label>
                                                                    <label class="input"><i
                                                                                class="icon-prepend fa fa-user"></i>
                                                                        <input id="NomBre" type="text" name="fname" class="form-control" placeholder="Nombre">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6 has-feedback">
                                                                    <label>Ciudad:</label>
                                                                    <label class="input"><i
                                                                                class="icon-prepend fa fa-user"></i>
                                                                        <input id="ciudad" type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Dirección:</label>
                                                                    <label for="address2" class="input">
                                                                        <input type="text" name="direccion" id="Direccion" class="form-control" placeholder="Dirección">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Codigo Postal:</label>
                                                                    <label class="input"><i
                                                                                class="icon-prepend fa fa-user"></i>
                                                                        <input id="cp" type="text" name="cp" class="form-control" placeholder="Código Postal">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Web:</label>
                                                                    <label class="input"><i
                                                                                class="icon-prepend fa fa-user"></i>
                                                                        <input id="web" type="text" name="web" class="form-control"  placeholder="Página Web">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12"
                                                                         style="margin-bottom: 12px">
                                                                    <label>Descripción:</label>
                                                                    <label class="textarea textarea-resizable">
                                                                        <textarea class="custom-scroll" rows="1"
                                                                                  id="fdescripcion"
                                                                                  name="fdescripcion"></textarea>
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                <label class="label">Logo:</label>

                                                                <div class="input input-file">
                                                                    <span class="button"><input type="file" id="file"
                                                                                                name="logo"
                                                                                                onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input
                                                                            type="text"
                                                                            placeholder="Seleciona una imagen"
                                                                            readonly="">
                                                                </div>
                                                            </section>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <br>
                                                        <h5>Datos economicos:</h5>
                                                        <br>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Inversión:</label>
                                                                    <label class="input">
                                                                        <input id="inversion" type="text" name="inversion" class="form-control" placeholder="Inversión">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Presencia Internacional:</label>
                                                                    <label class="input">
                                                                        <input id="presencia" type="text" name="presencia" class="form-control" placeholder="Presencia Internacional">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Royalti:</label>
                                                                    <label class="input">
                                                                        <input id="royalti" type="text" name="royalti" class="form-control" placeholder="Royalti">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Canon Entrada:</label>
                                                                    <label class="input">
                                                                        <input id="entrada" type="text" name="entrada" class="form-control" placeholder="Canon Entrada">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Canon Publicitario:</label>
                                                                    <label class="input">
                                                                        <input id="cpublicitario" type="text" name="cpublicitario" class="form-control" placeholder="Canon Publicitario">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row" style="margin-bottom: -2px;">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Duración Contrato:</label>
                                                                    <label class="input">
                                                                        <input id="contrato" type="text" name="contrato" class="form-control" placeholder="Duración Contrato">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Amortización:</label>
                                                                    <label class="input">
                                                                        <input id="amortizacion" type="text" name="amortizacion" class="form-control" placeholder="Amortización">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div id="datos_publicos_1" class="col-xs-12 col-md-6 col-sm-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos del local y negocio:</h5>
                                                        <br>
                                                        <div class="from-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Requisítos del Local:</label>
                                                                    <label class="input">
                                                                        <input id="requisitos" type="text" name="requisitos" class="form-control" placeholder="Requisítos del Local">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Locales Propios:</label>
                                                                    <label class="input">
                                                                        <input id="localesp" type="text" name="localesp" class="form-control" placeholder="Locales Propios">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Locales Franquiciados:</label>
                                                                    <label class="input">
                                                                        <input id="localesf" type="text" name="localesf" class="form-control" placeholder="Locales Franquiciados">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Dimensiones del Local:</label>
                                                                    <label class="input">
                                                                        <input id="dimesion" type="text" name="dimension" class="form-control" placeholder="Dimensiones del Local">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Población Mínima:</label>
                                                                    <label class="input">
                                                                        <input id="poblacion" type="text" name="poblacion" class="form-control" placeholder="Poblacion Mínima">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Superficie Mínima del Local:</label>
                                                                    <label class="input">
                                                                        <input id="dimesion" type="text" name="superficie" class="form-control" placeholder="Superficie Mínima">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-4 col-sm-4 col-lg-4">
                                                                    <label>Zona de Exlusividad:</label>

                                                                    <div class="inline-group" style="margin-top:5px">
                                                                        <label class="radio">
                                                                            <input id="sexo_h" class="form-control" type="radio" name="exclusividad" value="1">
                                                                            <i></i>Si</label>
                                                                        <label class="radio">
                                                                            <input id="sexo_m" class="form-control" type="radio" name="exclusividad" value="0">
                                                                            <i></i>No</label>
                                                                    </div>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-8 col-sm-8 col-lg-8">
                                                                    <label>Perfil del Franquiciado:</label>
                                                                    <label class="input">
                                                                        <input id="perfil" type="text" name="pefil" class="form-control" placeholder="Perfil del Franquiciado">
                                                                    </label>
                                                                </section>
                                                            </div></div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Zonas Preferentes:</label>
                                                                    <label class="input">
                                                                        <input id="perfil" type="text" name="preferente" class="form-control" placeholder="Zonas Preferentes">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <br>
                                                        <h5>Organización y expansión:</h5>
                                                        <br>
                                                        <div class="from-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Año de Creación:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="creacion" placeholder="Año de Creación" data-mask="2099" class="form-control">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Inicio de Expansión:</label>
                                                                    <label class="input">
                                                                        <input id="expasion" type="text" name="expansion" class="form-control" splaceholder="Incio de Expansión">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Red de España:</label>
                                                                    <label class="input">
                                                                        <i class="icon-prepend fa fa-question-circle"></i>
                                                                        <input type="text" class="form-control" name="red" placeholder="Propios y Franquiciados">
                                                                        <b class="tooltip tooltip-top-left">
                                                                            <i class="fa fa-warning txt-color-teal"></i>
                                                                            Nº de establecimientos propios y fraquiciados.
                                                                            (Ejem: 3 propios y 5 franquiciados). </b>
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nº de Países:</label>
                                                                    <label class="input">
                                                                        <input id="paises" type="text" name="paises" class="form-control" placeholder="Nº de Paises">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nacionalidad:</label>
                                                                    <label class="input">
                                                                        <input id="nacionalidad" type="text" name="nacionalidad" class="form-control" placeholder="Nacionalidad">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Red en Extranjero:</label>

                                                                    <div class="inline-group" style="margin-top:5px">
                                                                        <label class="radio">
                                                                            <input id="extranjero_s" class="form-control"
                                                                                   type="radio" name="extranjero" value="1">
                                                                            <i></i>Si</label>
                                                                        <label class="radio">
                                                                            <input id="extranjero_n" class="form-control"
                                                                                   type="radio" name="extranjero" value="0">
                                                                            <i></i>No</label>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row" style="margin:0px">
                                                <h3 class="text-center"><span>Datos Privados</span></h3>

                                                <div id="datos_publicos" class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos Franquicia:</h5>
                                                        <br>
                                                        <div class="from-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nombre:</label>
                                                                    <label class="input">
                                                                        <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Nombre">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>CIF:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="cif" id="cif" placeholder="CIF" class="form-control">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>

                                                        <div class="from-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label class="input">Fecha Alta Ficha:</label>
                                                                    <label class="input"><i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="inicio" id="inicio" class="hasDatepicker form-control" placeholder="Fecha Alta Ficha">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Fecha Vencimiento Ficha:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="final" id="final" class="hasDatepicker form-control" placeholder="Fecha Fin Ficha">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="from-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Razón Social:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="razon" id="razon" class="form-control" placeholder="Razón Social">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Categoria especial:</label>
                                                                    <label class="select">
                                                                        <select name="categoria" class="form-control">
                                                                            <option value="1" selected="">- Selecciona categoría especial - </option>
                                                                            <option value="2">Franquicias de éxito</option>
                                                                            <option value="3">Fanquicias rentables</option>
                                                                            <option value="4">Fanquicias low cost</option>
                                                                            <option value="5">Fanquicias baratas</option>
                                                                        </select><i></i>
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Fax:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="fax" class="form-control" placeholder="Fax">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <section class="col col-xs-12 col-md-12 col-sm-12">
                                                                    <label>Categoria:</label>
                                                                    <select multiple style="width:100%" class="select2" id="tags">
                                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                            <option value="AK">Alaska</option>
                                                                            <option value="HI">Hawaii</option>
                                                                        </optgroup>
                                                                        <optgroup label="Pacific Time Zone">
                                                                            <option value="CA">California</option>
                                                                            <option value="NV" selected="selected">Nevada</option>
                                                                            <option value="OR">Oregon</option>
                                                                            <option value="WA">Washington</option>
                                                                        </optgroup>
                                                                        <optgroup label="Mountain Time Zone">
                                                                            <option value="AZ">Arizona</option>
                                                                            <option value="CO">Colorado</option>
                                                                            <option value="ID">Idaho</option>
                                                                            <option value="MT" selected="selected">Montana</option><option value="NE">Nebraska</option>
                                                                            <option value="NM">New Mexico</option>
                                                                            <option value="ND">North Dakota</option>
                                                                            <option value="UT">Utah</option>
                                                                            <option value="WY">Wyoming</option>
                                                                        </optgroup>
                                                                        <optgroup label="Central Time Zone">
                                                                            <option value="AL">Alabama</option>
                                                                            <option value="AR">Arkansas</option>
                                                                            <option value="IL">Illinois</option>
                                                                            <option value="IA">Iowa</option>
                                                                            <option value="KS">Kansas</option>
                                                                            <option value="KY">Kentucky</option>
                                                                            <option value="LA">Louisiana</option>
                                                                            <option value="MN">Minnesota</option>
                                                                            <option value="MS">Mississippi</option>
                                                                            <option value="MO">Missouri</option>
                                                                            <option value="OK">Oklahoma</option>
                                                                            <option value="SD">South Dakota</option>
                                                                            <option value="TX">Texas</option>
                                                                            <option value="TN">Tennessee</option>
                                                                            <option value="WI">Wisconsin</option>
                                                                        </optgroup>
                                                                        <optgroup label="Eastern Time Zone">
                                                                            <option value="CT">Connecticut</option>
                                                                            <option value="DE">Delaware</option>
                                                                            <option value="FL">Florida</option>
                                                                            <option value="GA">Georgia</option>
                                                                            <option value="IN">Indiana</option>
                                                                            <option value="ME">Maine</option>
                                                                            <option value="MD">Maryland</option>
                                                                            <option value="MA">Massachusetts</option>
                                                                            <option value="MI" selected="selected">Michigan</option>
                                                                            <option value="NH">New Hampshire</option>
                                                                            <option value="NJ">New Jersey</option>
                                                                            <option value="NY">New York</option>
                                                                            <option value="NC">North Carolina</option>
                                                                            <option value="OH">Ohio</option>
                                                                            <option value="PA">Pennsylvania</option>
                                                                            <option value="RI">Rhode Island</option>
                                                                            <option value="SC">South Carolina</option>
                                                                            <option value="VT">Vermont</option>
                                                                            <option value="VA">Virginia</option>
                                                                            <option value="WV">West Virginia</option>
                                                                        </optgroup>
                                                                    </select>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div id="datos_publicos" class="col-xs-12 col-md-6 col-sm-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos de Contacto:</h5>
                                                        <br>

                                                        <div class="row">
                                                            <section class="col col-xs-12 col-md-9 col-sm-9">
                                                                <label>Domicilio Facturación:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="facturación"
                                                                           id="facturacion"
                                                                           placeholder="Domicilio Facturación">
                                                                </label>
                                                            </section>
                                                            <section class="col col-xs-12 col-md-3 col-sm-3">
                                                                <label>Código Postal:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="cpfacturacion"
                                                                           id="facturacion" placeholder="CP">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-xs-12 col-md-9 col-sm-9">
                                                                <label>Domicilio Fiscal:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="fiscal" id="fiscal"
                                                                           placeholder="Domicilio Fiscal">
                                                                </label>
                                                            </section>
                                                            <section class="col col-xs-12 col-md-3 col-sm-3">
                                                                <label>Código Postal:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="cpfacturacion"
                                                                           id="postalfiscal" placeholder="CP">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-xs-12 col-md-9 col-sm-9">
                                                                <label>Domicilio Postal:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="fiscal"
                                                                           id="domiciliopostal"
                                                                           placeholder="Domicilio Fiscal">
                                                                </label>
                                                            </section>
                                                            <section class="col col-xs-12 col-md-3 col-sm-3">
                                                                <label>Código Postal:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-calendar"></i>
                                                                    <input type="text" name="cpfacturacion"
                                                                           id="postalpostal" placeholder="CP">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-xs-12 col-md-6 col-sm-6">
                                                                <label>Nombre y Apellidos de Contacto:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-home"></i>
                                                                    <input type="text" name="nombre_contacto"
                                                                           id="contanto"
                                                                           placeholder="Nombre y Apellidos">
                                                                </label>
                                                            </section>
                                                            <section class="col col-xs-12 col-md-6 col-sm-6">
                                                                <label>Teléfono de Contacto:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-home"></i>
                                                                    <input type="text" name="telefono_contacto"
                                                                           id="telfcontatco"
                                                                           placeholder="Teléfono de Contacto">
                                                                </label>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col col-xs-12 col-md-6 col-sm-6"
                                                                     style="margin-bottom: 38px;">
                                                                <label>Email de Contacto:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-home"></i>
                                                                    <input type="text" name="email_contacto"
                                                                           id="emailcontacto"
                                                                           placeholder="Email Contacto">
                                                                </label>
                                                            </section>
                                                            <section class="col col-xs-12 col-md-6 col-sm-6">
                                                                <label>Cargo contacto:</label>
                                                                <label class="input"> <i
                                                                            class="icon-append fa fa-home"></i>
                                                                    <input type="text" name="cpfacturacion"
                                                                           id="cargcontacto"
                                                                           placeholder="Cargo de Contacto">
                                                                </label>
                                                            </section>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <footer>
                                                <button id="actualizar" type="submit" class="btn btn-primary">
                                                    Guardar Ficha
                                                </button>
                                            </footer>
                                        </form>
                                        <!-- fin form -->
                                        <div class="row col col-xs-12 col-md-12 col-sm-12" style="margin:0px">
                                            <h3 class="text-center"><span>Imagenes:</span></h3>
                                            <hr/>
                                            <div class="jarviswidget jarviswidget-color-blueLight jarviswidget-sortable"
                                                 id="wid-id-0" data-widget-editbutton="false" role="widget">
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
                                                <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div><div class="widget-toolbar" role="menu"><a data-toggle="dropdown" class="dropdown-toggle color-box selector" href="javascript:void(0);" aria-expanded="false"></a><ul class="dropdown-menu arrow-box-up-right color-select pull-right"><li><span class="bg-color-green" data-widget-setstyle="jarviswidget-color-green" rel="tooltip" data-placement="left" data-original-title="Green Grass"></span></li><li><span class="bg-color-greenDark" data-widget-setstyle="jarviswidget-color-greenDark" rel="tooltip" data-placement="top" data-original-title="Dark Green"></span></li><li><span class="bg-color-greenLight" data-widget-setstyle="jarviswidget-color-greenLight" rel="tooltip" data-placement="top" data-original-title="Light Green"></span></li><li><span class="bg-color-purple" data-widget-setstyle="jarviswidget-color-purple" rel="tooltip" data-placement="top" data-original-title="Purple"></span></li><li><span class="bg-color-magenta" data-widget-setstyle="jarviswidget-color-magenta" rel="tooltip" data-placement="top" data-original-title="Magenta"></span></li><li><span class="bg-color-pink" data-widget-setstyle="jarviswidget-color-pink" rel="tooltip" data-placement="right" data-original-title="Pink"></span></li><li><span class="bg-color-pinkDark" data-widget-setstyle="jarviswidget-color-pinkDark" rel="tooltip" data-placement="left" data-original-title="Fade Pink"></span></li><li><span class="bg-color-blueLight" data-widget-setstyle="jarviswidget-color-blueLight" rel="tooltip" data-placement="top" data-original-title="Light Blue"></span></li><li><span class="bg-color-teal" data-widget-setstyle="jarviswidget-color-teal" rel="tooltip" data-placement="top" data-original-title="Teal"></span></li><li><span class="bg-color-blue" data-widget-setstyle="jarviswidget-color-blue" rel="tooltip" data-placement="top" data-original-title="Ocean Blue"></span></li><li><span class="bg-color-blueDark" data-widget-setstyle="jarviswidget-color-blueDark" rel="tooltip" data-placement="top" data-original-title="Night Sky"></span></li><li><span class="bg-color-darken" data-widget-setstyle="jarviswidget-color-darken" rel="tooltip" data-placement="right" data-original-title="Night"></span></li><li><span class="bg-color-yellow" data-widget-setstyle="jarviswidget-color-yellow" rel="tooltip" data-placement="left" data-original-title="Day Light"></span></li><li><span class="bg-color-orange" data-widget-setstyle="jarviswidget-color-orange" rel="tooltip" data-placement="bottom" data-original-title="Orange"></span></li><li><span class="bg-color-orangeDark" data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip" data-placement="bottom" data-original-title="Dark Orange"></span></li><li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red" rel="tooltip" data-placement="bottom" data-original-title="Red Rose"></span></li><li><span class="bg-color-redLight" data-widget-setstyle="jarviswidget-color-redLight" rel="tooltip" data-placement="bottom" data-original-title="Light Red"></span></li><li><span class="bg-color-white" data-widget-setstyle="jarviswidget-color-white" rel="tooltip" data-placement="right" data-original-title="Purity"></span></li><li><a href="javascript:void(0);" class="jarviswidget-remove-colors" data-widget-setstyle="" rel="tooltip" data-placement="bottom" data-original-title="Reset widget color to default">Remove</a></li></ul></div>
                                                    <span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
                                                    <h2>My Dropzone! </h2>

                                                    <span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span></header>

                                                <!-- widget div-->
                                                <div role="content">

                                                    <!-- widget edit box -->
                                                    <div class="jarviswidget-editbox">
                                                        <!-- This area used as dropdown edit box -->

                                                    </div>
                                                    <!-- end widget edit box -->

                                                    <!-- widget content -->
                                                    <form action="../private/file-upload" class="dropzone dz-clickable"
                                                          id="mydropzone">
                                                    </form>
                                                    <!-- end widget content -->
                                                </div>
                                                <!-- end widget div -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{ asset('area_privada/js/plugin/jquery-form/jquery-form.min.js') }}"></script>
    <script src="{{ asset('area_privada/js/plugin/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('area_privada/js/plugin/bootstrap-timepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('area_privada/js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('area_privada/js/plugin/select2/select2.min.js')}}"></script>
    <script src="{{ asset('area_privada/js/plugin/bootstrapvalidator/bootstrapValidator.min.js')}}"></script>

@endsection

@section('ready')

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
    dd='0'+dd;
    }

    if(mm<10) {
    mm='0'+mm;
    }

    today = dd+'/'+mm+'/'+yyyy;

    $('#inicio').datepicker({
    dateFormat : 'dd/mm/yy',
    prevText : '<i class="fa fa-chevron-left"></i>',
    nextText : '<i class="fa fa-chevron-right"></i>',

    onSelect: function(date) {


    return date < today ? 'disabled' : '';
    }

    }).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date);
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
    }
    });

    $('#final').datepicker({
    dateFormat : 'dd/mm/yy',
    prevText : '<i class="fa fa-chevron-left"></i>',
    nextText : '<i class="fa fa-chevron-right"></i>',
    onSelect : function(selectedDate) {
    $('#startdate').datepicker('option', 'maxDate', selectedDate);
    }
    }).on;

    Dropzone.autoDiscover = true;
    Dropzone.options.mydropzone = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Arrastra imágenes <span class="font-xs">para subir</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (O picha aquí)</h4></span>',
                           addRemoveLinks: true
    }


    $('#dashboard').removeClass("active")
    $('#alta').addClass("active");
    $('#gestion').addClass("active");

    $("#tags").select2({
        maximumSelectionSize: 4
    });

    $('#form-alta').bootstrapValidator({
					feedbackIcons : {
						valid : 'glyphicon glyphicon-ok',
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						fname : {
                            group : '.col-lg-6',
							validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								}
							}
						},
                        ciudad : {
                            group : '.col-lg-6',
                            validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								}
							}
                        },
                        direccion : {
                            validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								}
							}
                        },
                        cp : {
                            group : '.col-lg-6',
                            validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								},
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                                stringLength : {
									max : 5,
                                    min : 5,
									message : 'La longitud del campo debe ser de 5 dígitos'
								}
							}
                        },
                        web : {
                            group : '.col-lg-6',
                            validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								}
							}
                        },
                        fdescripcion : {
                           validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                stringLength : {
									min : 30,
									message : 'La Descripción demasiado corta'
								}
                            }
                        },
                        logo : {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        inversion : {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        presencia : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        royalti : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        entrada : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        cpublicitario : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        contrato : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        amortizacion : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        requisitos : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        localesp : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                            }
                        },
                        dimension : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                            }
                        },
                        localesf : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                            }
                        },
                        poblacion : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                            }
                        },
                        superficie : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                            }
                        },
                        exclusividad : {
                            group : '.col-lg-4',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        pefil : {
                            group : '.col-lg-8',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        preferente : {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        creacion : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                                stringLength : {
									max : 4,
                                    min : 4,
                                    message : 'La longitud del campo debe ser de 4 dígitos'
                                }
                            }
                        },
                        expansion : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                                stringLength : {
									max : 4,
                                    min : 4,
                                    message : 'La longitud del campo debe ser de 4 dígitos'
                                }
                            }
                        },
                        red: {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        paises : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numerico'
                                },
                            }
                        },
                        nacionalidad : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        extranjero : {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        nombre : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        cif : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                stringLength : {
									max : 9,
                                    min : 9,
                                    message : 'La longitud del campo debe ser de 9'
                                }
                            }
                        },

                        razon : {
                            validators: {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
            			categoria : {
							group : '.col-lg-6',
							validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								}
							}
						},
                        fax : {
							group : '.col-lg-6',
							validators : {
								notEmpty : {
									message : 'Este campo es requerido'
								}
							}
						}
					}
				});

@endsection


<!--
                                                                            <label class="select">
                                                                    <select name="categoria">
                                                                        <option value="1" selected="">- Selecciona
                                                                            categoría -
                                                                        </option>
                                                                        <option value="2">Abogados</option>
                                                                        <option value="3">Administración de Fincas
                                                                        </option>
                                                                        <option value="4">Agencias de Viajes</option>
                                                                        <option value="5">Alimentación</option>
                                                                        <option value="6">Deportes</option>
                                                                        <option value="7">Educación</option>
                                                                        <option value="8">Eficiencia Energética</option>
                                                                        <option value="9">Fotografía</option>
                                                                        <option value="10">Hogar</option>
                                                                        <option value="11">Informática</option>
                                                                        <option value="12">Regalos, Fiestas y Juguetes
                                                                        </option>
                                                                        <option value="13">Inmobiliarias</option>
                                                                        <option value="14">Librerías y Material de
                                                                            oficina
                                                                        </option>
                                                                        <option value="15">Limpieza</option>
                                                                        <option value="16">Mensajería y Transporte
                                                                        </option>
                                                                        <option value="17">Modas</option>
                                                                        <option value="18">Negocios Especializados
                                                                        </option>
                                                                        <option value="19">Ocio</option>
                                                                        <option value="20">Ópticas</option>
                                                                        <option value="21">Publicidad e Impresión
                                                                        </option>
                                                                        <option value="22">Reciclaje Consumibles
                                                                        </option>
                                                                        <option value="23">Reformas y Suministros
                                                                        </option>
                                                                        <option value="24">Restauración</option>
                                                                        <option value="25">Salud y Belleza</option>
                                                                        <option value="26">Seguros</option>
                                                                        <option value="27">Servicios a Pymes</option>
                                                                        <option value="28">Servicios Asistenciales
                                                                        </option>
                                                                        <option value="29">Servicios Financieros
                                                                        </option>
                                                                        <option value="30">Telecomunicaciones</option>
                                                                        <option value="31">Tintorería y Arreglos
                                                                        </option>
                                                                        <option value="32">Vending</option>
                                                                    </select> <i></i>
                                                                </label>

                                                                                                                            <section class="col col-xs-12 col-md-6 col-sm-6">
                                                                <label>Selecciona Subcategorias:</label>
                                                                <label class="select select-multiple">
                                                                    <select multiple="" class="custom-scroll">
                                                                        <option value="1">Subcat1</option>
                                                                        <option value="2">Subcat2</option>
                                                                        <option value="3">Subcat3</option>
                                                                        <option value="4">Subcat4</option>
                                                                        <option value="5">Subcat5</option>
                                                                        <option value="6">Subcat6</option>
                                                                        <option value="7">Subcat7</option>
                                                                        <option value="8">Subcat8</option>
                                                                        <option value="9">Subcat9</option>
                                                                    </select> </label>

                                                                <div class="note">
                                                                    <strong>Note:</strong> Presiona el botón Ctrl y
                                                                    selecciona las subcategorias pertinentes.
                                                                </div>
                                                            </section>-->