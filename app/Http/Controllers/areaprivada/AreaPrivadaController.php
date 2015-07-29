<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;
use App\model\Categoria;
use App\model\Franquicia as Franquicia;
use App\model\FranquiciaSubcategoria;
use App\model\masterEstadisticas;
use App\model\PaquetesActivos;
use App\model\Publicaciones;
use App\model\publicidad;
use App\model\PublicidadGeneral;
use App\model\subcategoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View as v;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Type\Collection;
use Ramsey\Uuid\Console\Exception;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\View;


class AreaPrivadaController extends Controller
{

    private $time = null;




    public function __construct(Guard $auth)
    {
        $this->time = time();
        $this->time = date("Y-m-d", $this->time);
        $this->rol = $auth->user()->rol;
        $this->user = $auth->user()->username;
        $this->middleware('auth');
        View::share('rol', $auth->user()->rol);
        View::share('user2', $auth->user()->username);


    }


    public function index()
    {

        //dd($this->rol,$this->user);
        if($this->rol == 1){

        $franquicias = Franquicia::where('user','=',$this->user)->get();
        }
        else{

            $franquicias = Franquicia::all();

        }
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

        if(isset($franquicia)) {

            $id = $franquicia->id;
            $paquetes = array();
            /*$paquetes = PaquetesActivos::where('id', '=', $id)->get();*/

            $publicidades = publicidad::where('franquicia_id', '=', $id)
                ->where('inicio', '<=', $this->time)
                ->where('final', '>=', $this->time)
                ->groupBy(DB::raw('idtipo_publicidad'))
                ->get(array('idtipo_publicidad'));

            //creamos el array con solo los ids
            foreach ($publicidades as $publicidad) {

                array_push($paquetes, $publicidad->idtipo_publicidad);
            }

            return view('area_privada.publicidad', compact('paquetes'));
        }else{

            return Redirect::route('private');
        }


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
            $publicaciones = Publicaciones::where('franquicia_id', '=', $id)->get();

        } else{

            if($this->rol == 0) {
                $id = null;
                $publicaciones = Publicaciones::where('franquicia_id', '=', $id)->get();
;
            }
            else $publicaciones = array();

        }
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

            //Comprobamos si tiene noticias activado para publicar esta franquicia
            $noticias = publicidad::where('franquicia_id', '=', $franquicia->id)
                ->where('idtipo_publicidad', '=', 14)
                ->where('inicio', '<=', $time)//podriamos ahorrarnoslo y solo controlar que no se halla pasado
                ->where('final', '>=', $time)
                ->get();

            return view('area_privada.noticias', compact('entrevistas', 'destacadas','noticias'));

        }else{

            if($this->rol == 1){

               return $this->index();
            //return "Selecciona una franquicia";
            }
            //para pasar un array vacia hacemos una select de una franquicia que nunca va a existir
            $destacadas = publicidad::where('franquicia_id','=',999999999)->get();
            $entrevistas = publicidad::where('franquicia_id','=',999999999)->get();
            $noticias = publicidad::where('franquicia_id','=',999999999)->get();
            return view('area_privada.noticias', compact('entrevistas', 'destacadas','noticias'));
        }

    }


    public function usuarios()
    {

        if($this->rol == 1){return "acceso denegado";}
        return view('area_privada.gestion_usuarios');
    }


    /**
     * @return v\View
     * Panel de publicidad general
     */
    public function pgeneral()
    {

        if($this->rol == 1){return "acceso denegado";}

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

        if($this->rol == 1){return "acceso denegado";}

        $fecha = date('Y-m-j');
        $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

        $mes = explode('-',$fecha);
        $mespas = explode('-',$nuevafecha);


        $altas_act = Franquicia::select(DB::raw('count(*) as total'))
            ->whereMonth('fecha_alta_ficha','=',$mes[1])
            ->whereYear('fecha_alta_ficha','=',$mes[0])
            ->get();

        $altas_pasadas = Franquicia::select(DB::raw('count(*) as total'))
            ->whereMonth('fecha_alta_ficha','=',$mespas[1])
            ->whereYear('fecha_alta_ficha','=',$mespas[0])
            ->get();


        if($altas_act[0]->total == 0) $altas_act[0]->total = 0.9999999;
        if($altas_pasadas[0]->total == 0) $altas_pasadas[0]->total = 0.9999999;

        $altas = round(($altas_act[0]->total*100) / $altas_pasadas[0]->total,2);

        if($altas_act[0]->total ==0.9999999) $altas = -100;


        $bajas_act = Franquicia::select(DB::raw('count(*) as total'))
            ->whereMonth('fecha_vencimiento_ficha','=',$mes[1])
            ->whereYear('fecha_vencimiento_ficha','=',$mes[0])
            ->where('fecha_vencimiento_ficha','<',$fecha)
            ->get();

        $bajas_pasadas = Franquicia::select(DB::raw('count(*) as total'))
            ->whereMonth('fecha_vencimiento_ficha','=',$mespas[1])
            ->whereYear('fecha_vencimiento_ficha','=',$mespas[0])
            ->where('fecha_vencimiento_ficha','<',$fecha)
            ->get();

        if($bajas_act[0]->total == 0) $bajas_act[0]->total = 0.9999999;
        if($bajas_pasadas[0]->total == 0) $bajas_pasadas[0]->total = 0.9999999;

        $bajas = round(($bajas_act[0]->total*100) / $bajas_pasadas[0]->total,2);

        $impresiones_act = masterEstadisticas::select(DB::raw('sum(total) as total'))
            ->whereMonth('fecha','=',$mes[1])
            ->whereYear('fecha','=',$mes[0])
            ->where('nombre','like','%mpresi%')
            ->get();



        $impresiones_pasadas = masterEstadisticas::select(DB::raw('sum(total) as total'))
            ->whereMonth('fecha','=',$mespas[1])
            ->whereYear('fecha','=',$mespas[0])
            ->where('nombre','like','%mpresi%')
            ->get();

        if($impresiones_act[0]->total == 0) $impresiones_act[0]->total = 0.9999999;
        if($impresiones_pasadas[0]->total == 0) $impresiones_pasadas[0]->total = 0.9999999;

        $impresiones = round(($impresiones_act[0]->total*100) / $impresiones_pasadas[0]->total,2);



        $clicks_act = masterEstadisticas::select(DB::raw('sum(total) as total'))
            ->whereMonth('fecha','=',$mes[1])
            ->whereYear('fecha','=',$mes[0])
            ->where('nombre','like','%clic%')
            ->get();



        $clicks_pasadas = masterEstadisticas::select(DB::raw('sum(total) as total'))
            ->whereMonth('fecha','=',$mespas[1])
            ->whereYear('fecha','=',$mespas[0])
            ->where('nombre','like','%clic%')
            ->get();


        //dd($clicks_act[0]->total, $clicks_pasadas[0]->total);

        if($clicks_act[0]->total == 0) $clicks_act[0]->total = 0.9999999;
        if($clicks_pasadas[0]->total == 0) $clicks_pasadas[0]->total = 0.9999999;

        $clicks = round(($clicks_act[0]->total*100) / $clicks_pasadas[0]->total,2);

        $envios_act = masterEstadisticas::select(DB::raw('sum(total) as total'))
            ->whereMonth('fecha','=',$mes[1])
            ->whereYear('fecha','=',$mes[0])
            ->where('nombre','like','%informaci%')
            ->get();



        $envios_pasadas = masterEstadisticas::select(DB::raw('sum(total) as total'))
            ->whereMonth('fecha','=',$mespas[1])
            ->whereYear('fecha','=',$mespas[0])
            ->where('nombre','like','%informaci%')
            ->get();


        if($envios_act[0]->total == 0) $envios_act[0]->total = 0.9999999;
        if($envios_pasadas[0]->total == 0) $envios_pasadas[0]->total = 0.9999999;

        $envios = round(($envios_act[0]->total*100) / $envios_pasadas[0]->total,2);


        $anuncios_act = publicidad::select(DB::raw('count(*) as total'))
            ->whereMonth('created_at','=',$mes[1])
            ->whereYear('created_at','=',$mes[0])
            ->get();



        $anuncios_pasadas = publicidad::select(DB::raw('count(*) as total'))
            ->whereMonth('created_at','=',$mespas[1])
            ->whereYear('created_at','=',$mespas[0])
            ->get();


        if($anuncios_act[0]->total == 0) $anuncios_act[0]->total = 0.9999999;
        if($anuncios_pasadas[0]->total == 0) $anuncios_pasadas[0]->total = 0.9999999;

        $anuncios = round(($anuncios_act[0]->total*100) / $anuncios_pasadas[0]->total,2);

        if($anuncios_act[0]->total == 0.9999999) $anuncios = -100;





        return view('area_privada.estadisticas',compact('altas','altas_act','bajas','bajas_act','impresiones','impresiones_act','clicks','clicks_act','envios','envios_act','anuncios','anuncios_act'));
    }


    public function generarestadisticas(Request $request)
    {


        $rango = $request->input('rango');
        $fecha = explode('-',$request->input('fecha'));

        switch($rango){

            case 1:

                $data = masterEstadisticas::select(DB::raw('sum(total) as Total, nombre as Estadistica, nombre_comercial as Franquicia'))
                    ->groupBy('idtipo_estadistica')
                    ->groupBy('franquicia')
                    ->whereDay('fecha','=',$fecha[2])
                    ->get();

                break;
            case 2:

                $data = masterEstadisticas::select(DB::raw('sum(total) as Total, nombre as Estadistica, nombre_comercial as Franquicia'))
                    ->groupBy('idtipo_estadistica')
                    ->groupBy('franquicia')
                    ->whereMonth('fecha','=',$fecha[1])
                    ->get();
                break;
            case 3:

                $data = masterEstadisticas::select(DB::raw('sum(total) as Total, nombre as Estadistica, nombre_comercial as Franquicia'))
                    ->groupBy('idtipo_estadistica')
                    ->groupBy('franquicia')
                    ->whereYear('fecha','=',$fecha[0])
                    ->get();
                break;
        }

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

        if($this->rol == 0)
             $paquetes = DB::table("franquicia")->whereRaw('DATE_ADD(CURRENT_DATE, INTERVAL 7 DAY) >= fecha_vencimiento_ficha && fecha_vencimiento_ficha >= CURRENT_DATE')->get(array('nombre_comercial','fecha_vencimiento_ficha','tf_contacto'));
        else
            $paquetes = DB::table("franquicia")->whereRaw('DATE_ADD(CURRENT_DATE, INTERVAL 7 DAY) >= fecha_vencimiento_ficha && fecha_vencimiento_ficha >= CURRENT_DATE && user='.'"'.$this->user.'"')->get(array('nombre_comercial','fecha_vencimiento_ficha','tf_contacto'));

        return $paquetes;

    }

    public function paquetesApuntoCaducar(){

        $now = time();
        $now = date("Y-m-d", $now);

        if($this->rol == 0)
            $paquetes = DB::table("publicidad_a_caducar")->whereRaw('DATE_ADD(CURRENT_DATE, INTERVAL 7 DAY) >= final && final >= CURRENT_DATE')->get();

        else
            $paquetes = DB::table("publicidad_a_caducar")->whereRaw('DATE_ADD(CURRENT_DATE, INTERVAL 7 DAY) >= final && final >= CURRENT_DATE && user='.'"'.$this->user.'"')->get();

        return $paquetes;

    }


}


