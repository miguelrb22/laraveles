<!-- INICIO BUSCADOR -->
<div class="row well_efect"  id="buscador" style="background:#99b433;margin:0;padding:10px;margin-top: 1%">
    <div id="busquedaT" class="row col col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">
        <h4 class="textoblanco">Búsqueda de franquicias </h4>
    </div>
    <div class="row col col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">
    </div>
    <!--<form class="form-inline col col-xs-12 col-sm-12 col-md-10 col-lg-10" style="margin:auto" method="">-->
    {!! Form::open (['action' => 'WebController@select' , 'method' =>'POST', 'class' => 'form-inline col col-xs-12 col-sm-12 col-md-10 col-lg-10' , 'id' => 'form-alta']) !!}
    <div class="form-group">
        <select class="form-control" name="categoria">
            <option value="-1" selected="">- Selecciona categoría -</option>
            <option value="4">Abogados</option>
            <option value="2">Administración de Fincas</option>
            <option value="3">Agencias de Viajes</option>
            <option value="1">Alimentación</option>
            <option value="5">Deportes</option>
            <option value="6">Educación</option>
            <option value="7">Eficiencia Energética</option>
            <option value="8">Fotografía</option>
            <option value="9">Hogar</option>
            <option value="10">Informática</option>
            <option value="11">Regalos, Fiestas y Juguetes</option>
            <option value="12">Inmobiliarias</option>
            <option value="13">Librerías y Material de oficina</option>
            <option value="14">Limpieza</option>
            <option value="15">Mensajería y Transporte</option>
            <option value="16">Modas</option>
            <option value="17">Negocios Especializados</option>
            <option value="18">Ocio</option>
            <option value="19">Ópticas</option>
            <option value="20">Publicidad e Impresión</option>
            <option value="21">Reciclaje Consumibles</option>
            <option value="22">Reformas y Suministros</option>
            <option value="23">Restauración</option>
            <option value="24">Salud y Belleza</option>
            <option value="25">Seguros</option>
            <option value="26">Servicios a Pymes</option>
            <option value="27">Servicios Asistenciales</option>
            <option value="28">Servicios Financieros</option>
            <option value="29">Telecomunicaciones</option>
            <option value="30">Tintorería y Arreglos</option>
            <option value="31">Vending</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="inversion">
            <option value="-1" selected="">- Rango de inversión -</option>
            <option value="0-20000">0 - 20.000</option>
            <option value="20001-40000">20.001 - 40.000</option>
            <option value="40001-60000">40.001 - 60.000</option>
            <option value="60001-80000">60.001 - 80.000</option>
            <option value="80001-100000">80.001 - 100.000</option>
            <option value="100001-150000">100.001 - 150.000</option>
            <option value="150001">+ de 150.000</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" placeholder="Nombre de franquicia" name="nombre">
    </div>
    <button type="submit" class="btn btn-default">Buscar</button>
    <div id="patrocinadoT" class="form-group pull-right">
        <label class="textoblanco">Patrocinado por </label>
    </div>

    {!! Form::Close() !!}
    <!--</form>-->
    <div class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <img id="patrocinado" class="img-responsive img-rounded" src="{{ asset('images/anunci.jpg') }}"  alt="prueba" style="width: auto">
    </div>
</div>
<!-- FIN BUSCADOR -->