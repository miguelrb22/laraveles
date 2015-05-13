<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use App\Model\Franquicia;
use App\Model\Publicaciones;
use App\Model\files;
class franquiciaController extends Controller {
    /**
     * Este método devuelve los datos de una franquicia según en nombre pasado por parámetro desde el routes
     * y pasándolo a la vista perfil
     * @param $nombre es el nombre de la franquicia a devolver a la vista
     * @param $tipo hace referenci al tipo de franquicia que es la franquicia pasada por parametro
     * @return Response
     */
    public function index($nombre, $tipo)
    {
        //Obtenemos la franquicia por el nombre pasado desde el routes.
        $franquicia = Franquicia::where('nombre_comercial', '=', $nombre)->firstOrFail();

        //Obtenemos franquicias de la misma categoria.
        //Le pasamos el id de esta franquicia para que la exluya en peticion a la BD
        $controller = app::make(categoriaController::class);
        $similares = $controller->callAction('franquiciasTipo', array('tipo' => $tipo, 'idFranquicia' => $franquicia->id));

        //obtenemos las noticias de esta franquicia para pasarlas también a la información del perfil
        $publicaciones = Publicaciones::where('franquicia_id','=', $franquicia->id)->get();

        //Obtenemos las imagenes de la tabla 1:N de imagenes_franquicia
        $imagenes = files::where('franquicia_id','=',$franquicia->id)->get();

        //Devolvemos la vista con los parámetros. (la franquicia, la lista de franquicias de la misma categoria y las publicaciones)
        return view('perfil', compact('franquicia','similares','publicaciones','imagenes'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function __construct()
    {
    }

}
