<div class="col-md-12">
 
 <div class="col-md-6">
      <h4>Datos del Cliente</h4>
    <ul class="list-group">
  <li class="list-group-item">Cliente: <b><?php if($info->iscommercial == '1' ){ echo strtoupper($info->commercial_name); } else{
    echo strtoupper($info->name + ' ' + $info->last_name);
  } ?></b></li>
  <li class="list-group-item">Rut: <b><?php echo $info->rut; ?></b></li>
  <li class="list-group-item">Dirección: <b><?php echo $info->calle. ' ' .$info->numero_calle; ?></b></li>
  <li class="list-group-item">Telefono: <b><?php echo $info->phone; ?></b></li>
</ul>
  </div>



 <div class="col-md-6">
    <h4>Datos del Pedido</h4>
    <ul class="list-group">
      <li class="list-group-item">Nª Pedido: <b><?php echo $info->id_request; ?></b></li>
      <li class="list-group-item">Fecha del pedido: <b><?php echo $info->date; ?></b></li>
  <li class="list-group-item">Total del pedido: <b><?php echo $info->total_pedido; ?></b></li>
  
  <li class="list-group-item">Estado: <b><font size="4"><?php echo $info->str_state; ?></font></b></li>
</ul>
  </div>

   




   <div class="row">
  <div class="col-md-12">
        <table id="solicitudes_table" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
              <td><b>Producto</b></td>
              <td><b>Cantidad</b></td>
              <td><b>Stock Bodega</b></td>
              <th><b>Precio Unitario</b></th>
              <th><b>Total</b></th>
              <th><b>Validacion</b></th>
              
                           

              

                
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
			<button class="btn btn-success" id="btn-confirm" data-id="<?php echo $info->id_request; ?>"><i class="fa fa-thumbs-o-up"></i>&nbsp;Confirmar</button>
		<?php else : ?>
			<button class="btn btn-success">Gestionar Stock</button>
	    <?php endif; ?>
	</div>
</div>
 </div>



