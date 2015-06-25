<?php


namespace App\Http\Controllers\models_controller;

use App\model\publicidad;
use App\model\tipo_publicidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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

    public  function delall(Request $request){



        $officialDate = Carbon::now()->toDateString();

        $publicidad = publicidad::where('final','<',$officialDate)->delete();

    }

    public function recuadros(Request $request){

        if($request->input('derecha')){
            $tp = tipo_publicidad::find(3);
            $tp->recuadros = $request->input('derecha');
            $tp->save();
        }

        if($request->input('izquierda')){
            $tp = tipo_publicidad::find(4);
            $tp->recuadros = $request->input('izquierda');
            $tp->save();
        }

        if($request->input('destacados')){
            $tp = tipo_publicidad::find(8);
            $tp->recuadros = $request->input('destacados');
            $tp->save();
        }

        if($request->input('carousel')){
            $tp = tipo_publicidad::find(1);
            $tp->recuadros = $request->input('carousel');
            $tp->save();
        }

        if($request->input('noticia_des')){
            $tp = tipo_publicidad::find(7);
            $tp->recuadros = $request->input('noticia_des');
            $tp->save();
        }

        if($request->input('entrevista')){
            $tp = tipo_publicidad::find(13);
            $tp->recuadros = $request->input('entrevista');
            $tp->save();
        }

        if($request->input('noticias')){
            $tp = tipo_publicidad::find(14);
            $tp->recuadros = $request->input('noticias');
            $tp->save();
        }
    }


}