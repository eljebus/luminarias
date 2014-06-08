@extends ('layout')


@section ('style')
	<link rel="stylesheet" media="all" href="/css/admin/textstyle.css">
	<link rel="stylesheet" media="all" href="/css/admin/contenido.css">




@stop

@section ('javascript')
	<script src="/js/free.js"></script>
	<script src="/js/vendors/textEditor.min.js"></script>
	<script>
		$(document).on('ready',function(){

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
	       Contenido de sección {{$datos['titulo']}}

	      </h2>
	    </section>
    </div>
	
	<div id="principal">
		<ul id="secciones" class='list-none gris'>

			@foreach ($datos['secciones'] as $seccion)

				@if($datos['activeSection']==$seccion->Nombre)
					<li class='block active'>
				@else
					<li class="block">
				@endif
					
						{{$seccion->Nombre}}
					</li>

			@endforeach
			

		</ul class=''>
		{{ Form::open(array('url' =>'/Admin/content/save','method'=>'POST')) }}
	
			
			<input type="hidden" value="{{$datos['activeSection']}}" name='seccion'>
				
			<textarea name="contenido" id="">
				{{$datos['content']->Contenido}}
			</textarea>
				
				
			<input type="submit" value='Guardar' class='boton'>
	
		{{ Form::close() }}
	</div>
    
    


@stop