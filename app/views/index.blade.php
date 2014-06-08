@extends ('layout')


@section ('style')
<link rel="stylesheet" media="all" href="/css/skitter.styles.css">
<link rel="stylesheet" media="all" href="/css/index.css">


@stop

@section ('javascript')
<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
 <script src="/js/free.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>

<script type="text/javascript" language="javascript" src="js/index.js"></script>

@stop

@section ('content')




<div id="container" class='expandir'>
	
	<section id="container-foto">
		<div id="foto"  class="box_skitter box_skitter_large">
			<ul>
				<li><a href=""><img src="img/2.jpg" class="cube" /></a><div class="label_text"><p>En una Palapa...</p></div></li>
				<li><a href=""><img src="img/05.jpg" class="cubeRandom" /></a><div class="label_text"><p>A la orilla del Lago de Chapala</p></div></li>
			
			</ul>
			
		</div>
	</section>
	


	<section id="main-containter">
		
		<a href="Promociones/{{$datos['evento']->Slug}}">
			<button id='promo'>{{$datos['evento']->Nombre}} <span class="icon-arrow-right3"></span></button>
		</a>
		
		<ul class="list-none" id='servicios'>
			<a href="/servicios/Restaurant" title='Restaurant'>
				<li class="block">
				
					<figure>
						<div>
							<div class='cubierta'></div>
							<img src="/img/restaurant.jpg" alt="Restaurant">
						</div>
						
						<figcaption>

							<h2 class='titulo wtop'>Restaurant </h2>
							<p class='textos wtop'>El mejor sabor y el mejor servicio</p>
						</figcaption>
					</figure>
				</li>
			</a>
			<a href="/servicios/Eventos" title='Eventos'>
				<li class="block">
					
					<figure>
						<div>
							<div class='cubierta'></div>
							<img src="/img/05.jpg" alt="Restaurant">
						</div>
						
						<figcaption>
							
							<h2 class='titulo wtop'>Eventos</h2>
							<p class='textos wtop'>Organizamos el mejor de tus eventos</p>
						</figcaption>
					</figure>
				</li>
			</a>
			<a href="/servicios/Salon">
				
			
				<li class="block">
					
					<figure>
						<div>
							<div class='cubierta'></div>
							<img src="/img/05.jpg" alt="Restaurant">
						</div>
						
						<figcaption>
							
							<h2 class='titulo wtop'>Salón Ejecutivo</h2>
							<p class='textos wtop'>Tus reuniones al más alto nivel</p>
						</figcaption>
					</figure>
				</li>
			</a>
			<a href="/servicios/Desayunos">
				<li class="block">
					
					<figure>
						<div>
							<div class='cubierta'></div>
							<img src="/img/desayunos.jpg" alt="Desayunos">
						</div>
						
						<figcaption>
							
							<h2 class='titulo wtop'>Desayunos</h2>
							<p class='textos wtop'>Ven y desayuna con nosotros</p>
						</figcaption>
					</figure>
				</li>
			</a>
				
			
		</ul>
		
	</section>
	
</div>


@stop
	