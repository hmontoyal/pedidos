<?php if($user != false): ?>

   <form role="form" action="<?php echo base_url('users/update') ?>" method="post" id="form-update">

                  <input type="hidden" name="user_id" value="<?php echo $user->user_id; ?>">
                  <div class="row">
                  	 <div class="form-group col-md-3">
                    <label for="nombre">Nombre</label>
                      <input type="text" value="<?php echo $user->nombre; ?>" class="form-control"
                      id="nombre" name="nombre" placeholder="Nombre"/>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="apellido">Apellido</label>
                      <input type="text" class="form-control"
                          id="apellido" placeholder="Apellido" value="<?php echo $user->apellido; ?>" name="apellido"/>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="apellido">Username</label>
                      <input type="text" class="form-control" value="<?php echo $user->username; ?>"
                          id="username" placeholder="Username" name="username"/>
                  </div>

                   <div class="form-group col-md-3">
                    <label for="email">Email</label>
                      <input type="email" class="form-control" value="<?php echo $user->email; ?>"
                          id="email" placeholder="Email" name="email"/>
                  </div>
                  </div>

                  <div class="row">
                  	<div class="col-md-3 form-group">
            <label for="username">Telefono</label>
                 <input type="text" name="number" class="form-control"  placeholder="923434512" value="<?php echo $user->number; ?>" name="number">
            </div>
                  </div>

                  <div class="row">
                  	   <div class="col-md-3 form-group">
            <label for="tipo">Tipo de usuario</label>
               <select name="auth_level" id="usuario" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" required="required" >
                <option value="3">VENDEDOR</option>
                <option value="1">BODEGA</option>
                <option value="9">ADMINISTRADOR</option>
              </select>
            </div>
                  	 <div class="col-md-3 form-group">
            <label for="nacimiento">Fecha de nacimiento</label>
                <input type="text"  name="fecha_nac" class="form-control boostrapDatePicker" value="<?php echo mysql_to_datepicker($user->fecha_nac); ?>">
            </div> 
        </div>
                 
                  <button type="submit" class="btn btn-warning">Actualizar</button>
</form>

<?php else :?>


	<p>No se encontraron datos</p>

<?php endif; ?>
