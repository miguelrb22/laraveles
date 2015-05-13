<?php

namespace App\Http\Controllers\models_controller;

use App\Model\Franquicia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session as Session;
use League\Flysystem\Exception;


class franquiciaController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $franquicia = new Franquicia($request->all());
        $franquicia->save();
    }


    public function show($id)
    {
        //
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
       try {

           $id = $request->input('id');
           $franquiciacargada = Franquicia::findOrFail($id);
           Session::put('franquicia', $franquiciacargada);
           $ses = Session::get('franquicia');
           return($ses->nombre_comercial);


       }catch (Exception $e){

           return($e->getMessage());
         }

    }

    public function guardarImagen()
    {

    }

}
