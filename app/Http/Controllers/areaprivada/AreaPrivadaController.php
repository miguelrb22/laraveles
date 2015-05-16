<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;
use App\model\Categoria;
use App\model\Franquicia as Franquicia;
use App\model\FranquiciaSubcategoria;
use App\model\PaquetesActivos;
use App\model\subcategoria;
use Illuminate\Support\Facades\Session;
use Illuminate\View as v;

class AreaPrivadaController extends Controller {


    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {

        $franquicias = Franquicia::all();
        return view('area_privada.inicio', compact('franquicias'));
    }

    public function alta()
    {

        $categorias = Categoria::all(array('id','nombre'));
        $subcategorias = subcategoria::all(array('id','nombre','categoria_id') );
        return view('area_privada.alta',compact('subcategorias','categorias'));

    }

    public function publicidad()
    {

        $franquicia = Session::get('franquicia');
        $id = $franquicia->id;
        $paquetes = PaquetesActivos::where('id','=',$id)->get();
        return view('area_privada.publicidad', compact('paquetes'));
    }

    public function categorias()
    {
        $categorias = Categoria::all();
        return view('area_privada.categorias', compact('categorias'));
    }

    public function noticias()
    {
        return view('area_privada.noticias');
    }

    public function modificar()
    {
        $franquicia = Session::get('franquicia');
        $id = $franquicia->id;
        $aux = PaquetesActivos::where('id','=',$id)->get();

        if($aux->isEmpty()){

            $PA = NEW PaquetesActivos();
            $PA->id = $id;
            $PA->save();
            $aux = PaquetesActivos::where('id','=',$id)->get();
        }
        $paquetes = $aux[0];

        $franquicia_subcategoria = FranquiciaSubcategoria::where('franquicia_id','=',$id)->get();
        $subcategorias_en_franquicia = array();

        foreach($franquicia_subcategoria as $fs){

            array_push($subcategorias_en_franquicia,$fs->subcategoria_id);
        }

        $categorias = Categoria::all(array('id','nombre'));
        $subcategorias = subcategoria::all(array('id','nombre','categoria_id') );
        return view('area_privada.update', compact('paquetes','categorias','subcategorias','subcategorias_en_franquicia'));
    }


    public function imagenes()
    {
        return view('area_privada.imagenes');
    }

}
