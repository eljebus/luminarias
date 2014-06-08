@extends ('layout')


@section ('style')

 
  <link rel="stylesheet" href="/css/stylesgallery.css" /> 
  <link rel="stylesheet"  href="../css/galeria.css">
@stop

@section ('javascript')
<script src="../js/plugins.js"></script>
<script src="../js/scripts.js"></script>

<script>
  
  $(document).on('ready',function(){
        var a = jQuery.noConflict();
        a('#gallery-container').sGallery({
        fullScreenEnabled: false
      });
  });
</script>


@stop

@section ('content')
<div id="superior">

    <section id="superior-interno">
      <h2 class='titulos naranja sombra'>
        {{$datos['titulo']}}
        <span class='gris normal sin-sombra desaparece'>|</span>
        <label class='gris sin-sombra blockResponsive'>  
          Te brindamos las mejores imagenes de Luminarias
        </label>
      </h2>
      
    </section>


    
  </div>
  <div id="principal" style='margin-top:2em'>
    <ul id='galerias' class='list-none'>
      
    
    @foreach ($datos['galerias'] as $galeria)
          <a href="../Galeria/{{$galeria->Nombre}}" class='gris'>
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


  <!--// Gallery Markup: A container that the plugin is called upon, and two lists for the /images (use /images with same aspect ratio) //-->
  <div id="gallery-container">
    
    <ul class="items--small">
      @foreach ($datos['fotos'] as $foto)
      <li class="item">
      	<a href="#">
      		<div>
      			<img src="/img/Galerias/{{$foto->Archivo}}" alt="{{$foto->Nombre}}">
      		</div>
      		
      	</a>
      </li>
    
      @endforeach
     
    </ul>
    <ul class="items--big list-none">
       @foreach ($datos['fotos'] as $foto)

   
        <li class="item--big">
          <a href="#">
            <figure>
            	
             <img src="/img/Galerias/{{$foto->Archivo}}" alt="{{$foto->Nombre}}">
             
            </figure>
            </a>
        </li>
       
      @endforeach
     
    </ul>
    <div class="controls">
      <span class="control icon-arrow-left gris" data-direction="previous"></span> 
      <span class="control icon-arrow-right gris" data-direction="next"></span> 
      <span class="grid  icon-images gris">
      	
      </span>
      <span class="fs-toggle icon-expand gris">
      	
      </span>
    </div>
    
  </div>
  
  {{$datos['fotos']->links()}}

</div>

@stop