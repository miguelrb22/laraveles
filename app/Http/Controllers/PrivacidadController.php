<?php
/**
 * Created by PhpStorm.
 * User: Juanca
 * Date: 27/03/2015
 * Time: 9:16
 */

namespace App\Http\Controllers;


class PrivacidadController extends Controller {

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

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function privacidad()
    {
        return view('privacidad');
    }

}
