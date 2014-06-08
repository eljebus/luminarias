@extends ('layout')


@section ('style')
	<link rel="stylesheet" media="all" href="/css/admin/eventos.css">


@stop

@section ('javascript')

	<script>
			$(document).on('ready',iniciar);
			var elemento;
			 function iniciar(){

			 	$('.icon-close').on('click',enviar);
				
			 }

			 function enviar(e)
			 {
			 	var idevento=$(this).data('idevento');
			 	elemento=$(this);
			 	$.ajax({
				  type: "POST",
				  url: '/Admin/eventos/delete',
				  data:'idevento='+idevento,
				  success: success,
				  dataType: 'json'
				});
			 }


			 function success(data){

			 	if(success.error==false)
			 		$(elemento).html('No se pudo eleminar');
			 	else{
			 		var elementHide=$(elemento).data('idevento');
			 		$('#'+elementHide).remove();
			 	}

			 }

	</script>
@stop

@section ('content')


	<div id="superior">

	    <section id="superior-interno">
	      <h2 class='titulos naranja sombra'>
	      	
		      <a href="/Admin/">
		      	<span class="icon-arrow-left3 gris"></span>
		      </a>
	        {{$datos['titulo']}}

	      </h2>

	      <div id='controls'>
	      	<a href="/Admin/eventos/{{$datos['nombre']}}/new">
	      		<button class='boton'>Nueva</button>
	      	</a>
			<form action="/Admin/eventos/{{$datos['nombre']}}/search" method='POST'>
				<input type="search" name='dato' placeholder="Buscar {{$datos['titulo']}}" required id='search'>
			</form>
	      	
	      	
	      </div>
	      
	      
	    </section>
    </div>
	<div id="principal">

		<table class='gris'>
			<tr id='cabecera'>
				<td width='35%' class='nocenter'>Nombre</td>
				<td width='15%'>Inicio</td>
				<td width='15%'>Fin</td>
				<td width='15'>Registrados</td>
				<td width='15%'>Modificar</td>
				<td width='15%'>Eliminar</td>
			</tr>


			@foreach($datos['eventos'] as $evento)
				
				<tr id='{{$evento->idPromociones}}'>
					<td class='nocenter'>{{$evento->Nombre}}</td>
					<td>{{date("d/m/Y",strtotime($evento->Inicio))}}</td>
					<td>{{date("d/m/Y",strtotime($evento->Fin))}}</td>
					<td>
					<a href="/Admin/eventos/users/{{$evento->idPromociones}}" class='gris'>
						<span class="icon-users"></span>
					</a>
						
					</td>
					<td>
						<a href="/Admin/eventos/edit/{{$evento->idPromociones}}" class='gris'>
							<span class="icon-pencil2"></span>
						</a>
					</td>
					<td>
						<span class="icon-close" data-idevento='{{$evento->idPromociones}}'></span>
					</td>
				</tr>


			@endforeach
		</table>
		
		{{$datos['eventos']->links()}}
	</div>
    


@stop