<!DOCTYPE html>

<html lang="en-us">

<head>

    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> Dashboard multifranquicias </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/font-awesome.min.css') }}">

    <!-- Para el datepicker -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/datepicker.css') }}">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/smartadmin-production-plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/smartadmin-production.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/smartadmin-skins.min.css') }}">

    <!-- SmartAdmin RTL Support  -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/smartadmin-rtl.min.css') }}">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.-->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/your_style.css') }}">


    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/css/demo.min.css') }}">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('area_privada/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('area_privada/img/favicon/favicon.ico') }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <link rel="stylesheet" href="{{ URL::asset('lolibox/dist/css/LobiBox.min.css') }}">


    <style>

        body {

            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
        }

        td{
            cursor: pointer;
            font-size: 13px;
        }


    </style>

    @yield('css')

</head>

    <!--

    TABLE OF CONTENTS.
    
    Use search to find needed section.
    
    ===================================================================
    
    |  01. #CSS Links                |  all CSS links and file paths  |
    |  02. #FAVICONS                 |  Favicon links and file paths  |
    |  03. #GOOGLE FONT              |  Google font link              |
    |  04. #APP SCREEN / ICONS       |  app icons, screen backs   |
    |  05. #BODY                     |  body tag                      |
    |  06. #HEADER                   |  header tag                    |
    |  07. #PROJECTS                 |  project lists                 |
    |  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
    |  09. #MOBILE                   |  mobile view dropdown          |
    |  10. #SEARCH                   |  search field                  |
    |  11. #NAVIGATION               |  left panel & navigation       |
    |  12. #RIGHT PANEL              |  right panel userlist          |
    |  13. #MAIN PANEL               |  main panel                    |
    |  14. #MAIN CONTENT             |  content holder                |
    |  15. #PAGE FOOTER              |  page footer                   |
    |  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
    |  17. #PLUGINS                  |  all scripts and plugins       |
    
    ===================================================================
    
    -->

    <!-- #BODY -->
    <!-- Possible Classes

            * 'smart-style-{SKIN#}'
            * 'smart-rtl'         - Switch theme mode to RTL
            * 'menu-on-top'       - Switch to top navigation (no DOM change required)
            * 'no-menu'			  - Hides the menu completely
            * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
            * 'fixed-header'      - Fixes the header
            * 'fixed-navigation'  - Fixes the main menu
            * 'fixed-ribbon'      - Fixes breadcrumb
            * 'fixed-page-footer' - Fixes footer
            * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
    -->


    <body id="cuerpo" class="smart-style-1">




    <!-- HEADER -->
        <header id="header" class="container-fluid">
            <div id="logo-group" class="head-responsive">

                <!-- PLACE YOUR LOGO HERE -->
                <span id="logo" class="logo-responsive"> <img src="{{ asset('area_privada/img/logo.png') }}" alt="SmartAdmin"> </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <div class="ajax-dropdown">

                    <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/mail.html">
                            Msgs (14) </label>
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/notifications.html">
                            notify (3) </label>
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/tasks.html">
                            Tasks (4) </label>
                    </div>

                    <!-- notification content -->
                    <div class="ajax-notifications custom-scroll">

                        <div class="alert alert-transparent">
                            <h4>Click a button to show messages here</h4>
                            This blank page message helps protect your privacy, or you can show the first message here automatically.
                        </div>

                        <i class="fa fa-lock fa-4x fa-border"></i>

                    </div>
                    <!-- end notification content -->

                    <!-- footer: refresh area -->
            <span> Last updated on: 12/12/2013 9:43AM
                <button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                    <i class="fa fa-refresh"></i>
                </button>
            </span>
                    <!-- end footer -->

                </div>
                <!-- END AJAX-DROPDOWN -->
            </div>

            <!-- projects dropdown -->
            <!-- end projects dropdown -->

            <!-- pulled right: nav area -->
            <div class="pull-right">

                <!-- collapse menu button -->
                <div id="hide-menu" class="btn-header pull-right">
                    <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
                </div>
                <!-- end collapse menu -->

                <!-- #MOBILE -->
                <!-- Top menu profile link : this shows only when top menu is active -->
                <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
                    <li class="">
                        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                            <img src="{{ asset('area_privada/img/avatars/female.png') }}" alt="John Doe" class="online" />
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ URL::route('logout') }}" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>S</u>alir</strong></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- logout button -->
                <div id="logout" class="btn-header transparent pull-right">
                    <span> <a href="{{ URL::route('logout') }}" title="Sign Out" data-action="userLogout" data-logout-msg="Cierra el navegador después de salir para más seguridad."><i class="fa fa-sign-out"></i></a> </span>
                </div>
                <!-- end logout button -->
                <!-- input: search field -->
                <!-- end input: search field -->

                <!-- fullscreen button -->
                <div id="fullscreen" class="btn-header transparent pull-right">
                    <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
                </div>
                <!-- end fullscreen button -->




            </div>
            <!-- end pulled right: nav area -->
        </header>
        <!-- END HEADER -->


    <aside id="left-panel">
        <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->

        <!-- User info -->
        <div class="login-info">
            <span> <!-- User image size is adjusted inside CSS, it should stay as it -->

                <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                    <img src="{{ asset('area_privada/img/avatars/female.png') }}" alt="me" class="online" />
                    <span>
                        {{ $user->username }}
                    </span>
                </a>

            </span>
        </div>

        <!--user info -->

        <!-- NAVIGATION : This navigation is also responsive-->
        <nav>
            <ul id="navul">
                <li id="dashboard" class="active">
                    <a href="{{ URL::route('private') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
                </li>
                <li id="gestion" style="display: none">
                    <a href="#"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">Gestión Franquicia</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                    <ul style="display: none;">
                        <li id="alta">
                            <a class="needlog" href="{{ URL::route('modificar_franquicia') }}"><i class="fa fa-pencil-square-o"></i>Modificar Franquicia</a>
                        </li>
                        <li id="publi">
                            <a class="needlog" href="{{ URL::route('publicidad') }}"> <i class="fa fa-shopping-cart"></i> Gestión Publicidad</a>
                        </li>
                        <li id="asignar">
                            <a class="needlog" href="{{ URL::route('imagenes') }}"><i class="fa fa-picture-o"></i> Asignar Imagenes</a>
                        </li>
                    </ul>
                </li>
                <li id="categorias">
                    <a href="{{ URL::route('categorias') }}"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">Gestión Categorías</span><b class="collapse-sign"></b></a>
                </li>
                <li id= "publicaciones">
                    <a href="#"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">Publicaciones</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                    <ul style="display: none;">
                        <li id="alta">
                            <a href="{{ URL::route('noticias') }}"><i class="fa fa-lg fa fa-list-alt"></i> <span class="menu-item-parent">Nueva publicación</span><b class="collapse-sign"></b></a>
                        </li>
                        <li id="publi">
                            <a href="{{ URL::route('editnoticia') }}"><i class="fa fa-lg fa-fw fa-edit"></i> <span class="menu-item-parent">Editar publicacion</span><b class="collapse-sign"></b></a>
                        </li>
                    </ul>
                </li>
                <li id="estadisticas">
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Estadísticas</span><b class="collapse-sign"></b></a>
                </li>
            </ul>
        </nav><!--END NAGIVATION -->
        <span class="minifyme" data-action="minifyMenu">
                <i class="fa fa-arrow-circle-left hit"></i>
        </span>
    </aside>


    <!-- MAIN PANEL -->

        <div id="main" role="main">

            <div id="content">

                @yield('main')

            </div>

        </div>

        <!-- END MAIN PANEL -->

    <!-- PAGE FOOTER -->
    <div class="page-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <span class="txt-color-white">Multifranquicias <span class="hidden-xs"> - dashboard </span> © 2014-2015</span>
            </div>
        </div>
    </div>
    <!-- END PAGE FOOTER -->
        
        <!--================================================== -->
        <script src="{{ asset('area_privada/js/libs/jquery-2.1.1.min.js') }}"></script>

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="{{ asset('area_privada/js/plugin/pace/pace.min.js') }}"></script>

        <!--<script src="../private/js/libs/jquery-2.1.1.min.js"></script>-->
        <script>
            if (!window.jQuery) {
                document.write('<script src="{{ asset('area_privada/js/libs/jquery-2.1.1.min.js') }}"><\/script>');
            }
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            if (!window.jQuery.ui) {
                document.write('<script src="{{ asset('area_privada/js/libs/jquery-ui-1.10.3.min.js') }}"><\/script>');
            }
        </script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="{{ asset('area_privada/js/app.config.js') }}"></script>


        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('area_privada/js/bootstrap/bootstrap.min.js') }}"></script>


        <!-- JARVIS WIDGETS -->
        <script src="{{ asset('area_privada/js/smartwidgets/jarvis.widget.min.js') }}"></script>

        <!-- JQUERY VALIDATE -->
        <script src="{{ asset('area_privada/js/plugin/jquery-validate/jquery.validate.min.js') }}"></script>


        <!-- browser msie issue fix -->
        <script src="{{ asset('area_privada/js/plugin/msie-fix/jquery.mb.browser.min.js') }}"></script>

        <!-- FastClick: For mobile devices -->
        <script src="{{ asset('area_privada/js/plugin/fastclick/fastclick.min.js') }}"></script>

        <!--[if IE 8]>

        <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

        <![endif]-->

        <!-- Para cambiar estilo dashboard -->
        <script src="{{ asset('area_privada/js/demo.min.js') }}"></script>

        <!-- MAIN APP JS FILE -->
        <script src="{{ asset('area_privada/js/app.min.js') }}"></script>

        <!-- PAGE RELATED PLUGIN(S) -->
        <script src="{{ asset('area_privada/js/plugin/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('area_privada/js/plugin/datatables/dataTables.colVis.min.js') }}"></script>
        <script src="{{ asset('area_privada/js/plugin/datatables/dataTables.tableTools.min.js') }}"></script>
        <script src="{{ asset('area_privada/js/plugin/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('area_privada/js/plugin/datatable-responsive/datatables.responsive.min.js') }}"></script>
    <script src="{{ asset('area_privada/js/plugin/bootstrapvalidator/bootstrapValidator.min.js')}}"></script>

    <script src="{{ URL::asset('lolibox/dist/js/lobibox.min.js') }}"></script>
        <script src="{{ URL::asset('js/blockUI.js') }}"></script>

        @yield('js')


    <script type="text/javascript">


        $(document).ready(function() {

            var token = "{{ csrf_token()}}";

            <?php $ses = Session::get('franquicia');

               if (!isset($ses)) { ?>

            $("#gestion").css("display", "none"); <?php

            } else{  ?> $("#gestion").css("display", "block");
            <?php }

             ?>


            //Asignamos estilo al cargar la pagina
            var estilo = localStorage.getItem('color');
            $("#cuerpo").addClass(estilo);
            $(document).ajaxStop($.unblockUI);

            pageSetUp();

            // custom toolbar
            $("div.toolbar").html('<div class="text-right"><img src="{{ asset('area_privada/js/libs/jquery-ui-1.10.3.min.js') }} alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');



            $("#smart-style-0").on("click", function() {
                localStorage.setItem('color', 'smart-style-0');
            });

            $("#smart-style-1").on("click", function()
            {
                localStorage.setItem('color', 'smart-style-1');
            });

            $("#smart-style-2").on("click", function()
            {
                localStorage.setItem('color', 'smart-style-2');
            });

            $("#smart-style-3").on("click", function()
            {
                localStorage.setItem('color', 'smart-style-3');
            });

            $("#smart-style-4").on("click", function()
            {
                localStorage.setItem('color', 'smart-style-4');
            });

            $("#smart-style-5").on("click", function()
            {
                localStorage.setItem('color', 'smart-style-5');
            });

            $("#limpiar-cache").on("click", function()
            {
                location.reload();
                localStorage.removeItem('color');
            });

            $( ".fa-plus-square-o").hide();


            /*************************************/
            /** JAVASCRIPT PARA LA VISTA INICIO **/
            /*************************************/


            var responsiveHelper_dt_basic = undefined;


            var breakpointDefinition = {
                tablet: 1024,
                phone: 480
            };

            $('#dt_basic_inicio').dataTable({
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
                "t" +
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                "autoWidth": true,

                "preDrawCallback": function () {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_dt_basic) {
                        responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic_inicio'), breakpointDefinition);
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

            /* END BASIC */

            /* COLUMN FILTER  */


            // custom toolbar
            $("div.toolbar").html('<div class="text-right"><img src="{{ asset('area_privada/js/libs/jquery-ui-1.10.3.min.js') }}" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

            // Apply the filter
            $("#datatable_fixed_column thead th input[type=text]").on('keyup change', function () {

                otable
                        .column($(this).parent().index() + ':visible')
                        .search(this.value)
                        .draw();

            });
            /* END COLUMN FILTER */
            /* Jquery varios */
            $("#titulo-tabla").html("Lista Franquicias");

            /**

            $("#dt_basic_inicio tbody").on("dblclick", "tr", function (e) {
                e.preventDefault();

                var id = $(this)[0].children[6].textContent;
                var token = "{{ csrf_token()}}";

                $.blockUI({

                    message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: 'transparent'}

                });

                $.ajax({

                    type: "POST",
                    url: "{{ URL::route('cargarfranquicia') }}",
                    data: {id: id, _token: token},
                    dataType: "html",
                    error: function () {
                        //$('#loading').show();
                        alert("Error en la petición");
                    },
                    success: function (data) {

                        Lobibox.notify('success', {
                            title: 'Franquicia Carcaga con éxito',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Sigue así y ganarás mucho dinero'
                        });

                        $("#franquiciacargada").html(data);
                        $("#gestion").css("display", "block");

                    }
                });
            });


            /******************************************************************************/



            /** PESTAÑA CATEGORIAS **·/
             *
             */

            $('#nueva-categoria').submit(function(e){

                e.preventDefault();

                $.blockUI({

                    message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: 'transparent'}

                });

                $.ajax({

                    type: "POST",
                    url: "{{ URL::route('nuevacategoria') }}",
                    data: $('#nueva-categoria').serialize(),
                    dataType: "html",
                    error: function () {

                        Lobibox.notify('error', {
                            title: 'No se ha podido crear la categoria',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Compruebe la conexión a internet o si la categoría ya existe'
                        });
                    },
                    success: function (data) {

                        Lobibox.notify('success', {
                            title: 'Categoría creada con éxito',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Mas categorías, mas dinero!'
                        });
                    }
                });


            });

            $('#nueva-subcategoria').submit(function(e){

                e.preventDefault();

                $.blockUI({

                    message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: 'transparent'}

                });

                $.ajax({

                    type: "POST",
                    url: "{{ URL::route('nuevasubcategoria') }}",
                    data: $('#nueva-subcategoria').serialize(),
                    dataType: "html",
                    error: function () {

                        Lobibox.notify('error', {
                            title: 'No se ha podido crear la categoria',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Compruebe la conexión a internet o si la subcategoría ya existe'
                        });
                    },
                    success: function (data) {

                        Lobibox.notify('success', {
                            title: 'Subcategoría creada con éxito',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Mas categorías, mas dinero!'
                        });
                    }
                });


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
                        group : '.col-lg-6',
                        validators : {
                            notEmpty : {
                                message : 'Este campo es requerido'
                            }
                        },
                        numeric : {
                            message : 'Este campo debe ser numérico'
                        }
                    },
                    inversion_p : {
                        group : '.col-lg-6',
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
                            }
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
                            }
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
                            }
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
                            }
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
                            }
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
                            }
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
                    claves_negocio: {
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
            }).on('success.form.bv', function(e) {

                var formData = new FormData($('#form-alta')[0]);

                // Prevent form submission
                e.preventDefault();
                $.blockUI({

                    message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
                    css: {

                        border: 'none',
                        padding: '15px',
                        backgroundColor: 'transparent'}

                });

                $.ajax({

                    type: "POST",
                    url: "{{ URL::route('guardar') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "html",
                    error: function () {

                        Lobibox.notify('error', {
                            title: 'No se ha podido crear la franquicia',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Compruebe la conexión a internet'
                        });
                    },
                    success: function (data) {

                        Lobibox.notify('success', {
                            title: 'Franquicia creada con éxito',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Mas franquicias, mas dinero!'
                        });
                    }
                });
            });





            $('.actualizar_paquete').submit(function(e){

                alert("entra");
                e.preventDefault();

                //Peticion ajax par actualizar paquetes.
                var formData = new FormData($('.actualizar_paquete')[0]);

                $.ajax({

                    type: "POST",
                    url
                            :
                            "{{ URL::route('actualizarPaquete') }}",
                    data
                            :
                            formData,
                    processData
                            :
                            false,
                    contentType
                            :
                            false,
                    dataType
                            :
                            "html",
                    error
                            :
                            function () {

                                Lobibox.notify('error', {
                                    title: 'No se ha podido crear la franquicia',
                                    showClass: 'flipInX',
                                    delay: 3000,
                                    delayIndicator: false,

                                    position: 'bottom left',
                                    msg: 'Compruebe la conexión a internet'
                                });
                            }

                    ,
                    success: function (data) {

                        Lobibox.notify('success', {
                            title: 'Franquicia creada con éxito',
                            showClass: 'flipInX',
                            delay: 3000,
                            delayIndicator: false,

                            position: 'bottom left',
                            msg: 'Mas franquicias, mas dinero!'
                        });
                    }
                });

            });


            @yield('ready')
        });

    </script>


    </body>

</html>