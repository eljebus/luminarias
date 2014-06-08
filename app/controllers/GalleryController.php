<?php

use HireMe\Entities\Galeria;
use HireMe\Entities\Imagen;


class GalleryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		//
		return Redirect::to('Galeria/Restaurant');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Request::ajax())
		{

			$galeria= new Galeria;

			$galeria->Nombre=Input::get('nombre');
			$galeria->Descripcion='Conocida';
			$galeria->Activo=1;
			$galeria->Secciones=2;

			$galeria->save();

			$retorno=array(
   				'success'=>true,
   				'gallery'=>$galeria->Nombre
   				);
			return Response::json($retorno);
		}
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
	public function show($nombre)
	{
		//

		

		$datos=array(
		'titulo'=> "Galería Luminarias • $nombre",
		'ActiveGallery'=>$nombre,
		'galerias'=>Galeria::where('Secciones','=','2')->where('Activo','=',1)->get(),
		'fotos'=>Galeria::where('Secciones','=','2')
													->where('Nombre','=',$nombre)
													->first()
													->fotos()
													->paginate(12),
		'activeSection'=>'galeria'


		);

    	return View::make('galerias')->with('datos',$datos);
	}


	public function  showAdminGallery($nombreGaleria='Restaurant'){
			
			$datos=array(
			'titulo'=> "Galería Luminarias • $nombreGaleria",
			'ActiveGallery'=>$nombreGaleria,
			'galerias'=>Galeria::where('Secciones','=','2')->where('Activo','=',1)->get(),
			'fotos'=>Galeria::where('Secciones','=','2')
								->where('Activo','=',1)
								->where('Nombre','=',$nombreGaleria)
								->first()
								->fotos()
								->paginate(12),
			'activeSection'=>'galeria'


			);

			return View::make('/admin/galerias')->with('datos',$datos);


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

	public function deletePhoto(){

		if (Request::ajax())
		{

			$id=Input::get('idPhoto');
			$gallery=Input::get('gallery');
			$galeria=Galeria::where('Nombre','=',$gallery)->first();
			$galeria->fotos()->detach($id);

			$retorno=array(
   				'success'=>true
   				);
			return Response::json($retorno);
		}

	}


	public function addPhotos(){



			$files = Input::file('fotos');


			//$nombre=Str::slug($promo->Nombre);
		    $path=public_path().'/img/Galerias/';
		    $gallery=Input::get('gallery');
		    $gallery=Galeria::where('Nombre','=',$gallery)->first();


		    //Input::file('imagen')->move($path,$nombre.'.jpg');

		 
		    foreach ($files as $file) {

		    	$nombre=str_replace(' ','-',$file->getClientOriginalName());
		        // store our uploaded file in our uploads folder
		        $file->move($path, $nombre);
		        $Imagen=new Imagen;
		        $Imagen->Nombre=$nombre;
		        $Imagen->Archivo=$nombre;
		        $Imagen->save();

		        //dd($gallery->idGaleria);
		        $Imagen->galeria()->attach($gallery->idGaleria);

		    }
		 
			
			return Redirect::back();
			

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		
		if (Request::ajax())
		{
			$gallery=Input::get('gallery');
			$galeria=Galeria::where('Nombre','=',$gallery)->first();
			$galeria->Activo=0;
			$galeria->save();

			$retorno=array(
   				'success'=>true
   				);
			return Response::json($retorno);
		}

	}


}
