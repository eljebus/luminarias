<?php
namespace HireMe\Entities;

use \Illuminate\Auth\UserInterface;
use \Illuminate\Auth\Reminders\RemindableInterface;

class Secciones extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $connection = 'contenido';
	protected $table = 'Contenido';
	protected $primaryKey = 'idContenido';



}

class Contenido extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $connection = 'contenido';
	protected $table = 'Contenido';
	protected $primaryKey = 'idContenido';



}

