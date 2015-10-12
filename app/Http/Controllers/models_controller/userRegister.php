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

        $data = array(

            'username'   => $request->input('user'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono')
        );

        $fromEmail = 'info@multifranquicias.com';
        $fromName = 'Multifranquicias';

        try {


            \Mail::send('emails.registro', $data, function ($message) use ($fromName, $fromEmail) {
                $message->to($fromEmail, $fromName);
                $message->from($fromEmail, $fromName);
                $message->subject('Nuevo usuario registrado en Multifranquicias');
            });

        }catch (Exception $e){}
        catch(\Swift_RfcComplianceException $e){}
    }



}