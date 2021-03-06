<?php


namespace App\Http\Controllers\models_controller;

use App\model\PaquetesActivos;
use App\model\Publicaciones;
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
    private $time = null;


    public function __construct()
    {

        $this->middleware('auth');
        //Obtenemos la cantidad de publicidades que hay en total.
        $this->numeroPublicidades = tipo_publicidad::all();
        //Obtenemos la fecha del servidor para usarla en la selects
        $this->time = time();
        $this->time = date("Y-m-d", $this->time);


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
            || $paquete === 'lowcost' || $paquete === 'noticias')
        {
            //Guardamos la publicidad.
            $publicidad->save();

        }
        else if($paquete === 'entrevista' || $paquete === 'noticia_des'){

                $idpubliciadad = $request->Input("idtipo_publicidad");
                //Si el paquete es entrevista o noticia destacada entra aquí y comprobamos si lo tenia activado anteriormente
                //para actualizarlo o insertarlo
                $existe = publicidad::where('franquicia_id','=',$idFranquicia)
                                    ->where('idtipo_publicidad','=',$idpubliciadad)->get();

                if(!$existe->isEmpty())
                {
                    //se le actualiza la cantidad si esta dentro del periodo de vigencia se le suma sino se le cambia la nueva
                    //fecha fin y la nueva cantidad
                    if($existe[0]->final >= $this->time) {
                        $existe[0]->cantidad = $request->Input('cantidad') + $existe[0]->cantidad;
                        $existe[0]->final = $final;
                        $existe[0]->save();
                    }else{
                        $existe[0]->cantidad = $request->Input('cantidad');
                        $existe[0]->final = $final;
                        $existe[0]->save();
                    }

                }else{

                    $publicidad->save();
                }
        }
        else {

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
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual y la final mayor o igual que la actual
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->where('franquicia_id','<>',1)
                                    ->where('idTipo_publicidad' ,'=', 1)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades tipo carousel
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 1)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
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
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual y la final mayor o igual que la actual
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->where('idTipo_publicidad' ,'=', 2)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 2)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
                                    ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'banner_sup', $fechaBS, $numActuales, intval($this->numeroPublicidades[1]->recuadros));

            array_push($resultados, $datos);
        }

        //---------- fin banner_sup -----------//




        //---------- Para superior_derecha -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual y menor que la final.
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->where('idTipo_publicidad' ,'=', 3)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 3)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
                                    ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'sup_derecha', $fechaBS, $numActuales, intval($this->numeroPublicidades[2]->recuadros));

            array_push($resultados, $datos);

        }
        //----------fin superior_derecha-----------//




        //---------- Para parte izquierda -----------//


        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->where('idTipo_publicidad' ,'=', 4)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 4)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
                                    ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');

            //Insertamos los datos en los arrays
            array_push($datos, 'izquierda', $fechaBS, $numActuales, intval($this->numeroPublicidades[3]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte izquierda-----------//




        //---------- Para parte patrocinado buscador -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                ->where('final','>=',$time)
                                ->where('idTipo_publicidad' ,'=', 6)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {

            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 6)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
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
                                    ->where('final','>=',$time)
                                    ->where('idTipo_publicidad' ,'=', 8)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 8)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
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
                                    ->where('final' , '>=', $time)
                                    ->where('idTipo_publicidad' ,'=', 9)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 9)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
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
                                    ->where('final','>=',$time)
                                    ->where('idTipo_publicidad' ,'=', 10)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 10)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
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
            ->where('final','>=',$time)
            ->where('idTipo_publicidad' ,'=', 11)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 11)
                ->where('inicio' , '<=', $time)
                ->where('final','>=',$time)
                ->orderBy('final', 'ASC')
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
                                    ->where('final','>=',$time)
                                    ->where('idTipo_publicidad' ,'=', 12)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 12)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
                                    ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'lowcost', $fechaBS, $numActuales, '');

            array_push($resultados, $datos);
        }

        //----------fin parte lowcost -----------//



        //---------- Para parte entrevistas -----------//

        //Obtenemos el número de entrevistas que se están mostrando actualmente.
        //por eso cogemos las entrevitas cuya fecha cuyo fecha actual se encuentra dentro del
        // periodo de visualizacion de la entrevista
        $numActuales = Publicaciones::where('fecha_publicacion' , '<=', $time)
                                    ->where('fecha_finalizacion','>=', $time)
                                    ->where('tipo' ,'=', 2)->count();

        //Si hay entrevistas mostrandose  pasamos datos a la vista de fecha y nº de entrevistas sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = Publicaciones::where('tipo', '=', 2)->orderBy('fecha_finalizacion', 'ASC')
                                        ->where('fecha_publicacion' , '<=', $time)
                                        ->where('fecha_finalizacion','>=', $time)
                                        ->get(array('fecha_finalizacion'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->fecha_finalizacion)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'entrevista', $fechaBS, $numActuales, intval($this->numeroPublicidades[12]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte lowcost -----------//


        //---------- Para parte entrevistas -----------//

        //Obtenemos el número de entrevistas que se están mostrando actualmente.
        //por eso cogemos las entrevitas cuya fecha cuyo fecha actual se encuentra dentro del
        // periodo de visualizacion de la entrevista
        $numActuales = Publicaciones::where('fecha_publicacion' , '<=', $time)
            ->where('fecha_finalizacion','>=', $time)
            ->where('tipo' ,'=', 2)->count();

        //Si hay entrevistas mostrandose  pasamos datos a la vista de fecha y nº de entrevistas sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = Publicaciones::where('tipo', '=', 2)->orderBy('fecha_finalizacion', 'ASC')
                                        ->where('fecha_publicacion' , '<=', $time)
                                        ->where('fecha_finalizacion','>=', $time)
                                        ->get(array('fecha_finalizacion'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->fecha_finalizacion)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'entrevista', $fechaBS, $numActuales, intval($this->numeroPublicidades[12]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte entrevistas -----------//


        //---------- Para parte noticiasDestacadas -----------//

        //Obtenemos el número de noticiadas destacadas que se están mostrando actualmente.
        //por eso cogemos las noticias destacadas cuya fecha cuyo fecha actual se encuentra dentro del
        // periodo de visualizacion de la noticia
        $numActuales = Publicaciones::where('fecha_publicacion' , '<=', $time)
                                    ->where('fecha_finalizacion','>=', $time)
                                    ->where('tipo' ,'=', 3)->count();

        //Si hay entrevistas mostrandose  pasamos datos a la vista de fecha y nº de entrevistas sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = Publicaciones::where('tipo', '=', 3)->orderBy('fecha_finalizacion', 'ASC')
                                    ->where('fecha_publicacion' , '<=', $time)
                                    ->where('fecha_finalizacion','>=', $time)
                                    ->get(array('fecha_finalizacion'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->fecha_finalizacion)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'noticia_des', $fechaBS, $numActuales, intval($this->numeroPublicidades[6]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte entrevistas -----------//




        //---------- Para banner intermedio -----------//

        //Obtenemos el número de franquicias que se están mostrando actualmente.
        //por eso cogemos las publicidades cuya fecha de inicio es < o = que la actual.
        $numActuales = publicidad::where('inicio' , '<=', $time)
                                ->where('final','>=',$time)
                                ->where('idTipo_publicidad' ,'=', 15)->count();

        //Si hay franquicias con este tipo de paquetes pasamos datos a la vista de fecha y nº franquicias sino no.
        if($numActuales > 0) {
            $datos = array();

            //Obtenemos las fechas de última disponibilidad para las publicidades
            //de la tabla publicidad
            $fechaBS = publicidad::where('idTipo_publicidad', '=', 15)
                                    ->where('inicio' , '<=', $time)
                                    ->where('final','>=',$time)
                                    ->orderBy('final', 'ASC')
                                    ->get(array('final'))->take(1);

            //Parseamos la fecha con carbon para devolver el formato que queremos.
            $fechaBS = Carbon::parse($fechaBS[0]->final)->format('d-m-Y');


            //Insertamos los datos en los arrays
            array_push($datos, 'banner_int', $fechaBS, $numActuales, intval($this->numeroPublicidades[14]->recuadros));

            array_push($resultados, $datos);
        }

        //----------fin parte banner intermedio -----------//





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