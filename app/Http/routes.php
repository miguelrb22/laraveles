<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
|
*/

use App\model\subcategoria;
use App\model\Franquicia;
use App\model\franquicia_subcategoria;



Route::get('/', ['as' => 'home', 'uses' =>  'WebController@index']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*************************************************************************************************************/
/********************************** AREA PRIVADA ADMINISTRACION **********************************************/
/*************************************************************************************************************/

//@by Miguel el puto amo RB
//Juanka G A Y

// Validamos los datos de inicio de sesión PARA LA ADMINISTRACION
Route::post('login',  ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);

//Cerrar sesion
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);




Route::group(['prefix' =>  'areaprivada' , 'namespace' => 'areaprivada'],function() {

    //Mostrar el inicio
    Route::get('dashboard', ['as' => 'private', 'uses' => 'AreaPrivadaController@index']);

    //Alta de una nueva franquicia
    Route::get('alta', ['as' => 'nueva_alta', 'uses' => 'AreaPrivadaController@alta']);

    //Modificar franquicia
    Route::get('modificar', ['as' => 'modificar_franquicia', 'uses' => 'AreaPrivadaController@modificar']);

    //Gestion de publicidad
    Route::get('publicidad', ['as' => 'publicidad', 'uses' => 'AreaPrivadaController@publicidad']);

    //Crear categorias y subcategorias
    Route::get('categorias', ['as' => 'categorias', 'uses' => 'AreaPrivadaController@categorias']);

    //Crear articulos
    Route::get('noticias', ['as' => 'noticias', 'uses' => 'AreaPrivadaController@noticias']);

    //editar noticia- articulo - publicacion
    Route::get('editar-publicacion/{id}', function($id){

        $controller = App::make(\App\Http\Controllers\areaprivada\AreaPrivadaController::class);
        return $controller->callAction('editpublicacion', array('id' => $id ));

    });

    //borrar noticia


    //VISTA GENERAL de todas las Publicaciones
    Route::get('editar-publicaciones', ['as' => 'editnoticia', 'uses' => 'AreaPrivadaController@editnoticia']);

    //Asignar imagenes @by Juanka the kid
    Route::get('imagenes', ['as' => 'imagenes', 'uses' => 'AreaPrivadaController@imagenes']);


});


Route::post('editar-publicacionEdit', ['as' => 'editarpublicacion', 'uses' => 'models_controller\publicacionController@edit']);

Route::post('borrar-publicacion', ['as' => 'delnoticia', 'uses' => 'models_controller\publicacionController@destroy']);


/***************************************************************************************************************/
/***************************************************************************************************************/



/*area franquiciador */
Route::get('franquiciador', ['as' => 'Fprivate', 'uses' => 'areaprivada\AreaFranquiciadorController@index']);
Route::get('franquiciador/alta', ['as' => 'Fnueva_alta', 'uses' => 'areaprivada\AreaFranquiciadorController@alta']);
Route::get('franquiciador/publicidad', ['as' => 'Fpublicidad', 'uses' => 'areaprivada\AreaFranquiciadorController@publicidad']);
Route::get('franquiciador/noticias', ['as' => 'Fnoticias', 'uses' => 'areaprivada\AreaFranquiciadorController@noticias']);





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
Route::get('consultoria/emprendedores', ['as' => 'emprendedor', 'uses' => 'WebController@emprendedor']);

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
            $controller = App::make(\App\Http\Controllers\WebController::class);
            return $controller->callAction('perfil', array('nombre' => $nombre, 'tipo' => $tipo));
        } else{

            return redirect('/');
        }
    }]);

});

//Rutas Web

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

Route::get('noticias/{titulo}/{id}', ['as' => 'publicacion_individual', 'uses' => 'WebController@showpublicacion']);

Route::post('contacto-franquicias' ,  ['as' => 'contacto-franquicias', 'uses' => 'WebController@enviarformulariofranquicia']);

//Route::post('images', ['as' => 'images', 'uses' => 'ImagesController@subirImagen']);

Route::get('cargarImagenes' ,  ['as' => 'cargarImagenes', 'uses' => 'ImagesController@extraer']);

Route::get('borrarImg' ,  ['as' => 'borrarImg', 'uses' => 'ImagesController@borrarImagen']);

Route::get('ultimaInsertada' ,  ['as' => 'ultimaInsertada', 'uses' => 'ImagesController@getId']);

Route::controller('images','ImagesController');

Route::resource('files','ImagesController');
