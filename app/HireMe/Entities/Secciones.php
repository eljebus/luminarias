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
	protected $table = 'Secciones';
	protected $primaryKey = 'idSecciones';
	public $timestamps = false;

	public function getContent(){

		return $this->hasOne('HireMe\Entities\Contenido','Secciones');
	}

	 

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
	public $timestamps = false;



}

