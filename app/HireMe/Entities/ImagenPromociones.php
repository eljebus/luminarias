<?php

namespace HireMe\Entities;

class ImagenPromociones extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $timestamps = false;

	protected $connection = 'promociones';
	protected $table = 'ImagenPromociones';
	protected $primaryKey = 'idImagen';

	public function getPromo(){

		return $this->hasOne('HireMe\Entities\Promociones','Promociones');
	}

}
