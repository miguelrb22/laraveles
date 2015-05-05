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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use phpDocumentor\Reflection\DocBlock\Type\Collection;

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

                    //return redirect()->route('categoria', ['tipo' => str_replace(' ', '-', $categoria)]);
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
        //$id_categoria_especial = especial::where('nombre', 'like', $tipo)->get();

        //Obtenemos los registros de la tabla intermedia que cumplen que el idcategoria especial es igual
        //al obtenido anteriormente
        /*if(!$id_categoria_especial->isEmpty()) {
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

        }*/
        $franquicias = franquicia_nom_subcategoria::where('especial', 'like', $tipo )->get();
        if(!$franquicias->isEmpty())
        {
            return view('especiales',compact('franquicias','tipo','categorias'));
        }else{
            //Que hacemos?
            dd("no hay franquicias de este tipo");
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

        //Declaramos variables de asignacion.
        $lista = array();
        $subcategorias = array();

        //Obtenemos las categorias y subcategorias
        $lista_categorias = Categoria::all();
        $lista_subcategorias = subcategoria::all();

        foreach($lista_categorias as $categoria) {
            foreach($lista_subcategorias as $subcategoria){

                if($subcategoria->categoria_id === $categoria->id) {
                    //dd("subcategoria nombre ". $subcategoria->nombre);
                    array_push($subcategorias, $subcategoria->nombre);
                    //dd("entra");
                }
            }

            array_push($lista, $categoria->nombre,$subcategorias);
            $subcategorias = array();
        }

        $categorias = $this->categorias_deplegables;
        return view ('franquicias',compact('categorias','lista'));
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
            return response()->json($result);
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

        return view('resultados_subcategorias', compact('tipo','resultado','franquicias'));
    }


    private function Categorias(){

        $this->categorias_deplegables = Categoria::all();
        return $this->categorias_deplegables;
    }

    /**
     * Llama a vista dinámica para mostrar las frnaquicias de una categoria si la
     * busqueda procede de la pestaña franquicias
     * @param $tipo es el parametro que indíca de que subcategoria o categoria hay que devolver la lista
     * de franquicias
     */
    public function franquiciasTipo($tipo)
    {
        //Obtenemos el id de la subcategoria o categoria por el nombre pasado en la url
        $idSubcategoria = subcategoria::where('nombre', '=' , $tipo)->get();
        $idCategoria = Categoria::where('nombre', '=', $tipo)->get();

        /*if(!$idSubcategoria->isEmpty())
        {
            $franquicias = franquicia_nom_subcategoria::where("subcategoria_id", '=',$idSubcategoria[0]->id)->get();
            $resultados = count($franquicias);
            return view("dinamica",compact('franquicias','resultados','tipo'));
        }else{
            $franquicias = new \Illuminate\Database\Eloquent\Collection();
            $resultados = 0;
            return view("dinamica",compact('franquicias','resultados','tipo'));
        }*/

        //Si no existe como subcategoria o categoria redireccionamos a la vista principal
        if(!$idCategoria->isEmpty() || !$idSubcategoria->isEmpty())
        {
            //Comprobamos que si es subcategoria o categoria
            if(!$idCategoria->isEmpty()){

                //Parseamos el nombre de la categoria o subategoria pasado por la url y la volvemos a coger de la consulta por
                //si tiene tildes.
                $categoria = strtolower((str_replace('-',' ',$idCategoria[0]->nombre)));

                //comprobamos si tiene suscategorias primero
                $num_subcategorias = subcategoria::where('categoria_id', '=', $idCategoria[0]->id)->count();

                    if($num_subcategorias == 1)
                    {
                        //delegamos en un controlador que me devuelve la vista con los parametros asociados en este caso
                        //las subcategorias
                        //$controller = App::make(\App\Http\Controllers\areaprivada\subcategoriaController::class);
                        //return $controller->callAction('index', array('tipo' => $tipo , 'otro' => '1'));
                        $franquicias = franquicia_nom_subcategoria::where("subcategoria_id", '=',$idSubcategoria[0]->id)->get();
                        $resultados = count($franquicias);

                        return view("dinamica",compact('franquicias','resultados','categoria'));
                    }else {

                        //delegamos en un controlador que me devuelve la vista con los parametros asociados en este caso
                        //la lista de franquicias
                        $controller = app::make(\App\Http\Controllers\areaprivada\categoriaController::class);
                        return $controller->callAction('index', array('tipo' => $categoria));
                    }
             //sino sera subcategoria directamente
            }else{

                //Parseamos el nombre de la categoria o subategoria pasado por la url y la volvemos a coger de la consulta por
                //si tiene tildes.
                $categoria = strtolower((str_replace('-',' ',$idSubcategoria[0]->nombre)));

                //Obtenemos las franquicias que son de esta subcategoria.
                $franquicias = franquicia_nom_subcategoria::where("subcategoria_id", '=',$idSubcategoria[0]->id)->get();
                $resultados = count($franquicias);
                return view("dinamica",compact('franquicias','resultados','categoria'));
            }

        }
        else{
           //ambos son vacios no existe la categoria o subcategoria por tanto redirecioamos al index.
            return redirect('/');
        }
    }
}


