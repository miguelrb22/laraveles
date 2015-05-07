<?php namespace App\Http\Controllers\areaprivada;

use App\Model\Franquicia;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use App\Model\subcategoria;
use App\Model\Categoria;


class subcategoriaController extends Controller {
    /**
     * Este método devuelve a la vista un array de categorias con sus correpondientes atributos para
     * pasarlos a la vista correspondiente y trabajar con ellos
     * $tipo contiene el nombre de una categoria
     * @return Response
     */
    public function index($tipo)
    {
        //extraemos primero el id de la categoria
        $idCategoria = Categoria::where('nombre', '=', $tipo)->firstOrFail();
        //extraemos las categorias
        $subcategorias = subcategoria::where('categoria_id', '=',$idCategoria->id )->get();
        //Devolvemos la vista con el parámetro.
        return view('dinamica_subcategorias')->with(array('subcategorias' => $subcategorias , 'categoria' => $tipo));
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
