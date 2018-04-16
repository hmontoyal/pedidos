$(document).ready(function(){
	var row_count = $("#row_count").val();
	 var table = $('#solicitudes_table').DataTable({

	 	"processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "lengthMenu": [[25, 100, row_count], [25, 100, "Todos"]],
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": BASE_URL+"/solicitudes/listar_solicitudes",
            "type": "POST",
             "data" : function(d){
                
                  d.estado = $('#estado').val();
             },
             "complete": function(){
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

	$('.selectpicker').on('change', function(){
		table.ajax.reload();
	});
});