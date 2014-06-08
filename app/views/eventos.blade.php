@extends ('layout')


@section ('style')

	<link rel="stylesheet"  href="/css/eventos.css">
	<link rel="stylesheet" media="all" href="/css/luminarias.css">

@stop

@section ('javascript')

  <script src="../js/free.js"></script>
  <script src="/js/restaurant.js"></script>




@stop

@section ('content')

<div id="container" class='expandir'>

	<div id="superior">

		<section id="superior-interno">
			<h2 class='titulos naranja sombra'>
				{{$datos['titulo']}} 
				<span class='gris normal sin-sombra'>|</span>
				<label class='gris sin-sombra'>  
					Organizamos para ti los mejores eventos
				</label>
			</h2>
			
		</section>


		
	</div>
	<section id="principal">
		<div id='containerPhoto'>
			
			<div id="dividePhoto">
				

				<div id="uno">
					<img src="../img/Adorno.png" alt="">
				</div>
				<div id="dos">
					<img src="../img/eventos-Luminarias.jpg" alt="">
				</div>
				<div id="tres">
					<img src="../img/eventos-Luminarias.jpg" alt="">
				</div>
				<div id="cuatro">
					<img src="../img/eventos-Luminarias2.jpg" alt="">
				</div>


				<div id="flotante" class='nota dobleShadow' >
					<article >
						<p>
							Contamos con una gran experiencia en banquetes y todo tipo de eventos, ofreciendo siempre el mejor servicio.
						</p>
						<p>
							Tenemos un amplio inventario de paquetes para banquetes y bocadillos, pero también trabajamos a la medida de nuestros clientes.

						</p>
						<ul>
							<li>Eventos Familiares</li>
							<li>Eventos Ejecutivos</li>
							<li>XV años</li>
							<li>Bodas</li>
							<li>Eventos Sociales</li>
						</ul>
						<button class='menuItem'> Ver Paquetes</button>
							
							
							
							
							
					</article>
				</div>
				
			</div>
		</div>
		<br>
		<br>
			<center>
				
			
			<!--<h2 class='normal naranja sombra expandir'>Eventos Especiales</h2>-->
			
				@foreach ($datos['eventos'] as $evento)
		
					<a href="/Promociones/{{$evento->Slug}}">
				    <figure class='expandir'>
						<div>
							<div class='cubierta'></div>
							
							<img src="{{$evento->Imagenes()->first()->Archivo}}" alt="Menu Especial">
						</div>
						<figcaption>
							
							<h3 class='top-none rojo'>{{$evento->Nombre}}</h3>
							<p class='top-none gris'><span class="icon-calendar"></span> {{date("d/m/Y",strtotime($evento->Fin) )}}</p>
						</figcaption>
					</figure>
					</a>
				@endforeach

			</center>
			





	</section>

	
	
	
</div>
<br>
<br>
<div id="dialog-modal" title="Nuestros Paquetes">


	<article class='gris' style='font-size:0.9em; font-weight:normal'>
		{{$datos['contenido']->Contenido}}
	</article>
	
	

</div>


@stop
	