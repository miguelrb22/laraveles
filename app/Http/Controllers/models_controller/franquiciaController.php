<?php

namespace App\Http\Controllers\models_controller;

use App\Model\Franquicia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session as Session;
use League\Flysystem\Exception;
use Ramsey\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as Image;
use App\Model\FranquiciaHasEspecial as FHE;
use Illuminate\Support\Facades\DB AS DB;
use App\Model\FranquiciaSubcategoria as FS;


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


        if($file = $request->file('perfil')) {
            //Generar un id Unico
            $uuid1 = Uuid::uuid4();
            //Extension del archivo
            $extension = $file->getClientOriginalExtension();
            //obtenemos el nombre del archivo
            $nombre = $uuid1->toString() . "." . $extension;
            //indicamos que queremos guardar una nueva imagen de perfil
            \Storage::disk('perfiles')->put($nombre, \File::get($file));

            $url = '/images/perfiles/' . $nombre;

            $franquicia->logo_url = $url;


            //img resizes
            $location = public_path().$url;
            $image = Image::make($location);
            $image->resize(200,200);
            $image->save($location);

        }

        $id = DB::table('franquicia')->insertGetId($franquicia->attributesToArray());
        $categorias_especiales = $request->input('especial');
        $categorias = $request->input('categoria');


        if(!empty($categorias_especiales)){


            foreach($categorias_especiales as $ce){

                $fhe = New FHE();
                $fhe->franquicia_idfranquicia = "$id";
                $fhe->idcategoria_especial= $ce;
                $fhe->save();


            }

        }

        if(!empty($categorias)){


            foreach($categorias as $ca){

                $fs = New FS();
                $fs->franquicia_id = "$id";
                $fs->subcategoria_id= $ca;
                $fs->save();


            }

        }

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
