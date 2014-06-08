@extends ('layout')


@section ('style')
	<link rel="stylesheet" media="all" href="/css/admin/eventos.css">

@stop

@section ('javascript')

@stop

@section ('content')


	<div id="superior">

	    <section id="superior-interno">
	      <h2 class='titulos naranja sombra'>
	      	
		      <a href="/Admin/">
		      	<span class="icon-arrow-left3 gris"></span>
		      </a>
	        Usuarios

	      </h2>


	      
	    </section>
    </div>
	<div id="principal">

		<table class='gris'>
			<tr id='cabecera'>
				<td width='50%' class='nocenter'>Nombre</td>
				<td width='35%'>Mail</td>
				<td width='15%'>Telefono</td>
			</tr>


			@foreach($datos['usuarios'] as $user)

				<tr>
					<td class='nocenter'>{{$user->Nombre}}</td>
					<td>{{$user->Mail}}</td>
					<td>{{$user->Telefono}}</span></td>
				</tr>


			@endforeach
		</table>
		

	</div>
    


@stop