<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 27/03/2015
 * Time: 9:16
 */

namespace App\Http\Controllers;


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
        return view('exito');
    }
}
