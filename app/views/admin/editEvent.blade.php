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
	       Modificar {{$datos['evento']->Nombre}}

	      </h2>
	    </section>
    </div>
	
	<div id="principal">

		{{ Form::model($datos['evento'],array('url' =>'Admin/eventos/editEvent','method'=>'POST', 'files' => true)) }}
	
			
			<div class='izquierdo'>

				{{Form::hidden('idPromociones', $value = null, $attributes = array('placeholder'=>'Nombre de '.$datos['nombre'],'required'=>'required'));}}
				
				{{Form::text('Nombre', $value = null, $attributes = array('placeholder'=>'Nombre de '.$datos['nombre'],'required'=>'required'));}}

				{{Form::text('Inicio', $value = null, $attributes = array('placeholder'=>'Comienzo','required'=>'required','class'=>'date'));}}
				
				{{Form::textarea('Descripcion', $value = null, $attributes = array('placeholder'=>'Bases de '.$datos['nombre'],'required'=>'required','id'=>'texto'));}}
			
			</div>
			<div id="derecho">
				
				{{Form::text('Fin', $value = null, $attributes = array('placeholder'=>'Fin','required'=>'required','class'=>'date'));}}

				{{Form::file('imagen', $value = null, $attributes = array('placeholder'=>'Imagen','required'=>'required'));}}

				<input type="submit" value='Registrar' class='boton'>
			</div>
		{{ Form::close() }}
	</div>
    
    


@stop