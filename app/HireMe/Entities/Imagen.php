<?php


namespace HireMe\Entities;

class Imagen extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $connection = 'contenido';
	protected $table = 'Imagen';
	protected $primaryKey = 'idImagen';
	public $timestamps = false;

	
	public function galeria(){
        return $this->belongsToMany('HireMe\Entities\Galeria', 
        							'Imagen_Galeria', 
        							'Imagen', 
        							'Galeria');
    }


	



}
