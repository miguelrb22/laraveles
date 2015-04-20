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

Route::get('/', ['as' => 'home', 'uses' =>  'WelcomeController@index']);

Route::get('home', 'HomeController@index');

#Route::post('login', 'AuthControllerB@postLogin'); // Verificar datos
#Route::get('logout', 'AuthControllerB@logOut'); // Finalizar sesión



/*area privada*/

#Route::group(['middleware' => ''], function()


Route::group([], function()
{
    Route::get('areaprivada', ['as' => 'private', 'uses' => 'AreaPrivadaController@index']);
    Route::post('areaprivada', ['as' => 'private', 'uses' => 'AuthControllerB@postLogin']);

    Route::get('areaprivada/alta', ['as' => 'nueva_alta', 'uses' => 'AreaPrivadaController@alta']);
    Route::get('areaprivada/publicidad', ['as' => 'publicidad', 'uses' => 'AreaPrivadaController@publicidad']);
    Route::get('areaprivada/categorias', ['as' => 'categorias', 'uses' => 'AreaPrivadaController@categorias']);
    Route::get('areaprivada/noticias', ['as' => 'noticias', 'uses' => 'AreaPrivadaController@noticias']);

});


/**login **/
Route::get('login', ['as' => 'login', 'uses' => 'AreaPrivadaController@index']);




/*area franquiciador */
Route::get('franquiciador', ['as' => 'Fprivate', 'uses' => 'AreaFranquiciadorController@index']);
Route::get('franquiciador/alta', ['as' => 'Fnueva_alta', 'uses' => 'AreaFranquiciadorController@alta']);
Route::get('franquiciador/publicidad', ['as' => 'Fpublicidad', 'uses' => 'AreaFranquiciadorController@publicidad']);
Route::get('franquiciador/noticias', ['as' => 'Fnoticias', 'uses' => 'AreaFranquiciadorController@noticias']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//perfil
Route::get('perfil/{name}', function ($name) {
    $name = ucwords(str_replace('-', ' ', $name));
    return View::make('perfil')->with('name', $name);
});

//privacidad
Route::get('privacidad', ['as' => 'privacidad', 'uses' => 'WebController@privacidad']);

//aviso
Route::get('aviso-legal', ['as' => 'aviso', 'uses' => 'WebController@aviso']);

//emprendor consultoria
Route::get('emprendedor-consultoria', ['as' => 'emprendedor', 'uses' => 'WebController@emprendedor']);

//emprendor consultoria
Route::get('franquicias-de-exito', ['as' => 'exito', 'uses' => 'WebController@exito']);
