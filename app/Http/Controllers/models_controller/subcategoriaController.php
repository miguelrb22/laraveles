<?php


namespace App\Http\Controllers\models_controller;

use App\Model\Subcategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;


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


    public function destroy($id)
    {
        //
    }

    public function cargar(Request $request)
    {


    }


}