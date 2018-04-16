<?php echo form_open(base_url('sweets/update'), array('role' => 'form' , 'id' => 'form' , 'method' => 'post')); ?>
                  <div class="row">
<div class="form-group col-md-6">
	<label for="name">Nombre</label>
			<input name="name" type="text" class="form-control" value="<?php echo $prod->name; ?>">
		</div>
		<input name="id" type="hidden" value="<?php echo $prod->id; ?>">
		<div class="form-group col-md-6">
			<label for="stock">Stock</label>
			<input name="stock" type="text" class="form-control" value="<?php echo $prod->stock; ?>">
		</div>
	</div>

	<div class="row ">
		<div class="form-group col-md-6">
			<label for="price">Precio</label>
			<input name="price" type="text" class="form-control" value="<?php echo $prod->price; ?>">
		</div>

	</div>

	<div class="row ">

		<div class="form-group col-md-6">

			<button class="btn btn-success ">Actualizar</button>
		</div>
	</div>
	
	

</form>