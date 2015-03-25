<?php namespace App\Http\Controllers;

class AreaPrivadaController extends Controller {


    public function __construct()
    {
    }


    public function index()
    {
        return view('area_privada.inicio');
    }

}
