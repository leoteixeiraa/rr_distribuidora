<?php

include 'config.php';
include 'topo.php';
?>


<body>
<table width="195" height="30" border="1" align="right">
  <tbody>
    <tr>
      <td width="189"><strong>Funcionario</strong><em><strong>: Luiz Henrique</strong></em></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table id="tabela" class="display" cellspacing="0" width="100%">
        <thead>
	            <tr>
	            	<th>ID</th>
	                <th>Tipo do Produto</th>
	                <th>Especificação</th>
	                <th>Preço SC</th>
	                <th>Preço PR</th>
	                <th>Observação</th>
	                
	            </tr>
  </thead>

	 	<div>
	 	<tbody>
	    <?php
			while ($row = $res->fetch_assoc()) {
	          echo "<tr>
	          			<td>".$row['id']."</td>
		                <td>".$row['tipo']."</td>		                
		                <td>".$row['especificacao'] ."</td>
		                <td>". $row['preco_sc']."</td>
		                <td>". $row['preco_pr']."</td>
		                <td>". $row['obs']."</td>

		            </tr>";
	      }
	    ?>
		</tbody>
</table>
<center>
	 		<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
    		<input type="button" value="Fechar" id="btncan">
</center>
   
