<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 27/03/2015
 * Time: 9:16
 */

namespace App\Http\Controllers;


use App\Model\Categoria;
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

    public function select(Request $request){

            $id=$request::Input('categoria');
            $categoria = Categoria::find($id);

            //Si la categoria no es nula, es decir se ha enviado valor por el post hacemos la redireccion
            if($categoria != null)
            {
                return redirect()->route('categoria', ['tipo' => str_replace(' ', '-', $categoria->nombre)]);
            }else {
                return redirect()->route('home');
            }


        /*if($categoria != null) {

            if ($num_subcategorias != 0) {
                return redirect()->route('subcategoria', ['name' => str_replace(' ', '-', $categoria->nombre)]);
            } else {

                return redirect()->route('categoria', ['tipo' => str_replace(' ', '-', $categoria->nombre)]);
            }
        }else{
            //return redirect()->route($request::Input('actual'));

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


