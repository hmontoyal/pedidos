$(document).ready(function(){
	var form =  $('#form');

	form.ajaxForm({
		success: function(data){
			if(data.result == true){
				 toastr["success"]("SOLICITUD ENVIADA  CON ÉXITO!");
			}else{
				 toastr["error"]("NO SE PUDO CREAR LA SOLICITUD, INTENTELO MAS TARDE");
			}
		}
	});
});