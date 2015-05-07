<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 27/03/2015
 * Time: 9:16
 */

namespace App\Http\Controllers;


use App\Model\Categoria;
use App\Model\Franquicia;
use App\Model\franquicia_categoria;
use App\Model\franquicia_nom_subcategoria;
use App\Model\franquicia_subcategoria;
use App\Model\franquicias_especiales;
use App\Model\Publicaciones;
use App\Model\Subcategoria;
use App\Model\especial;
use Illuminate\Support\Facades\Request;
use phpDocumentor\Reflection\DocBlock\Type\Collection;
use Illuminate\Support\Facades\URL;

class WebController extends Controller {


    private $categorias_deplegables = null;

    /**
     *
     */
    public function __construct(){
        $this->categorias_deplegables = Categoria::all();
    }
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /*
     * Devolcer la vista privacidad
     */
    public function privacidad()
    {
        return view('privacidad');
    }

    /*
     * Devolcer la vista aviso
     */
    public function aviso()
    {
        return view('aviso-legal');
    }

    public function emprendedor()
    {
        return view('emprendedor-consultoria');
    }

    /**
     * Este método es llamado desde el formulario de busqueda del buscador de franquicias
     * @param Request $request la peticion enviada por el form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function select(Request $request){

            ///Obtenemos los parámetros del post///
            $categoria=$request::Input('categoria');
            $inversion = $request::Input('inversion');
            $nombre = $request::Input('nombre');
            $categorias = $this->categorias_deplegables; //para rellenar el desplegable
            ///-------------------------------///

            ///Deficinicion de variables///
            //Obtenemos las subcategoria de una categoria dada ($categoria)
            $subcategorias = subcategoria::where('categoria_id', '=', $categoria )->get(['id','nombre']);

            ///Definimos la query///
            $query = new franquicia_nom_subcategoria;
            ///-----------------///

            ///Vamos concatenando wheres para la busqueda segun existan los parámetros///
            if($categoria != -1 || $inversion != -1 || $nombre != '') {

                if ($inversion != -1) {
                    $valores = explode('-',$inversion);

                    $query = $query->where('inversion', '>=', $valores[0])->where('inversion' , '<=' ,$valores[1]);
                }
                if ($categoria != -1) {

                    $listaFinalFranquicias = array();

                    //Vamos extrayendo franquicias que cumplan la condicion de anterior y esta
                    foreach($subcategorias as $id)
                    {
                        $listaIdFranquicias = franquicia_subcategoria::where('subcategoria_id', '=', $id->id)->get();
                        array_push($listaFinalFranquicias,$listaIdFranquicias);
                    }

                    //Comprobamos antes si hay de franquicias para la subcategoria (cateogria) dada
                    if(!empty($listaFinalFranquicias)) { //Falta comprobar
                        $listaFinalFranquicias = $listaFinalFranquicias[0];

                        $query = $query->where(function ($query) use ($listaFinalFranquicias) {

                            foreach ($listaFinalFranquicias as $franquicia) {

                                $query = $query->orWhere('id', '=', $franquicia->franquicia_id);

                            }
                        });
                    }

                }

                if($nombre != '')
                {
                    $query = $query->where('nombre_comercial' ,'like', '%'.$nombre.'%');
                }

                //Query para obtener las distintas categorias haciendo
                $query2 = clone $query;

                $franquicias = $query->get();
                $resultados = count($franquicias);

                //Obtenemos si para la categoria pasada hay más de una subcategorias para llamar a una vista u otra
                $totalFranquicias = subcategoria::where('categoria_id', '=', $categoria )->count();

                if ($totalFranquicias > 1) {

                    //Obtenemos todas las subcategorias devueltas por la query
                    $subcategorias = $query2->distinct()->get(array('nombre'));
                    return view('resultados', compact('franquicias', 'resultados', 'categorias','subcategorias'));
                }else{

                    return view ('resultados_lista', compact('franquicias','resultados', 'categorias'));
                }
            }
            else{
                return redirect()->route('home');
            }


            //Si la categoria no es nula, es decir se ha enviado valor por el post hacemos la redireccion
            /*if($categoria != null)
            {

                return redirect()->route('categoria', ['tipo' => str_replace(' ', '-', $categoria->nombre), 'inversion' => $inversion]);
            }else {
                return redirect()->route('home');
            }*/
    }

    /**
     * @param $tipo es si pertenece a franquicias baratas, rentables, low cost o éxito
     */
    public function especiales($tipo){

        //Obtenemos las categorias del desplegable
        $categorias = $this->categorias_deplegables;

        //Primero calculamos el id del tipo de categoria especial según el tipo pasado por parámetro
        $id_categoria_especial = especial::where('nombre', 'like', $tipo)->get();

        //Obtenemos los registros de la tabla intermedia que cumplen que el idcategoria especial es igual
        //al obtenido anteriormente
        if(!$id_categoria_especial->isEmpty()) {
            $query = franquicias_especiales::where('idcategoria_especial', '=', $id_categoria_especial[0]->id)->get();
        }else{
            //Temporal que hacemos?
            dd("no existen franquicias de este tipo");
        }

        if(!$query->isEmpty()) {
            //Obtenemos las franquicias que estan en $query
            $franquicias = array();

            foreach ($query as $q) {
                //dd("franquicia id". $q->franquicia_idfranquicia);
                $franquicia = Franquicia::where('id', '=', $q->franquicia_idfranquicia)->get();
                array_push($franquicias, $franquicia);
            }

            $franquicias = $franquicias[0];
            return view('especiales',compact('franquicias','tipo','categorias'));

        }else{
            //Temporal que hacemos?
            dd("no hay franquicias de este tipo: ".$tipo);

        }
    }

    public function buscar()
    {
        return view('busqueda');
    }

    public function quiensoy()
    {
        return view('quien-soy');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function franquicias(){
        $categorias = $this->categorias_deplegables;
        return view ('franquicias',compact('categorias'));
    }

    public function franquiciadores(){
        return view ('franquicias-consultoria');
    }

    public function dudasgenerales(){
        return view ('dudas-generales');
    }

    public function dudasfranquicias(){

        return view ('dudas-franquicias');
    }

    public function resultados(){
        return view ('resultados');
    }
    /*
     * Para cargar las primeras noticias nada más abrir la página
     */
    public function noticias(){
        $articulos = Publicaciones::paginate(5);
        $total = Publicaciones::count();
        return view ('noticias' ,compact('articulos','total'));
    }

    /*
     * Metodo para cargar noticias según pinchamos en un número de página del paginador
     */
    public function masnoticias(Request $r)
    {
        $numpage = $r::Input('page')-1;

        if($r::ajax()) {
            $result = Publicaciones::take(5)->skip($numpage*5)->get();

            foreach($result as $res){

                $res->contenido =  substr(strip_tags($res->contenido),0,400);
                $img =  URL::asset($res->url_imagen);
                $urln = URL::route('publicacion_individual', array($res->titulo));
                $titulo = $res->titulo;
                $contenido = $res->contenido;



                echo "<div class='row'>";
                echo "<div class='col col-xs-5 col-sm-5 col-md-2 col-lg-2'>";
                echo "<img src='$img' class='img-rounded' alt='Imagen articulo' width='110' height='110'>";
                echo "</div>";
                echo "<div class='col col-xs-7 col-sm-7 col-md-10 col-lg-10'>";
                echo "<h3 id='tituloNotica'><a href='$urln'> $titulo </a></h3>";
                echo "<p  id='textoNoticia'> $contenido "."... "." <a>seguir leyendo</a></p>";
                echo "<p class='fecha_publicacion pull-right'> 21-02-2012 }}</p>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
        }
    }

    public function servicios()
    {
        //obtenemos las categorias del desplegable
        $categorias = $this->categorias_deplegables;
        return view('servicios_garantias',compact('categorias'));
    }

    /**
     * Devolvemos a la vista la lista de subcategorias que cumplen los requisitos de la busqueda de una subcategoria
     * @param $tipo
     * @return \Illuminate\View\View
     */
    public function subcategoria($tipo){

         $lista_franquicias = \Illuminate\Support\Facades\Session::get('franquicias');
         $franquicias =  new \Illuminate\Database\Eloquent\Collection();


        foreach ($lista_franquicias as $franquicia)
        {
            if($franquicia->nombre === $tipo)
                $franquicias->add($franquicia);
        }

        $resultado = count($franquicias);

        //dd("franquicias". $franquicias);
        return view('resultados_subcategorias', compact('tipo','resultado','franquicias'));
    }


    private function Categorias(){

        $this->categorias_deplegables = Categoria::all();
        return $this->categorias_deplegables;
    }

    public function showpublicacion($id)
    {

        $articulo = Publicaciones::where('titulo','=',$id)->get();


        return view('publicacion',compact('articulo'));
    }
}


