<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;
use App\model\Franquicia as Franquicia;


class AreaPrivadaController extends Controller {


    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {


        return view('area_privada.inicio');
    }

    public function alta()
    {
        return view('area_privada.alta');
    }

    public function publicidad()
    {
        return view('area_privada.publicidad');
    }

    public function categorias()
    {
        return view('area_privada.categorias');
    }

    public function noticias()
    {
        return view('area_privada.noticias');
    }

}
