@extends ('layout')


@section ('style')

	<link rel="stylesheet" media="all" href="/css/luminarias.css">
	<link rel="stylesheet" media="all" href="/css/admin/galeria.css">


@stop

@section ('javascript')
 <script src="/js/free.js"></script>
 <script src="/js/restaurant.js"></script>
 <script  src="/js/vendors/ajaxObject.js"></script>
 <script src="/js/galleryAdmin.js"></script>


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
	      		<button class='boton' id='newG'>Nueva Galería</button>
	      		<div id="eliminar" class='block' data-gallery="{{$datos['ActiveGallery']}}">
	      			<span class="icon-close"></span> Eliminar
	      		</div>
	      </div>

	      
	      
	    </section>
    </div>
	<div id="principal">
		 <ul id='galerias' class='list-none'>
      
		    
		    @foreach ($datos['galerias'] as $galeria)
		        <a href="/Admin/galeria/{{$galeria->Nombre}}" class='gris'>
		            <li id='{{ $galeria->Nombre }}'
		              @if ($datos['ActiveGallery'] === $galeria->Nombre) 
		                class='block ActiveGallery' 
		              @else
		                class='block'
		              @endif
		              >
		              {{ $galeria->Nombre }}
		            </li>
		        </a>
		    @endforeach
		</ul>

		<div id="photos">
			
			<ul class="list-none">

				<li id='new' class='gris'>

					<span class="icon-upload3"></span>
					<br>
					<h3>Nueva Foto</h3>
					
				</li>
				 @foreach ($datos['fotos'] as $foto)
				    <li class="item" id='{{$foto->idImagen}}'>
			      		<div>
			      			<img src="/img/Galerias/{{$foto->Archivo}}" alt="{{$foto->Nombre}}">
			      		</div>
			      		<div class="delete shadow">
			      			
			      			<span class="icon-close gris" data-idphoto='{{$foto->idImagen}}' data-gallery="{{ $datos['ActiveGallery'] }}"></span>
			      		</div>
				      		
				    </li>
    
      			@endforeach
			</ul>
		</div>
		{{$datos['fotos']->links()}}
	</div>
	<div id="newGallery" title="Nueva Galeria">
		{{ Form::open(array('url' =>'new','method'=>'POST','id'=>'addGallery')) }}

			{{Form::text('nombre', $value = null, $attributes = array('placeholder'=>'Nombre de la Galería','required'=>'required'));}}

			<input type="submit" class='boton' value='Registrar'>
		
		{{ Form::close() }}


	</div>

	<div id="newPhotos" title="Subir Fotos">
		{{ Form::open(array('url' =>'Admin/galeria/newPhotos','method'=>'POST','id'=>'addPhotos','files' => true)) }}

			{{Form::file('fotos[]',['multiple' => true], $value = null, $attributes = array('placeholder'=>'Nombre de la Galería','required'=>'required'));}}
			<input type="hidden" value="{{$datos['ActiveGallery']}}" name='gallery'>
			<input type="submit" class='boton' value='Registrar'>
		
		{{ Form::close() }}


	</div>



    


@stop