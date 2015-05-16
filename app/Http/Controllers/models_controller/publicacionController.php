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