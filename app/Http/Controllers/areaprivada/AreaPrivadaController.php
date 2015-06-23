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
use phpDocumentor\Reflection\DocBlock\Type\Collection;
use Ramsey\Uuid\Console\Exception;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
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

        //Obtenemos la fecha del servidor para usarla en la selects
        $time = time();
        $time = date("Y-m-d", $time);

        $franquicia = Session::get('franquicia');
        $destacadas =  new Collection([]);
        $entrevistas = new Collection();


        if($franquicia != null) {

            //Comprobamos si tiene entrevistas para publicar esta franquicia.
            $entrevistas = publicidad::where('franquicia_id', '=', $franquicia->id)
                ->where('idtipo_publicidad', '=', 13)
                ->where('inicio', '<=', $time)//podriamos ahorrarnoslo y solo controlar que no se halla pasado
                ->where('final', '>=', $time)
                ->get(array('cantidad'));

            //Comprobamos si tiene noticias destacadas para publicar esta franquicia
            $destacadas = publicidad::where('franquicia_id', '=', $franquicia->id)
                ->where('idtipo_publicidad', '=', 7)
                ->where('inicio', '<=', $time)//podriamos ahorrarnoslo y solo controlar que no se halla pasado
                ->where('final', '>=', $time)
                ->get(array('cantidad'));

            return view('area_privada.noticias', compact('entrevistas', 'destacadas'));

        }else{
            $destacadas = publicidad::where('franquicia_id','=',99999999)->get();
            $entrevistas = publicidad::where('franquicia_id','=',99999999)->get();
            return view('area_privada.noticias', compact('entrevistas', 'destacadas'));
        }

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


    public function estadisticas()
    {
        return view('area_privada.estadisticas');
    }


    public function generarestadisticas()
    {


        $data = Franquicia::all();


        Excel::create('Filename', function($excel) use($data) {

            $excel->setTitle('Estadisticas');

            // Chain the setters
            $excel->setCreator('Multifranquicias')
                ->setCompany('Multifranquicias');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');


            $excel->sheet('Sheetname', function($sheet) use($data) {

                $sheet->fromModel($data,null,'A1',false,true);

                $sheet->row(1, function($row) {

                    // call cell manipulation methods
                    $row->setFontWeight('bold');


                });


            });

        })->download('xls');
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

    public function franquiciasApuntoCaducar(){

        $now = time();
        $now = date("Y-m-d", $now);

        $paquetes = DB::table("franquicia")->whereRaw('DATE_ADD(CURRENT_DATE, INTERVAL 7 DAY) >= fecha_vencimiento_ficha')->get(array('nombre_comercial','fecha_vencimiento_ficha','tf_contacto'));
        return $paquetes;

    }

    public function paquetesApuntoCaducar(){

        $now = time();
        $now = date("Y-m-d", $now);

        $paquetes = DB::table("publicidad_franquicias")->whereRaw('final >= DATE_ADD(CURRENT_DATE, INTERVAL 5 DAY)')->get();
        return $paquetes;

    }


}


