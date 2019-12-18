<?php

include 'config.php';
include 'topo.php';
?>


<body>

<?php
mysql_connect("localhost", "rrdistri_usersis", "GX1k^hHmZsDK") or die(mysql_error());
mysql_select_db("rrdistri_sisc") or die(mysql_error());
?>


	<table id="tabela" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	            	<th>Tipo de Produto</th>
	                <th>Total</th>
	            </tr>
	        </thead>

	 	<div>
	 	<tbody>

	    <?php

		$query = "SELECT tipo, SUM(val_sc) FROM pagamentos GROUP BY tipo"; 

		$sql = "SELECT SUM(val_sc) FROM pagamentos";
	 
		$result = mysql_query($query) or die(mysql_error());


			while($row = mysql_fetch_array($result)){
	          	echo "<tr>
	          			<td>".$row['tipo']."</td>
		                <td> R$ ". $row['SUM(val_sc)']."</td>
		            </tr>";
	      }

	       while($sq = mysql_fetch_array($sql)){

	       		  echo "<tr>
		                <td> R$ ". $sq['val_sc']."</td>
		            </tr>";

	       }
	    ?>

		</tbody>
	 </table>
	 <p>&nbsp;</p>
	 <center>
	 		<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
	 		<input type="button" value="Fechar" id="btncan">
    		<p>&nbsp;</p>
</center>
   
