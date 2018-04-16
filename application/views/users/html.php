<?php if($user != false): ?>

   <form role="form">
                  <div class="row">
                  	 <div class="form-group col-md-3">
                    <label for="nombre">Nombre</label>
                      <input type="text" value="<?php echo $user->nombre; ?>" class="form-control"
                      id="nombre" placeholder="Nombre"/>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="apellido">Apellido</label>
                      <input type="text" class="form-control"
                          id="apellido" placeholder="Apellido" value="<?php echo $user->apellido; ?>"/>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="apellido">Username</label>
                      <input type="text" class="form-control" value="<?php echo $user->username; ?>"
                          id="username" placeholder="Username"/>
                  </div>

                   <div class="form-group col-md-3">
                    <label for="email">Email</label>
                      <input type="email" class="form-control" value="<?php echo $user->email; ?>"
                          id="email" placeholder="Email"/>
                  </div>
                  </div>

                  <div class="row">
                  	<div class="col-md-3 form-group">
            <label for="username">Telefono</label>
                 <input type="text" name="number" class="form-control"  placeholder="923434512" value="<?php echo $user->number; ?>">
            </div>
            <div class="col-md-3 form-group">
                <label for="anexo">Anexo</label>
               <select name="anexo" id="anexo" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" required="required" >
              <option value="">SELECCIONE ANEXO</option>
               <?php foreach ($anexos as $row): ?>
                    <option value="<?php echo $row->id ?>" <?php echo ($row->id == $user->extension_id) ? 'selected' : ''; ?> ><?php echo $row->anexo; ?></option>
                <?php endforeach ?> 
              </select>
            </div>
                  </div>

                  <div class="row">
                  	   <div class="col-md-3 form-group">
            <label for="tipo">Tipo de usuario</label>
               <select name="tipo" id="usuario" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" required="required" >
                <option value="">SELECCIONE TIPO</option>
                <option value="3" <?php echo ( $user->auth_level == '3' ) ? 'selected' : ''; ?> >Usuario Interno (EJECUTIVA)</option>
                <option value="1" <?php echo ( $user->auth_level == '1' ) ? 'selected' : ''; ?>>Usuario Externo</option>
                <option value="9" <?php echo ( $user->auth_level == '9' ) ? 'selected' : ''; ?>>Administrador</option>
              </select>
            </div>
                  	 <div class="col-md-3 form-group">
            <label for="nacimiento">Fecha de nacimiento</label>
                <input type="text"  name="nacimiento" class="form-control boostrapDatePicker" value="<?php echo mysql_to_datepicker($user->fecha_nac); ?>">
            </div> 
        </div>
                 
                  <button type="submit" class="btn btn-warning">Actualizar</button>
</form>

<?php else :?>


	<p>No se encontraron datos</p>

<?php endif; ?>
