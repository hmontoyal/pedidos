<?php echo form_open(base_url('clientes/update'), array('role' => 'form' , 'id' => 'form' , 'method' => 'post')); ?>
                  <div class="row">
<div class="form-group col-md-10">
	<label for="commercial_name">Nombre</label>
			<input name="commercial_name" type="text" class="form-control" value="<?php echo $prod->commercial_name; ?>">
		</div>
		<input name="id" type="hidden" value="<?php echo $prod->id; ?>">
		<div class="form-group col-md-2">
			<label for="calle">Direccion</label>
			<input name="calle" type="text" class="form-control" value="<?php echo $prod->calle; ?>">
		</div>
	</div>

	<div class="row ">
		<div class="form-group col-md-2">
			<label for="numero">Numero</label>
			<input name="numero" type="text" class="form-control" value="<?php echo $prod->numero; ?>">
		</div>

	</div>

	<div class="row ">

		<div class="form-group col-md-6">

			<button class="btn btn-success ">Actualizar</button>
		</div>
	</div>
	
	

</form>