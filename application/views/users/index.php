<div class="col-md-12">
          <form action="<?php echo base_url('users/createuser') ?>" role="form" class="" method="post" id="form">
            
            <div class="row">
                   <div class="col-md-3 form-group">
            <label for="rut">Rut</label>
                 <input type="text" name="rut" class="form-control" placeholder="12343433-5">
            </div>
                <div class="col-md-3 form-group">
            <label for="doctor">Nombre</label>
                <input type="text" name="nombre" class="form-control" required="required" placeholder="Pedro">
            </div>
                <div class="col-md-3 form-group">
            <label for="apellido">Apellido Paterno</label>
                 <input type="text" name="apellido" class="form-control" required="required" placeholder="Gonzalez">
            </div>

            <div class="col-md-3 form-group">
            <label for="apellido">Apellido Materno</label>
                 <input type="text" name="apellido" class="form-control" required="required" placeholder="Gonzalez">
            </div>

              <div class="col-md-3 form-group">
            <label for="username">Username</label>
                 <input type="text" name="username" class="form-control" required="required" placeholder="pgonzalez">
            </div>
            <div class="col-md-3 form-group">
            <label for="celular">Contraseña</label>
                <input type="text"  name="password" class="form-control" required="required" data-toggle="tooltip" title="Minimo 6 caracteres, 1 letra mayuscula y 1 letra minuscula">
            </div>

                <div class="col-md-3 form-group">
            <label for="tipo">Tipo de usuario</label>
               <select name="tipo" id="" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" required="required">
                <option value="">SELECCIONE TIPO</option>
                <option value="3">Vendedor</option>
                <option value="1">Bodega</option>
                <option value="9">Administrador</option>
              </select>
            </div>

            </div>


            <div class="row">
             
            <div class="col-md-3 form-group">
            <label for="username">Telefono</label>
                 <input type="text" name="number" class="form-control"  placeholder="923434512">
            </div>
    
      <div class="col-md-3 form-group">
            <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required="required" placeholder="email@mail.cl">
            </div>

      
          <!--   <div class="col-md-3 form-group">
            <label for="celular">Contraseña</label>
                <input type="text"  name="password" class="form-control" required="required" data-toggle="tooltip" title="Minimo 6 caracteres, 1 letra mayuscula y 1 letra minuscula">
            </div>  -->

             <div class="col-md-3 form-group">
            <label for="nacimiento">Fecha de nacimiento</label>
                <input type="text"  name="nacimiento" class="form-control boostrapDatePicker">
            </div> 
           

            </div>

            <div class="row">

            
           
			<!-- <div class="col-md-4 form-group">
			 <label for="password">Password</label>
			     <div class="input-group">
					
                                            <input type="text" name="password" id="password_field" class="form-control" required="required" data-toggle="tooltip" title="Minimo 8 caracteres, 1 mayuscula, 1 minuscula y un digito">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-refresh" id="password_button"></i>
                                                </button>
                                            </span>
					</div>
            </div> -->

            </div>

            <div class="row">
                            <div class="col-md-4 form-group">
                <input type="submit" value="Guardar" class="btn btn-success" id="submit-btn" /> <input type="reset" class="btn btn-default" value="Limpiar" />
            </div>
            </div>

          </form>
</div>