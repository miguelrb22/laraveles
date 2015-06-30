<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 27/03/2015
 * Time: 9:16
 */

namespace App\Http\Controllers;


use App\model\Categoria;
use App\model\EstadisticasDiarias;
use App\model\Franquicia;
use App\model\franquicia_nom_subcategoria;
use App\model\franquicia_subcategoria;
use App\model\Publicaciones;
use App\model\subcategoria;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use App\model\files;
use Illuminate\Support\Facades\View;
use App\model\publicidad;
use Illuminate\Support\Facades\DB;
use App\model\publicidad_franquicias;
use App\model\tipo_publicidad;
use App\model\publicidad_especial;
use App\model\destacadas_subcategoria;
use App\model\franquicias_no_destacadas;


class WebController extends Controller {




    private $categorias_deplegables = null;
    private $patrocinadasB = null;
    private $franquiciasSupDer = null;
    private $franquiciasIzq = null;
    private $carousel = null;
    private $noticias_des = null;
    private $banner_superior = null;
    private $numeroPublicidades = null;
    private $destacadas = null;
    private $exito = null;
    private $lowcost = null;
    private $rentables = null;
    private $entrevistas = null;
    private $publicaciones = null;
    private $banner_int = null;
    /**
     *
     */
    public function __construct()
    {
        //Obtenemos la fecha del servidor para usarla en la selects
        $time = time();
        $time = date("Y-m-d", $time);


        //Compartimos con las vistas todas las categorias
        $this->categorias_deplegables = Categoria::all();
        View::share('categorias', $this->categorias_deplegables);


        //Obtenemos la cantidad de publicidades (carousel, derecha, izquierda)  que va a haber en la página y la pasamos a las vistas.
        $this->numeroPublicidades = tipo_publicidad::all();
        View::share('numPublicaciones', $this->numeroPublicidades);


        //Obtenemos las franquicias que tienen superior derecha a 1 en paquetes activos
        $this->carousel = new Collection();

        //Obtenemos las publicidades que están en la parte superior derecha de la vista publicidad_franquicias
        //para pasarlas a las vista para que se muestren.
        $this->carousel = publicidad::where('idtipo_publicidad','=',1)
                                        ->where('franquicia_id','<>',1)
                                        ->where('inicio','<=',$time)
                                        ->where('final','>=',$time)
                                        ->orderBy(DB::raw('RAND()'))
                                        ->get();

        //Si el array carousel no está lleno con las franquicias de pago rellenamos con las de pega.
        if(count($this->carousel) < intval($this->numeroPublicidades[0]->recuadros)){

            //La diferencia entre el tamaño y los slider que hemos puesto que halla.
            $coger = intval($this->numeroPublicidades[0]->recuadros) - count($this->carousel);
                    $publicidad =  publicidad::where('franquicia_id', '=', 1)
                                                ->where('idTipo_publicidad','=','1')
                                                ->orderBy(DB::raw('RAND()'))
                                                ->take($coger)
                                                ->get();
                   $this->carousel = $this->carousel->merge($publicidad);
        }



        //impresion carousel

        //Compartimos el array con todas las vistas
        View::share('carousel',  $this->carousel);
        ////



        //Obtenemos las franquicias  que tienen  noticias destacadas a 1 en paquetes activos
        $this->noticias_des = new Collection();

        $numDestacadas = $this->numeroPublicidades[6]->recuadros;

        //obtenemos las publicaciones donde el tipo es = 2 que es de tipo noticia_des y perteniencia 2 que
        //indica que es de una franquicia que ha pagado
        $this->noticias_des = Publicaciones::take($numDestacadas)->orderBy('id','DES')
                                            ->where('fecha_publicacion','<=',$time)//quitarla?
                                            ->where('fecha_finalizacion','>=',$time)
                                            ->where('pertenencia','=',2)
                                            ->where('tipo','=',3)->get();

        //Si el array de noticias_des no está lleno con las franquicias de pago rellenamos con las de pega.
        if(count($this->noticias_des) < $numDestacadas){
                    //La diferencia entre las noticias_des devueltas y las noticia_des que hemos puesto que halla.
                $coger = intval($this->numeroPublicidades[6]->recuadros) - count($this->noticias_des);
                $resto = Publicaciones::take($coger)->orderBy('id','DES')
                                            ->where('fecha_publicacion','<=',$time)//quitarla?
                                            ->where('fecha_finalizacion','>=',$time)
                                            ->where('pertenencia','=',1)
                                            ->orderBy(DB::raw('RAND()'))
                                            ->where('tipo','=',3)->get();

            $this->noticias_des = $this->noticias_des->merge($resto);
        }


        //Compartimos el array con todas las vistas
        View::share('noticiaDestacada', $this->noticias_des);
        ////



        //Obtenemos las franquicias que tienen banner_superior a 1 en paquetes activos
        $this->banner_superior = new Collection();

        //Obtenemos las publicidades que están en el banner superior de la vista publicidad_franquicias
        //para pasarlas a las vista para que se muestren.
        $this->banner_superior = publicidad_franquicias::where('idtipo_publicidad','=',2)
                                                        ->where('inicio','<=',$time)
                                                        ->where('final','>=',$time)
                                                        ->orderBy(DB::raw('RAND()'))
                                                        ->take(1)
                                                        ->get(array('url_imagen','nombre','nombre_comercial','id'));



        //Compartimos el array con todas las vistas
        View::share('bannerSup', $this->banner_superior);
        ////



        //Obtenemos las franquicias que tienen superior derecha a 1 en paquetes activos
        $this->franquiciasSupDer = new Collection();

        //Obtenemos las publicidades que están en la parte superior derecha de la vista publicidad_franquicias
        //para pasarlas a las vista para que se muestren.
        $this->franquiciasSupDer = publicidad_franquicias::where('idtipo_publicidad','=',3)
                                                        ->where('inicio','<=',$time)
                                                        ->where('final','>=',$time)
                                                        ->orderBy(DB::raw('RAND()'))
                                                        ->get(array('url_imagen','nombre','nombre_comercial','id'));


        //Compartimos el array con todas las vistas
        View::share('franSupDer', $this->franquiciasSupDer);
        ////



        //Obtenemos las franquicias que tienen izquierda a 1 en paquetes activos
        $this->franquiciasIzq = new Collection();

        //Obtenemos las publicidades que están en la parte izquierda de la vista publicidad_franquicias
        //para pasarlas a las vista para que se muestren.
        $this->franquiciasIzq = publicidad_franquicias::where('idtipo_publicidad','=',4)
                                                        ->where('inicio','<=',$time)
                                                        ->where('final','>=',$time)
                                                        ->take(intval($this->numeroPublicidades[3]->recuadros))
                                                        ->orderBy(DB::raw('RAND()'))
                                                        ->get(array('url_imagen','nombre','nombre_comercial','id'));


        //Compartimos el array con todas las vistas
        View::share('franInIzq', $this->franquiciasIzq);
        ////


        //Obtenemos las franquicias que tienen patrocinado_b a 1 en paquetes activos
        $this->patrocinadasB = new Collection();

        //Obtenemos las publicidades que están en la parte izquierda de la vista publicidad_franquicias
        //para pasarlas a las vista para que se muestren.
        $this->patrocinadasB = publicidad_franquicias::where('idtipo_publicidad','=',6)
                                                        ->where('inicio','<=',$time)
                                                        ->where('final','>=',$time)
                                                        ->orderBy(DB::raw('RAND()'))
                                                        ->take(1)
                                                        ->get(array('url_imagen','nombre','nombre_comercial','id'));


        //Compartimos el array con todas las vistas
        View::share('patrocinadas', $this->patrocinadasB);
        ////


        //Obtenemos las franquicias que tienen patrocinado_b a 1 en paquetes activos
        $this->destacadas = new Collection();

        //Obtenemos las publicidades que están en la parte izquierda de la vista publicidad_franquicias
        //para pasarlas a las vista para que se muestren.
        $this->destacadas = publicidad_franquicias::where('idtipo_publicidad','=',8)
                                                    ->where('inicio','<=',$time)
                                                    ->where('final','>=',$time)
                                                    ->orderBy(DB::raw('RAND()'))
                                                    ->take(intval($this->numeroPublicidades[7]->recuadros))
                                                    ->get(array('url_imagen','nombre','nombre_comercial','id'));

        //Compartimos el array con todas las vistas
        View::share('destacadas', $this->destacadas);
        ////



        //Obtenemos las franquicias que tienen exito a 1 en paquetes activos
        $this->exito = new Collection();

        //Obtenemos las publicidades que están en franquicias de éxito de la vista publicidad_especial
        //para pasarlas a las vista para que se muestren, pasamos 1 sólo cada vez que se recarga la página
        $this->exito = publicidad_especial::where('idtipo_publicidad','=',9)
                                            ->where('inicio','<=',$time)
                                            ->where('final','>=',$time)
                                            ->orderBy(DB::raw('RAND()'))
                                            ->get(array('logo_url','nombre','nombre_comercial','id'))->take(1);

        //Compartimos el array con todas las vistas
        View::share('exito', $this->exito);
        ////


        //Obtenemos las franquicias que tienen baratas a 1 en paquetes activos
        $this->baratas = new Collection();

        //Obtenemos las publicidades que están en franquicias de éxito de la vista publicidad_especial
        //para pasarlas a las vista para que se muestren.
        $this->baratas = publicidad_especial::where('idtipo_publicidad','=',10)
                                            ->where('inicio','<=',$time)
                                            ->where('final','>=',$time)
                                            ->orderBy(DB::raw('RAND()'))
                                            ->get(array('logo_url','nombre','nombre_comercial','id'))->take(1);

        //Compartimos el array con todas las vistas
        View::share('baratas', $this->baratas);



        //Obtenemos las franquicias que tienen rentables a 1 en paquetes activos
        $this->rentables = new Collection();

        //Obtenemos las publicidades que están en franquicias de éxito de la vista publicidad_especial
        //para pasarlas a las vista para que se muestren.
        $this->rentables = publicidad_especial::where('idtipo_publicidad','=',11)
                                                ->where('inicio','<=',$time)
                                                ->where('final','>=',$time)
                                                ->orderBy(DB::raw('RAND()'))
                                                ->get(array('logo_url','nombre','nombre_comercial','id'))->take(1);

        //Compartimos el array con todas las vistas
        View::share('rentables', $this->rentables);



        //Obtenemos las franquicias que tienen lowcost a 1 en paquetes activos
        $this->lowcost = new Collection();

        //Obtenemos las publicidades que están en franquicias de éxito de la vista publicidad_especial
        //para pasarlas a las vista para que se muestren.
        $this->lowcost = publicidad_especial::where('idtipo_publicidad','=',12)
                                            ->where('inicio','<=',$time)
                                            ->where('final','>=',$time)
                                            ->orderBy(DB::raw('RAND()'))
                                            ->get(array('logo_url','nombre','nombre_comercial','id'))->take(1);

        //Compartimos el array con todas las vistas
        View::share('lowcost', $this->lowcost);
        ////


        //Obtenemos las entrevistas de las franquicias
        $numEntrevistas = $this->numeroPublicidades[12]->recuadros;
        $this->entrevistas = new Collection();

        //obtenemos las publicaciones donde el tipo es = 2 que es de tipo entrevista y pertenencia 2 que
        //indica que es de una franquicia que ha pagado
        $this->entrevistas = Publicaciones::take($numEntrevistas)->orderBy('id','DES')
                                            ->where('fecha_publicacion','<=',$time)//quitarla?
                                            ->where('fecha_finalizacion','>=',$time)
                                            ->where('pertenencia','=',2)
                                            ->where('tipo','=',2)->get();

        //Si el array de entrevistas no está lleno con las franquicias de pago rellenamos con las de pega es decir pertenencia a 1.
        if(count($this->entrevistas) < $numEntrevistas){

            //La diferencia entre las entrevistas devueltas y las entrevistas que hemos puesto que halla.
            $coger = intval($this->numeroPublicidades[12]->recuadros) - count($this->entrevistas);
            $resto = Publicaciones::take($coger)->orderBy('id','DES')
                                ->where('fecha_publicacion','<=',$time)//quitarla?
                                ->where('fecha_finalizacion','>=',$time)
                                ->where('pertenencia','=',1)
                                ->orderBy(DB::raw('RAND()'))
                                ->where('tipo','=',2)->get();

            $this->entrevistas = $this->entrevistas->merge($resto);
        }

        //Compartimos el array con todas las vistas
        View::share('entrevistas', $this->entrevistas);
        ////



        //obtenemos las noticias generales publicadas
        $numeroPublicaciones = $this->numeroPublicidades[13]->recuadros;


        $this->publicaciones = Publicaciones::take($numeroPublicaciones)->orderBy('id','DES')->where('tipo','=',1)->get();

        //Compartimos el array con todas las vistas
        View::share('publicaciones', $this->publicaciones);
        ////



        //Obtenemos las franquicias que tienen lowcost a 1 en paquetes activos
        $this->banner_int = new Collection();

        //Obtenemos las publicidades que están en franquicias de éxito de la vista publicidad_especial
        //para pasarlas a las vista para que se muestren.
        $this->banner_int = publicidad_franquicias::where('idtipo_publicidad','=',15)
                                                    ->where('inicio','<=',$time)
                                                    ->where('final','>=',$time)
                                                    ->orderBy(DB::raw('RAND()'))
                                                    ->take(1)
                                                    ->get(array('url_imagen','nombre','nombre_comercial','id'));

        //Compartimos el array con todas las vistas
        View::share('banner_int', $this->banner_int);
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

        $this->impresionBA();
        $this->impresionBannerIntermedio();
        $this->impresionBannerSup();
        $this->impresionCarousel();
        $this->impresionDCategoria();
        $this->impresionDerecha();
        $this->impresionDestacados();
        $this->impresionEntrevista();
        $this->impresionEX();
        $this->impresionIzquierda();
        $this->impresionLC();
        $this->impresionRE();
        $this->impresionPatrocinadoBuscador();
        $this->impresionNoticiaDestacada();

        return view('inicio');
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
        ///-----------------///

        ///Vamos concatenando wheres para la busqueda segun existan los parámetros///
        if($categoria != -1 || $inversion != -1 || $nombre != '') {

            if ($inversion != -1) {
                $valores = explode('-',$inversion);

                $query = $query->where('inversion', '>=', $valores[0])->where('inversion' , '<=' ,$valores[1]);

                $flag = true;

            }
            if ($categoria != -1) {

                //$listaIdsFranquicias = array(); //Lista con los ids de las franquicias que cumplen que la subcategoria es igual a la categoria pasada
                //Vamos extrayendo franquicias que cumplan la condicion de anterior y esta
                $listaIdsFranquicias = collect();


                foreach($subcategorias as $id)
                {
                    $ids = franquicia_subcategoria::where('subcategoria_id', '=', $id->id)->get();
                    //array_push($listaIdsFranquicias,$ids);
                    $listaIdsFranquicias = $listaIdsFranquicias->merge($ids);

                }

                //Comprobamos si de ids no está vacia para hacer la igualacion, si está vacía devolvemos la vista si nada y no continuamos
                //Comprobamos antes si hay de franquicias para la subcategoria (cateogria) dada

                if(!empty($listaIdsFranquicias)) { //Falta comprobar
                    //Hacemos esta igualacion porque listaIds es un array con un collect dentro.


                    $query = $query->where(function ($query) use ($listaIdsFranquicias) {

                        foreach ($listaIdsFranquicias as $franquicia) {

                            $query = $query->orWhere('id', '=', $franquicia->franquicia_id);

                        }
                    });

                   /** //Segundo filtro para que no devuelva todas las franquicias con un id que no es de la subcategoria buscada
                    $query = $query->where(function ($query) use ($subcategorias) {

                        foreach ($subcategorias as $subcategoria) {

                            $query = $query->orWhere('subcategoria_id', '=', $subcategoria->id);
                        }
                    });*/
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

            //Comprobamos si el flag está a true porque ha entrada en algún filtro
            if($flag) {
                $franquicias = $query->orderBy('nombre_comercial','ASC')->get();
            }

            $resultados = count($franquicias);


            //Obtenemos si para la categoria pasada hay más de una subcategorias para llamar a una vista u otra
            $totalFranquicias = subcategoria::where('categoria_id', '=', $categoria )->count();

            if ($totalFranquicias > 1) {

                //Obtenemos todas las subcategorias devueltas por la query
                $subcategorias = $query2->distinct()->orderBy('nombre', 'ASC')->get(array('nombre'));

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
     * Esta función devuelve las franquicias rentables, de exito, etc... cundo pinchamos en el menu para buscar este tipo de franquicias
     * @param $tipo significa si pertenece a franquicias baratas, rentables, low cost o éxito
     */
    public function especiales($tipo){

        $franquicias = publicidad_especial::where('nombre_paquete', 'like', $tipo )
                                            ->orderBy(DB::raw('RAND()'))->groupBy('id')->get();

        //hacemos las llamadas a la impresiones
        //llamamos a las estadisticas que se imprimen en esta vista.
        $this->impresionBannerSup();
        $this->impresionPatrocinadoBuscador();
        $this->impresionIzquierda();
        $this->impresionDerecha();
        $this->impresionBannerIntermedio();

        return view('especiales',compact('franquicias','tipo'));
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
        $lista_categorias = Categoria::orderBy('nombre','ASC')->get();
        $lista_subcategorias = subcategoria::orderBy('nombre','ASC')->get();

        foreach($lista_categorias as $categoria) {
            foreach($lista_subcategorias as $subcategoria){

                if($subcategoria->categoria_id === $categoria->id) {
                    array_push($subcategorias, $subcategoria->nombre);;
                }
            }

            array_push($lista, $categoria->nombre,$subcategorias);
            $subcategorias = array();
        }

        //llamamos a las estadisticas que se imprimen en esta vista.
        $this->impresionBannerSup();
        $this->impresionPatrocinadoBuscador();
        $this->impresionIzquierda();
        $this->impresionDerecha();
        $this->impresionBannerIntermedio();

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

        //llamamos a las estadisticas que se imprimen en esta vista.
        $this->impresionBannerSup();
        $this->impresionPatrocinadoBuscador();
        $this->impresionIzquierda();
        $this->impresionDerecha();
        $this->impresionBannerIntermedio();

        return view ('noticias' ,compact('articulos','total','tipo'));
    }

    public function reportajes(){
        $articulos = Publicaciones::where('tipo','=','2')->paginate(5);
        $total = Publicaciones::where('tipo','=','2')->count();
        $tipo = 2;

        //llamamos a las estadisticas que se imprimen en esta vista.
        $this->impresionBannerSup();
        $this->impresionPatrocinadoBuscador();
        $this->impresionIzquierda();
        $this->impresionDerecha();
        $this->impresionBannerIntermedio();

        //llamamos a las estadisticas que se imprimen en esta vista.
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

        //llamamos a las estadisticas que se imprimen en esta vista.
        $this->impresionBannerSup();
        $this->impresionPatrocinadoBuscador();
        $this->impresionIzquierda();
        $this->impresionDerecha();

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

        //Parseamos el tipo porque su valor desde donde se pasa tiene frutos-secos-y-dulces por ejemplo
        $tipo = strtolower(str_replace('-',' ',$tipo));

        $lista_franquicias = \Illuminate\Support\Facades\Session::get('franquicias');
        $franquicias =  new \Illuminate\Database\Eloquent\Collection();


        foreach ($lista_franquicias as $franquicia)
        {
            //Comparo que los string sean iguales ignorando mayusculas y si coinciden devolverá 0
            if(strcasecmp($franquicia->nombre , $tipo) == 0)
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
        //Parseamos el nombre de la categoria pasado por parámetro tipo por si tiene caracteres - y en la vista
        $tipo = str_replace('-',' ',$tipo);
        //Obtenemos el id de la subcategoria o categoria por el nombre pasado en la url
        $idSubcategoria = subcategoria::where('nombre', '=' , $tipo)->get();
        $idCategoria = Categoria::where('nombre', '=', $tipo)->get();


        //Si no existe como subcategoria o categoria redireccionamos a la vista principal (por si manipulan la url)
        if(!$idCategoria->isEmpty() || !$idSubcategoria->isEmpty())
        {
            //Comprobamos que si es subcategoria o categoria
            if(!$idCategoria->isEmpty()){

                //Parseamos el nombre de la categoria o subategoria pasado por la url y la volvemos a coger de la consulta por
                //si tiene tildes.
                $categoria = strtolower((str_replace('-',' ',$idCategoria[0]->nombre)));

                //comprobamos si tiene suscategorias primero
                $num_subcategorias = subcategoria::where('categoria_id', '=', $idCategoria[0]->id)->count();

                if($num_subcategorias == 1)//Si es igual a 1 es que solo esta el nombre de de la subcategoria con el nom de la categoria
                {
                    //$franquicias = franquicia_nom_subcategoria::where("subcategoria_id", '=',$idSubcategoria[0]->id)->get();
                    //$resultados = count($franquicias);


                    //Obtenemos las franquicias de la vista destacadas_sucategoria;
                    $destacadasCategoria = destacadas_subcategoria::where("subcategoria_id", "=",$idSubcategoria[0]->id)
                                                                    ->orderBy(DB::raw('RAND()'))->get();

                    $restoFranquicias = franquicias_no_destacadas::where("subcategoria_id", "=",$idSubcategoria[0]->id)->get();


                    $resultados = count($restoFranquicias)+ count($destacadasCategoria);

                    return view("dinamica",compact('destacadasCategoria','restoFranquicias','resultados','categoria'));
                }else { //hay más de una subcategoria

                    //delegamos en un controlador que me devuelve la vista con los parametros asociados en este caso
                    //la lista de franquicias
                    $controller = app::make(\App\Http\Controllers\areaprivada\categoriaController::class);
                    return $controller->callAction('index', array('tipo' => $categoria));
                }

            }else{ //sino sera subcategoria directamente

                //Parseamos el nombre de la categoria o subategoria pasado por la url y la volvemos a coger de la consulta por
                //si tiene tildes.
                $categoria = strtolower((str_replace('-',' ',$idSubcategoria[0]->nombre)));

                //Obtenemos las franquicias de la vista destacadas_sucategoria;
                $destacadasCategoria = destacadas_subcategoria::where("subcategoria_id", "=",$idSubcategoria[0]->id)
                                                                ->orderBy(DB::raw('RAND()'))->get();

                $restoFranquicias = franquicias_no_destacadas::where("subcategoria_id", "=",$idSubcategoria[0]->id)->get();


                //Obtenemos las franquicias que son de esta subcategoria.
                //$franquicias = franquicia_nom_subcategoria::where("subcategoria_id", '=',$idSubcategoria[0]->id)->get();

                $resultados = count($restoFranquicias)+ count($destacadasCategoria);

                //return view("dinamica",compact('franquicias','resultados','categoria'));
                return view("dinamica",compact('destacadasCategoria','restoFranquicias','resultados','categoria'));

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
        //$franquicia = Franquicia::where('nombre_comercial', '=', $nombre)->firstOrFail();
        $resultado =  DB::select(DB::raw("select * from franquicia where Replace(nombre_comercial, 'ñ', 'n') = ". "'".$nombre."'"));

        $franquicia = Franquicia::hydrate($resultado);
        $franquicia=$franquicia[0];

        //Obtenemos franquicias de la misma categoria.
        //Le pasamos el id de esta franquicia para que la exluya en peticion a la BD
        //$controller = app::make(categoriaController::class);
        //$similares = $controller->callAction('franquiciasTipo', array('tipo' => $tipo, 'idFranquicia' => $franquicia->id));
        $similares = $this->franquiciasMismoTipo($tipo,$franquicia->id);

        //obtenemos las noticias de esta franquicia para pasarlas también a la información del perfil
        $noticias = Publicaciones::where('franquicia_id','=', $franquicia->id)
                                    ->where('tipo','=',1)
                                    ->orWhere('tipo','=',3)->get();

        //obtenemos las entrevistas de esta franquicia para pasarlas también a la información del perfil
        $entrevistas = Publicaciones::where('franquicia_id','=', $franquicia->id)
                                        ->where('tipo','=',2)->get();

        //Obtenemos las imagenes de la tabla 1:N de imagenes_franquicia
        $imagenes = files::where('franquicia_id','=',$franquicia->id)->get();

        //Devolvemos la vista con los parámetros. (la franquicia, la lista de franquicias de la misma categoria y las publicaciones)
        return view('perfil', compact('franquicia','similares','noticias','imagenes','entrevistas'));
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

    /**
     * Método para enviar los correos de solicitud de información a las franquicias.
     * @param Request $request peticion enviada desde el formulario con los datos del formulario
     * @return int entero que devolvemos para notificar que los envíos han sido exitosos si devuele 1.
     */
    public function enviarformulariofranquicia(Request $request){

        $data = array
        (
            'nombre_comercial' =>$request::input('nombre_franquicia'),
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

        $fromEmail = 'info@multifranquicias.com';
        $fromName = 'Multifranquicias';


        try {

            $toEmail = $request::input('email_franquicia');
            $toName = $request::input('nombre_franquicia');

            \Mail::send('emails.contacto', $data, function ($message) use ($fromName, $fromEmail,$toEmail,$toName) {
                $message->to($toEmail, $toName);
                $message->from($fromEmail, $fromName);
                $message->subject('Una persona está interesada en su franquicia');
            });

        }catch (Exception $e){}
         catch(\Swift_RfcComplianceException $e){}
        finally{

            $comprobar = EstadisticasDiarias::where('franquicia','=',$request::input('id_franquicia'))
                ->where('idtipo_estadistica','=','21')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $request::input('id_franquicia'), 'idtipo_estadistica' => '21', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();

            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }

        }


        if($similares) {


            foreach ($similares as $similar) {


                $destinatario = explode('%', $similar);


                try {

                    $toEmail = $destinatario[0];
                    $toName = $destinatario[1];
                    $data['nombre_comercial'] = $toName;
                    $id = $destinatario[2];

                    \Mail::send('emails.contacto', $data, function ($message) use ($fromName, $fromEmail,$toEmail,$toName) {
                        $message->to($toEmail, $toName);
                        $message->from($fromEmail, $fromName);
                        $message->subject('Una persona está interesada en su franquicia');
                    });

                }catch (Exception $e){ dd($e->getMessage());}
                catch(\Swift_RfcComplianceException $e){ dd($e->getMessage());}
                finally{


                    $comprobar = EstadisticasDiarias::where('franquicia','=',$id)
                        ->where('idtipo_estadistica','=','22')
                        ->where('fecha','=',date("Y-m-d"))
                        ->take(1)
                        ->get();

                    if($comprobar->isEmpty()) {

                        $estadistica = new EstadisticasDiarias(['franquicia' => $id, 'idtipo_estadistica' => '22', 'total' => '1', 'fecha' => date("Y-m-d")]);
                        $estadistica->save();

                    } else{

                        $comprobar[0]->total = ($comprobar[0]->total)+1;
                        $comprobar[0]->save();
                    }

                }


            }
        }

        return 1;

    }


    //Estadisticas Banner superior
    public function impresionBannerSup (){


        foreach($this->banner_superior as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','1')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '1', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }

    //Estadisticas Banner Intermedio
    public function impresionBannerIntermedio (){

        foreach($this->banner_int as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','2')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '2', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }
    public function impresionCarousel (){

        foreach($this->carousel as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->franquicia_id)
                ->where('idtipo_estadistica','=','3')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->franquicia_id, 'idtipo_estadistica' => '3', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }


    public function impresionDestacados (){

        foreach($this->destacadas as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','4')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '4', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }

    //Estadisticas superior derecha
    public function impresionDerecha (){

        foreach($this->franquiciasSupDer as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','5')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '5', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }


    //Estadisticas izquierda
    public function impresionIzquierda (){

        foreach($this->franquiciasIzq as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','17')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '17', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }
    public function impresionLC (){

        foreach($this->lowcost as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','6')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '6', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }
    public function impresionBA (){

        foreach($this->baratas as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','7')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '7', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }
    public function impresionEX (){

        foreach($this->exito as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','8')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '8', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }

    public function impresionRE (){

        foreach($this->rentables as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','19')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '19', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }
    public function impresionDCategoria (){



    }


    //Estadisticas patrocinada buscador
    public function impresionPatrocinadoBuscador (){


        foreach($this->patrocinadasB as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->id)
                ->where('idtipo_estadistica','=','20')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->id, 'idtipo_estadistica' => '20', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }

    }


    //Estadisticas noticias destacadas
    public function impresionNoticiaDestacada (){

        foreach($this->noticias_des as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->franquicia_id)
                ->where('idtipo_estadistica','=','23')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->franquicia_id, 'idtipo_estadistica' => '23', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }


    }

    public function impresionEntrevista (){

        foreach($this->entrevistas as $franquicia){

            $comprobar = EstadisticasDiarias::where('franquicia','=', $franquicia->franquicia_id)
                ->where('idtipo_estadistica','=','24')
                ->where('fecha','=',date("Y-m-d"))
                ->take(1)
                ->get();

            if($comprobar->isEmpty()) {

                $estadistica = new EstadisticasDiarias(['franquicia' => $franquicia->franquicia_id, 'idtipo_estadistica' => '24', 'total' => '1', 'fecha' => date("Y-m-d")]);
                $estadistica->save();
            } else{

                $comprobar[0]->total = ($comprobar[0]->total)+1;
                $comprobar[0]->save();
            }
        }
    }

}


