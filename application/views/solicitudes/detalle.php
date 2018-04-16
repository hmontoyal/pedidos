<div class="col-md-12">
 
 <div class="col-md-6">
      <h4>Datos del Cliente</h4>
    <ul class="list-group">
  <li class="list-group-item">Cliente: <?php if($info->iscommercial == '1' ){ echo strtoupper($info->commercial_name); } else{
    echo strtoupper($info->name + ' ' + $info->last_name);
  } ?></li>
  <li class="list-group-item">Rut: <?php echo $info->rut; ?></li>
  <li class="list-group-item">Dirección: <?php echo $info->address; ?></li>
  <li class="list-group-item">Telefono: <?php echo $info->phone; ?></li>
</ul>
  </div>



 <div class="col-md-6">
    <h4>Datos del Pedido</h4>
    <ul class="list-group">
      <li class="list-group-item">Fecha del pedido: <?php echo $info->date; ?></li>
  <li class="list-group-item">Total del pedido: <?php echo $info->total_pedido; ?></li>
  
  <li class="list-group-item">Estado: <?php echo $info->str_state; ?></li>
</ul>
  </div>

   




   <div class="row">
  <div class="col-md-12">
        <table id="solicitudes_table" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
              <td>Producto</td>
              <td>Cantidad</td>
              <td>Stock Bodega</td>
              <th>Precio Unitario</th>
              <th>Total</th>
              <th>Validacion</th>
              
                           

              

                
            </tr>
        </thead>
        <tbody>
        	<?php $validacion = true; ?>
        	<?php foreach ($details as $row): ?>
        		 <?php $prod = $this->db->get_where('sweets', array('id' => $row->id_sweet))->row();
        		 	;
        		  ?>
        		<tr>
        			<td><?php echo $row->name; ?></td>
        			<td><?php echo $row->quantity; ?></td>
        			<td><?php echo $prod->stock; ?></td>
        			<td><?php echo $row->price; ?></td>
        			<td><?php echo $row->total; ?></td>
        			<?php if($row->quantity <= $prod->stock) :?>
        				<td> <i class="fa fa-check" style="color:green;"></i>&nbsp Stock disponible</td>
        			<?php else: ?>
        				<?php $validacion = false; ?>
        				<td> <i class="fa fa-exclamation-triangle"></i>&nbsp Stock insuficiente</td>
        			<?php endif; ?>


        		</tr>
        	<?php endforeach; ?>
        </tbody>
      <!--   <tfoot>
            <tr>
              <td>Producto</td>
              <td>Cantidad</td>
              <td>Stock</td>
              <th>Precio</th>
              <th>Total</th>
              <th>Validacion</th>
              
                           
              


                
            </tr>
        </tfoot> -->

    </table>




  </div>

 


</div>

<div class="row">
	<div class="col-md-6">
		<?php if($validacion == true ): ?>
			<button class="btn btn-success">Gestionar Pedido</button>
		<?php else : ?>
			<button class="btn btn-success">Gestionar Stock</button>
	    <?php endif; ?>
	</div>
</div>
 </div>

