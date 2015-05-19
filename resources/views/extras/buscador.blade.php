<!-- INICIO BUSCADOR -->
<div class="row well_efect buscador" >
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
            @for($i=0; $i< count($categorias); $i++)
                <option value="{{$categorias->id}}">{{$categorias[$i]->nombre}}</option>
            @endfor
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

    @if(!$patrocinadas->isEmpty())
        <?php
            //Numero aleatorio para sacar imagenes patrocinadas aleatorias de las existentes
            $a1 = mt_rand(0,count($patrocinadas)-1);
        ?>
        <div class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$patrocinadas[$a1]->nombre."/".$patrocinadas[$a1]->nombre_comercial)))}}">
                <img id="patrocinado" class="img-responsive img-rounded" src="{{ asset($patrocinadas[$a1]->logo_url) }}"  alt="prueba" style="width: auto">
            </a>
        </div>
    @else
        <div class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <img id="patrocinado" class="img-responsive img-rounded" src="{{ asset('images/seform.gif') }}"  alt="prueba" style="width: auto">
        </div>
    @endif
</div>
<!-- FIN BUSCADOR -->