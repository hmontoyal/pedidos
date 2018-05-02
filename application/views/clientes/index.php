<div class="col-md-12">
      <div class="row filtros">
<div class="col-md-1">
       <div class="form-group">
         <button class="btn btn-success" id="btn-add">Agregar</button>
       </div>
</div>
      <div  id="form-add-wrapper" class="col-md-11" style="display:none">
      
      <div class="row">
               <?php echo form_open(base_url('clientes/crear'),array('method' => 'post' , 'role' => 'form', 'id' => 'add-form', 'class' => 'form-inline')); ?>
    
  <div class="form-group col-md-2">
    <label for="rut">Rut:</label>
    <input type= "text" name="rut" class="form-control" id="rut" required="required">
  </div>

  <div class="form-group col-md-4">
    <label for="nombre">Nombre:</label>
    <input type= "text" name="nombre" class="form-control" id="nombre" required="required">
  </div>

  <div class="form-group col-md-4">
    <label for="apellido">Apellido:</label>
    <input type= "text" name="apellido" class="form-control" id="apellido" required="required">
  </div>
    </div>
<div class="row">
     <div class="form-group col-md-5">
    <label for="nombre_comercial">Nombre comercial:</label>
    <input type= "text" name="nombre_comercial" class="form-control" id="nombre_comercial" required="required">
  </div>
 
  <div class="form-group col-md-5">
    <label for="calle">Direccion:</label>
    <input type= "text" name="direccion" class="form-control" id="direccion" required="required">
  </div>
   <div class="form-group col-md-2">
    <label for="numero">Numero:</label>
    <input type= "text" name="numero" class="form-control" id="direccion" required="required">
  </div>
</div>
<div clas="row">
    <div class="form-group col-md-2">
    <label for="telefono">Telefono:</label>
    <input type= "text" name="telefono" class="form-control" id="telefono" required="required">
  </div>

  <div class="form-group col-md-2">
    <label for="email">Email:</label>
    <input type= "email" name="email" class="form-control" id="email" required="required">
  </div>

</div>   

   <div class="form-group col-md-2">
    <br>
     <button type="submit" name="button" class="btn btn-success">guardar</button>
   </div>
</form>
      </div>
</div>


   </div> 
   <div class="row">
    <div class="col-md-4">
       <select name="filtro" id="filtro" class="form-control selectpicker" data-live-search="true">
       <option value="">TODOS</option>
        <option value="1">ACTIVOS</option>
        <option value="2">INACTIVOS</option>
     </select>
    </div>
   </div>
   <div class="row">
  <div class="col-md-12">
        <table id="clientes_table" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
            <td>id</td>
            <td>Rut</td> 
            <td>Nombre Comercial</td>
            <td>Direccion</td>
            <td>Numero</td>            
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
          <h4 class="modal-title">Actualizar Cliente</h4>
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
