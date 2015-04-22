<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Controllers\Controller;


class AreaFranquiciadorController extends Controller {


    public function __construct()
    {
    }


    public function index()
    {
        return view('area_franquiciador.inicio');
    }

    public function alta()
    {
        return view('area_franquiciador.alta');
    }

    public function publicidad()
    {
        return view('area_franquiciador.publicidad');
    }

    public function categorias()
    {
        return view('area_franquiciador.categorias');
    }

    public function noticias()
    {
        return view('area_franquiciador.noticias');
    }

}
