

	$(document).on('ready',comenzar);


	function comenzar(){
		

		var datos={
			sendForm:'#login',
			evento:'submit',
			addData:'',
			url:'getLogin',
			elementChange:'.error',
			successHtml:'',
			errorHtml:'Datos Incorrectos'
		}

		ajaxObject=new ajaxObject(datos,successLogin);
		ajaxObject.addAjax();
	}


	function successLogin(data){

			if(data.success==true){
				$('.error').html('Usuario Válido');
				window.location = "/Admin";
			}
			else
				$('.error').html('Datos Incorrectos');

	}


		