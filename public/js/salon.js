

$(document).on('ready',iniciar);

function  iniciar(){


	$('.fotoItem').on('click',cambiar);
}

function cambiar(e){

	console.log('test');
	var src=$(this).attr('src');
	$('#slider').fadeOut('slow',function(){
			$('#slider').attr({
				src: src,
				width: '170%'
			});
			$('#slider').fadeIn('slow');

	})


}