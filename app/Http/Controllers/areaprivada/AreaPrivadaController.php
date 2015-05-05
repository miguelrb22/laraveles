<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;
use App\Model\Categoria;
use App\model\Franquicia as Franquicia;
use App\Model\PaquetesActivos;
use Illuminate\Support\Facades\Session;


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
        return view('area_privada.alta');
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
        return view('area_privada.update');
    }

}
