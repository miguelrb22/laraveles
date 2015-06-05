<?php


namespace App\Http\Controllers\models_controller;

use App\model\especial;
use App\model\PaquetesActivos;
use App\model\publicidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class paquetes_controller extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }


    public function create()
    {
        //
    }


    public function store(Request $request) {

    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }


    public function update($id)
    {

    }


    public function destroy($id)
    {
        //
    }

    //Para actualizar un paquete especial en la BD
    public function updateEspecial(Request $request){

        //Obtenemos el id de la franquicia que estamos editando, que está cargada
        //en la variable de session y lo añadimos al objeto request para poder hacer save() de todos los atributos
        $idFranquicia = Session::get('franquicia')->id;


        //Obtenemos el nombre del paquete a actualizar
        $paquete = $request->Input('nombre_paquete');


        //Creamos un nueva instancia publicidad a partir de los datos enviados en la petición request
        //y le añadimos el resto de atributos manualmente ya que la petición no los contiene todos
        $publicidad = new publicidad($request->all());


        $publicidad->setAttribute('franquicia_id',$idFranquicia);

        //Como en la BD se guardan la fechas con el formato YYYY-MM-DD tenenmos que parsearlas ya que la peticion
        //las envia como DD-MM-YYYY
        $inicio = Carbon::parse($publicidad->getAttribute('inicio'))->format('Y-m-d');
        $final = Carbon::parse($publicidad->getAttribute('final'))->format('Y-m-d');

        //Y los volvemos a insetar en el array de atributos para guardar el modelo entero en la BD
        $publicidad->setAttribute('inicio',$inicio);
        $publicidad->setAttribute('final',$final);


        //Hacemos update en paquetes activos para ponerle el paquete como activo para mostrarlo en el sitio
        //que estamos indicando puesto que luego se obtienen la información de esa tabla entre otras.
        $Actualizar = PaquetesActivos::find($idFranquicia);
        $Actualizar->$paquete = '1';
        $Actualizar->save();



        /*if($request->Input('check') != null){

            $Actualizar->$paquete = '1';
            $Actualizar->save();

        }else{
            $Actualizar->$paquete = '0';
            $Actualizar->save();
        }*/

        //Para actualizar el periodo de vigencia del paquete
        //Vemos si el paquete es de categoria especial (exito,lowcost...) o de otro tipo aunque aparte el form tiene
        //en el input el id del paquete
        if($paquete === 'exito' || $paquete === 'rentables' || $paquete === 'baratas'
            || $paquete === 'lowcost' || $paquete === 'destacados')
        {
            //Si es paquete especial obtenemos su id de la tabla categoria_especial
            $tipoEspecial = especial::where('nombre', '=',$paquete)->get(['id']);

            //$idEspecial = $tipoEspecial[0]->id;
        }else
        {
            $publicidad->save();
        }





        dd($request->Input('nombre_paquete'));
        //Primero actualizamos el paquete especifico poniendolo a 1 o a 0 dependiendo de la
        //peticion en la tabla paquetes activos para una franquicia determinada.

        //$paquetes = PaquetesActivos::where('id')
    }



}
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 22/5/15
 * Time: 12:15
 */