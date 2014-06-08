

	$(document).on('ready',comenzar);
	function comenzar(){
		$('#linkServices').on('click',function(e){
			//prevenir en comportamiento predeterminado del enlace
			e.preventDefault();
			//obtenemos el id del elemento en el que debemos posicionarnos
			
			
			//utilizamos body y html, ya que dependiendo del navegador uno u otro no funciona
			$('body,html').stop(true,true).animate({
				//realizamos la animacion hacia el ancla
				scrollTop: $('#servicios').offset().top
			},1000);
		});


		$('.box_skitter_large').skitter({
			theme: 'square',
			progressbar: false, 
			dots: false, 
			preview: false,
			numbers: false,
			auto_play:true,
			width_label: '350px',
			labelAnimation: 'left',
			animation:'cubeShow',
			velocity: 0.5,
			interval: 7000 
		});




	    $("#dialog-modal").dialog({
		    width: 'auto', // overcomes width:'auto' and maxWidth bug
		    maxWidth: 700,
		    height: 'auto',
		    modal: true,
		    autoOpen:false,
		    fluid: true, //new option
		    resizable: false
		});


		// on window resize run function
		$(window).resize(function () {
		    fluidDialog();
		});

		// catch dialog if opened within a viewport smaller than the dialog width
		$(document).on("dialogopen", ".ui-dialog", function (event, ui) {
		    fluidDialog();
		});

		function fluidDialog() {
		    var $visible = $(".ui-dialog:visible");
		    // each open dialog
		    $visible.each(function () {
		        var $this = $(this);
		        var dialog = $this.find(".ui-dialog-content").data("ui-dialog");
		        // if fluid option == true
		        if (dialog.options.fluid) {
		            var wWidth = $(window).width();
		            // check window width against dialog width
		            if (wWidth < (parseInt(dialog.options.maxWidth) + 50))  {
		                // keep dialog from filling entire screen
		                $this.css("max-width", "90%");
		            } else {
		                // fix maxWidth bug
		                $this.css("max-width", dialog.options.maxWidth + "px");
		            }
		            //reposition dialog
		            dialog.option("position", dialog.options.position);
		        }
		    });

}

	    $('#promo').on('click',abrirPromo);

	   
	}
	function abrirPromo(){

		console.log(1);
		$( "#dialog-modal" ).dialog('open');
		
	}