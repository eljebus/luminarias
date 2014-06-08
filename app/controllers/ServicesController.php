<?php

use HireMe\Entities\Secciones;
use HireMe\Entities\Contenido;
use HireMe\Entities\Categorias;
use HireMe\Entities\Promociones;

class ServicesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		return 'test';
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
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
		

		try{
			$seccion=Secciones::where('Nombre','=',$id)->first();
			$contenido=Contenido::where('Secciones','=',$seccion->idSecciones)->first();

		}
		catch(Exception $e){
			$contenido=null;
		}

		$datos=array(
			'titulo'=> ucwords($id).' Luminarias',
			'activeSection'=>'servicio',
			'contenido'=>$contenido,
			'seccion'=>$id

			);

		if ($id=='Eventos') {
			
			$datos['eventos']=Promociones::where('Categorias','=',1)
										->where('Fin','>=',new DateTime('today'))
										->where('Activo','=',1)
										->get();
			$datos['activeSection']='eventos';

		}



		return View::make($id)->with('datos',$datos);
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
		return 'Aqui editamos el usuario: ' . $id;
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
