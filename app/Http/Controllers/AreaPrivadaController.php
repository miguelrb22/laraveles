<?php namespace App\Http\Controllers;

class AreaPrivadaController extends Controller {


    public function __construct()
    {
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

}
