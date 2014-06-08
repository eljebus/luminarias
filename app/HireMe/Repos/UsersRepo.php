<?php namespace HireMe\Repos;


use HireMe\Entities\UsersPromo;

class UsersRepo extends BaseRepo {

	public function getModel()
	    {
	        return new UsersPromo;
	    }  


	public function getList($promo){

		return UsersPromo::where('Promociones','=',1)
							->first()
							->promociones();

	} 

	public function tryUser($mail){

		$users=UsersPromo::where('Mail','=',$mail);
		$users->count();

		if($users->count()>=1){

			return UsersPromo::where('Mail','=',$mail)->first();
		}
		else
			return false;

	}

	public function createUser($datos){

		$user=new UsersPromo;
		$user->Nombre=$datos['Nombre'];
		$user->Mail=$datos['Mail'];
		$user->Telefono='';
		$user->Activo=1;
		$user->save();
		return true;
	}


}

