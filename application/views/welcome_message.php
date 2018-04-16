<form>

<div class="row">
 
<?php echo form_open('welcome/sendrequest', array('method' => 'POST', 'role' => 'form', 'id' => 'form')) ?>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="cliente">Cliente</label>
       <select id="cliente" name="cliente" class="form-control selectpicker" data-live-search="true" title="Seleccione un cliente" required>
         <?php foreach ($clients as $row) : ?>
                <?php if($row->iscommercial == 0): ?>
                  <option value="<?php echo $row->id; ?>"><?php echo strtoupper($row->name. ' '. $row->last_name); ?></option>
                <?php else: ?>
                  <option value="<?php echo $row->id; ?>"><?php echo strtoupper($row->commercial_name); ?></option>
                <?php endif; ?>
       <?php  endforeach; ?>
      </select>
</div>
<div class="form-group col-md-12">


</div>


         
<div class="form-row">
  

<div class="clone-wrapper">
  <div class="form-row toclone">
    <div class="form-group col-md-6">
    <label for="producto">Producto</label>
    <select id="producto" name="producto[]" class="form-control selectpicker" data-live-search="true" title="Seleccione un producto" required="required">
        <?php foreach ($sweets as $row) : ?>
                <option value="<?php echo $row->id; ?>"><?php echo strtoupper($row->name); ?></option>
       <?php  endforeach; ?>
      </select>
  </div>
  <div class="form-group col-md-2">
      <label for="cantidad">Cantidad</label>
      <input type="number" name="cantidad[]" class="form-control" id="cantidad" value="1" min="1" max="500" required="required">



    </div>
    <div class="clone form-group col-md-1">
        <label for="">Mas campos</label>
      <button class="btn btn-success" >+</button></div>
      <div class="delete form-group col-md-1" >
        <label for="">Quitar campos</label>
        <button class="btn btn-danger" >-</button></div>
  </div>
</div>






</div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-success">Enviar solicitud</button>
    </div>
  </div>

 




</div>
</form>
