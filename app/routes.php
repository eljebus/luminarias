<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




#ruta para el controlador de los servicios
Route::resource('servicios', 'ServicesController');

#ruta para galeria
Route::resource('Galeria', 'GalleryController');


Route::resource('Promociones', 'PromoController');

Route::post('Mail', function(){

		if(Request::ajax()){

			$data=array(
				'nombre'=>Input::get('nombre'),
				'mail'=>Input::get('mail'),
				'asunto'=>Input::get('asunto'),
				'comentario'=>Input::get('comentario')
				);

			Mail::send('mail', $data, function($message) {
			    $message->to('jesuscervantes82@gmail.com', 'Jon Doe')->subject('Comentario de Luminarias '.Input::get('comentario'));
			});



			return Response::json(array('success'=>true));
		}

});


Route::post('Registro','PromoController@userRegister');

// Rutas a Administrador


Route::resource('AdminLogin', 'AdminController@showLogin');

Route::post('getLogin', 'AdminController@postLogin');




Route::group(['before'=>'auth'],function(){


	Route::get('Admin/galeria/{nombreGaleria?}', 'GalleryController@showAdminGallery');




	Route::post('Admin/galeria/new', 'GalleryController@create');

	Route::post('Admin/galeria/newPhotos', 'GalleryController@addPhotos');



	Route::post('Admin/galeria/delete', 'GalleryController@deletePhoto');

	Route::post('Admin/galeria/deleteGallery', 'GalleryController@destroy');


	//Rutas para los contenidos.............

	Route::post('Admin/content/save', 'AdminController@saveContent');

	Route::get('Admin/content/{contenido?}', 'AdminController@showContent');



	//Rutas a eventos y promociones.............................................................
	Route::get('Admin/eventos/users/{idpromo}', 'AdminController@getUsers');

	Route::post('Admin/eventos/editEvent', 'AdminController@editEventRepo');




	Route::get('Admin/eventos/{tipoEvento}', 'AdminController@showEvents');






	Route::get('Admin/eventos/{tipoEvento}/new', 'AdminController@newEvents');

	Route::get('Admin/eventos/edit/{evento}', 'AdminController@editEvent');



	Route::post('Admin/eventos/delete', 'AdminController@deleteEvent');


	Route::post('Admin/eventos/{tipoEvento}/registro', 'AdminController@eventRegister');

	Route::post('Admin/eventos/{tipoEvento}/search', 'AdminController@searchEvents');



	Route::resource('Admin', 'AdminController');


});

#Rutas para las secciones principales
Route::get('/{pag?}', function($pag=null)
{
	

	$title=$pag;
	$active=$pag;
	$evento=null;
	if(empty($pag)){

		$event=new HireMe\Repos\EventosRepo;


		$pag='index';
		$active='inicio';
		$title='Restaurant';
		$evento=$event->getLastEvent();

	}


	$datos=array('titulo'=> ucwords($title).' Luminarias',
				'activeSection'=>$active,
				'asunto'=>'',
				'evento'=>$evento
				);




	if(isset($_GET['asunto']))
		$datos['asunto']='Información de '.$_GET['asunto'];

    return View::make($pag)->with('datos',$datos);
});


//Rutas a Galeria






// Fin rutas Administrador









