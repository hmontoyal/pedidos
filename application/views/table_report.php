<!DOCTYPE html>
<html><head>
  <title>Solicitud de Productos</title>
  <style type="text/css">
    #outtable{
      padding:20px;
      border:1px solid #e3e3e3;
      width:650px;
      border-radius:5px;
    }

    .short{
      width: 50px;
    }

    .normal{
      width: 150px;
    }

    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }

    thead th{
      text-align: center;
      padding: 10px;
    }

    tbody td{
      text-align: center;
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }

    tbody tr:nth-child(even){
      background: #F6F5FA;
    }

    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head><body>
  <!-- In production server. If you choose this, then comment the local server and uncomment this one-->
  <!-- <img src="<?php // echo $_SERVER['DOCUMENT_ROOT']."/media/dist/img/no-signal.png"; ?>" alt=""> -->
  <!-- In your local server -->

  <img src=".assets/img/logo.png" alt="">


<div class="info">
 <ul>
   <li>Cliente : <?php echo $data[0]->client_name. '  '.$data[0]->last_name; ?></li>
   
   <li>Telefono : <?php echo $data[0]->phone; ?></li>
   <li>Email : <?php echo $data[0]->email; ?></li>
   <li>Fecha : <?php echo $data[0]->date; ?></li>

 </ul>
</div>
  <div class="row">
  <div class="col-md-4">
<img style="float" src="assets/img/logotipo.png" width="90" height="70">
<div class="col-md-4"><center><h3>Solicitud de Productos</h3></center>
<center><h4>DulceSur Ltda</h4></center>
<center>Maipu 1921, Concepcióm</center>
<center>Telefono: 41- 2312642</center></div>
  </div>
  
  </div>


<br>
  <!-- <img src="<?php echo $_SERVER['DOCUMENT_ROOT']."/ci-dompdf6/media/dist/img/no-signal.png"; ?>" alt=""> -->
<div id="outtable">
	  <table>
	  		<tr>
	  			<th class="short">Item</th>
	  			<th class="normal">Detalle</th>
          <th class="normal">Cantidad</th>
	  			<th class="normal">Precio</th>

	  			<th class="normal">Cantidad</th>
          <th class="short">Total</th>
          <th class="normal">SubTotal</th>
	  			
	  		</tr>
	  		<?php $no=1; ?>
        <?php $total = 0; ?>
	  		<?php foreach($data as $row): ?>
	  		  <tr>
	  			<td><?php echo $no; ?></td>
	  			<td><?php echo $row->name; ?></td>	  			
	  			<td><?php echo $row->quantity; ?></td>
          <td><?php echo $row->total; ?></td>
          <td><?php echo $row->price; ?></td>
          <td><?php echo $row->price*$row->quantity; ?></td>
	  		  </tr>
           <?php $total = $total + $row->total; ?>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>

      <tr>
        <td colspan="4">Total venta : <?php echo $total; ?></td>
      </tr>
	  </table>
	 </div>
</body></html>
