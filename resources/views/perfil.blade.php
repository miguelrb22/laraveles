@extends('master')

@section('include')
<link rel="stylesheet" href="{{ URL::asset('js/fancybox/source/jquery.fancybox.css') }}" type="text/css" media="screen" />
@stop

@section('main')
<div class="row" >
    <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="{{ asset('images/publicidad.gif') }}" class="img-responsive" alt="Responsive image">
            </div>
        </div>
        <!-- CONTENIDO AQUI -->
        <br>
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <section class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-rounded img-responsive" src="{{ asset('images/logo_perfil.jpg') }}">
                            <p>Prestación de Servicios deportivos, especializados en impartir el métido pilates</p>

                            <table class="table-responsive">
                                <tr>
                                    <td>Karoon Pilates S.L.</td>
                                </tr>
                                <tr>
                                    <td>C/ Micer Mascó, 26 pta2</td>
                                </tr>
                                <tr>
                                    <td>46010 Valencia (Valencia)</td>
                                </tr>
                                <td>http://www.karoonpilates.com</td>
                                </td>
                            </table>

                            <hr>
                            <h5>Galería de imágenes</h5>

                            <table class="table-responsive">
                                <tr>
                                    <td>
                                        <a class="fancybox" rel="group" href="1.png" title="imagen 1">
                                            <img class="img-responsive" src="{{ asset('images/1.png') }}"></img>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fancybox" rel="group" href="2.jpg" title="imagen 2">
                                            <img class="img-responsive" src="{{ asset('images/2.jpg') }}">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fancybox" rel="group" href="3.jpg" title="imagen 3">
                                            <img class="img-responsive" src="{{ asset('images/3.jpg') }}">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fancybox" rel="group" href="1.png" title="imagen 4">
                                            <img class="img-responsive" src="{{ asset('images/1.png') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-2">
                            <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                        </div>
                    </section>
                    <section class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <section>
                            <br/>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row well">pagination aquí </div>
                                <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                                <h2>Nombre Franquicia </h2>
                                <p>Sweet Pharm es un concepto innovador de dulces y golosinas con formato de medicamento y, lo que es más importante, concebido para arrancar una sonrisa al paciente-cliente con cada tratamiento de esta terapia dulce.

                                    Es un modelo de negocio innovador, adaptado a los tiempos que corren, y lo más importante, de BAJA INVERSION.

                                    Contamos con dos modelos de negocio: Tienda o Quisco, para que puedas elegir el modelo que más se adapte a sus necesidades.

                                    Nuestro cuidado en los productos como en el local esta estudiado al más mínimo detalle, ofreciendo al cliente una experiencia nunca vivida anteriormente en la compra de unos dulces.

                                    Tras toda esta experiencia vivida, creemos que tenemos todos esos factores para ofrecer, con toda confianza, un modelo de negocio único y exitoso.

                                    Actualmente estamos presentes en dos centros comerciales de reconocido prestigio, CC Rio Shopping y CC La vaguada.</p>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table id="tperfil" class="responsive table table-hover">
                                    <tbody>
                                    <tr>
                                        <td class="text-center" colspan="2"><strong>Franquicias y Negocios</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Inversion incial:</td>
                                        <td>60.000  </td>
                                    </tr>
                                    <tr>
                                        <td>Derecho a entrada:</td>
                                        <td>No hay</td>
                                    </tr>
                                    <tr>
                                        <td>Royalty:</td>
                                        <td>No hay</td>
                                    </tr>
                                    <tr>
                                        <td>Zona de exclusividad:</td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>Amortización:</td>
                                        <td>2 años</td>
                                    </tr>
                                    <tr>
                                        <td>Vigencia del contrato:</td>
                                        <td>5 años</td>
                                    </tr>
                                    <tr>
                                        <td>Población mínima:</td>
                                        <td>30.000 hab</td>
                                    </tr>
                                    <tr>
                                        <td>Superficie mínima:</td>
                                        <td>16 M2</td>
                                    </tr>
                                    <tr>
                                        <td>Vigencia del contrato:</td>
                                        <td>5 años</td>
                                    </tr>
                                    <tr>
                                        <td>Personal:</td>
                                        <td>3,5</td>
                                    </tr>
                                    <tr>
                                        <td>Requisitos del local:</td>
                                        <td>Plazas, paseos marítimos, calles peatonales y centros comerciales</td>
                                    </tr>
                                    <tr>
                                        <td>Perfil del franquiciado:</td>
                                        <td>Dinámico, responsable y comprometido</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table id="tperfil" class="responsive table table-hover">
                                    <tbody>
                                    <tr>
                                        <td class="text-center" colspan="2"><strong>Organización y expansión</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Creación de empresa:</td>
                                        <td>1978</td>
                                    </tr>
                                    <tr>
                                        <td>Inicio de expansión:</td>
                                        <td>2001</td>
                                    </tr>
                                    <tr>
                                        <td>Red de España:</td>
                                        <td>43 (1 propio, 42 franquiciados)</td>
                                    </tr>
                                    <tr>
                                        <td>Zona preferentes:</td>
                                        <td>Principales localidad turísticas: Cataluña, Madrid, Levante y Andalucía...</td>
                                    </tr>
                                    <tr>
                                        <td>Amortización:</td>
                                        <td>2 años</td>
                                    </tr>
                                    <tr>
                                        <td>Nacionalidad::</td>
                                        <td>Española</td>
                                    </tr>
                                    <tr>
                                        <td>Red en extranjero:</td>
                                        <td>Sí</td>
                                    </tr>
                                    <tr>
                                        <td>Nº de países:</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <lavel><h4>Claves de negocio</h4></lavel>
                                <ul>
                                    <li>Negocio global basado en una completa gama de productos</li>
                                    <li>Productos de altísima calidad</li>
                                    <li>Con ingresos todo el año</li>
                                    <li>Cesión a franquiciados de maquinaria especial, paneles decorativos, cartelería...</li>
                                    <li>Formación profesional inicial y continuada al franquiciado</li>
                                </ul>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <H2>PARTE SOCIAL SHARING</H2>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <H2>PARTE MAS CATEGORIA</H2>
                            </div>
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr id="separador">
                                <br/>
                                <div class="row panel panel-info">
                                    <div class="panel-heading" style="background:#333">
                                        <h4>Formulario de contacto</h4>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-group fcontacto" novalidate="novalidate">
                                            <header>
                                                <p>Rellene los campos si quiere ponerse en contacto con el franquiciador </p>
                                            </header>

                                            <fieldset>
                                                <section>
                                                    <input type="text" name="username" placeholder="Nombre" class="form-control">
                                                </section>
                                                <section>
                                                    <input type="text" name="username" placeholder="Apellidos" class="form-control">
                                                </section>
                                                <section>
                                                    <input type="text" name="username" placeholder="Email" class="form-control">
                                                </section>
                                                <section>
                                                    <input type="text" name="username" placeholder="Telefono" class="form-control">
                                                </section>
                                                <section>
                                                    <input type="text" name="username" placeholder="Código Postal" class="form-control">
                                                </section>
                                                <section>
                                                    <input type="text" name="username" placeholder="País" class="form-control">
                                                </section>
                                                <section>
                                                    <select class="form-control">
                                                        <option class="selected" value="">¿Dónde abrirá su negocio?</option>
                                                        <option value="Albacete">Albacete</option>
                                                        <option value=" Alicante/Alacant"> Alicante/Alacant</option>
                                                        <option value=" Almería"> Almería</option>
                                                        <option value=" Araba/Álava"> Araba/Álava</option>
                                                        <option value=" Asturias"> Asturias</option>
                                                        <option value=" Avila"> Ávila</option>
                                                        <option value=" Badajoz"> Badajoz</option>
                                                        <option value=" Balears">Illes Balears</option>
                                                        <option value=" Barcelona"> Barcelona</option>
                                                        <option value=" Bizkaia"> Bizkaia</option>
                                                        <option value=" Burgos"> Burgos</option>
                                                        <option value=" Cáceres"> Cáceres</option>
                                                        <option value=" Cádiz"> Cádiz</option>
                                                        <option value=" Cantabria"> Cantabria</option>
                                                        <option value=" Castellon"> Castellón/Castelló</option>
                                                        <option value=" Ciudad Real"> Ciudad Real</option>
                                                        <option value=" Córdoba"> Córdoba</option>
                                                        <option value=" Coruña"> Coruña</option>
                                                        <option value=" Cuenca"> Cuenca</option>
                                                        <option value=" Gipuzkoa"> Gipuzkoa</option>
                                                        <option value=" Girona"> Girona</option>
                                                        <option value=" Granada"> Granada</option>
                                                        <option value=" Guadalajara"> Guadalajara</option>
                                                        <option value=" Huelva"> Huelva</option>
                                                        <option value=" Huesca"> Huesca</option>
                                                        <option value=" Jaén"> Jaén</option>
                                                        <option value=" León"> León</option>
                                                        <option value=" Lleida"> Lleida</option>
                                                        <option value=" Lugo"> Lugo</option>
                                                        <option value=" Madrid"> Madrid</option>
                                                        <option value=" Málaga"> Málaga</option>
                                                        <option value=" Murcia"> Murcia</option>
                                                        <option value=" Navarra"> Navarra</option>
                                                        <option value=" Ourense"> Ourense</option>
                                                        <option value=" Palencia"> Palencia</option>
                                                        <option value=" Palmas">Las Palmas</option>
                                                        <option value=" Pontevedra"> Pontevedra</option>
                                                        <option value=" Rioja">La Rioja</option>
                                                        <option value=" Salamanca"> Salamanca</option>
                                                        <option value=" Santa Cruz de Tenerife"> Santa Cruz de Tenerife</option>
                                                        <option value=" Segovia"> Segovia</option>
                                                        <option value=" Sevilla"> Sevilla</option>
                                                        <option value=" Soria"> Soria</option>
                                                        <option value=" Tarragona"> Tarragona</option>
                                                        <option value=" Teruel"> Teruel</option>
                                                        <option value=" Toledo"> Toledo</option>
                                                        <option value=" Valencia/València"> Valencia/València</option>
                                                        <option value=" Valladolid"> Valladolid</option>
                                                        <option value=" Zamora"> Zamora</option>
                                                        <option value=" Zaragoza"> Zaragoza</option>
                                                        <option value=" Ceuta"> Ceuta</option>
                                                        <option value=" Melilla"> Melilla</option>
                                                    </select>
                                                </section>
                                                <section>
                                                    <select class="form-control">
                                                        <option class="selected" value="">¿Dispone de local?</option>
                                                        <option value="si">Sí</option>
                                                        <option value="si">No</option>
                                                    </select>
                                                </section>
                                                <section>
                                                    <select class="form-control">
                                                        <option class="selected" value="">Provincia de residencia actual</option>
                                                        <option value="Albacete">Albacete</option>
                                                        <option value=" Alicante/Alacant"> Alicante/Alacant</option>
                                                        <option value=" Almería"> Almería</option>
                                                        <option value=" Araba/Álava"> Araba/Álava</option>
                                                        <option value=" Asturias"> Asturias</option>
                                                        <option value=" Avila"> Ávila</option>
                                                        <option value=" Badajoz"> Badajoz</option>
                                                        <option value=" Balears">Illes Balears</option>
                                                        <option value=" Barcelona"> Barcelona</option>
                                                        <option value=" Bizkaia"> Bizkaia</option>
                                                        <option value=" Burgos"> Burgos</option>
                                                        <option value=" Cáceres"> Cáceres</option>
                                                        <option value=" Cádiz"> Cádiz</option>
                                                        <option value=" Cantabria"> Cantabria</option>
                                                        <option value=" Castellon"> Castellón/Castelló</option>
                                                        <option value=" Ciudad Real"> Ciudad Real</option>
                                                        <option value=" Córdoba"> Córdoba</option>
                                                        <option value=" Coruña"> Coruña</option>
                                                        <option value=" Cuenca"> Cuenca</option>
                                                        <option value=" Gipuzkoa"> Gipuzkoa</option>
                                                        <option value=" Girona"> Girona</option>
                                                        <option value=" Granada"> Granada</option>
                                                        <option value=" Guadalajara"> Guadalajara</option>
                                                        <option value=" Huelva"> Huelva</option>
                                                        <option value=" Huesca"> Huesca</option>
                                                        <option value=" Jaén"> Jaén</option>
                                                        <option value=" León"> León</option>
                                                        <option value=" Lleida"> Lleida</option>
                                                        <option value=" Lugo"> Lugo</option>
                                                        <option value=" Madrid"> Madrid</option>
                                                        <option value=" Málaga"> Málaga</option>
                                                        <option value=" Murcia"> Murcia</option>
                                                        <option value=" Navarra"> Navarra</option>
                                                        <option value=" Ourense"> Ourense</option>
                                                        <option value=" Palencia"> Palencia</option>
                                                        <option value=" Palmas">Las Palmas</option>
                                                        <option value=" Pontevedra"> Pontevedra</option>
                                                        <option value=" Rioja">La Rioja</option>
                                                        <option value=" Salamanca"> Salamanca</option>
                                                        <option value=" Santa Cruz de Tenerife"> Santa Cruz de Tenerife</option>
                                                        <option value=" Segovia"> Segovia</option>
                                                        <option value=" Sevilla"> Sevilla</option>
                                                        <option value=" Soria"> Soria</option>
                                                        <option value=" Tarragona"> Tarragona</option>
                                                        <option value=" Teruel"> Teruel</option>
                                                        <option value=" Toledo"> Toledo</option>
                                                        <option value=" Valencia/València"> Valencia/València</option>
                                                        <option value=" Valladolid"> Valladolid</option>
                                                        <option value=" Zamora"> Zamora</option>
                                                        <option value=" Zaragoza"> Zaragoza</option>
                                                        <option value=" Ceuta"> Ceuta</option>
                                                        <option value=" Melilla"> Melilla</option>
                                                    </select>
                                                </section>
                                                <section>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Deseo recibir información sobre esta franquicia
                                                        </label>
                                                    </div>
                                                </section>
                                                <section>
                                                    <textarea class="form-control areaform" rows="7" placeholder="Observaciones"></textarea>
                                                </section>
                                                <section>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Deseo que me informen de modificaciones en la condiciones de esta franquicia así como de otras que tengan relación con este sector, o actividad.
                                                        </label>
                                                    </div>
                                                </section>
                                                <section>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" required> *Estoy de acuerdo con los Términos de Uso y la Política de Privacidad de multifranquicias.com
                                                        </label>
                                                    </div>
                                                </section>
                                                <section>
                                                    <p>Enviando estos datos usted acepta la política de privacidad.</p>
                                                </section>
                                            </fieldset>

                                            <footer>
                                                <section>
                                                    <button type="submit" class="btn btn-primary pull-right">
                                                       Enviar formulario
                                                    </button>
                                                </section>
                                            </footer>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
        <!-- CONTENIDO AQUI-->
    </section>

    <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>
        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row panel panel-info text-center">
                <div class="panel-heading" id="panelfe" style="background:#333">
                    <i class="glyphicon glyphicon-thumbs-up"></i> Destacadas
                </div>
                <div class="panel-body" style="margin-bottom: -16px;">
                    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h3>NOMBRE</h3>
                        <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba" >
                    </div>
                    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:30px">
                        <h3>NOMBRE</h3>
                        <img class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}" alt="prueba">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

@section('javascript')
    <script type="text/javascript" src=src="{{ URL::asset('js/fancybox/source/jquery.fancybox.js')}}"></script>
    <!-- Add mousewheel plugin (this is optional) -->

    <script type="text/javascript" src="{{ URL::asset('js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js') }}"></script>

    <!-- Add fancyBox -->
    <script type="text/javascript" src= "{{ URL::asset('js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5')}}"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>

    <script type="text/javascript">
    $(".fancybox").fancybox({
        //config 1
        //openEffect	: 'none',
        //closeEffect	: 'none'

        //Config 2
        prevEffect		: 'none',
        nextEffect		: 'none',
        closeBtn		: false,
        helpers		: {
            title	: { type : 'inside' },
            buttons	: {}
        }
    });
    </script>
@stop