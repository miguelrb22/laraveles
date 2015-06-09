<?php


namespace App\Http\Controllers\models_controller;

use App\model\publicidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class publicidad_general extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }


    public function update(Request $request)
    {

        $publicidad = publicidad::find($request->id);
        $publicidad->inicio = $request->inicio;
        $publicidad->final = $request->fin;
        $publicidad->save();

    }

    public  function del(Request $request){


      publicidad::find($request->aux)->delete();


    }


}