$(document).on('ready',iniciar);
	var elemento;
	 function iniciar(){

	 	


	 	$('.icon-close').on('click',eliminarPhoto);
	 	$('#eliminar').on('click',eliminar);


		iniciarDialogos();

	 	$('#newG').on('click',function(){

	 		$( "#newGallery" ).dialog('open');
	 	});

	 	$('#new').on('click',function(){

	 		$( "#newPhotos" ).dialog('open');
	 	});


	 	var datos={
			sendForm:'#newGallery form',
			evento:'submit',
			addData:'',
			url:'/Admin/galeria/new',
			elementChange:'#newGallery',
			successHtml:'Galería Creada',
			errorHtml:'Datos Incorrectos'
		}

		var addGallery=new ajaxObject(datos,newGallery);
		addGallery.addAjax();

		


	 }



	 function eliminar(e){
	 	gallery=$(this).data('gallery');
	 	$.ajax({
		  type: "POST",
		  url: '/Admin/galeria/deleteGallery',
		  data:'gallery='+gallery,
		  success: function(){
		  	window.location = "/Admin";
		  },
		  dataType: 'json'
		});

	 }


// funciones para eliminar imagen
	 function eliminarPhoto(e)
	 {

	 
            idPhoto=$(this).data('idphoto');
            gallery=$(this).data('gallery');
        
	
	 	elemento=$(this);
	 	$.ajax({
		  type: "POST",
		  url: '/Admin/galeria/delete',
		  data:'idPhoto='+idPhoto+'&gallery='+gallery,
		  success: success,
		  dataType: 'json'
		});
	 }


	 function success(data){

	 	if(data.success==false)
	 		$(elemento).html('No se pudo eleminar');
	 	else{
	 		var elementHide=$(elemento).data('idphoto');
	 		console.log(elementHide);
	 		$('#'+elementHide).remove();
	 	}

	 }


// Funciones para los dialogos


	 function iniciarDialogos(){

	 	$("#newGallery").dialog({
		    width: 'auto', // overcomes width:'auto' and maxWidth bug
		    maxWidth: 650,
		    height: 'auto',
		    modal: true,
		    autoOpen:false,
		    fluid: true, //new option
		    resizable: false,
		    hide:'clip'
		});

		$("#newPhotos").dialog({
		    width: 'auto', // overcomes width:'auto' and maxWidth bug
		    maxWidth: 650,
		    height: 'auto',
		    modal: true,
		    autoOpen:false,
		    fluid: true, //new option
		    resizable: false,
		    hide:'clip'
		});


		
	 }


	 function newGallery(data){
	 		console.log(data);
	 		window.location = "/Admin/galeria/"+data.gallery;
	 }
