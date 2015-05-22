<?php


namespace App\Http\Controllers\models_controller;

use App\model\Publicaciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as Image;


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


        $uuid1 = Uuid::uuid4();
        $contenido = $request->input('contenido');
        $nombre = $uuid1->toString() . ".txt";
        $url = public_path().'/articulos/'.$nombre;

        \File::put($url, $contenido);

        $resumen =  substr(strip_tags(\File::get($url)), 0, 400);

        $request->merge(array('contenido' =>  $url, 'resumen' =>  $resumen));

        $publicacion = new Publicaciones($request->all());


        if($publicacion->franquicia_id=='-1'){$publicacion->franquicia_id=null;}


        //obtenemos el campo file definido en el formulario

       if($file = $request->file('file')) {


           $uuid1 = Uuid::uuid4();

           $extension = $file->getClientOriginalExtension();
           //obtenemos el nombre del archivo
           $nombre = $uuid1->toString() . "." . $extension;

           //indicamos que queremos guardar un nuevo archivo en el disco local
           \Storage::disk('publicaciones')->put($nombre, \File::get($file));

           $url = '/images/publicaciones/' . $nombre;

           $publicacion->url_imagen = $url;


           //img resize
           $location = public_path().$url;
           $image = Image::make($location);
           $image->resize(200,200);
           $image->save($location);

       }

        $publicacion->save();
    }


    //Funcion que edita finalmente la publicacion
    public function edit(Request $request){


        //cargao la publicacion
        $id = $request->input('id');
        $publicacion = Publicaciones::find($id);

        //modificlo el titulo
        $titulo = $request->input('titulo');
        $publicacion->titulo = $titulo;

        if($file = $request->file('file')) {


            $uuid1 = Uuid::uuid4();

            $extension = $file->getClientOriginalExtension();
            //obtenemos el nombre del archivo
            $nombre = $uuid1->toString() . "." . $extension;

            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('publicaciones')->put($nombre, \File::get($file));

            $url = '/images/publicaciones/' . $nombre;


            //borro la imagen antigua del servidor
            $imagen_antigua = $publicacion->url_imagen;
            \File::delete(public_path().$imagen_antigua);


            //asigno la nueva imagen
            $publicacion->url_imagen = $url;


            //img resize
            $location = public_path().$url;
            $image = Image::make($location);
            $image->resize(200,200);
            $image->save($location);

        }

        //actualizo el contenido del archivo
        \File::put($publicacion->contenido,$request->contenido);
        //actualizo
        $publicacion->update($publicacion->attributesToArray());

    }



    public function destroy(Request $request)
    {

        try {

            //id de la publicacion que ha que borrar
            $id = $request->input('aux');

            //Obtengo la informacion de la publicacion que desean borrar
            $publicacion = Publicaciones::find($id);


            //borramos su imagen
            if (!$publicacion->url_imagen == null) {
                \File::delete(public_path() . $publicacion->url_imagen);
            }

            //borramos su contenido
            if (!$publicacion->contenido == null) {
                \File::delete($publicacion->contenido);
            }


            //borrar de la BBDD
            $publicacion->delete();

        } catch (Exception $e) {

            return false;
        }

        return 1;


    }



}