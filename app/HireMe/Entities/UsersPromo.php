<?php

	namespace HireMe\Entities;
class UsersPromo extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $timestamps = false;

	protected $connection = 'promociones';
	protected $table = 'Usuarios';
	protected $primaryKey = 'idUsuarios';

	public function promociones()
    {
        return $this->belongsToMany('HireMe\Entities\Promociones','Promociones_usuarios','Usuarios','Promociones');
    }





}
