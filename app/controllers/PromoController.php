<?php


	use HireMe\Repos\EventosRepo;


class PromoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $promo;

	public function __construct(EventosRepo $promo){

		$this->promo=$promo;
	}



	public function userRegister(){

		if (Request::ajax())
		{
			
			$users= new HireMe\Repos\UsersRepo;
			$nombre=Input::get('Nombre');
			$mail= Input::get('Mail');
			$promo=Input::get('Promo');
			if($users->tryUser($mail)==false){

				$users->createUser(array(
									'Nombre'=>$nombre,
									'Mail'=>$mail
									));

			}

			$users->tryUser($mail)->promociones()->attach($promo);

			return Response::json(array('success'=>true));
		}
	}

	public function index()
	{
		//
		return Redirect::to('/#servicios');
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
	public function show($nombre)
	{
		//
		$promo=$this->promo->getEventBySlug($nombre);
		$imagen=$this->promo->getImg($promo->idPromociones);
		$datos=array(
		'titulo'=> "Promociones Luminarias • $nombre",
		'ActiveGallery'=>'',
		'promo'=>$promo,
		'imagen'=>$imagen,
		'activeSection'=>'galeria'
		);

	

    	return View::make('promocion')->with('datos',$datos);
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
