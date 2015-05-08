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
use App\Model\Franquicia;
use App\Model\franquicia_categoria;
use App\Model\franquicia_subcategoria;
use App\Model\franquicia_nom_subcategoria;

Route::get('/', ['as' => 'home', 'uses' =>  'WebController@index']);

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

//perfil borrar
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


Route::post('busqueda', ['as' => 'mostrar', 'uses' => 'WebController@select']); //ruta que se llama desde el form


Route::group(['namespace' =>  'categorias'],function() {

    Route::get('franquicias-de-{tipo}', ['as' => 'categoria', function ($tipo) {

        $controller = App::make(\App\Http\Controllers\WebController::class);
        return $controller->callAction('franquiciasTipo', array('tipo' => $tipo ));

    }]);

    //FALTA REVISAR.
    //Rute para una franquicia seleccionada
    Route::get('franquicias-de-{tipo}/{nombre}', ['as' => 'categoria', function ($tipo, $nombre) {

        //REVISAR SI PODEMOS HACERLO POR IDS DE TIPO o OPTIMIZALO DE ALGUNA MANERA

        //Parseamos de nuevo la cadena para que se busque en bien en la base de datos.
        $tipo = (str_replace('-',' ',$tipo));
        $nombre = str_replace('-',' ',$nombre);
        //Debemos comprobar antes que la franquicia nombre es de la subcategoria tipo
        //para ello btenemos el id de la subcategoria por el tipo pasado en la url y el id de la franquicia
        $idSubcategoria = subcategoria::where('nombre', '=' , $tipo)->get();

        $idfranquicia = Franquicia::where('nombre_comercial', '=', $nombre)->get();

        $idFran_Subcat = new \Illuminate\Database\Eloquent\Collection;


        //Comprobamos si idSubcategoria no es vacio porque si es vacio significa que no hay id de subcategoria con ese nombre
        //y que haya una franquicia para esa categoria
        if(!$idSubcategoria->isEmpty() && !$idfranquicia->isEmpty())
        {
            //Ahora comprobamos que existe un registro en la tabla intermedia para el id franquicia y los idCat
            $idFran_Subcat->add(franquicia_subcategoria::where('franquicia_id', '=', $idfranquicia[0]->id)
                ->where('subcategoria_id','=',$idSubcategoria[0]->id)->get());
            $idFran_Subcat = $idFran_Subcat[0];
        }

        if(!$idFran_Subcat->isEmpty())
        {
            $controller = App::make(\App\Http\Controllers\areaprivada\franquiciaController::class);
            return $controller->callAction('index', array('nombre' => $nombre, 'tipo' => $tipo));
        } else{

            return redirect('/');
        }
    }]);

});

//Rutas Web
//Route::get('busqueda', ['as' => 'busqueda', 'uses' => 'WebController@buscar']);

Route::get('quienes-somos', ['as' => 'quien-soy', 'uses' => 'WebController@quiensoy']);

Route::get('contacto', ['as' => 'contacto', 'uses' => 'WebController@contacto']);

Route::get('franquicias', ['as' => 'franquicias', 'uses' => 'WebController@franquicias']);

Route::get('noticias', ['as' => 'noticias_web', 'uses' => 'WebController@noticias']);

Route::get('reportajes', ['as' => 'reportajes_web', 'uses' => 'WebController@reportajes']);


Route::get('resultados', ['as' => 'resultados', 'uses' => 'WebController@resultados']);

//Para los resultado de busqueda de franquicias
Route::get('busqueda-{tipo}', ['as' => 'categoria', function ($tipo) {
    $controller = App::make(\App\Http\Controllers\WebController::class);
    //$variable = $controller->callAction('dame',[]);
    return $controller->callAction('subcategoria', array('tipo' => $tipo));

}]);

//Para exito, rentables, low cost y baratas
Route::get('franquicias-{tipo}', ['as' => 'especiales', function($tipo){
    $controller = App::make(\App\Http\Controllers\WebController::class);
    return $controller->callAction('especiales', array('tipo' => $tipo));
}]);

//para peticion ajax de cargar noticias
Route::get('peticion',['as' => 'peticion' , 'uses' => 'WebController@masnoticias']); //si utilizamos el de abajo ponermos post

Route::get('servicios_garantias', ['as' => 'servicios_garantias', 'uses' => 'WebController@servicios']);

//para areaprivada, guardar una franquicia
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

Route::get('noticias/{id}', ['as' => 'publicacion_individual', 'uses' => 'WebController@showpublicacion' ,function ($id) {


}]);
