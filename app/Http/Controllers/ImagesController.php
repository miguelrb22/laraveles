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


    public function postdropzone(Request $r){

        if(!empty($_FILES))
        {
            //
            //El nombre temporal del archivo en el cual se almacena el archivo cargado en el servidor.
            $temporalFile = $_FILES['file']['tmp_name'];

            //ruta del archivo donde se guardara
            $path = '/Applications/MAMP/htdocs/laraveles/public/imgfranquicias/';

            //Nombre del archivo ya cifrado
            //$cifrado = Hash::make($_FILES['file']['name']);
            $cifrado = Uuid::uuid4()->toString();



            $id = $r::Input('id');

            $fileType = $_FILES["file"]["type"];

            $fileSize=($_FILES["file"]["size"]/2056);

            $idFranquicia = Session::get('franquicia')->id;

            $file = new files();

            //Obtenemos la extension de filetype que tiene el formato image/pgn
            $extension = explode("/",$fileType);

            $file->id = $id;
            $file->nombre = $cifrado.'.'.$extension[1];
            $file->ruta = $path;
            $file->tamaño = $fileSize;
            $file->tipo = $fileType;
            $file->franquicia_id = $idFranquicia;
            $file->nombreOriginal = $_FILES['file']['name'];


            //Parte de redimension.
            /*switch(strtolower($_FILES['file']['type']))
            {
                case 'image/jpeg':
                    $image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
                    break;
                case 'image/png':
                    $image = imagecreatefrompng($_FILES['file']['tmp_name']);
                    break;
                case 'image/gif':
                    $image = imagecreatefromgif($_FILES['file']['tmp_name']);
                    break;
                default:
                    exit('Unsupported type: '.$_FILES['file']['type']);
            }


            // Target dimensions
            $max_width = 50;
            $max_height = 50;

            // Get current dimensions
            $old_width  = imagesx($image);
            $old_height = imagesy($image);

            // Calculate the scaling we need to do to fit the image inside our frame
            $scale = min($max_width/$old_width, $max_height/$old_height);

            // Get the new dimensions
            $new_width  = ceil($scale*$old_width);
            $new_height = ceil($scale*$old_height);

            // Create new empty image
            $new = imagecreatetruecolor($new_width, $new_height);

            // Resize old image into new
            imagecopyresampled($new, $image,
                0, 0, 0, 0,
                $new_width, $new_height, $old_width, $old_height);

            // Catch the imagedata
            ob_start();
            imagejpeg($new, NULL, 90);
            $data = ob_get_clean();

            // Destroy resources
            imagedestroy($image);
            imagedestroy($new);*/

            //la ruta de la imagen para añadirla al nombre completo
            $dir = public_path().'/imgfranquicias/';

            if(move_uploaded_file($temporalFile,$dir.$cifrado.'.'.$extension[1]))
            {
                //Guardamos en la BD los datos de la imagen
                $file->save();
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