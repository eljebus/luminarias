@extends ('layout')


@section ('style')

	<link rel="stylesheet"  href="/css/promociones.css">


@stop

@section ('javascript')

  <script src="../js/free.js"></script>
  <script  src="/js/vendors/ajaxObject.js"></script>
  <script>



	$(document).on('ready',comenzar);


	function comenzar(){
		

		var datos={
			sendForm:'#register',
			evento:'submit',
			addData:'',
			url:'/Registro',
			elementChange:'.error',
			successHtml:'',
			errorHtml:'Datos Incorrectos'
		}

		ajaxObject=new ajaxObject(datos,successLogin);
		ajaxObject.addAjax();
	}


	function successLogin(data){

			if(data.success==true){
				$('#register').html('Pronto te contactaremos');
			}
			else
				$('.error').html('Error');

	}


  </script>

@stop

@section ('content')

<div id="container" class='expandir'>

	<div id="superior">

		
		<section id="superior-interno">
			<h2 class='titulos naranja sombra'>
				{{$datos['promo']->Nombre}}
				
				
			</h2>
		</section>

		
	</div>
	<div id='principal'>

		<div id="foto">
			
			<img src="{{$datos['imagen']->Archivo}}" alt="">

		</div>

		<section id="content" class='nota lateralShadow'>
			
			
		{{ Form::open(array('url' =>'','method'=>'POST','id'=>'register','class'=>'block')) }}
	
				<h3>Registrate </h3><div class="error"></div>
				<input type="text" name='Nombre' placeholder='Nombre completo'>
				<input type="email" name='Mail' placeholder='Correo electrónico'>
				<input type="hidden" name='Promo' value="{{$datos['promo']->idPromociones}}">
				<input type="submit" value='Registrarme' class='boton'>
		{{ Form::close() }}

			<article class='block'>

				{{$datos['promo']->Descripcion}}
			</article>

		</section>


	</div>
</div>


@stop
	