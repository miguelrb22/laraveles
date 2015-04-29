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

use App\Model\Categoria;
use App\Model\subcategoria;

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
    Route::get('modificar', ['as' => 'modificar_franquicia', 'uses' => 'AreaPrivadaController@modificar']);

    Route::get('publicidad', ['as' => 'publicidad', 'uses' => 'AreaPrivadaController@publicidad']);
    Route::get('categorias', ['as' => 'categorias', 'uses' => 'AreaPrivadaController@categorias']);
    Route::get('noticias', ['as' => 'noticias', 'uses' => 'AreaPrivadaController@noticias']);
});

    //Cerrar sesion
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

/***************************************************************************************************************/
/***************************************************************************************************************/



/*area franquiciador */
Route::get('franquiciador', ['as' => 'Fprivate', 'uses' => 'areaprivada\AreaFranquiciadorController@index']);
Route::get('franquiciador/alta', ['as' => 'Fnueva_alta', 'uses' => 'areaprivada\AreaFranquiciadorController@alta']);
Route::get('franquiciador/publicidad', ['as' => 'Fpublicidad', 'uses' => 'areaprivada\AreaFranquiciadorController@publicidad']);
Route::get('franquiciador/noticias', ['as' => 'Fnoticias', 'uses' => 'areaprivada\AreaFranquiciadorController@noticias']);



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
Route::get('comnsultoria/emprendedores', ['as' => 'emprendedor', 'uses' => 'WebController@emprendedor']);

Route::get('consultoria/franquiciadores', ['as' => 'franquiciadores', 'uses' => 'WebController@franquiciadores']);

Route::get('dudas-generales', ['as' => 'dudas-generales', 'uses' => 'WebController@dudasgenerales']);
Route::get('dudas-franquicias-franquiciados', ['as' => 'dudas-franquicias', 'uses' => 'WebController@dudasfranquicias']);


Route::match(array('GET', 'POST') ,'select', ['as' => 'mostrar', 'uses' => 'WebController@select']); //ruta que se llama desde el form


Route::group(['namespace' =>  'categorias'],function() {

    Route::get('franquicias-de-{tipo}', ['as' => 'categoria', function ($tipo) {

        //Obtenemos el id de la categoria por el nombre pasado en la url
        $idCategoria=Categoria::where('nombre', '=', $tipo )->get();
        $idSubcategoria = subcategoria::where('nombre', '=' , $tipo)->get();

        //Si no existe no exite como subcategoria o categor redireccionamos a la vista principal
        if(!$idCategoria->isEmpty() || !$idSubcategoria->isEmpty())
        {

            //Comprobamos que es si es subcategoria o categoria
            if(!$idCategoria->isEmpty()){

                //comprobamos si tiene suscategorias primero
                $num_subcategorias = subcategoria::where('categoria_id', '=', $idCategoria[0]->id)->count();

                    if($num_subcategorias != 0)
                    {
                        //delegamos en un controlador que me devuelve la vista con los parametros asociados en este caso
                        //las subcategorias
                        $controller = App::make(\App\Http\Controllers\areaprivada\subcategoriaController::class);
                        return $controller->callAction('index', array('tipo' => $tipo , 'otro' => '1'));
                    }else {
                        //delegamos en un controlador que me devuelve la vista con los parametros asociados en este caso
                        //la lista de franquicias
                        $controller = App::make(\App\Http\Controllers\areaprivada\categoriaController::class);
                        return $controller->callAction('index', array('tipo' => $tipo));
                        //return view('dinamica')->with('categoria', "éxito");
                    }
                //llamamos a controlador de categoria
            }else{
                //dd("debe buscarse en subcategoria");
                //llamamos a controlador de subcategoria
                $controller = App::make(\App\Http\Controllers\areaprivada\categoriaController::class);
                return $controller->callAction('getFranquiciasSubcategoria', array('tipo' => $tipo , 'otro' => '1'));
            }

        }
        else{
           //ambos son vacios no existe la categoria o subcategoria por tanto redirecioamos al index.
            dd("no exite");
        }

    }]);

    Route::get('franquicias-de-{tipo}/{nombre}', ['as' => 'categoria', function ($tipo, $nombre) {
        $controller = App::make(\App\Http\Controllers\areaprivada\franquiciaController::class);
        return $controller->callAction('index', array('nombre' => $nombre, 'tipo' => $tipo));
    }]);

//Para redireccionar a la vista si la opcion del select es una subcategoria
    /*Route::get('franquicia-de-{name}', ['as' => 'subcategoria', function ($name) {
        //dd("se llama al subcategoria");
        //return view('dinamica_subcategorias')->with('categoria', $name);
        //llamamos a subcategoria controller para cargar las subcategoias de la categorias del parametro pasado $name
        $controller = App::make(\App\Http\Controllers\areaprivada\subcategoriaController::class);
        return $controller->callAction('index', array('tipo' => $name , 'otro' => '1'));
    }]);*/
});

//Rutas Web
Route::get('busqueda', ['as' => 'busqueda', 'uses' => 'WebController@buscar']);

Route::get('quienes-somos', ['as' => 'quien-soy', 'uses' => 'WebController@quiensoy']);

Route::get('contacto', ['as' => 'contacto', 'uses' => 'WebController@contacto']);

Route::get('franquicias', ['as' => 'franquicias', 'uses' => 'WebController@franquicias']);

Route::get('noticias', ['as' => 'noticias_web', 'uses' => 'WebController@noticias']);

Route::when('franquicias-de-{tipo}', function ($tipo) {
    dd("entra siempre");
});
//para peticion ajax de cargar noticias
Route::get('peticion',['as' => 'peticion' , 'uses' => 'WebController@masnoticias']); //si utilizamos el de abajo ponermos post

Route::get('servicios_garantias', ['as' => 'servicios_garantias', 'uses' => 'WebController@servicios']);

//para areaprivada guardar una franquicia
Route::post('guardar' ,  ['as' => 'guardar', 'uses' => 'models_controller\franquiciaController@store']);
Route::post('actualizar' ,  ['as' => 'actualizar', 'uses' => 'models_controller\franquiciaController@update']);

    //Route::get('peticion',['as' => 'peticion' , 'uses' => 'FanquiciasController@registros']);



/*************************************************************************************************************/
/**********************************           ENVIO EMAIL                 * **********************************/
/*************************************************************************************************************/

Route::post('enviar' ,  ['as' => 'email', 'uses' => 'email\EmailController@enviar']);


//cargar franquicia
Route::post('cargarfranquicia' ,  ['as' => 'cargarfranquicia', 'uses' => 'models_controller\franquiciaController@cargar']);

//nueva categoria

Route::post('nuevacategoria' ,  ['as' => 'nuevacategoria', 'uses' => 'models_controller\categoriaController@store']);
Route::post('nuevasubcategoria' ,  ['as' => 'nuevasubcategoria', 'uses' => 'models_controller\subcategoriaController@store']);
Route::post('nueva-publicacion' ,  ['as' => 'nueva-publicacion', 'uses' => 'models_controller\publicacionController@store']);

