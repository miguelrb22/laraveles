<?php


namespace App\Http\Controllers\models_controller;

use App\model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class userRegister extends Controller
{


    public function __construct()
    {

    }

    public function nuevoUser(Request $request){

        User::create([

            'username'   => $request->input('user'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'password'   =>  Hash::make($request->input('pass')),
            'rol'   =>  1

        ]);
    }



}