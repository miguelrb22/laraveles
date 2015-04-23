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
use Illuminate\Support\Facades\Redirect;
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

    public function exito()
    {
        //return view('dinamica');
    }

    public function select(Request $request){
        $id=$request::Input('categoria');
        $categoria = Categoria::find($id); //en caso de el id ser tipo ORM
        $num_subcategorias = Subcategoria::where('categoria_id', '=', $id )->count();

        if($num_subcategorias !=0)
        {
            //dd("entra");
            //return Redirect::to('subcategoria', ['name' => str_replace(' ','-',$categoria->nombre)]);
            return redirect()->route('subcategoria', ['name' => str_replace(' ','-',$categoria->nombre)]);
        }else{
            //return Redirect::to('franquicia-de-'.str_replace(' ','-',$categoria->nombre));
            //return Redirect::route('categorias.categoria',['tipo' => str_replace(' ','-',$categoria->nombre)]);
            return redirect()->route('categoria', ['tipo' => str_replace(' ','-',$categoria->nombre)]);

        }
        //$categoria =  \DB::table('categoria')->where('idcategoria', '=', $request::Input('categoria'))->get();
        //dd($categoria->nombre);


        //return view('exito', compact('categoria'));
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

    public function noticias(){
        $articulos = Publicaciones::paginate(3);
        $total = Publicacion::count();
        return view ('noticias' ,compact('articulos','total'));
    }

    public function masnoticias(Request $r)
    {
       //dd("entra en mas noticas");
        dd($r);
        $numpage = $r::Input('page')-1;
        if($r->ajax()) {
            $result = Publicaciones::take(3)->skip($numpage*3)->get();
            return response()->json($result);
        }

    }
}
