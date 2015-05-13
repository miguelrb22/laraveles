<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Model\files;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Request;
use DB;
use Illuminate\Support\Facades\File;


class ImagesController extends Controller
{


    public function postDropzone(Request $r){

        if(!empty($_FILES))
        {

            //El nombre temporal del archivo en el cual se almacena el archivo cargado en el servidor.
            $temporalFile = $_FILES['file']['tmp_name'];

            //ruta del archivo donde se guardara
            $path = '/Applications/MAMP/htdocs/laraveles/public/imgfranquicias/';

            //Nombre del archivo ya cifrado
            //$cifrado = Hash::make($_FILES['file']['name']);
            $cifrado = Uuid::uuid4()->toString();

            $fileName=$path.''.$cifrado;

            $id = $r::Input('id');

            $fileType = $_FILES["file"]["type"];

            $fileSize=($_FILES["file"]["size"]/1024);

            $idFranquicia = Session::get('franquicia')->id;

            $file = new files();

            $file->id = $id;
            $file->nombre = $cifrado;
            $file->ruta = $path;
            $file->tamaño = $fileSize;
            $file->tipo = $fileType;
            $file->franquicia_id = $idFranquicia;
            $file->nombreOriginal = $_FILES['file']['name'];


            $dir = public_path().'/imgfranquicias/';

            if(move_uploaded_file($temporalFile,$dir.$cifrado))
            {
                //Session::forget('imgID');
                $id = DB::table('imagenes_franquicia')->insertGetId($file->attributesToArray());
                Session::put('imgID',$id); //le sumamos uno porque va 1 atrasado
                dd(Session::get('imgID',$id));
            }

        }
    }

    public function extraer(Request $r)
    {
        $idFranquicia = $r::Input('id');

        $imagenesFranquicia = files::where('franquicia_id', '=', $idFranquicia)->get();

        return $imagenesFranquicia;
    }

    public function borrarImagen(Request $r)
    {
        //Borramos la imagen de la carpeta
        $imagen = files::find($r::Input('id'));
        $filename = public_path().'/imgfranquicias/'.$imagen->nombre;

        if (File::exists($filename)) {

            File::delete($filename);
            //si borramos del fichero borramos de la base de datos
            $imagen->delete();
        }


    }

    public function getId()
    {
        return files::orderBy('id','DESC')->firstOrFail();

    }

}