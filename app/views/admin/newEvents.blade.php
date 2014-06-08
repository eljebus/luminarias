@extends ('layout')


@section ('style')
	<link rel="stylesheet" media="all" href="/css/admin/textstyle.css">
	<link rel="stylesheet" media="all" href="/css/admin/newEvents.css">

	<link rel="stylesheet" media="all" href="/css/luminarias.css">


@stop

@section ('javascript')
	<script src="/js/free.js"></script>
  	<script src="/js/restaurant.js"></script>
	<script src="/js/vendors/textEditor.min.js"></script>
	<script>
		$(document).on('ready',function(){

			$(".date" ).datepicker();
			$("textarea").jqte();
		});

	</script>

@stop

@section ('content')


	<div id="superior">

	    <section id="superior-interno">
	      <h2 class='titulos naranja sombra'>
	      <a href="/Admin/">
	      	<span class="icon-arrow-left3 gris"></span>
	      </a>
	       Nuevo {{$datos['titulo']}}

	      </h2>
	    </section>
    </div>
	
	<div id="principal">



	
		{{ Form::open(array('url' =>'Admin/eventos/'.$datos['nombre'].'/registro','method'=>'POST', 'files' => true)) }}
	
			
			<div class='izquierdo'>
				

				{{Form::text('nombre', $value = null, $attributes = array('placeholder'=>'Nombre de '.$datos['nombre'],'required'=>'required'));}}

				{{Form::text('inicio', $value = null, $attributes = array('placeholder'=>'Comienzo','required'=>'required','class'=>'date'));}}
				
				{{Form::textarea('bases', $value = null, $attributes = array('placeholder'=>'Bases de '.$datos['nombre'],'required'=>'required','id'=>'texto'));}}
			
			</div>
			<div id="derecho">
				
				{{Form::text('fin', $value = null, $attributes = array('placeholder'=>'Fin','required'=>'required','class'=>'date'));}}

				{{Form::file('imagen', $value = null, $attributes = array('placeholder'=>'Imagen','required'=>'required'));}}

				<input type="submit" value='Registrar' class='boton'>
			</div>
		{{ Form::close() }}
	</div>
    
    


@stop