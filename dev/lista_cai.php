<?php

include 'config.php';
include 'topo.php';
?>


<body>
	<table id="tabela" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	            	<th>ID</th>
	                <th>Deletar</th>
	                <th>Data da Caixa</th>
	                <th>Saldo Anterior</th>
	                <th>Vendas do dia</th>
	                <th>Total de Entrada</th>
	                <th>Total de Saída</th>
	                <th>Diferença Entrada e Saída</th>
	                <th>Soma</th>
	                <th>Saldo Promissória</th>
	                <th>Falta ou Sobra</th>
	                <th>Cheque Devolvido 1</th>
	                <th>Cheque Devolvido 2</th>
	                <th>Promissória do Dia</th>
	                <th>Promissória a Cobrar</th>
	                <th>Almoço</th>
	                <th>Combustível</th>
	                <th>Hotel</th>
	                <th>Despesa 5</th>
	                <th>Despesa 6</th>
	                <th>Despesa 7</th>
	                <th>Despesa 8</th>
	                <th>Despesa 9</th>
	                <th>Descrição Despesa</th>
	                <th>Cheque</th>
	                <th>Dinheiro</th>
	                <th>Saída 3</th>
	                <th>Saída 4</th>
	                <th>Saída 5</th>
	                <th>Descrição Saídas</th>
	                <th>Funcionário</th>
	            </tr>
	        </thead>

	 	<div>
	 	<tbody>
	    <?php
			while ($row = $res->fetch_assoc()) {
	          	echo "<tr>
	          			<td>".$row['id']."</td>
		                <th><div class='deletar-cai' id=".$row['id'].">Delete</div></th>
		        		<td>".$row['dia'] ."/".$row['mes'] ."/".$row['ano'] ."</td>
		                <td> R$ ". $row['saldo_anterior']."</td>
		                <td> R$ ". $row['vendas_dia']."</td>
		                <td> R$ ". $row['total_entrada']."</td>
		                <td> R$ ". $row['total_saida']."</td>
		                <td> R$ ". $row['entrada_saida']."</td>
		                <td> R$ ". $row['soma']."</td>
		                <td> R$ ". $row['saldo_promissoria']."</td>
		                <td> R$ ". $row['falta_sobra']."</td>
		                <td> R$ ". $row['cheque_devolvido1']."</td>
		                <td> R$ ". $row['cheque_devolvido2']."</td>
		                <td> R$ ". $row['promissoria_dia']."</td>
		                <td> R$ ". $row['promissoria_cobrar']."</td>
		                <td> R$ ". $row['almoco']."</td>
		                <td> R$ ". $row['combustivel']."</td>
		                <td> R$ ". $row['hotel']."</td>
		                <td> R$ ". $row['deposito']."</td>
		                <td> R$ ". $row['despesa5']."</td>
		                <td> R$ ". $row['despesa6']."</td>
		                <td> R$ ". $row['despesa7']."</td>
		                <td> R$ ". $row['despesa8']."</td>
		                <td> R$ ". $row['despesa9']."</td>
		                <td>". $row['espc_despesa']."</td>
		                <td> R$ ". $row['cheque']."</td>
		                <td> R$ ". $row['dinheiro']."</td>
		                <td> R$ ". $row['saida3']."</td>
		                <td> R$ ". $row['saida4']."</td>
		                <td> R$ ". $row['saida5']."</td>
		                <td>". $row['espc_saidas']."</td>
		                <td>". $row['funcionario']."</td>
		            </tr>";
	      }
	    ?>
		</tbody>
	 </table>
	 <center>
	 		<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
	 		<input type="button" value="Fechar" id="btncan">
    		<p>&nbsp;</p>
</center>
   
