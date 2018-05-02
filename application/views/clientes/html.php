<?php echo form_open(base_url('clientes/update'), array('role' => 'form' , 'id' => 'form' , 'method' => 'post')); ?>
                  <div class="row">
<div class="form-group col-md-4">
	<label for="commercial_name">Nombre</label>
			<input name="name" type="text" class="form-control" value="<?php echo $prod->name; ?>">
		</div>
		<input name="id" type="hidden" value="<?php echo $prod->id; ?>">
		<div class="form-group col-md-4">
			<label for="apellido">Apellido</label>
			<input name="apellido" type="text" class="form-control" value="<?php echo $prod->last_name; ?>">
		</div>

		<div class="form-group col-md-4">
			<label for="nombre_comercial">Nombre comercial</label>
			<input name="nombre_comercial" type="text" class="form-control" value="<?php echo $prod->commercial_name; ?>">
		</div>
	</div>

	<div class="row ">
		<div class="form-group col-md-4">
			<label for="calle">Calle</label>
			<input name="calle" type="text" class="form-control" value="<?php echo $prod->calle; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="numero_calle">Calle</label>
			<input name="numero_calle" type="text" class="form-control" value="<?php echo $prod->numero_calle; ?>">
		</div>

	</div>

	<div class="row ">
		<div class="form-group col-md-4">
			<label for="telefono">Telefono</label>
			<input name="telefono" type="text" class="form-control" value="<?php echo $prod->phone; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="email">Email</label>
			<input name="email" type="email" class="form-control" value="<?php echo $prod->email; ?>">
		</div>

	</div>


	<div class="row ">

		<div class="form-group col-md-6">

			<button class="btn btn-success ">Actualizar</button>
		</div>
	</div>
	
	

</form>