<?php namespace App\Http\Controllers\areaprivada;

use App\Model\Franquicia;
use App\Model\Categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\franquicia_nom_subcategoria;
use App\Model\franquicia_subcategoria;
use App\Model\subcategoria;

use App\Model\franquicia_categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class categoriaController extends Controller {

    /**
     * Devolvemos las franquicias que pertenecen a esta categoria.
     * @param $tipo es el parametro del nombre de la categoria
     * @return $this
     */
    public function index($tipo)
    {

        $idCategoria = Categoria::where('nombre', 'like', $tipo)->get();
        //extraemos las id de las subcategorias para la categoria dada
        $idSubcategorias = subcategoria::where('categoria_id', '=', $idCategoria[0]->id )->get();

        $franquicias = array();

        //Vamos añadiendo franquicias a un nuevo array creado para pasarlo a la vista posteriormente
        foreach($idSubcategorias as $subcategoria)
        {
            $franquicia = franquicia_nom_subcategoria::where('subcategoria_id' , '=', $subcategoria->id)->get();
            array_push($franquicias,$franquicia);
        }

        $resultados = count($franquicias);

        //Igualamos la categoria a la devuelta por la select por si tiene acentos y la formateamos para pasarla a la vista.
        $categoria =  strtolower((str_replace('-',' ',$idCategoria[0]->nombre)));
        return view ('dinamica_subcategorias',compact('franquicias','resultados','categoria'));
    }

    /**
     * Devolvemos las franquicias que pertenecen a esta categoria.
     * @param $tipo es el parametro del nombre de la categoria
     * @return $this
     */
    public function getFranquiciasSubcategoria($tipo){

        //Obtenemos el id para el nombre dado por parametro es decir la última parte de la url franquicias-de-ejemplo, en
        //este caso sería franquicias de la subcategoria ejemplo.
        $idSubcategoria = subcategoria::where('nombre', '=', $tipo)->get();
        //extraemos las id de las franquicias para la subcategoria dada
        $idFranquicias = franquicia_subcategoria::where('subcategoria_id', '=', $idSubcategoria[0]->id )->get();
        //también buscamos en las categorias por si también está

        $lista_franquicias = array();

        //Vamos añadiendo franquicias a un nuevo array creado para pasarlo a la vista posteriormente
        foreach($idFranquicias as $franquicia)
        {
            $franquicia = Franquicia::where('id' , '=', $franquicia->franquicia_id)->firstOrFail();
            array_push($lista_franquicias,$franquicia);
        }

        //Devolvemos la vista con el array de franquicias.
        return view('dinamica')->with(array("franquicias" => $lista_franquicias, 'categoria' => $tipo , 'resultados' => count($lista_franquicias)));
    }

    /**
     * Este método devuelve una lista de las franquicias de mismo tipo a la actual de la vista.
     * @param $tipo de categoria o subcategoria
     * @param $id de la franquicia que queremos que exluya de la lista por ser la que está viendose en la vista actual
     * @return array
     */
    public function franquiciasTipo($tipo,$id){

        //Buscamos todos las franquicias de este tipo en las subcategorias puesto que un nombre de categoria se crea también en subcategoria
        //obtenemos primero los id de la subcategoria en las tablas intermedias n:m
        $idSubcategoria = subcategoria::where('nombre', '=', $tipo)->get();
        //$idCategoria = Categoria::where('nombre', '=', $tipo)->get();

        //Definimos variables de asignacion
        $lista_franquicias = array();

        if(!$idSubcategoria->isEmpty()){
            //Obtenemos los ids de las franquicias del mismo tipo de la tabla n:m excepto la que se está visualizando
            //para una categoria
            $idsFranquiciasSub = franquicia_subcategoria::where('subcategoria_id', '=', $idSubcategoria[0]->id )
                                                            ->where('franquicia_id', '<>', $id)->get();

            foreach($idsFranquiciasSub as $franquicia)
            {
                $franquicia = Franquicia::where('id' , '=', $franquicia->franquicia_id)->firstOrFail();
                array_push($lista_franquicias,$franquicia);
            }
        }


        /*if(!$idCategoria->isEmpty()){

            //Obtenemos los ids de las franquicias del mismo tipo de la tabla n:m excepto la que se está visualizando
            //para una categoria
            $idsFranquiciasCa = franquicia_categoria::where('categoria_id', '=', $idCategoria[0]->id )
                ->where('franquicia_id', '<>' , $id)->get();

            foreach($idsFranquiciasCa as $franquicia)
            {
                $franquicia = Franquicia::where('id' , '=', $franquicia->franquicia_id)->firstOrFail();
                array_push($lista_franquicias,$franquicia);
            }
        }*/

        return $lista_franquicias;
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