<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 27/03/2015
 * Time: 9:16
 */

namespace App\Http\Controllers;


use App\model\Categoria;
use App\model\Franquicia;
use App\model\franquicia_nom_subcategoria;
use App\model\franquicia_subcategoria;
use App\model\franquicia_especial_subcategoria;
use App\model\Publicaciones;
use App\model\subcategoria;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use App\model\PaquetesActivos;
use App\model\files;
use Illuminate\Support\Facades\View;
use App\model\publicidad;
use Illuminate\Support\Facades\DB;


class WebController extends Controller {




    private $categorias_deplegables = null;
    private $patrocinadasB = null;
    private $franquiciasSupDer = null;
    private $franquiciasIzq = null;
    private $carousel = null;
    private $noticias_des = null;
    private $tam_carousel = 5;
    /**
     *
     */
    public function __construct()
    {
        //Compartimos todas las categorias
        $this->categorias_deplegables = Categoria::all();

        View::share('categorias', $this->categorias_deplegables);

        //Obtenemos las franquicias que están en patrocinadas del buscador
        $this->patrocinadasB = new Collection();

        $pbuscadorIds = PaquetesActivos::where('patrocinado_b', '=', 1)->get(array('id')); //Esto devuelve el id

        foreach ($pbuscadorIds as $id) {
            $franquicia = franquicia_especial_subcategoria::find($id->id);
            $this->patrocinadasB->push($franquicia);
        }

        View::share('patrocinadas', $this->patrocinadasB);
        //////



        //Obtenemos las franquicias que están en la parte superior derecha
        $this->franquiciasSupDer = new Collection();

        $supDerIds = PaquetesActivos::where('sup_derecha', '=', 1)->get(array('id'));

        foreach ($supDerIds as $id) {
            $franquicia = franquicia_especial_subcategoria::find($id->id);
            $this->franquiciasSupDer->push($franquicia);
        }

        View::share('franSupDer', $this->franquiciasSupDer);
        ////



        //Obtenemos las franquicias que están en la parte inferior izquierda
        $this->franquiciasIzq = new Collection();


        $supDerIds = PaquetesActivos::where('izquierda', '=', 1)->get(array('id'));

        foreach ($supDerIds as $id) {
            $franquicia = franquicia_especial_subcategoria::find($id->id);
            $this->franquiciasIzq->push($franquicia);
        }

        View::share('franInIzq', $this->franquiciasIzq);
        ////



        //Obtenemos las franquicias que están en el carousel---
        //$this->carousel = new publicidad();

        //obtenemos los ids de todas las franquicias con el carousel activo a 1 y de forma desordenada quitando la de pega
        //porque la buscamos explícitamente luego y dame solo cierta cantidad en este caso $this->tam_carousel
        $carouselIds = PaquetesActivos::where('carousel', '=', 1)
                                        ->where('id','<>',1)
                                        ->orderBy(DB::raw('RAND()'))
                                        ->take($this->tam_carousel)
                                        ->get(array('id'));
        //Creamos el array de datos obtenido de la tabla publicidad
        $arrayDatosCarousel = new Collection();

        //Comprobamos que hay alguna franquicia aparte de la 0 dentro de los ids del caruoselIds (franquicia 0 es la de pega)
        if(count($carouselIds) > 0)
        {
            //Si hay alguna franquicia aparte que ha contratado este servicio, pero son menos de 5,
            // obtenemos su publicidad y el resto rellenamos con la de pega.
            if(count($carouselIds) < $this->tam_carousel)
            {

                //sino iremos sacando las que hay más valores de pega
                //en este primer for
                foreach($carouselIds as $id)
                {
                    $publicidad =  publicidad::where('franquicia_id', '=',$id->id)
                                             ->where('idTipo_publicidad','=','1')->get();
                    //array_push($arrayDatosCarousel,$publicidad);
                    $arrayDatosCarousel->push($publicidad);
                }

                //Obtenemos las publicidades de la de pega que son la diferencia entre las normales y el tamaño total
                //5 en este caso
                $publicidadPega = publicidad::where('franquicia_id', '=',0)
                                            ->where('idTipo_publicidad','=','1')
                                            ->orderBy('idTipo_publicidad','DESC')->take($this->tam_carousel - count($carouselIds))->get();

                //Reccorremos el collection devuelto y almacenado en $publicidadPega y guardamos en el nuevo array
                for($i=0; $i < count($publicidadPega); $i++)
                {
                    $publicidad =  $publicidadPega[$i];
                    $arrayDatosCarousel->push($publicidad);

                }

                $this->carousel = $arrayDatosCarousel;


            }else{
                //sino esque seran 5
                foreach($carouselIds as $id)
                {
                    //metemos las 5 publicaciones aleatorias devueltas en el array.
                    $publicidad = publicidad::where('franquicia_id', '=',$id->id)
                                            ->where('idTipo_publicidad','=','1')->get();
                    $arrayDatosCarousel->push($publicidad);
                }

                $this->carousel = $arrayDatosCarousel;

            }
        }else
        {

            //Si solo esta la franquicia de pega "0" entra aquí entonces cogemos los ultimos 5 articulos
            //cuya franquicia es la 0 y cuyo tipo de publicidad es la 1 que es la de carousel.
            $this->carousel  = publicidad::where('franquicia_id', '=',1)
                                    ->where('idTipo_publicidad','=','1')
                                    ->orderBy('id','DESC')->get();

        }

        View::share('carousel',$this->carousel);
        ////--------

        //Obtenemos las franquicias que están en tienen  noticias destacadas a 1 en paquetes activos
        $this->noticias_des = new Collection();

        $noticiasDesIds = PaquetesActivos::where('noticia_des', '=', 1)->get(array('id'));

        foreach ($noticiasDesIds as $id) {
            $franquicia = publicacion::where('franquicia_id','=', $id->id); //falta concatenarle un where donde tipo sea destacado
            $this->noticias_des->push($franquicia);
        }

        View::share('noticiaDestacada', $this->noticias_des);
        ////

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


    /**
     * Devuelve la vista del home con los arrays necesarios para cargar franquicias baratas, destacadas, éxito de
     * la vista creada dinámicamente en la BD.
     *
     * @return Response
     */
    public function index()
    {
        //Obtenemos todos los datos de la base de datos que hay que pasar a la página principal como
        //las franquicias de éxito, rentables, destacadas, los articulos. carousel, patrocinadas
        $franquicias_exito = franquicia_especial_subcategoria::where('especial','=', 'exito')->groupBy('id')->get();
        $franquicias_baratas = franquicia_especial_subcategoria::where('especial','=', 'baratas')->groupBy('id')->get();
        $franquicias_rentables = franquicia_especial_subcategoria::where('especial','=', 'rentables')->groupBy('id')->get();
        $franquicias_lowcost = franquicia_especial_subcategoria::where('especial','=', 'lowcost')->groupBy('id')->get();
        $franquicias_destacadas = franquicia_especial_subcategoria::where('especial','=', 'destacados')->groupBy('id')->get();

        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        //Obtenemos las últimas 5 publicaciones para pasarlas a la vista principal
        $publicaciones = Publicaciones::take(10)->orderBy('id','DES')->get();

        //Obtenemos las categorias del buscador para cargarlas dinámicamente de la BD.
        $categorias = Categoria::all();
        return view('inicio',compact('franquicias_exito', 'franquicias_baratas','franquicias_rentables','franquicias_lowcost', 'franquicias_destacadas','publicaciones','patrocinadas'));
    }

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

        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        ///Obtenemos los parámetros del post///
        $categoria=$request::Input('categoria');
        $inversion = $request::Input('inversion');
        $nombre = $request::Input('nombre');
        $categorias = $this->categorias_deplegables; //para rellenar el desplegable
        $flag = false; //para saber si ha entrado en algun filtro.
        $franquicias = new Collection(); //inicializamos array vacio
        ///-------------------------------///

        ///Deficinicion de variables///
        //Obtenemos las subcategoria de una categoria dada ($categoria)
        $subcategorias = subcategoria::where('categoria_id', '=', $categoria )->get(['id','nombre']);
        ///Definimos la query///
        $query = new franquicia_nom_subcategoria;
        //$query = new Franquicia;
        ///-----------------///

        ///Vamos concatenando wheres para la busqueda segun existan los parámetros///
        if($categoria != -1 || $inversion != -1 || $nombre != '') {

            if ($inversion != -1) {
                $valores = explode('-',$inversion);

                $query = $query->where('inversion', '>=', $valores[0])->where('inversion' , '<=' ,$valores[1]);

                $flag = true;

            }
            if ($categoria != -1) {

                $listaIdsFranquicias = array(); //Lista con los ids de las franquicias que cumplen que la subcategoria es igual a la categoria pasada

                //Vamos extrayendo franquicias que cumplan la condicion de anterior y esta
                foreach($subcategorias as $id)
                {
                    $ids = franquicia_subcategoria::where('subcategoria_id', '=', $id->id)->get();
                    array_push($listaIdsFranquicias,$ids);
                }

                //Comprobamos si de ids no está vacia para hacer la igualacion, si está vacía devolvemos la vista si nada y no continuamos
                //Comprobamos antes si hay de franquicias para la subcategoria (cateogria) dada

                if(!empty($listaIdsFranquicias)) { //Falta comprobar
                    //Hacemos esta igualacion porque listaIds es un array con un collect dentro.
                    $listaIdsFranquicias = $listaIdsFranquicias[0];

                    $query = $query->where(function ($query) use ($listaIdsFranquicias) {

                        foreach ($listaIdsFranquicias as $franquicia) {

                            $query = $query->orWhere('id', '=', $franquicia->franquicia_id);

                        }
                    });
                    //Segundo filtro para que no devuelva todas las franquicias con un id que no es de la subcategoria buscada
                    $query = $query->where(function ($query) use ($subcategorias) {

                        foreach ($subcategorias as $subcategoria) {

                            $query = $query->orWhere('subcategoria_id', '=', $subcategoria->id);
                        }
                    });
                    $flag = true;
                }
            }

            if($nombre != '')
            {
                $query = $query->where('nombre_comercial' ,'like', '%'.$nombre.'%');
                $flag = true;
            }

            //Query para obtener las distintas categorias haciendo
            $query2 = clone $query;

            //Comprobamos si el flag está a true porque ha entrada en alfun filtro
            if($flag) {
                $franquicias = $query->get();
            }

            $resultados = count($franquicias);


            //Obtenemos si para la categoria pasada hay más de una subcategorias para llamar a una vista u otra
            $totalFranquicias = subcategoria::where('categoria_id', '=', $categoria )->count();

            if ($totalFranquicias > 1) {

                //Obtenemos todas las subcategorias devueltas por la query
                $subcategorias = $query2->distinct()->get(array('nombre'));

                return view('resultados', compact('franquicias', 'resultados','subcategorias'));

            }else{

                return view ('resultados_lista', compact('franquicias','resultados'));
            }
        }
        else{
            return redirect()->route('home');
        }
    }

    /**
     * @param $tipo es si pertenece a franquicias baratas, rentables, low cost o éxito
     */
    public function especiales($tipo){

        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

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
        $franquicias = franquicia_especial_subcategoria::where('especial', 'like', $tipo )->groupBy('id')->get();
        if(!$franquicias->isEmpty())
        {
            return view('especiales',compact('franquicias','tipo'));
        }else{

            return view('especiales',compact('franquicias','tipo'));
        }
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

        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        //Declaramos variables de asignacion.
        $lista = array();
        $subcategorias = array();

        //Obtenemos las categorias y subcategorias
        $lista_categorias = Categoria::all();
        $lista_subcategorias = subcategoria::all();

        foreach($lista_categorias as $categoria) {
            foreach($lista_subcategorias as $subcategoria){

                if($subcategoria->categoria_id === $categoria->id) {
                    array_push($subcategorias, $subcategoria->nombre);;
                }
            }

            array_push($lista, $categoria->nombre,$subcategorias);
            $subcategorias = array();
        }

        $categorias = $this->categorias_deplegables;
        return view ('franquicias',compact('lista'));
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
        $articulos = Publicaciones::where('tipo','=','1')->paginate(5);
        $total = Publicaciones::where('tipo','=','1')->count();
        $tipo = 1;
        return view ('noticias' ,compact('articulos','total','tipo'));
    }

    public function reportajes(){
        $articulos = Publicaciones::where('tipo','=','2')->paginate(5);
        $total = Publicaciones::where('tipo','=','2')->count();
        $tipo = 2;
        return view ('noticias' ,compact('articulos','total','tipo'));
    }

    /*
     * Método para cargar noticias según pinchamos en un número de página del paginador
     */
    public function masnoticias(Request $r)
    {
        $numpage = $r::Input('page')-1;
        $tipo = $r::Input('tipo');

        if($r::ajax()) {

            $result = null;
            if($tipo == 1) {
                $result = Publicaciones::where('tipo', '=', '1')->take(5)->skip($numpage * 5)->get();
            }else if($tipo == 2){
                $result = Publicaciones::where('tipo', '=', '2')->take(5)->skip($numpage * 5)->get();
            }

            $meses = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                "Septiembre", "Octube", "Noviembre", "Diciembre");

            $dias = array ("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado","Domingo");





            foreach($result as $res){

                $fecha = $res->created_at;

                //si los minutos aparecen con un dígito
                $minutos = $fecha->minute;
                //si la hora aparece con un digito
                $hora = $fecha->hour;

                if(strlen($hora) < 2){$hora = "0".$hora;}

                if(strlen($minutos) < 2) {$minutos = "0".$minutos;}


                $res->contenido =  substr(strip_tags($res->contenido),0,400);
                $img =  URL::asset($res->url_imagen);
                $url =  strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","", $res->titulo).'/'.$res->id)));
                $titulo = $res->titulo;
                $contenido = $res->resumen;
                $ffinal = $dias[$fecha->dayOfWeek-1]. " " . $fecha->day . " de " . $meses[$fecha->month-1] . " de " . $fecha->year . " " .
                          $hora . ":" . $minutos;

                echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>";
                echo "<div class='col col-xs-5 col-sm-5 col-md-2 col-lg-2'>";
                echo "<a href='$url'><img src='$img' class='img-responsive img-rounded' alt='Imagen articulo' width='110' height='110'></a>";
                echo "</div>";
                echo "<div class='col col-xs-7 col-sm-7 col-md-10 col-lg-10'>";
                echo "<h3 id='tituloNotica'><a href='$url'> $titulo </a></h3>";
                echo "<p  id='textoNoticia'> $contenido "."... "." <a href='$url'>seguir leyendo</a></p>";
                echo "<p class='fecha_publicacion pull-right'> $ffinal</p>";
                echo "</div>";
                echo "</div>";
                echo "<section class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>";
                echo "<hr>";
                echo "</section>";


            }
        }
    }

    public function servicios()
    {
        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        //obtenemos las categorias del desplegable
        $categorias = $this->categorias_deplegables;
        return view('servicios_garantias',compact('patrocinadas'));
    }

    /**
     * Devolvemos a la vista la lista de subcategorias que cumplen los requisitos de la busqueda de una subcategoria
     * @param $tipo
     * @return \Illuminate\View\View
     */
    public function subcategoria($tipo){

        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        $lista_franquicias = \Illuminate\Support\Facades\Session::get('franquicias');
        $franquicias =  new \Illuminate\Database\Eloquent\Collection();


        foreach ($lista_franquicias as $franquicia)
        {
            if($franquicia->nombre === $tipo)
                $franquicias->add($franquicia);
        }

        $resultado = count($franquicias);

        return view('resultados_subcategorias', compact('tipo','resultado','franquicias','patrocinadas'));
    }

    /**
     * Llama a vista dinámica para mostrar las frnaquicias de una categoria si la
     * busqueda procede de la pestaña franquicias
     * @param $tipo es el parametro que indíca de que subcategoria o categoria hay que devolver la lista
     * de franquicias
     */
    public function franquiciasTipo($tipo)
    {
        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        //Parseamos el nombre de la categoria pasado por parámetro tipo por si tiene caracteres - y en la vista
        $tipo = str_replace('-',' ',$tipo);
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
                    return $controller->callAction('index', array('tipo' => $categoria, 'patrocinadas' => $patrocinadas ));
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

    /**
     * Para mostrar las publicaciones
     * @param $titulo pasado por la url que se refiere al titulo del articulo
     * @param $id pasado por url que se refiere al id de el articulo en cuestión en la BD
     * @return \Illuminate\View\View la vista de visualización del articulo con los datos necesarios
     */
    public function showpublicacion($titulo,$id)
    {

        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        $articulo = Publicaciones::where('id','=',$id)->get();

        $url = $articulo[0]->contenido;
        $articulo[0]->contenido =  \File::get($url);

        return view('publicacion',compact('articulo'));
    }

    /**
     * Este método obtiene todos los datos de perfil de una franquicia seleccionada y los devuelve
     * a la vista perfil
     * @param $nombre de la franquicia
     * @param $tipo de la franquicia
     * @return \Illuminate\View\View la vista perfil con los parametros necesarios
     */
    public function perfil($nombre, $tipo)
    {
        //cogemos las patrocinadas inicializadas en el constructor y las pasamos a la vista a traves de la variable definida
        $patrocinadas = $this->patrocinadasB;

        //Obtenemos la franquicia por el nombre pasado desde el routes.
        $franquicia = Franquicia::where('nombre_comercial', '=', $nombre)->firstOrFail();

        //Obtenemos franquicias de la misma categoria.
        //Le pasamos el id de esta franquicia para que la exluya en peticion a la BD
        //$controller = app::make(categoriaController::class);
        //$similares = $controller->callAction('franquiciasTipo', array('tipo' => $tipo, 'idFranquicia' => $franquicia->id));
        $similares = $this->franquiciasMismoTipo($tipo,$franquicia->id);

        //obtenemos las noticias de esta franquicia para pasarlas también a la información del perfil
        $publicaciones = Publicaciones::where('franquicia_id','=', $franquicia->id)->get();

        //Obtenemos las imagenes de la tabla 1:N de imagenes_franquicia
        $imagenes = files::where('franquicia_id','=',$franquicia->id)->get();

        //Devolvemos la vista con los parámetros. (la franquicia, la lista de franquicias de la misma categoria y las publicaciones)
        return view('perfil', compact('franquicia','similares','publicaciones','imagenes'));
    }

    /**
     * Este método devuelve una lista de las franquicias de mismo tipo a la actual de la vista.
     * @param $tipo de categoria o subcategoria
     * @param $id de la franquicia que queremos que exluya de la lista por ser la que está viendose en la vista actual
     * @return array
     */
    public function franquiciasMismoTipo($tipo,$id){

        //Buscamos todos las franquicias de este tipo en las subcategorias puesto que un nombre de categoria se crea también en subcategoria
        //obtenemos primero los id de la subcategoria en las tablas intermedias n:m
        $idSubcategoria = subcategoria::where('nombre', '=', $tipo)->get();
        //$idCategoria = Categoria::where('nombre', '=', $tipo)->get();

        //Definimos variables de asignacion
        $lista_franquicias = array();

        if(!$idSubcategoria->isEmpty()){
            //Obtenemos los ids de las franquicias del mismo tipo de la tabla n:m excepto la que se está visualizando
            //para una categoria
            $idsFranquiciasSub = franquicia_subcategoria::where('subcategoria_id', '=', $idSubcategoria[0]->id )
                ->where('franquicia_id', '<>', $id)->get();

            foreach($idsFranquiciasSub as $franquicia)
            {
                $franquicia = Franquicia::where('id' , '=', $franquicia->franquicia_id)->firstOrFail();
                array_push($lista_franquicias,$franquicia);
            }
        }

        return $lista_franquicias;
    }

    public function enviarformulariofranquicia(Request $request){

        $data = array
        (
            'nombre' => $request::input('nombre'),
            'apellidos' => $request::input('apellidos'),
            'email' => $request::input('email'),
            'telefono' => $request::input('telefono'),
            'cp' => $request::input('cp'),
            'pais' => $request::input('pais'),
            'abrir' => $request::input('provincia'),
            'local' => $request::input('local'),
            'residencia' => $request::input('residencia_actual'),
            'informacion' => $request::input('observaciones'),

        );

        $similares = $request::input('similares');
        $toEmail = $request::input('email_franquicia');
        $toName = $request::input('nombre_franquicia');
        $fromEmail = 'info@multifranquicias.com';
        $fromName = 'Multifranquicias';


        try {

            \Mail::send('emails.contacto', $data, function ($message) use ($fromName, $fromEmail,$toEmail,$toName) {
                $message->to($toEmail, $toName);
                $message->from($fromEmail, $fromName);
                $message->subject('Una persona está interesada en su franquicia');
            });

        }catch (Exception $e){}


        if($similares) {

            foreach ($similares as $similar) {


                $destinatario = explode('%', $similar);


                try {

                    $toEmail = $destinatario[0];
                    $toName = $destinatario[1];

                    \Mail::send('emails.contacto', $data, function ($message) use ($fromName, $fromEmail,$toEmail,$toName) {
                        $message->to($toEmail, $toName);
                        $message->from($fromEmail, $fromName);
                        $message->subject('Una persona está interesada en su franquicia');
                    });

                }catch (Exception $e){}


            }
        }

        return 1;

    }

}


