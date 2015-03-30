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

    <!-- Specifying a Webpage Icon for Web Clip
             Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ asset('area_privada/img/splash/sptouch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('area_privada/img/splash/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('area_privada/img/splash/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('area_privada/img/splash/touch-icon-ipad-retina.png') }}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ asset('area_privada/img/splash/ipad-landscape.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ asset('area_privada/img/splash/ipad-portrait.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ asset('area_privada/img/splash/iphone.png') }}" media="screen and (max-device-width: 320px)">

    @yield('css')

</head>

    <!--

    TABLE OF CONTENTS.
    
    Use search to find needed section.
    
    ===================================================================
    
    |  01. #CSS Links                |  all CSS links and file paths  |
    |  02. #FAVICONS                 |  Favicon links and file paths  |
    |  03. #GOOGLE FONT              |  Google font link              |
    |  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
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


    <body id="cuerpo" class="smart-style-03">




    <!-- HEADER -->
        <header id="header" class="container-fluid">
            <div id="logo-group" class="head-responsive">

                <!-- PLACE YOUR LOGO HERE -->
                <span id="logo" class="logo-responsive"> <img src="{{ asset('area_privada/img/logo.png') }}" alt="SmartAdmin"> </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge">3</b> </span>

                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <div class="ajax-dropdown">

                    <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/mail.html">
                            Msgs (1) </label>
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/notifications.html">
                            notify (1) </label>
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/tasks.html">
                            Tasks (1) </label>
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
                                <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>S</u>alir</strong></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- logout button -->
                <div id="logout" class="btn-header transparent pull-right">
                    <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="Cierra el navegador después de salir para más seguridad."><i class="fa fa-sign-out"></i></a> </span>
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
                        Juanka de la jungla
                    </span>
                </a>

            </span>
        </div>

        <!--user info -->

        <!-- NAVIGATION : This navigation is also responsive-->
        <nav>
            <ul id="navul">

                <li id="estadisticas" class="disabled">
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Estadísticas</span><b class="collapse-sign"></b></a>
                </li>

                <li id="gestion">
                    <a href="#"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">Gestión</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                    <ul style="display: none;">
                        <li id="alta">
                            <a href="{{ URL::route('Fnueva_alta') }}">Nueva Franquicia</a>
                        </li>
                        <li id="publi">
                            <a href="{{ URL::route('Fpublicidad') }}">Paquetes</a>
                        </li>
                    </ul>
                </li>

                <li id= "publicaciones">
                    <a href="{{ URL::route('Fnoticias') }}"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">Publicaciones</span><b class="collapse-sign"></b></a>
                </li>

                <li id="dashboard" CLASS="active">
                    <a href="{{ URL::route('Fprivate') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Cargar Perfil</span></a>
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

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="{{ asset('area_privada/js/plugin/bootstrap-slider/bootstrap-slider.min.js') }}"></script>

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

        @yield('js')


    <script type="text/javascript">


        $(document).ready(function() {

            //Asignamos estilo al cargar la pagina
            var estilo = localStorage.getItem('color');
            $("#cuerpo").addClass(estilo);

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

            @yield('ready')
        })

    </script>


    </body>

</html>