<?php


namespace App\Http\Controllers\models_controller;

use App\Model\Publicaciones;
use App\Model\Subcategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;


class publicacionController extends Controller
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

        $publicacion = new Publicaciones($request->all());
        dd($publicacion->contenido);
        //$publicacion->save();
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
        return true;
    }


    public function destroy($id)
    {
        //
    }

    public function cargar(Request $request)
    {


    }


}