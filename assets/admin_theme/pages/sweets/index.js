$(document).ready(function(){
	var row_count = $("#row_count").val();
	 var table = $('#sweets_table').DataTable({

	 	"processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "lengthMenu": [[25, 100, row_count], [25, 100, "Todos"]],
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": BASE_URL+"/sweets/listar_dulces",
            "type": "POST",
             "data" : function(d){
                
                  d.estado = $('#filtro').val();
             },
             "complete": function(){

                  $('.item-edit').on('click', function(){
                    var button = $(this);
                    //alert('ok');
                    var modal = $('#item-modal');
                    modal.modal('show');
                    var body = modal.find('.modal-body');

                    body.load(BASE_URL+'/sweets/html', {id : button.data('id')}, function(){
                        $('#form').ajaxForm({
                            success: function(response){
                                if(response == true){
                                     toastr["success"]("ACTUALIZADO CON EXITO!");
                                     modal.modal('hide')
                                     table.ajax.reload();
                                }else{
                                     toastr["error"]("SE PRODUJO UN ERROR, POR FAVOR INTENTELO MAS TARDE!");
                                }
                            }
                    });
                      
                    });
                     

                  });

                  $('.item-delete').on('click', function(){
                    var button = $(this);
                    $.post(BASE_URL+'/sweets/disable',{id: button.data('id')}, function(result){

                       // alert(result);
                        if(result == true){
                                 if(button.hasClass('btn-success')){
                                     toastr["success"]("PRODUCTO DESACTIVADO CON EXITO!");
                                 }else{
                                    if(button.hasClass('btn-danger')){
                                        toastr["success"]("PRODUCTO ACTIVADO CON EXITO!");
                                    }
                                 }
                                    
                                     table.ajax.reload();
                                }else{
                                     toastr["error"]("SE PRODUJO UN ERROR, POR FAVOR INTENTELO MAS TARDE!");
                                }
                    });

                  });

             	// $('.state-checkbox').bootstrapSwitch();

             	// $('.state-checkbox').on('switchChange.bootstrapSwitch', function (event, state) {
             	// 	 if(state == true){
             	// 	 	toastr['success']("PROFESIONAL HABILITADO");
             	// 	 }else{
             	// 	 	toastr['error']("PROFESIONAL DESHABILITADO");
             	// 	 }
             	// 	 $.post(BASE_URL+ "/profesionales/changestate",{id:$(this).data('id')});
             	// });
             }
        },

       
	 });

     $('#add-form').ajaxForm({
        success: function(response){
                if(response== true){
                        toastr["success"]("AGREGADO CON EXITO!");
                        table.ajax.reload();
                }else{
                        toastr["error"]("SE PRODUJO UN ERROR, POR FAVOR INTENTELO MAS TARDE!");
                }
        }
     });

	$('.selectpicker').on('change', function(){
		table.ajax.reload();
	});

    $('#btn-add').on('click',function(){
        $('#form-add-wrapper').toggle();
    });
});