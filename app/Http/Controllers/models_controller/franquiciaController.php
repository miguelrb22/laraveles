<?php

namespace App\Http\Controllers\models_controller;

use App\model\Franquicia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session as Session;
use League\Flysystem\Exception;
use Ramsey\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as Image;
use App\model\FranquiciaHasEspecial as FHE;
use Illuminate\Support\Facades\DB AS DB;
use App\model\FranquiciaSubcategoria as FS;
use Illuminate\Support\Facades\Redirect;


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


    public function update(Request $request)
    {

        $franquicia = new Franquicia($request->all());
        $bdfranquicia  = Franquicia::find($request->id);


        if ($file = $request->file('perfil')) {


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
            $location = public_path() . $url;
            $image = Image::make($location);
            $image->resize(200, 200);
            $image->save($location);


            if (!$bdfranquicia->logo_url == null) {
                \File::delete(public_path() . $bdfranquicia->logo_url);
            }

        }



        $bdfranquicia->update($franquicia->attributesToArray());


        $id = $request->id;
        $categorias_especiales = $request->input('especial');
        $categorias = $request->input('categoria');


        //actualizar categorias especiales

        DB::table('paquetes_activos')->where('id', '=', $id)
            ->update(['especial_lc' => 0, 'especial_ex' => 0, 'especial_ba' => 0, 'especial_re' => 0, 'destacado_categoria' => 0]);

        DB::table('franquicia_has_categoria_especial')->where('franquicia_idfranquicia', '=', $id)->delete();

        if (!$categorias_especiales==null){
            foreach ($categorias_especiales as $ce) {

                $fhe = New FHE();
                $fhe->franquicia_idfranquicia = "$id";
                $fhe->idcategoria_especial = $ce;
                $fhe->save();


            }
         }
        /////////////


        DB::table('franquicia_subcategoria')->where('franquicia_id', '=', $id)->delete();

        if(!empty($categorias)){


            foreach($categorias as $ca){
                $fs = New FS();
                $fs->franquicia_id = "$id";
                $fs->subcategoria_id= $ca;
                $fs->save();

            }
        }

        Session::put('franquicia', Franquicia::find($request->id));

        return Redirect::route('modificar_franquicia');
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
