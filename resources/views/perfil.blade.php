@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('js/fancybox/source/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::asset('css/jssocials.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/jssocials-theme-classic.css')}}">
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
                <img class="img-rounded img-responsive" src="">
                <br>
                <table class="table-responsive">
                    <tr>
                        <td><img class='img-responsive' src={{ url('/').$franquicia->logo_url}} alt='' width='100' heigth='100' style="margin-bottom: 3%"/></td>
                    </tr>
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

                @if(!$imagenes->isEmpty())
                    <table class="table-responsive">
                        <?php
                            for($i=0, $j=0; $i < count($imagenes); $i++,$j++)
                            {
                                if($j==0){

                                    echo "<tr>";
                                }

                                echo  "<td>";
                                echo    "<a class='fancybox-thumb' rel='fancybox-button' href='".url('/')."/images/imgfranquicias/".$imagenes[$i]->nombre."' title='".$imagenes[$i]->nombreOriginal."' >";
                                echo        "<img class='img-responsive' src='".url('/')."/images/imgfranquicias/".$imagenes[$i]->nombre."' alt='' width='100' heigth='100' />";
                                echo    "</a>";
                                echo  "</td>";


                                if($j==3){ echo "</tr>";
                                    $j= -1;
                                }
                            }

                        ?>
                    </table>
                @endif

            <hr>
    </div>
            <div class="col col-xs-12 col-md-12 col-sm-12 col-lg-12">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                        Noticias de esta franquicia
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">
                        <ul class="list-unstyled pull-left text-justify">
                            @if((!$publicaciones->isEmpty()))
                                @foreach($publicaciones as $publicacion)
                                    <li><a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.$publicacion->titulo.'/'.$publicacion->id)))}}">{{$publicacion->titulo}}</a></li>
                                @endforeach
                            @else
                                <div><strong>No hay noticias de esta franquicia</strong></div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            @if(!$franInIzq->isEmpty())
                <?php

                $a1 = mt_rand(0, count($franInIzq)-1);
                $a2 = mt_rand(0, count($franInIzq)-1);

                do{
                    $a2 = mt_rand(0, count($franInIzq)-1);
                }while($a2 == $a1)
                ?>
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a1]->nombre."/".$franInIzq[$a1]->nombre_comercial)))}}">
                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a1]->logo_url) }}"  alt="prueba" style="width: auto">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a2]->nombre."/".$franSupDer[$a2]->nombre_comercial)))}}">
                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a2]->logo_url) }}"  alt="prueba" style="width: auto">
                    </a>
                </div>
            @else
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                </div>
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                </div>

            @endif

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
                            <td>Nacionalidad:</td>
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
                    <br>
                    <br>
                    <div id="share"></div>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <hr id="separador">
                    <br/>
                    <div class="row panel panel-info">
                        <div class="panel-heading" style="background:#333">
                            <h4 class="atext">Formulario de contacto</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-group fcontacto" id="formulario_contacto">
                                <header>
                                    <p>Rellene los campos si quiere ponerse en contacto con el franquiciador </p>
                                </header>

                                <fieldset>
                                    <section>
                                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                                    </section>
                                    <section>
                                        <input type="text" name="apellidos" placeholder="Apellidos" class="form-control">
                                    </section>
                                    <section>
                                        <input type="text" name="email" placeholder="Email" class="form-control" required>
                                    </section>
                                    <section>
                                        <input type="text" name="telefono" placeholder="Telefono" class="form-control">
                                    </section>
                                    <section>
                                        <input type="text" name="cp" placeholder="Código Postal" class="form-control">
                                    </section>
                                    <section>
                                        <input type="text" name="pais" placeholder="País" class="form-control">
                                    </section>
                                    <section>
                                        <select class="form-control" name="provincia">
                                            <option class="selected" value="No contesta">¿Dónde abrirá su negocio?</option>
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
                                        <select class="form-control" name = "local">
                                            <option class="selected"  value="No contesta">¿Dispone de local?</option>
                                            <option value="si">Sí</option>
                                            <option value="si">No</option>
                                        </select>
                                    </section>
                                    <section>
                                        <select class="form-control" name="residencia_actual">
                                            <option class="selected" value="No contesta">Provincia de residencia actual</option>
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
                                                <input type="checkbox" name="informacion_deso"> Deseo recibir información sobre esta franquicia
                                            </label>
                                        </div>
                                    </section>
                                    <section>
                                        <textarea class="form-control areaform" rows="7" name= "observaciones" placeholder="Observaciones"></textarea>
                                    </section>
                                    <section>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="info_modificaciones">Deseo que me informen de modificaciones en la condiciones de esta franquicia así como de otras que tengan relación con este sector, o actividad.
                                            </label>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required name="privacidad"> *Estoy de acuerdo con los Términos de Uso y la Política de Privacidad de multifranquicias.com
                                            </label>
                                        </div>
                                    </section>
                                    <section>
                                        <h4><strong>¿Desea información sobre otras franquicias de la misma actividad?</strong></h4>
                                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label>Marque las franquicias de su interés.</label>
                                        </div>
                                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <button type="button" id="desmarcar" class="desmarcar">Desmarmar todas las opciones</button>
                                        </div>
                                        <br>
                                        <br>
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input type="hidden" name="email_franquicia" value="{{ $franquicia->email_contacto }}">
                                        <input type="hidden" name="nombre_franquicia" value="{{ $franquicia->nombre_comercial }}">


                                        <table class="table-responsive">
                                            <tr>
                                                @foreach( $similares as $similar)
                                                    <td>
                                                        <label class="checkbox-inline" style="margin-right: 20px">
                                                            <input class="similares" type="checkbox" name="similares[]" value="{{$similar->email_contacto.'%'.$similar->nombre_comercial}}" checked> {{$similar->nombre_comercial}}
                                                        </label>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        </table>
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


    <script type="text/javascript" src="{{ URL::asset('js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
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

    <!-- Add social sharing -->
    <script type="text/javascript" src="{{ URL::asset('js/jssocials.min.js') }}"></script>

    <script type="text/javascript">



    </script>
@stop


@section('ready')


    var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
    intputElements[i].oninvalid = function (e) {
    e.target.setCustomValidity("");
    if (!e.target.validity.valid) {
    if (e.target.name == "privacidad") {
    e.target.setCustomValidity("Debe de aceptar la política de privacidad para poder enviar el formulario");
    }}};}

    $('#formulario_contacto').submit(function(e){

    e.preventDefault();


    $.ajax({

    type: "POST",
    url: "{{ URL::route('contacto_franquicias') }}",
    data: $('#formulario_contacto').serialize(),
    dataType: "html"

    });

    });

    $(".desmarcar").on('click',function(){

    var string = $(".desmarcar").text()

    if(string.substring(0,1) === 'D'){
    $(".similares").prop('checked', false);
    $(".desmarcar").html('Marcar todas las franquicias');
    }else{
    $(".similares").prop('checked', true);
    $(".desmarcar").html('Desmarcar todas las franquicias');
    }

    });


    $(".fancybox-thumb").fancybox({
    prevEffect	: 'none',
    nextEffect	: 'none',
    helpers	: {
    title	: {
    type: 'outside'
    },
    thumbs	: {
    width	: 50,
    height	: 50
    }
    }
    });



    $("#share").jsSocials({
    shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"],
    url: "{{Request::url()}}",
    showLabel:true,
    showCount:true
    });

@endsection