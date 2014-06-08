<?php namespace HireMe\Repos;


use HireMe\Entities\Promociones;

class EventosRepo extends BaseRepo {

	  public function getModel()
	    {
	        return new Promociones;
	    }  

	public function getList($tipo){

		

		return Promociones::where('Categorias','=',$this->getCategory($tipo))
							->where('Activo','=',1)
							->orderBy('idPromociones', 'desc')
							->paginate(12);
	}

	public function getSearch($tipo,$dato){

		return Promociones::where('Categorias','=',(string)$this->getCategory($tipo))
							 ->where('Nombre', 'LIKE', $dato)
					         ->paginate(12);

	}

	public function getEvent($evento){

		return Promociones::find($evento);

	}

	public function getEventBySlug($nombre){

		return Promociones::where('Slug','=',$nombre)
							->where('Activo','=',1)
							->where('Fin','>=',new \DateTime('today'))
							->first();
	}
	public  function getImg($idevento){

		return Promociones::find($idevento)
							->Imagenes;
	}



	 function getCategory($tipo){

		if($tipo=='Promociones')
			return $tipo=2;
		elseif($tipo=='Eventos')
			return $tipo=1;
		else
			return false;
	}

	function getUsers($id){

		return Promociones::find($id)->users()->get();
	}

	public function newEvent($tipo,$array){

		
		//dd($array);

		//Promociones::create($array);
		$promo=new Promociones;

		$promo->Nombre=$array['Nombre'];
		$promo->Inicio=date("Y-m-d",  strtotime($array['Inicio']));
		$promo->Fin= date("Y-m-d",  strtotime($array['Fin']));
		$promo->Descripcion=$array['Descripcion'];
		$promo->Activo=1;
		$promo->Categorias=$this->getCategory($tipo);
		$promo->Slug=$array['Slug'];
		if(!$promo->save())
			return false;
		return $promo;

	}


	public function editEvent($array){

		


		//Promociones::create($array);

		$promo=Promociones::find($array['idevento']);

		$promo->Nombre=$array['Nombre'];
		$promo->Inicio=date("Y-m-d",  strtotime($array['Inicio']));
		$promo->Fin= date("Y-m-d",  strtotime($array['Fin']));
		$promo->Descripcion=$array['Descripcion'];
		$promo->Activo=1;
		$promo->Slug=$array['Slug'];
		if(!$promo->save())
			return false;
		return $promo;

	}

	public function deleteEvent($promo){

		$promo=Promociones::find($promo);

		$promo->Activo=0;

		$promo->save();

		return true;


	}


	public function getLastEvent(){

		//dd(Promociones::all());

		return Promociones::where('Activo','=',1)
							->where('Fin','>=',new \DateTime('today'))
							->orderBy('idPromociones', 'desc')
							->first();
	}


}

