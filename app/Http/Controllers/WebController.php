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
use App\Model\franquicia_subcategoria;
use App\Model\Publicaciones;
use App\Model\Subcategoria;
use Illuminate\Support\Facades\Request;

class WebController extends Controller {

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
            ///-------------------------------///


            //dd('categoria: '. $categoria. ' inversion: ' . $inversion. ' nombre: '. $nombre);

            ///Definimos la query///
            $query = new Franquicia;
            ///-----------------///

            ///Vamos concatenando wheres para la busqueda segun existan los parámetros///
            if($categoria != -1 || $inversion != -1 || $nombre != '') {

                if ($inversion != -1) {
                    //dd($inversion);
                    $query = $query->where('inversion', '<=', $inversion);

                }
                if ($categoria != -1) {

                    //Obtenemos los ids de las subcategorias de una categoria dada ($categoria)
                    $idsSubcategorias = subcategoria::where('categoria_id', '=', $categoria )->get();
                    $listaFinalFranquicias = array();

                    //Vamos extrayendo franquicias que cumplan la condicion de anterior y esta
                    foreach($idsSubcategorias as $id)
                    {
                        $listaIdFranquicias = franquicia_subcategoria::where('subcategoria_id', '=', $id->id)->get();
                        array_push($listaFinalFranquicias,$listaIdFranquicias);
                    }

                    if(!empty($listaFinalFranquicias)) {
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
                    $query = $query->where('nombre_comercial' ,'like', '%'.$nombre."%");
                }

                $franquicias = $query->get();
                $resultados = count($franquicias);

                //Obtenemos si para la categoria pasada hay más de una subcategorias para llamar a una vista u otra
                $totalFranquicias = subcategoria::where('categoria_id', '=', $categoria )->count();

                if ($totalFranquicias > 1)
                    return view ('resultados', compact('franquicias','resultados'));
                else{
                    return view ('resultados_lista', compact('franquicias','resultados'));
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
        return view ('franquicias');
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
        return view('servicios_garantias');
    }
}


