@extends ('layout')


@section ('style')

	<link rel="stylesheet"  href="../css/{{$datos['seccion']}}.css">

@stop

@section ('javascript')

  <script src="../js/free.js"></script>
  <script src="../js/salon.js"></script>

@stop

@section ('content')

<div id="container" class='expandir'>

	<div id="superior">

		
		<section id="superior-interno">
			<h2 class='titulos naranja sombra'>
				Desayunos
				<span class='gris normal sin-sombra desaparece'>|</span>
				<label class='gris sin-sombra blockResponsive'>  
					Para tus reuniones o conferencias tenemos el mejor salón
				</label>
			</h2>
		</section>

		
	</div>
	<div id='principal'>

		<div id="foto">
			
			<img src="../img/desayunos.jpg" alt="" id='slider'>

			<div id="divisor">
				<div id="uno"></div>
				<div id="dos"></div>
				<div id="tres"></div>
				<div id="cuatro"></div>
			</div>

			

		</div>

		<section id="content" class='nota lateralShadow'>
			<ul class='list-none aparece'>
				<li class='dobleShadow'>
					<div>
						<img src="../img/huevosfritos.jpg"  class='fotoItem'>
					</div>
					
				</li>
				<li class='dobleShadow'>
					<div>
						<img src="../img/hot-cakes.jpg"  class='fotoItem'>
					</div>
					
				</li>
				<li class='dobleShadow'>
					<div>
						<img src="../img/huevosrefritos.jpg"  class='fotoItem'>
					</div>
					
				</li>
				
			</ul>
			<article>
				<p>
					My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?


				</p>
				<p>
					Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. 
				</p>
				<br>
				<a href="/Contacto?asunto=desayunos#contacto">
					<button class='boton'>Mas Información </button>
				</a>
			</article>

			<ul class='list-none desaparece'>
				<li class='dobleShadow'>
					<div>
						<img src="../img/huevosfritos.jpg"  class='fotoItem'>
					</div>
					
				</li>
				<li class='dobleShadow'>
					<div>
						<img src="../img/hot-cakes.jpg"  class='fotoItem'>
					</div>
					
				</li>
				<li class='dobleShadow'>
					<div>
						<img src="../img/huevosrefritos.jpg"  class='fotoItem'>
					</div>
					
				</li>
				
			</ul>


		</section>


	</div>
</div>


@stop
	