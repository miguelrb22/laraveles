<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');



/*area privada*/

Route::get('areaprivada', ['as' => 'private', 'uses' => 'AreaPrivadaController@index']);
Route::get('areaprivada/alta', ['as' => 'nueva_alta', 'uses' => 'AreaPrivadaController@alta']);
Route::get('areaprivada/publicidad', ['as' => 'publicidad', 'uses' => 'AreaPrivadaController@publicidad']);
Route::get('areaprivada/categorias', ['as' => 'categorias', 'uses' => 'AreaPrivadaController@categorias']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('perfil/{name}', function ($name) {
    $name = ucwords(str_replace('-', ' ', $name));
    return View::make('perfil')->with('name', $name);
});

Route::get('privacidad', ['as' => 'privacidad', 'uses' => 'PrivacidadController@privacidad']);
