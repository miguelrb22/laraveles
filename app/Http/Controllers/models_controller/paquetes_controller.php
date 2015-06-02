<?php


namespace App\Http\Controllers\models_controller;

use App\model\especial;
use App\model\PaquetesActivos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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
        //en la variable de session

        $idFranquicia = Session::get('franquicia')->id;

        //Obtenemos el nombre del paquete a actualizar
        $paquete = $request->Input('nombre_paquete');


        $Actualizar = PaquetesActivos::find($idFranquicia);


        /*if($request->Input('check') != null){

            $Actualizar->$paquete = '1';
            $Actualizar->save();

        }else{
            $Actualizar->$paquete = '0';
            $Actualizar->save();
        }*/

        //Para actualizar el periodo de vigencia del paquete
        //Vemos si el paquete es de categoria especial (exito,lowcost...)
        if($paquete === 'exito' || $paquete === 'rentables' || $paquete === 'baratas'
            || $paquete === 'lowcost' || $paquete === 'destacados')
        {
            //Si es paquete especial obtenemos su id de la tabla categoria_especial
            $tipoEspecial = especial::where('nombre', '=',$paquete)->get(['id']);




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