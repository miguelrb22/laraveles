<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;
use App\model\Categoria;
use App\model\Franquicia as Franquicia;
use App\model\FranquiciaSubcategoria;
use App\model\PaquetesActivos;
use App\model\Publicaciones;
use App\model\subcategoria;
use Illuminate\Support\Facades\Session;
use Illuminate\View as v;
use Illuminate\Http\Request;
use Ramsey\Uuid\Console\Exception;

class AreaPrivadaController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {

        $franquicias = Franquicia::all();
        return view('area_privada.inicio', compact('franquicias'));
    }

    public function alta()
    {

        $categorias = Categoria::all(array('id', 'nombre'));
        $subcategorias = subcategoria::all(array('id', 'nombre', 'categoria_id'));
        return view('area_privada.alta', compact('subcategorias', 'categorias'));

    }

    public function publicidad()
    {

        $franquicia = Session::get('franquicia');
        $id = $franquicia->id;
        $paquetes = PaquetesActivos::where('id', '=', $id)->get();
        return view('area_privada.publicidad', compact('paquetes'));


    }

    public function editnoticia()
    {

        $franquicia = Session::get('franquicia');

        if (!is_null($franquicia)) {
            $id = $franquicia->id;
        } else $id = null;
        $publicaciones = Publicaciones::where('franquicia_id', '=', $id)->get();
        return view('area_privada.listado_articulos', compact('publicaciones'));
    }


    public function categorias()
    {
        $categorias = Categoria::all();
        return view('area_privada.categorias', compact('categorias'));
    }

    public function noticias()
    {
        return view('area_privada.noticias');
    }

    public function modificar()
    {
        $franquicia = Session::get('franquicia');
        $id = $franquicia->id;
        $aux = PaquetesActivos::where('id', '=', $id)->get();

        if ($aux->isEmpty()) {

            $PA = NEW PaquetesActivos();
            $PA->id = $id;
            $PA->save();
            $aux = PaquetesActivos::where('id', '=', $id)->get();
        }
        $paquetes = $aux[0];

        $franquicia_subcategoria = FranquiciaSubcategoria::where('franquicia_id', '=', $id)->get();
        $subcategorias_en_franquicia = array();

        foreach ($franquicia_subcategoria as $fs) {

            array_push($subcategorias_en_franquicia, $fs->subcategoria_id);
        }

        $categorias = Categoria::all(array('id', 'nombre'));
        $subcategorias = subcategoria::all(array('id', 'nombre', 'categoria_id'));
        return view('area_privada.update', compact('paquetes', 'categorias', 'subcategorias', 'subcategorias_en_franquicia'));
    }


    public function imagenes()
    {
        return view('area_privada.imagenes');
    }


    public function deletenoticia(Request $request)
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

    public function editpublicacion(Request $request)
    {


        return view('area_privada.editar_noticia');


    }

}


