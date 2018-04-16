<div class="col-md-12">
      <div class="row filtros">
 <div class="col-md-2">
          <div class="form-group">
            <select class="form-control selectpicker" name="estado" id="estado" data-show-subtext="true" data-live-search="true">
             <option value="3" selected>TODOS</option>
             <?php foreach ($states as $row) : ?>
             	<option value="<?php echo $row->id; ?>"><?php echo strtoupper($row->state); ?></option>
             <?php endforeach; ?>
              
           
          </select>
          </div>
      </div> 
    
   </div> 

   <div class="row">
  <div class="col-md-12">
        <table id="solicitudes_table" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
              <td>Rut</td>
              <td>Estado</td>
              <th>Fecha</th>
              <th>Nombre cliente</th>
              <th>Total Pedido</th>
              <th>Acciones</th>
              

              

                
            </tr>
        </thead>
    <!--     <tfoot>
            <tr>
              <td>Rut</td>
              <td>Estado</td>
              <th>Fecha</th>
              <th>Nombre cliente</th>
              <th>Total Pedido</th>
              <th>Acciones</th>
              
              


                
            </tr>
        </tfoot> -->
        <tbody>
        </tbody>
    </table>


  </div>
</div>
 </div>




 <div class="modal fade" id="users-modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Obteniendo datos...</h4>
          <input type="hidden" name="mail-id" id="mail-id" value="">
        </div>
        <div class="modal-body">

         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
