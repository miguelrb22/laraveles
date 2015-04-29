@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('js/fancybox/source/jquery.fancybox.css') }}" type="text/css" media="screen" />
@endsection

@section('anuncio')
    @include('extras.anuncio')
@endsection

@section('buscador')
    @include('extras.buscador')
@endsection

@section('contenido')
            <!-- CONTENIDO AQUI -->
    <br>

    <div class="row">
        <section class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img class="img-rounded img-responsive" src="{{ asset($franquicia->logo_url) }}">
                <br>
                <table class="table-responsive">
                    <tr>
                        <td>{{$franquicia->nombre_comercial}}</td>
                    </tr>
                    <tr>
                        <td>{{$franquicia->direccion}}</td>
                    </tr>
                    <tr>
                        <td>{{$franquicia->cp. ' ' . $franquicia->ciudad}}</td>
                    </tr>
                    <td>{{$franquicia->web}}</td>
                    </td>
                </table>

                <hr>
                <h5>Galería de imágenes</h5>

                <table class="table-responsive">
                    <tr>
                        <td>
                            <a class="fancybox" rel="group" href="1.png" title="imagen 1">
                                <img class="img-responsive" src="{{ asset('images/1.png') }}">
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
                    <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                    <h2> {{ $franquicia->nombre_comercial }}</h2>
                    <br>
                    <p>{{$franquicia->descripcion}}</p>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table id="tperfil" class="responsive table table-hover">
                        <tbody>
                        <tr>
                            <td class="text-center" colspan="2"><strong>Franquicias y Negocios</strong></td>
                        </tr>
                        <tr>
                            <td>Inversión inicial:</td>
                            <td> {{$franquicia->inversion}} €</td>
                        </tr>
                        <tr>
                            <td>Canon de entrada:</td>
                            <td> {{$franquicia->canon_entrada}} </td>
                        </tr>
                        <tr>
                            <td>Royalty:</td>
                            <td> {{$franquicia->royalty}} </td>
                        </tr>
                        <tr>
                            <td>Canon publicitario:</td>
                            <td>{{$franquicia->canon_publicitario}}</td>
                        </tr>
                        <tr>
                            <td>Zona de exclusividad:</td>
                            <td> @if($franquicia->zona_exclusividad)
                                     {{ 'Si' }}
                                    @else
                                     {{ 'No' }}
                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Amortización:</td>
                            <td>{{$franquicia->amortizacion}}</td>
                        </tr>
                        <tr>
                            <td>Vigencia del contrato:</td>
                            <td>{{$franquicia->duracion_contrato}}</td>
                        </tr>
                        <tr>
                            <td>Población mínima:</td>
                            <td>{{$franquicia->poblacion_minima}} hab</td>
                        </tr>
                        <tr>
                            <td>Superficie mínima:</td>
                            <td> @if($franquicia->superficie_minima === 0)
                                    {{'-'}}
                                 @else
                                    {{$franquicia->superficie_minima . ' m2'}}
                                 @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Personal:</td>
                            <td> {{$franquicia->personal}} personas</td>
                        </tr>
                        <tr>
                            <td>Requisitos del local:</td>
                            <td>{{$franquicia->requisitos_local}}</td>
                        </tr>
                        <tr>
                            <td>Perfil del franquiciado:</td>
                            <td>{{$franquicia->perfil_franquiciado}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 5%">

                    <table id="tperfil" class="responsive table table-hover">
                        <tbody>
                        <tr>
                            <td class="text-center" colspan="2"><strong>Organización y expansión</strong></td>
                        </tr>
                        <tr>
                            <td>Creación de empresa:</td>
                            <td>{{$franquicia->anyo_creacion}}</td>
                        </tr>
                        <tr>
                            <td>Inicio de expansión:</td>
                            <td>{{$franquicia->inicio_expansion}}</td>
                        </tr>
                        <tr>
                            <td>Red de España:</td>
                            <td>{{$franquicia->red_spain}}</td>
                        </tr>
                        <tr>
                            <td>Zona preferentes:</td>
                            <td>{{$franquicia->zonas_preferentes}}</td>
                        </tr>
                        <tr>
                            <td>Nacionalidad::</td>
                            <td>{{$franquicia->nacionalidad}}</td>
                        </tr>
                        <tr>
                            <td>Red en extranjero:</td>
                            <td>
                                @if($franquicia->red_extranjero)
                                    {{ 'Si' }}
                                @else
                                    {{ 'No' }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Nº de países:</td>
                            <td>@if($franquicia->red_extranjero == 0)
                                    {{ '-' }}
                                @else
                                    {{ $franquicia->n_paises }}
                                @endif</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <lavel><h4>Claves de negocio</h4></lavel>
                    <ul class="claves">
                        <?php
                            $valores = explode(';',$franquicia->claves_negocio);

                            for($i = 0; $i<count($valores); $i++)
                            {
                                echo "<li>" . $valores[$i] . " </li>";
                            }
                        ?>
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
                                        <h4><strong>¿Desea información sobre otras franquicias de la misma actividad?</strong></h4>
                                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label>Marque las franquicias de su interés.</label>
                                        </div>
                                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <button>Desmarmar todas las opciones</button>
                                        </div>
                                        <br>
                                        <br>
                                        <table class="table-responsive">
                                            <tr>
                                                @foreach( $similares as $similar)
                                                    <td>
                                                        <label class="checkbox-inline" style="margin-right: 20px">
                                                            <input type="checkbox" id="{{$similar->nombre_comercial}}" value="{{$similar->nombre_comercial}}" checked> {{$similar->nombre_comercial}}
                                                        </label>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        </table>
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
@endsection
@section('der')
    @include('extras.derecha')
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ URL::asset('js/fancybox/source/jquery.fancybox.js')}}"></script>
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