<?php


namespace App\Http\Controllers\models_controller;

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

        //Obtenemos el id de la franquicia que estamso editando que estan cargada
        //en la variable de session

        $idFranquicia = Session::get('franquicia')->id;

        dd($request->Input('check'));
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