@extends ('layout')


@section ('style')

	<link rel="stylesheet"  href="/css/restaurant.css">
	<link rel="stylesheet" media="all" href="/css/luminarias.css">

@stop

@section ('javascript')

  <script src="../js/free.js"></script>
  <script src="../js/restaurant.js"></script>

@stop

@section ('content')

<div id="container">

	<div id="superior">

		<section id="superior-interno">
			<h2 class='titulos naranja sombra'>
				{{$datos['titulo']}}
				<span class='gris normal sin-sombra desaparece'>|</span>
				<label class='gris sin-sombra blockResponsive'>  
					Tenemos servicio para ti todos los días del año
				</label>
			</h2>
			
		</section>


		
	</div>
	<section id="principal">
		
			<div id='mainPhoto' class= 'expandir'>
	
				<div id='innerPhoto'>
					<img src="../img/restaurantLumiarias.jpg" alt="Restaurant Luminarias">
					

				</div>

				<article class='nota'>
				<p class='noMarginTop'>Somos el Restaurant más emblemático de La Ribera de Chapala.<br>Los platillos mas deliciosos, los precios mas accesibles y el mejor servicio, disfruta una suculenta comida y del hermoso paisaje del Lago de Chapala. </p>


				<a href="/Contacto?asunto=Restaurant#contacto">
					<button class='boton'>
						Visitanos <span class="icon-arrow-right3"></span>
					</button>	
				</a>

				</article>

				<img src="../img/servilletero.png" alt="Servilletero" id='servilletero'>

				
			</div>


			<h2 class='normal naranja sombra expandir'>Saborea nuestro Menú</h2>

			<figure class='expandir menuItem'>
				<div>
					<div class='cubierta'></div>
					<img src="../img/menu/Especiales.jpg" alt="Menu Especial">
				</div>
				<figcaption>
					
					<h3 class='top-none rojo'>Menu Especial</h3>
					<p class='top-none gris'>La especialidad de la Casa</p>
				</figcaption>
			</figure>


			<figure class='expandir menuItem'>
				<div>
					<div class='cubierta'></div>
					<img src="../img/menu/Pescadosymariscos.jpg" alt="Pescados y Mariscos">
				</div>
				<figcaption>
					
					<h3 class='top-none rojo'>Pescados y mariscos</h3>
					<p class='top-none gris'>La especialidad de la Casa</p>
				</figcaption>
			</figure>
			<figure class='ultimo expandir menuItem'>
				<div>
					<div class='cubierta'></div>
					<img src="../img/menu/Carnes.jpg" alt="Carnes">
				</div>
				<figcaption>
					
					<h3 class='top-none rojo'>Carnes</h3>
					<p class='top-none gris'>Cortes Finos con el mejor sabor</p>
				</figcaption>
			</figure>
			<figure class='expandir menuItem'>
				<div>
					<div class='cubierta'></div>
					<img src="../img/menu/Sopasyensaladas.jpg" alt="Sopas y Ensaladas">
				</div>
				<figcaption>
					
					<h3 class='top-none rojo'>Sopas y Ensaladas</h3>
					<p class='top-none gris'>Deleita tu paladar</p>
				</figcaption>
			</figure>
			<figure class='expandir menuItem'>
				<div>
					<div class='cubierta'></div>
					<img src="../img/menu/Menuinfantil.jpg" alt="Menu Infantil">
				</div>
				<figcaption>
					
					<h3 class='top-none rojo'>Menu Infantil</h3>
					<p class='top-none gris'>Deleita tu paladar</p>
				</figcaption>
			</figure>
			<figure class='ultimo expandir menuItem'>
				<div>
					<div class='cubierta'></div>
					<img src="../img/menu/Postres.jpg" alt="Postres">
				</div>
				<figcaption>
					
					<h3 class='top-none rojo'>Postres</h3>
					<p class='top-none gris'>Deleita tu paladar</p>
				</figcaption>
			</figure>




	</section>

	
	
	
</div>
<br>
<br>
<div id="dialog-modal" title="Menu">


  	<div id="menuPhoto">
  		
  		<img src="../img/menu/Especiales.jpg" alt="Menu Especial">
  	</div>

  	<p class ='nota' id='menuDescription'>
  		
  		Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it:
  	</p>


</div>

@stop
	