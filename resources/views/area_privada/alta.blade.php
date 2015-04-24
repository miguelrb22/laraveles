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
                                        <!--<form id="form-alta" class="smart-form col-xs-12 col-md-12 col-sm-12" novalidate="novalidate">-->
                                        {!! Form::open (['action' => 'models_controller\franquiciaController@store' , 'method' =>'POST', 'class' => 'smart-form col-xs-12 col-md-12 col-sm-12' , 'id' => 'form-alta']) !!}
                                            <div class="row" style="margin:0">
                                                <h3 class="text-center"><span> Datos Públicos</span></h3>

                                                <div id="datos_publicos" class="col-xs-12 col-md-6 col-sm-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos ficha franquicia:</h5>
                                                        <br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label> Nombre:</label>
                                                                    <label class="input"><i class="icon-prepend fa fa-user"></i>
                                                                        <input id="nombre_comercial" type="text" name="nombre_comercial" class="form-control" placeholder="Nombre">
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
                                                                    <label class="input"><i class="icon-prepend fa fa-user"></i>
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
                                                                        <textarea class="custom-scroll" rows="1" id="descripcion" name="descripcion"></textarea>
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label class="label">Logo:</label>
                                                                        <div class="input input-file">
                                                                            <span class="button"><input type="file" id="file" name="logo_url" onchange="this.parentNode.nextSibling.value = this.value">Subir</span><input type="text" readonly="">
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
                                                                        <input id="presencia" type="text" name="presencia_int" class="form-control" placeholder="Presencia Internacional">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Royalti:</label>
                                                                    <label class="input">
                                                                        <input id="royalti" type="text" name="royalty" class="form-control" placeholder="Royalti">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Canon Entrada:</label>
                                                                    <label class="input">
                                                                        <input id="entrada" type="text" name="canon_entrada" class="form-control" placeholder="Canon Entrada">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Canon Publicitario:</label>
                                                                    <label class="input">
                                                                        <input id="cpublicitario" type="text" name="canon_publicitario" class="form-control" placeholder="Canon Publicitario">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row" style="margin-bottom: -2px;">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Duración Contrato:</label>
                                                                    <label class="input">
                                                                        <input id="contrato" type="text" name="duracion_contrato" class="form-control" placeholder="Duración Contrato">
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
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Requisítos del Local:</label>
                                                                    <label class="input">
                                                                        <input id="requisitos" type="text" name="requisitos_local" class="form-control" placeholder="Requisítos del Local">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Locales Propios:</label>
                                                                    <label class="input">
                                                                        <input id="localesp" type="text" name="locales_propios" class="form-control" placeholder="Locales Propios">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Locales Franquiciados:</label>
                                                                    <label class="input">
                                                                        <input id="localesf" type="text" name="locales_franquiciados" class="form-control" placeholder="Locales Franquiciados">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Dimensiones del Local:</label>
                                                                    <label class="input">
                                                                        <input id="dimesion" type="text" name="dimensiones_local" class="form-control" placeholder="Dimensiones del Local">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Población Mínima:</label>
                                                                    <label class="input">
                                                                        <input id="poblacion" type="text" name="poblacion_minima" class="form-control" placeholder="Poblacion Mínima">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Superficie Mínima del Local:</label>
                                                                    <label class="input">
                                                                        <input id="dimesion" type="text" name="superficie_minima" class="form-control" placeholder="Superficie Mínima">
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
                                                                            <input id="sexo_h" class="form-control" type="radio" name="zona_exclusividad" value="1">
                                                                            <i></i>Si</label>
                                                                        <label class="radio">
                                                                            <input id="sexo_m" class="form-control" type="radio" name="zona_exclusividad" value="0">
                                                                            <i></i>No</label>
                                                                    </div>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-8 col-sm-8 col-lg-8">
                                                                    <label>Perfil del Franquiciado:</label>
                                                                    <label class="input">
                                                                        <input id="perfil" type="text" name="perfil_franquiciado" class="form-control" placeholder="Perfil del Franquiciado">
                                                                    </label>
                                                                </section>
                                                            </div></div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Zonas Preferentes:</label>
                                                                    <label class="input">
                                                                        <input id="perfil" type="text" name="zonas_preferentes" class="form-control" placeholder="Zonas Preferentes">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <br>
                                                        <h5>Organización y expansión:</h5>
                                                        <br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Año de Creación:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="anyo_creacion" placeholder="Año de Creación" data-mask="2099" class="form-control">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Inicio de Expansión:</label>
                                                                    <label class="input">
                                                                        <input id="expasion" type="text" name="inicio_expansion" class="form-control" splaceholder="Incio de Expansión">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Red de España:</label>
                                                                    <label class="input"> <i class="icon-prepend fa fa-question-circle"></i>
                                                                        <input type="text" class="form-control" name="red_spain" id="red_spain" placeholder="Propios y Franquiciados">
                                                                        <b class="tooltip tooltip-top-left">
                                                                            <i class="fa fa-warning txt-color-teal"></i>
                                                                            Nº de establecimientos propios y fraquiciados.
                                                                            (Ejem: 3 propios y 5 franquiciados).</b>
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nº de Países:</label>
                                                                    <label class="input">
                                                                        <input id="paises" type="text" name="n_paises" class="form-control" placeholder="Nº de Paises">
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
                                                                                   type="radio" name="red_extranjero" value="1">
                                                                            <i></i>Si</label>
                                                                        <label class="radio">
                                                                            <input id="extranjero_n" class="form-control"
                                                                                   type="radio" name="red_extranjero" value="0">
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

                                                <div id="datos_publicos" class="col-xs-12 col-md-6 col-sm-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos Franquicia:</h5>
                                                        <br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nombre:</label>
                                                                    <label class="input">
                                                                        <input id="nombre" type="text" name="nombre_franquicia" class="form-control" placeholder="Nombre">
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

                                                        <div class="form-group">
                                                            <div class="row" data-date-format="dd/mm/yyyy">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6" id="fechaI">
                                                                    <label class="input">Fecha Alta Ficha:</label>
                                                                    <label class="input" ><i class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" class="span2" value="" id="dpd1" name="fecha_alta_ficha" data-date-format="dd/mm/yyyy"  id="finicio">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Fecha Vencimiento Ficha:</label>
                                                                    <label class="input" id="ffin"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" class="span2" value="" id="dpd2" name="fecha_vencimiento_ficha" data-date-format="dd/mm/yyyy">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Razón Social:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="razon_social" id="razon_social" class="form-control" placeholder="Razón social">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Categoría especial:</label>
                                                                    <select class="form-control" name="especial">
                                                                        <option value="">Selecciona categoria Especial</option>
                                                                        <option value="exito">Franquicias de éxito</option>
                                                                        <option value="rentables">Franquicias rentables</option>
                                                                        <option value="baratas">Franquicias baratas</option>
                                                                        <option value="low-cost">Franquicias low-cost</option>
                                                                    </select>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Fax:</label>
                                                                    <label class="input">
                                                                        <input type="text" name="fax" class="form-control" placeholder="Fax">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-12 col-sm-12">
                                                                    <label>Categoria:</label>
                                                                    <select multiple style="width:100%" class="select2" id="categoria" name="categoria">
                                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                            <option value="AK">Alaska</option>
                                                                            <option value="HI">Hawaii</option>
                                                                        </optgroup>
                                                                        <optgroup label="Pacific Time Zone">
                                                                            <option value="CA">California</option>
                                                                            <option value="NV">Nevada</option>
                                                                            <option value="OR">Oregon</option>
                                                                            <option value="WA">Washington</option>
                                                                        </optgroup>
                                                                        <optgroup label="Mountain Time Zone">
                                                                            <option value="AZ">Arizona</option>
                                                                            <option value="CO">Colorado</option>
                                                                            <option value="ID">Idaho</option>
                                                                            <option value="MT">Montana</option><option value="NE">Nebraska</option>
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
                                                                            <option value="MI">Michigan</option>
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
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div id="datos_publicos" class="col-xs-12 col-md-6 col-sm-6">
                                                    <hr/>
                                                    <fieldset>
                                                        <h5>Datos de Contacto:</h5>
                                                        <br>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-9 col-sm-9 col-lg-9">
                                                                    <label>Domicilio Facturación:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="domicilio_facturacion" id="facturacion" class="form-control" placeholder="Domicilio Facturación">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-3 col-sm-3 col-lg-3">
                                                                    <label>Código Postal:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="cp_fac" id="facturacion" class="form-control" placeholder="CP">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-9 col-sm-9 col-lg-9">
                                                                    <label>Domicilio Fiscal:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="domicio_fiscal" id="fiscal" class="form-control" placeholder="Domicilio Fiscal">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-3 col-sm-3 col-lg-3">
                                                                    <label>Código Postal:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="cp_fiscal" class="form-control" id="postalfiscal" placeholder="CP">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-9 col-sm-9 col-lg-9">
                                                                    <label>Domicilio Postal:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="domicilio_postal" class="form-control" id="domiciliopostal" placeholder="Domicilio Fiscal">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-3 col-sm-3">
                                                                    <label>Código Postal:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-calendar"></i>
                                                                        <input type="text" name="cp_postal" class="form-control" id="postalpostal" placeholder="CP">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nombre y Apellidos de Contacto:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-home"></i>
                                                                        <input type="text" name="nombre_apellidos_contacto" class="form-control" id="contanto" placeholder="Nombre y Apellidos">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Teléfono de Contacto:</label>
                                                                    <label class="input"> <i
                                                                                class="icon-append fa fa-home"></i>
                                                                        <input type="text" name="tf_contacto" class="form-control" id="telfcontatco" placeholder="Teléfono de Contacto">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6" style="margin-bottom: 38px;">
                                                                    <label>Email de Contacto:</label>
                                                                    <label class="input"> <i class="icon-append fa fa-home"></i>
                                                                        <input type="text" name="email_contacto" id="emailcontacto" placeholder="Email Contacto">
                                                                    </label>
                                                                </section>
                                                                <section class="col col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Cargo contacto:</label>
                                                                    <label class="input"> <i class="icon-append fa fa-home"></i>
                                                                        <input type="text" name="cargo_contacto" id="cargcontacto" class="form-control" placeholder="Cargo de Contacto">
                                                                    </label>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <footer>
                                                <button id="actualizar" type="submit" class="btn btn-primary">
                                                    Guardar Ficha
                                                </button>
                                            </footer>
                                        {!! Form::close() !!}
                                        <!--</form>-->
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
    <script src="{{ asset('area_privada/js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('area_privada/js/plugin/select2/select2.min.js')}}"></script>
    <script src="{{ asset('area_privada/js/plugin/bootstrapvalidator/bootstrapValidator.min.js')}}"></script>
    <script src="{{ asset('area_privada/js/plugin/datepicker_mio/js/bootstrap-datepicker.js')}}"></script>
@endsection

@section('ready')

    //prueba

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#dpd1').datepicker({
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
    $('#dpd2')[0].focus();
    }).data('datepicker');
    var checkout = $('#dpd2').datepicker({
    onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
    checkout.hide();
    }).data('datepicker');

    //prueba


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

    $("#categoria").select2({
        maximumSelectionSize: 4
    });


    $('#finicio .datepicker')
        .datepicker({
            format: 'dd/mm/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#form-alta').formValidation('revalidateField', 'inicio');
        });

    $('#ffin .datepicker')
            .datepicker({
            format: 'dd/mm/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#form-alta').formValidation('revalidateField', 'fin');
        });



    $('#form-alta').bootstrapValidator({
					feedbackIcons : {
						valid : 'glyphicon glyphicon-ok',
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						nombre_comercial : {
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
                                    message : 'Este campo debe ser numérico'
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
                        descripcion : {
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
                        logo_url : {
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
                        presencia_int : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        royalty : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        canon_entrada : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        canon_publicitario : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        duracion_contrato : {
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
                        requisitos_local : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        locales_propios : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                            }
                        },
                        dimensiones_local : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                            }
                        },
                        locales_franquiciados : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                            }
                        },
                        poblacion_minima: {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                            }
                        },
                        superficie_minima : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                            }
                        },
                        zona_exclusividad : {
                            group : '.col-lg-4',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        perfil_franquiciado : {
                            group : '.col-lg-8',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        zonas_preferentes : {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        anyo_creacion : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                                stringLength : {
									max : 4,
                                    min : 4,
                                    message : 'La longitud del campo debe ser de 4 dígitos'
                                }
                            }
                        },
                        inicio_expansion : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
                                },
                                stringLength : {
									max : 4,
                                    min : 4,
                                    message : 'La longitud del campo debe ser de 4 dígitos'
                                }
                            }
                        },
                        red_spain: {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        n_paises : {
                            group : '.col-lg-6',
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                },
                                numeric : {
                                    message : 'Este campo debe ser numérico'
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
                        red_extranjero : {
                            validators : {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        nombre_franquicia : {
                            validators : {
                            group : '.col-lg-6',
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        cif : {
                            validators : {
                                group : '.col-lg-6',
                                stringLength : {
									max : 9,
                                    min : 9,
                                    message : 'La longitud del campo debe ser de 9'
                                }
                            }
                        },
                        razon_social : {
                            validators: {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        },
                        categoria : {
                            validators: {
                                notEmpty : {
                                    message : 'Este campo es requerido'
                                }
                            }
                        }
					}
				});

@endsection