<?php


namespace App\Http\Controllers\models_controller;

use App\model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }


    public function nuevo(Request $request)

    {

        User::create([

            'username'   => $request->input('user'),
            'password'   =>  Hash::make($request->input('pass'))
        ]);


    }



}