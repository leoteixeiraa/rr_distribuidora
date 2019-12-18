<?php

include 'config.php';
include 'topo.php';
?>

<body javascript:refresh(); >


<body>
<table id="tabela" class="display" cellspacing="0" width="100%">
        <thead>
	            <tr>
	            	<th>ID</th>
	                <th>Tipo do Produto</th>
	                <th>Edit / Delete</th>
	                <th>Especificação</th>
	                <th>Custo</th>
	                <th>Preço SC</th>
	                <th>Preço PR</th>
	                
	            </tr>
      </thead>

	 	<div>
	 	<tbody>
	    <?php
			while ($row = $res->fetch_assoc()) {
	          echo "<tr>
	          			<td>".$row['id']."</td>
		                <td>".$row['tipo']."</td>
		                <th><a href='edit_for.php?id=".$row['id']."' class='editar'>Editar/Apagar</a>
		                <td>".$row['especificacao'] ."</td>
		                <td>". $row['custo']."</td>
		                <td>". $row['preco_sc']."</td>
		                <td>". $row['preco_pr']."</td>     

		            </tr>";
	      }
	    ?>
		</tbody>
</table>
	 <center>
	 		<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
    		<input type="button" value="Fechar" id="btncan">
    </center>
   
