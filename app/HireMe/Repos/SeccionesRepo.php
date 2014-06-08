<?php namespace HireMe\Repos;


use HireMe\Entities\Secciones;
use HireMe\Entities\Contenido;

class SeccionesRepo extends BaseRepo {

    public function getModel()
    {
        return new Secciones;
    }  

	public function getList(){

		return Secciones::where('Nombre','!=','Galeria')
						->where('Nombre','!=','Inicio')
						->get();
	}


	public function getContent($tipo){

		

		return Secciones::where('Nombre','=',$tipo)
						->first()
						->getContent;
							
	}


	public function saveContent($datos){

		$content=Secciones::where('Nombre','=',$datos['seccion'])
						->first()
						->getContent;


		$content->Contenido=$datos['contenido'];
		$content->save();

		return true;			
	}




}

