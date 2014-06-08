<?php 
	

	use \HireMe\Repos\EventosRepo;	
	use \HireMe\Entities\User;	
	use \HireMe\Repos\ImagenesPromoRepo;	
	use \HireMe\Repos\UsersRepo;	
	use \HireMe\Repos\SeccionesRepo;



class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public $datos;

	protected $eventos;
	protected $imgPromo;
	protected $users;
	protected $secciones;

	

	public function __construct(EventosRepo $eventoRepo,
								ImagenesPromoRepo $imgPromo,
								UsersRepo $users,
								SeccionesRepo $secciones){


		$this->secciones=$secciones;
		$this->eventos=$eventoRepo;
		$this->imgPromo=$imgPromo;
		$this->users=$users;

	}


	public function index()
	{
		//
		if (Auth::check())
		{	
			//Auth::logout();
			$datos=array(
			'titulo'=> 'Panel',
			'activeSection'=>'none',
			'nombre'=>'panel'
			);

	    	return View::make('admin/panel')->with('datos',$datos);
	    }
	    return Redirect::to('AdminLogin');

	}

	 public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('Admin');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        $datos=array(
			'titulo'=>'Administración',
			'activeSection'=>'None'

			);
		return View::make('admin/login')->with('datos',$datos);
    }




	public function show($nombre)
	{

		if (! Auth::check())
            return Redirect::to('AdminLogin');

        

		$datos=array(
		'titulo'=> ucwords($nombre),
		'activeSection'=>'none',
		'nombre'=>$nombre
		);

    	return View::make('admin/'.$nombre)->with('datos',$datos);
	}


	public function showEvents($tipoEvento){


			$datos=array(
			'titulo'=> ucwords($tipoEvento),
			'activeSection'=>'none',
			'nombre'=>$tipoEvento,
			'eventos'=>$this->eventos->getList($tipoEvento)
			);
			return View::make('admin/eventos')->with('datos',$datos);

	}

	public function searchEvents($tipoEvento){


		
			$datos=array(
			'titulo'=> ucwords($tipoEvento),
			'activeSection'=>'none',
			'nombre'=>$tipoEvento,
			'eventos'=>$this->eventos->getSearch($tipoEvento,Input::get('dato'))
			);

			return View::make('admin/eventos')->with('datos',$datos);


	}

	public function newEvents($tipoEvento){
		$datos=array(
			'titulo'=> ucwords($tipoEvento),
			'activeSection'=>'none',
			'nombre'=>$tipoEvento,
			'eventos'=>$this->eventos->getSearch($tipoEvento,Input::get('dato'))

			);

		return View::make('admin/newEvents')->with('datos',$datos);


	}


	
	public function eventRegister($tipoEvento)
	{
			$promodata = array(
            	'Nombre' => Input::get('nombre'),
            	'Inicio'=>Input::get('inicio'),
            	'Fin'=>Input::get('fin'),
            	'Descripcion'=>Input::get('bases'),
			    'Slug'=>Str::slug(Input::get('nombre')),
            	'Activo'=>1
        	);

        	if($promo=$this->eventos->newEvent($tipoEvento,$promodata)){
        	
			      $nombre=Str::slug($promo->Nombre);
			      $path=public_path().'/img/Promociones/';
			      
			      Input::file('imagen')->move($path,$nombre.'.jpg');
			      
			    
			      	$imgData=array(
			     		'Nombre'=>$promo->Nombre,
			     		'Archivo'=>'/img/Promociones/'.$nombre.'.jpg',
			     		'Promociones'=>$promo->idPromociones
			     	);

			     	$this->imgPromo->newImage($imgData);

			      
			     
        		return Redirect::to('Admin/eventos/'.$tipoEvento);
        	}

	}

	public function postLogin(){

		if (Request::ajax())
		{

			/*$user= new User();
			$user->Nombre='1';
			$user->password=Hash::make('6374');
			$user->Activo=1;
			$user->save();*/

		    $userdata = array(
            	'User' => Input::get('user'),
            	'password'=>Input::get('pass')
        	);
			$retorno=array(
   				'success'=>false
   				);
     

	        if(Auth::attempt($userdata))
	        {
	            // De ser datos válidos nos mandara a la bienvenida
	           $retorno['success']=true;

	        }

   			

	        return  Response::json($retorno);
		}

	}


	public function getUsers($idpromo){

		$datos=array(
			'titulo'=>'',
			'activeSection'=>'none',
			'usuarios'=>$this->eventos->getUsers($idpromo)
			);


		return View::make('/admin/users')->with('datos',$datos);
	}


	public function deleteEvent(){

		if (Request::ajax())
		{

			$event=Input::get('idevento');
			
			$return=$this->eventos->deleteEvent($event);
			$retorno=array(
   				'success'=>$return
   				);
			 return  Response::json($retorno);
		}

	}

	public function editEvent($evento){

		$datos=array(
			'titulo'=> ucwords($evento),
			'activeSection'=>'none',
			'nombre'=>$evento,

			'evento'=>$this->eventos->getEvent($evento)

			);

		return View::make('admin/editEvent')->with('datos',$datos);
	}


	public function editEventRepo(){

		$promodata = array(
				'idevento'=>Input::get('idPromociones'),
            	'Nombre' => Input::get('Nombre'),
            	'Inicio'=>Input::get('Inicio'),
            	'Fin'=>Input::get('Fin'),
            	'Descripcion'=>Input::get('Descripcion'),
			    'Slug'=>Str::slug(Input::get('Nombre'))
        	);

		if($promo=$this->eventos->editEvent($promodata)){
        		
			      $nombre=Str::slug($promo->Nombre);
			      $path=public_path().'/img/Promociones/';
			      
			      if(Input::has('file')){
			      	 Input::file('imagen')->move($path,$nombre.'.jpg');
			      
			    
			      	$imgData=array(
			      		'idpromo'=>$promo->idPromociones,
			     		'Nombre'=>$promo->Nombre,
			     		'Archivo'=>'/img/Promociones/'.$nombre.'.jpg'
			     	);

			     	$this->imgPromo->editImage($imgData);
			      }
			     

			      
			     
        		return Redirect::to('Admin/eventos/edit/'.$promo->idPromociones);
        	}



	}

	public function showContent($content='Eventos')
	{

		$datos=array(
		'titulo'=> ucwords($content),
		'activeSection'=>$content,
		'nombre'=>$content,
		'secciones'=>$this->secciones->getList(),
		'content'=>$this->secciones->getContent($content)

		);

		return View::make('admin/contenido')->with('datos',$datos);

	}


	public function saveContent(){

		$datos=array(
			'seccion'=>Input::get('seccion'),
			'contenido'=>Input::get('contenido')
			);

		$this->secciones->saveContent($datos);

		return Redirect::back();
	}

}
