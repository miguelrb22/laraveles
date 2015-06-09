<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;
use App\model\Categoria;
use App\model\Franquicia as Franquicia;
use App\model\FranquiciaSubcategoria;
use App\model\PaquetesActivos;
use App\model\Publicaciones;
use App\model\publicidad;
use App\model\PublicidadGeneral;
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

    /**
     * @return v\View
     * funcion que devuelve a la vista lista de articulos todos los articulos para una franquicia
     */
    public function editnoticia()
    {

        $franquicia = Session::get('franquicia');

        if (!is_null($franquicia)) {
            $id = $franquicia->id;
        } else $id = null;
        $publicaciones = Publicaciones::where('franquicia_id', '=', $id)->get();
        return view('area_privada.listado_articulos', compact('publicaciones'));
    }


    /**
     * @return v\View
     * vista crear categorias
     */
    public function categorias()
    {
        $categorias = Categoria::all();
        $subcategorias = \DB::table('subcategoria')->orderBy('nombre', 'asc')->get();
        return view('area_privada.categorias', compact('categorias','subcategorias'));
    }


    /**
     * @return v\View vista crear noticia
     */
    public function noticias()
    {
        return view('area_privada.noticias');
    }


    public function usuarios()
    {
        return view('area_privada.gestion_usuarios');
    }


    /**
     * @return v\View
     * Panel de publicidad general
     */
    public function pgeneral()
    {


        $publi = PublicidadGeneral::all();

        return view('area_privada.publicidad-general',compact('publi'));
    }

    /**
     * @return v\View
     * Funcion para que llama a la vista de modificar franquicia
     */

    public function modificar()
    {
        $franquicia = Session::get('franquicia');
        $id = $franquicia->id;
        $aux = PaquetesActivos::where('id', '=', $id)->get();

        //si no tiene la fila en paquetes activos se crea
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


    /**
     * @return v\View
     * Dropzone para asignar imagenes a las franquicias
     */
    public function imagenes()
    {
        return view('area_privada.imagenes');
    }



    /**
     * @param $id
     * @return v\View
     * Funcion que devuelve la vista donde se podrá editar un artículo
     */
    public function editpublicacion($id)
    {


        try {

            //publicacion a editar
            $publicacion = Publicaciones::find($id);

            //titulo del artículo
            $titulo = $publicacion->titulo;

            //url hacia el contenido del articulo
            $urlfile = $publicacion->contenido;

            //si existe guardo su contenido
            if (\File::exists($urlfile)) {
                $contenido = \File::get($urlfile);
            } else $contenido = "";

            //devuelvo la vista y le paso las variables que me van a hacer falta
            return view('area_privada.editar_noticia', compact('titulo', 'contenido','id'));

        }catch (exception $e){

            return view('errors.404');

        }


    }


}


