$(document).ready(function(){
	$('#btn-confirm').on('click', function(){
		var boton= $(this);
		boton.children().removeClass('fa-thumbs-o-up').addClass('fa-spinner fa-spin');
		$.post(BASE_URL+'/solicitudes/confirmar', {id : boton.data('id')}, function(data){

		}).always(function(){
			window.location.reload();
		});
	});

		$('#btn-despachar').on('click', function(){
		var boton= $(this);
		boton.children().removeClass('fa-thumbs-o-up').addClass('fa-spinner fa-spin');
		$.post(BASE_URL+'/solicitudes/despachar', {id : boton.data('id')}, function(data){

		}).always(function(){
			window.location.reload();
		});
	});
});