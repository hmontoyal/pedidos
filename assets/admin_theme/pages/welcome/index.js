$(document).ready(function(){
	var form =  $('#form');

	form.ajaxForm({
		success: function(data){
			if(data.result !== false){
				 toastr["success"]("SOLICITUD ENVIADA  CON ÉXITO!");
				 location.href = BASE_URL + '/welcome/detalle/'+data.result;
			}else{
				 toastr["error"]("NO SE PUDO CREAR LA SOLICITUD, INTENTELO MAS TARDE");
			}
		}
	});
});