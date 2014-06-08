<?php

namespace HireMe\Entities;

class Categorias extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $connection = 'promociones';
	protected $table = 'Categorias';
	protected $primaryKey = 'idCategorias';
	protected $fillable = array('Nombre','Descripcion','Activo');





}
