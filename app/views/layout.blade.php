<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$datos['titulo']}}</title>
	<meta name="Description" content="El mejor Restaurant Bar para ir a comer en Jalisco, Jamay, Ocotlán, La Barca" >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Oswald|Amaranth|Radley:400,400italic' rel='stylesheet' type='text/css'>
	<style>

		#header-container header nav #{{$datos['activeSection']}}{

			background:white;
			color:#6b9e34;
			box-shadow:  0px 7px 16px 0px rgba(50, 50, 50, 0.68);
		}
	</style>
	@yield('style')

	

	
</head>
<body>


	<div id="header-container" class='expandir'>
		<header>
			<h1 class='top-none' id='logo'   >
				<img src="/img/luminarias.png" alt="Restaurant Luminarias">
			</h1>
			<!-- Redes sociales !-->
			
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FrestaurantLuminarias&amp;width=100px&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21&amp;colorscheme=dark&amp;appId=458645437545685" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100pxpx; height:21px;" allowTransparency="true"id='fb'></iframe>
			
			<div class="g-plusone" data-size="medium" data-href="https://plus.google.com/111972395889420963072/"></div>


			<script type="text/javascript">
			  window.___gcfg = {lang: 'es'};

			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/platform.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>

			<!-- Fin Redes sociales !-->



			<nav class='expandir'>
				
				<ul class="list-none" id='normal'>
					<a href="/" title='INICIO'>
						<li class="block" id="inicio">Inicio</li>
					</a>

					<a href="/servicios/Eventos">
						<li class="block" id="eventos">Eventos</li>
					</a>
					
					<a href="/#servicios" id='linkServices'>
						<li class="block" id="servicio">Servicios</li>
					</a>
					

					<a href="/Galeria">
						<li class="block" id="galeria">Galería</li>
					</a>
					
					<a href="/Contacto" title='CONTACTO'>
						<li class="block ultimo" id="Contacto">Contacto</li>
					</a>
					
				</ul>

				<select id='oculto'>
					<option>Menú</option>
					<option>Inicio</option>
					<option>Eventos</option>
					<option>Servicios</option>
					<option>Galería</option>
					<option>Contacto</option>
				</select>
			</nav>

		</header>
	</div>
	

	@yield('content')


	<footer>
		
		<div id='footer-container' >
				<ul class="list-none">
					
					<li class='block'><span class='icon-facebook'></span>Página Oficial</li>
					<li class='block'><span class="icon-twitter"></span> Twitter</li>
					<li class='block'><span class="icon-googleplus"></span> Google</li>
					<li class='block'><span class="icon-foursquare2"></span> Forsquare</li>
					<li class='block' id='subir'>Subir <span class="icon-arrow-up3"></span></li>
					<li class="block mitad">Tenemos servicio para ti todos los días del año</li>
					<li class="block mitad">Km. 7 Carretera Ocotlán , Jamay Tel.: 01(392) 922 3726</li>
					<li class="block desaparece all">Restaurant Luminarias 2014 © &nbsp;&nbsp;&nbsp;JesusCervantes</li>
				</ul>
				

			
		</div>

	</footer>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="/js/jqueryui.js"></script>

	<script>

		$(document).on('ready',iniciar);

		function iniciar(){

			$('#subir').on('click',function (){
				console.log('test');
				$('html, body').animate({scrollTop: '0px'}, 1000);
			});
			
		}
	</script>

	<!-- analitics -->
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51149835-1', 'restaurantluminarias.com.mx');
		  ga('send', 'pageview');

	</script>
	<!-- analitics -->
	@yield('javascript')
	
</body>
</html>