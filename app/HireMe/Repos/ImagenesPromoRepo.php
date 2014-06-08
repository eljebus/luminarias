<?php namespace HireMe\Repos;


use HireMe\Entities\ImagenPromociones;

class ImagenesPromoRepo extends BaseRepo {

	  public function getModel()
	    {
	        return new ImagenPromociones;
	    }  



	public function newImage($array){

		
		//dd($array);

		//Promociones::create($array);
		$Imgpromo=new ImagenPromociones;
		$Imgpromo->Nombre=$array['Nombre'];
		$Imgpromo->Archivo=$array['Archivo'];
		$Imgpromo->Promociones=$array['Promociones'];
		$Imgpromo->save();
		
		return true;

	}


	public function editImage($array){

		$Imgpromo=ImagenPromociones::where('Promociones','=',$array['idpromo'])->first();
		$Imgpromo->Nombre=$array['Nombre'];
		$Imgpromo->Archivo=$array['Archivo'];
		$Imgpromo->save();
		
		return true;
	}


}

