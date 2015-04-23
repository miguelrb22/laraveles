<?php namespace App\Http\Controllers\models_controller;

use App\Model\Franquicia;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;


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
        $franquicia = new Franquicia($request::all());
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
        //
    }


    public function destroy($id)
    {
        //
    }

    public function cargar(Request $request)
    {
        $id = $request::input('id');
        $franquiciacargada = Franquicia::findOrFail($id);

    }

}
