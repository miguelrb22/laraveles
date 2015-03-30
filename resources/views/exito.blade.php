@extends('master')

@section('main')
    <div class="row">
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="{{ asset('images/publicidad.gif') }}" class="img-responsive" alt="Responsive image">
                </div>
            </div>
            <div class="row"  style="background:#A4C7A8;margin:0;padding:10px;margin-top: 1%">
                <div id="busquedaT" class="row col col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">
                    <h4>Búsqueda de franquicias: </h4>
                </div>
                <div class="row col col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">
                </div>
                <form class="form-inline col col-xs-12 col-sm-12 col-md-10 col-lg-10" style="margin:auto">
                    <div class="form-group">
                        <select class="form-control" name="categoria">
                            <option value="1" selected="">- Selecciona categoría -</option>
                            <option value="2">Abogados</option>
                            <option value="3">Administración de Fincas</option>
                            <option value="4">Agencias de Viajes</option>
                            <option value="5">Alimentación</option>
                            <option value="6">Deportes</option>
                            <option value="7">Educación</option>
                            <option value="8">Eficiencia Energética</option>
                            <option value="9">Fotografía</option>
                            <option value="10">Hogar</option>
                            <option value="11">Informática</option>
                            <option value="12">Regalos, Fiestas y Juguetes</option>
                            <option value="13">Inmobiliarias</option>
                            <option value="14">Librerías y Material de oficina</option>
                            <option value="15">Limpieza</option>
                            <option value="16">Mensajería y Transporte</option>
                            <option value="17">Modas</option>
                            <option value="18">Negocios Especializados</option>
                            <option value="19">Ocio</option>
                            <option value="20">Ópticas</option>
                            <option value="21">Publicidad e Impresión</option>
                            <option value="22">Reciclaje Consumibles</option>
                            <option value="23">Reformas y Suministros</option>
                            <option value="24">Restauración</option>
                            <option value="25">Salud y Belleza</option>
                            <option value="26">Seguros</option>
                            <option value="27">Servicios a Pymes</option>
                            <option value="28">Servicios Asistenciales</option>
                            <option value="29">Servicios Financieros</option>
                            <option value="30">Telecomunicaciones</option>
                            <option value="31">Tintorería y Arreglos</option>
                            <option value="32">Vending</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="1" selected="">- Rango de inversión -</option>
                            <option value="2">0 - 20.000</option>
                            <option value="3">20.001 - 40.000</option>
                            <option value="4">40.001 - 60.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Nombre de franquicia">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <div id="patrocinadoT" class="form-group pull-right">
                        <label>Patrocinado por: </label>
                    </div>

                </form>
                <div class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <img id="patrocinado" class="img-responsive" src="{{ asset('images/anunci.jpg') }}"  alt="prueba" style="width: auto">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <section class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                            </div>
                            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
                            </div>
                        </section>
                        <section class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="well"></div>
                            <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                            <h2>Franquicias de Exito</h2>
                            <hr id="separador">
                            <div class="row">
                                <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <img class="img-rounded img-responsive" src="{{ asset('images/logo_perfil.jpg') }}">
                                </div>
                                <div class="col col-xs-4 col-sm-4 col-md-8 col-lg-8">
                                    <p>
                                        <a href="#"><h3>Karoon Pilates Studios</h3></a>
                                        <p>Comercialización de dulces Sweet Pharm C/ Me falta un tornillo, 7 47195 Arroyo de la Encomienda (Valladolid) http://www.sweet-pharm.com 5553 Sweet Pharm es un concepto innovador…</p>
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
                <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
            </div>
        </section>
    </div>
@endsection