<!DOCTYPE html>
<html><head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
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
      text-align: left;
      padding: 10px;
    }

    tbody td{
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
<div id="outtable">
	  <table>
	  		<tr>
	  			<th class="short">#</th>
	  			<th class="normal">Nombre</th>
	  			<th class="normal">Precio</th>
	  			<th class="normal">Cantidad</th>
          <th class="short">Total</th>
	  		</tr>
	  		<?php $no=1; ?>
        <?php $total = 0; ?>
	  		<?php foreach($data as $row): ?>
	  		  <tr>
	  			<td><?php echo $no; ?></td>
	  			<td><?php echo $row->name; ?></td>
	  			<td><?php echo $row->price; ?></td>
	  			<td><?php echo $row->quantity; ?></td>
          <td><?php echo $row->total; ?></td>
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
