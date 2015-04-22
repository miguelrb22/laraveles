<?php namespace App\Http\Controllers\models_controller;

use App\Model\Franquicia;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;


class franquiciaController extends Controller {
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
     *
	 */

    public function __construct()
    {

        $this->middleware('auth');
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
		$franquicia = new Franquicia($request::all());
        $franquicia->save();

        //Redireccionamos
        //return redirect()->route('alta');

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

}
