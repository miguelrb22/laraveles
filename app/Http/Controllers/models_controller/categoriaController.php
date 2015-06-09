<?php


namespace App\Http\Controllers\models_controller;

use App\model\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;


class categoriaController extends Controller
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

        $categoria = new Categoria($request->all());
        $categoria->save();
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


    public function delete(Request $request)
    {

        Categoria::destroy($request->input('categoria_id'));
    }

    public function cargar(Request $request)
    {


    }


}