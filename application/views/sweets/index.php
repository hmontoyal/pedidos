<div class="col-md-12">
      <div class="row filtros">
<div class="col-md-1">
       <div class="form-group">
         <button class="btn btn-success" id="btn-add">Agregar</button>
       </div>
      </div>
      <div class="col-md-11" id="form-add-wrapper" style="display:none">
       <?php echo form_open(base_url('sweets/crear'),array('method' => 'post' , 'role' => 'form', 'id' => 'add-form', 'class' => 'form-inline')); ?>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type= "text" name="nombre" class="form-control" id="nombre" required="required">
  </div>
  <div class="form-group">
    <label for="precio">Precio:</label>
    <input type= "text" name="precio" class="form-control" id="precio" required="required">
  </div>

    <div class="form-group">
    <label for="stock">Stock Inicial:</label>
    <input type= "number" name="stock" class="form-control" id="stock" required="required">
  </div>

  <button type="submit" class="btn btn-success">guardar</button>
</form>
</div>


   </div> 

   <div class="row">
  <div class="col-md-12">
        <table id="sweets_table" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
            <td>Id</td>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Stock</td>
            <td>Precio</td> 
            <td>Acciones</td> 
              

              

                
            </tr>
        </thead>
       <!--  <tfoot>
            <tr>
             <td>id</td>
             <td>Nombre</td>
             <td>Precio</td>
             <td>Stock</td>
             <td>Acciones</td>
              
              


                
            </tr>
        </tfoot> -->
        <tbody>
        </tbody>
    </table>


  </div>
</div>
 </div>




 <div class="modal fade" id="item-modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Actualizar productos</h4>
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
