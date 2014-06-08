@extends ('layout')


@section ('style')
	<link rel="stylesheet" media="all" href="/css/admin/login.css">

@stop

@section ('javascript')
  <script type="text/javascript" language="javascript" src="js/vendors/ajaxObject.js"></script>
  <script type="text/javascript" language="javascript" src="js/login.js"></script>
@stop

@section ('content')


	<div id="superior">

    <section id="superior-interno">
      <h2 class='titulos naranja sombra'>
        {{$datos['titulo']}}
        <span class='gris normal sin-sombra desaparece'>|</span>
        <label class='gris sin-sombra blockResponsive'>  
          Ingresa tus datos
        </label>
      </h2>
      
    </section>


    
  </div>
   <div id="principal" style='margin-top:2em'>


   	<form action="none" id='login' class='nota dobleShadow'>
   		<div class="error"></div>
   		<input type="text" name='user' placeholder='Correo' required>
   		<input type="password" placeholder='contraseña' name='pass' required>
   		<input type="submit" value='Ingresar' class='derecho'>
   	</form>
   </div>


@stop