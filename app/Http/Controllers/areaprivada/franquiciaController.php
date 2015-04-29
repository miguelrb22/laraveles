<?php namespace App\Http\Controllers\areaprivada;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use App\Model\Franquicia;
use App\Http\Controllers\areaprivada\categoriaController;

class franquiciaController extends Controller {
    /**
     * Este método devuelve una franquicia según en nombre pasado por parámetro desde el routes y pasándolo a la vista
     * perfil
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
        $franquicias_similares = $controller->callAction('franquiciasTipo', array('tipo' => $tipo, 'idFranquicia' => $franquicia->id));

        //Devolvemos la vista con los parámetros. (la franquicia y la lista de franquicias de la misma categoria)
        return view('perfil')->with(array('franquicia' => $franquicia, 'similares' => $franquicias_similares));
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
