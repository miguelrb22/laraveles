<?php


namespace App\Http\Controllers\models_controller;

use App\model\subcategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class subcategoriaController extends Controller
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

        $subcategoria = new Subcategoria($request->all());
        $subcategoria->save();
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
        subcategoria::destroy($request->input('categoria_id'));
    }



    public function cargar(Request $request)
    {


    }


}