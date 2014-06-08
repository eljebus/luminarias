<?php

	namespace HireMe\Entities;
	use HireMe\ImagenPromociones;

class Promociones extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $timestamps = false;

	protected $connection = 'promociones';
	protected $table = 'Promociones';
	protected $primaryKey = 'idPromociones';

	public function users()
    {
          return $this->belongsToMany('HireMe\Entities\UsersPromo','Promociones_usuarios','Promociones','Usuarios');
    }

    public function Imagenes()
    {
          return $this->hasOne('HireMe\Entities\ImagenPromociones','Promociones');
    }

}
