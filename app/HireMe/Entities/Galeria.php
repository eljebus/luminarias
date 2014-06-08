<?php

namespace HireMe\Entities;

class Galeria extends \Eloquent {


	protected $connection = 'contenido';
	protected $table = 'Galeria';
	protected $primaryKey = 'idGaleria';
	public $timestamps = false;

	public function fotos(){

	        return $this->belongsToMany('HireMe\Entities\Imagen', 'Imagen_Galeria', 'Galeria', 'Imagen');
	    }



	
}


