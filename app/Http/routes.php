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
use App\Http\Controllers\WebController;

Route::get('/', ['as' => 'home', 'uses' =>  'WelcomeController@index']);

Route::get('home', 'HomeController@index');

#Route::post('login', 'AuthControllerB@postLogin'); // Verificar datos
#Route::get('logout', 'AuthControllerB@logOut'); // Finalizar sesión




/*************************************************************************************************************/
/********************************** AREA PRIVADA ADMINISTRACION **********************************************/
/*************************************************************************************************************/

// Validamos los datos de inicio de sesión.
Route::post('login',  ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);

Route::group(['prefix' =>  'areaprivada' , 'namespace' => 'areaprivada'],function() {

    Route::get('dashboard', ['as' => 'private', 'uses' => 'AreaPrivadaController@index']);
    Route::get('alta', ['as' => 'nueva_alta', 'uses' => 'AreaPrivadaController@alta']);
    Route::get('publicidad', ['as' => 'publicidad', 'uses' => 'AreaPrivadaController@publicidad']);
    Route::get('categorias', ['as' => 'categorias', 'uses' => 'AreaPrivadaController@categorias']);
    Route::get('noticias', ['as' => 'noticias', 'uses' => 'AreaPrivadaController@noticias']);
});

    //Cerrar sesion
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

/***************************************************************************************************************/
/***************************************************************************************************************/



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
//Route::get('franquicias-de-exito', ['as' => 'exito', 'uses' => 'WebController@exito']);

Route::post('select', ['as' => 'mostrar', 'uses' => 'WebController@select']); //ruta que se llama desde el form


Route::group(['namespace' =>  'categorias'],function() {
//Para redireccionar a la vista si la opcion del select es una categoria
    Route::get('franquicias-de-{tipo}', ['as' => 'categoria', function ($tipo) {
        //dd("se llama al categoria");
        return view('dinamica')->with('categoria', $tipo);
    }]);

//Para redireccionar a la vista si la opcion del select es una subcategoria
    Route::get('franquicia-de-{name}', ['as' => 'subcategoria', function ($name) {
        //dd("se llama al subcategoria");
        return view('dinamica_subcategorias')->with('categoria', $name);
    }]);
});

//Rutas Web
Route::get('busqueda', ['as' => 'busqueda', 'uses' => 'WebController@buscar']);

Route::get('quienes-somos', ['as' => 'quien-soy', 'uses' => 'WebController@quiensoy']);

Route::get('contacto', ['as' => 'contacto', 'uses' => 'WebController@contacto']);

Route::get('franquicias', ['as' => 'franquicias', 'uses' => 'WebController@franquicias']);

Route::get('noticias', ['as' => 'noticias_web', 'uses' => 'WebController@noticias']);

Route::post('peticion',['as' => 'peticion' , 'uses' => 'WebController@masnoticias']);

//para areaprivada guardar una franquicia
Route::post('guardar' ,  ['as' => 'guardar', 'uses' => 'franquiciaController@store']);
    //Route::get('peticion',['as' => 'peticion' , 'uses' => 'FanquiciasController@registros']);



/*************************************************************************************************************/
/**********************************           ENVIO EMAIL                 * **********************************/
/*************************************************************************************************************/

Route::post('enviar' ,  ['as' => 'email', 'uses' => 'email\EmailController@enviar']);
