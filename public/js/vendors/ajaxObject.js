var ajaxObject=function(datos,funcion){


	this.datos=datos;
	this.funcion=funcion || null;


	this.addAjax=function(){
		
		$(this.datos.sendForm).on(this.datos.evento,
									this.sendForm);

	}

	this.sendForm=function(e){

		e.preventDefault();



		$(datos.elementChange).html('Por Favor Espere...')


		var dataForm=$(this).serialize()+datos.addData;


		$.ajax({
		  type: "POST",
		  url: datos.url,
		  data:dataForm,
		  success: success,
		  error: errorAjax,
		  dataType: 'json'
		});
	}

	 function success(data){
	
		if(data.error===true){
			$(datos.elementChange).html(datos.errorHtml);
		}
		else{
			$(datos.elementChange).html(datos.successHtml);

			callback(data);

		}

	}

	function errorAjax(){
		console.log('error');
		$(datos.elementChange).html('Error al procesar');
	}

	function callback(data){
		if(funcion!=null)
			funcion(data);
	}
}