@extends ('layout')


@section ('style')

	<link rel="stylesheet"  href="../css/contacto.css">

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
			url:'/Mail',
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
				Visitanos  
				<span class='gris normal sin-sombra desaparece'>|</span>
				<label class='gris sin-sombra blockResponsive'>  
					Tenemos servicio para ti todos los días del año
				</label>
			</h2>
		</section>

		
	</div>
	<div id='principal'>
		<div id="img" class='boxShadow'>
		

			<img src="../img/Parrillada.jpg" alt="">
		</div>

		<section id="mapa" class='normalShadow'>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29937.622758598936!2d-102.75392769852073!3d20.2918693434741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ed8eb2fe5e1d7%3A0x33d3e0e4a92d6984!2sHacienda+Luminarias!5e0!3m2!1ses-419!2smx!4v1399579500437"  frameborder="0" style="border:0"></iframe>
		</section>


		<section id="datos" class='nota dobleShadow'>
			<h3 class='rojo'>
				Tu opinión es para nosotros lo más importante!


			</h3>
			<address>
				<h3 class='subtitulo rojo'><span class="icon-location2"></span> Dirección</h3>
				<p class='top-none'>
					 Avenida 20 de Noviembre 2954 Jamay Jalisco C.P. 47906
				</p>
			</address>
			<article>
				<h3 class='subtitulo rojo'><span class="icon-phone"></span> Teléfonos</h3>
				<p class='top-none'> 01(392) 922 3726</p>
			
				<h3 class='subtitulo rojo desapareceP'><span class="icon-mail2"></span> Correo</h3>
				<p class='top-none desapareceP'> Contacto@restaurantluminarias.com.mx</p>

				<h3 class='subtitulo rojo desapareceP'><span class="icon-clock"></span> Horario</h3>
				<p class='top-none'> Corrido de 8:00 am - 7:00 pm</p>

			</article>
			

		</section>

		<section id="contacto" class='izquierdo'>
			

			<form action=""  id='register' class='gris'>


				<div class="error gris"></div>
				<input type="text" name='nombre' placeholder='Nombre Completo' required x-webkit-speech="x-webkit-speech">
				<input type="email" name='mail' placeholder ='Correo Electrónico' required x-webkit-speech="x-webkit-speech">
				<input type="text" name='asunto' placeholder='Asunto' required class='ultimo' value="{{$datos['asunto']}}">
				<textarea name="comentario" x-webkit-speech="" placeholder='Comentarios' class='derecho'></textarea>
				<input type="submit" value='Enviar' class='boton derecho'>
			</form>

		</section>
	</div>
	
</div>


@stop
	