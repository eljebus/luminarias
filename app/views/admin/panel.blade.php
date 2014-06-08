@extends ('layout')


@section ('style')
	<link rel="stylesheet" media="all" href="/css/admin/{{$datos['nombre']}}.css">

@stop

@section ('javascript')


@stop

@section ('content')


	<div id="superior">

    <section id="superior-interno">
      <h2 class='titulos naranja sombra'>
        {{$datos['titulo']}}
        <span class='gris normal sin-sombra desaparece'>|</span>
        <label class='gris sin-sombra blockResponsive'>  
          Bienvenido Administrador
        </label>
      </h2>
      
    </section>


    
  </div>
   <div id="principal" style='margin-top:2em'>


   		<center>
   			

   			<ul class="list-none">
          <a href="/Admin/eventos/Eventos">
            <li class='block nota dobleShadow'>
              <span class="icon-tag"></span>
              Eventos
            </li>
          </a>
   			  <a href="/Admin/eventos/Promociones">
     				<li class='block nota dobleShadow ultimo'>
     					<span class="icon-calendar"></span>
     					Promociones
     				</li>
          </a>
     			<a href="/Admin/content">
     				<li class='block nota dobleShadow'>
     					<span class="icon-file"></span>
     					Contenido
     				</li>
          </a>
          <a href="/Admin/galeria">
     				<li class='block nota dobleShadow ultimo'>
     					<span class="icon-image"></span>
     					Galerias
     				</li>
          </a>
   			</ul>
   		</center>
   </div>


@stop