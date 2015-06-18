<?php


namespace App\Http\Controllers\models_controller;

use App\model\PaquetesActivos;
use App\model\publicidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as Image;
use App\model\tipo_publicidad;


class paquetes_controller extends Controller
{

    private $numeroPublicidades = null;

    public function __construct()
    {

        $this->middleware('auth');
        //Obtener los recuadros de publicidad que hay activos en las web
        //Obtenemos la cantidad de publicidades que va a haber en la página y la pasamos a las vistas.
        $this->numeroPublicidades = tipo_publicidad::all();

    }


    public function create()
    {
        //
    }


    public function store(Request $request) {

    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }


    public function update($id)
    {

    }


    public function destroy($id)
    {
        //
    }

    //Para actualizar un paquete especial en la BD
    public function updateEspecial(Request $request){

        //Obtenemos el id de la franquicia que estamos editando, que está cargada
        //en la variable de session y lo añadimos al objeto request para poder hacer save() de todos los atributos
        $idFranquicia = Session::get('franquicia')->id;

        //Obtenemos el nombre del paquete a actualizar
        $paquete = $request->Input('nombre_paquete');

        //Creamos un nueva instancia publicidad a partir de los datos enviados en la petición request
        //y le añadimos el resto de atributos manualmente ya que la petición no los contiene todos
        $publicidad = new publicidad($request->all());


        $publicidad->setAttribute('franquicia_id',$idFranquicia);

        //Como en la BD se guardan la fechas con el formato YYYY-MM-DD tenenmos que parsearlas ya que la petición
        //las envia como DD-MM-YYYY
        $inicio = Carbon::parse($publicidad->getAttribute('inicio'))->format('Y-m-d');
        $final = Carbon::parse($publicidad->getAttribute('final'))->format('Y-m-d');

        //Y los volvemos a insetar en el array de atributos para guardar el modelo entero en la BD
        $publicidad->setAttribute('inicio',$inicio);
        $publicidad->setAttribute('final',$final);

        //Hacemos update en paquetes activos para ponerle el paquete como activo para mostrarlo en el sitio
        //que estamos indicando puesto que luego se obtienen la información de esa tabla entre otras.
        $Actualizar = PaquetesActivos::find($idFranquicia);
        $Actualizar->$paquete = '1';
        $Actualizar->save();


        //Para actualizar el periodo de vigencia del paquete
        //Vemos si el paquete es de categoria especial (exito,lowcost...) o de otro tipo aunque aparte el form tiene
        //en el input el id del paquete
        if($paquete === 'exito' || $paquete === 'rentables' || $paquete === 'baratas'
            || $paquete === 'lowcost')
        {
            //Guardamos la publicidad.
            $publicidad->save();

        }else {
            //Guardamos la imagen subida en en la carpeta y toda la información en publicidad y
            //le asignamos el nombredevuelto y guardamos finalmente la publicidad
            $url = $this->guardarImagen($request->file('url_imagen'),$paquete);
            $publicidad->setAttribute('url_imagen',$url);
            $publicidad->save();
        }

    }

    /**
     * @param $file ruta de la imagen.
     * @param $carpeta nombre de la subcarpeta donde se va a guardar dependiendo de la publicidad
     */
    public function guardarImagen($file,$carpeta){

        //Url que vamos a devolver para asignarla antes de insetar la publicidad de la franquicia
        $url = null;

        if ($file) {
            //Generar un id Unico
            $uuid1 = Uuid::uuid4();
            //Extension del archivo
            $extension = $file->getClientOriginalExtension();
            //obtenemos el nombre del archivo
            $nombre = $uuid1->toString() . "." . $extension;
            //indicamos que queremos guardar una nueva imagen de perfil
            \Storage::disk($carpeta)->put($nombre, \File::get($file));

            $url = '/publicidad/' . $carpeta . '/' . $nombre;

            //img resizes
            $location = public_path() . $url;
            $image = Image::make($location);
            $image->resize(200, 200);
            $image->save($location);
        }

        return $url;
    }

    /*
     * Para devolver las fechas de disponibilidad al a vista publicidad y el número de franquicias que
     * hay mostrandose en una publicidad.
     */
    public function fechas(){


        //Arrays para guardar los datos.
        $resultados = array();
        $datos = array();


        //
        //Obtenemos la fecha del servidor para usarla en la select de que paquetes están activo
        $time = time();
        $time = date("Y-m-d", $time);


        //---------- Para carousel -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                    ->where('idTipo_publicidad' ,'=', 1)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades tipo carousel
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 1)->orderBy('final', 'ASC')
                                    ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'carousel', $fechaBS, $numActuales, intval($this->numeroPublicidades[0]->recuadros));

            array_push($resultados, $datos);
        }
        //----------fin parte carousel -----------//



        //---------- Para banner_sup -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 2)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 2)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');

            //Obtenemos el número de franquicias que se están mostrando actualmente.
            //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
            $numActuales = publicidad::where('inicio', '<=', $time)
                ->where('idTipo_publicidad', '=', 2)->count();

            //Insertamos los datos en los arrays
            array_push($datos, 'banner_sup', $fechaBS, $numActuales, intval($this->numeroPublicidades[1]->recuadros));

            array_push($resultados, $datos);
        }

        //---------- fin banner_sup -----------//




        //---------- Para superior_derecha -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 3)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 3)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');

            //Obtenemos el número de franquicias que se están mostrando actualmente.
            //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
            $numActuales = publicidad::where('inicio', '<=', $time)
                ->where('idTipo_publicidad', '=', 3)->count();

            //Insertamos los datos en los arrays
            array_push($datos, 'sup_derecha', $fechaBS, $numActuales, intval($this->numeroPublicidades[2]->recuadros));

            array_push($resultados, $datos);

        }
        //----------fin superior_derecha-----------//



        //---------- Para parte izquierda -----------//


        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 4)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 4)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');

            //Obtenemos el número de franquicias que se están mostrando actualmente.
            //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
            $numActuales = publicidad::where('inicio', '<=', $time)
                ->where('idTipo_publicidad', '=', 4)->count();

            //Insertamos los datos en los arrays
            array_push($datos, 'izquierda', $fechaBS, $numActuales, intval($this->numeroPublicidades[3]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte izquierda-----------//



        //---------- Para parte patrocinado buscador -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 6)->count();


        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 4)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');

            //Insertamos los datos en los arrays
            array_push($datos, 'patrocinado_b', $fechaBS, $numActuales, intval($this->numeroPublicidades[5]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin patrocinado buscador-----------//



        //---------- Para parte destacados -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 8)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 8)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'destacados', $fechaBS, $numActuales, intval($this->numeroPublicidades[7]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte destacados-----------//



        //---------- Para parte exito -----------//


        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 9)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 9)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');

            //Insertamos los datos en los arrays
            array_push($datos, 'exito', $fechaBS, $numActuales, '');

            array_push($resultados, $datos);

        }

        //----------fin parte exito-----------//



        //---------- Para parte baratas -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 10)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 10)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'baratas', $fechaBS, $numActuales, '');

            array_push($resultados, $datos);
        }

        //----------fin parte baratas -----------//



        //---------- Para parte rentables -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                   ->where('idTipo_publicidad' ,'=', 11)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 11)->orderBy('final', 'ASC')
                                   ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'rentables', $fechaBS, $numActuales, '');

            array_push($resultados, $datos);
        }

        //----------fin parte reantables -----------//



        //---------- Para parte lowcost -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
            ->where('idTipo_publicidad' ,'=', 12)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 12)->orderBy('final', 'ASC')
                ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'lowcost', $fechaBS, $numActuales, '');

            array_push($resultados, $datos);
        }

        //----------fin parte lowcost -----------//





        return $resultados;
      //Creamos el objeto fechas para pasarlo a la vista

        //Para.....

    }


}
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 22/5/15
 * Time: 12:15
 */