<?php

include 'config.php';
include 'topo.php';
?>


<body>
<!-- <div id="box2">
	<form   action="" method="POST"  onsubmit="return mask();">

		<fieldset>
			<center>
				<font face="arial" size="5" color="black">
					<B>Lista Fornecedor</B>
				</font>
			</center>
		</fieldset>

		<fieldset>
			<label>Código:</label>
				  <input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:70px">
			<label>Razão Social/Nome:</label>
				<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:410px">
				<label>CNPJ/CPF:</label>
				<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:200px"><br><br>
					<label>Endereço:</label>
					<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:450px">
						<label>Telefone:</label>
						<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:150px">
						<label>Celular:</label>
						<input type="text" name="razao_social_cliente" class="txt" maxlength="50" maxlength="2" style="width:150px"><br><br>
						<font face="arial" size="3" color="#006400"><B>Editar</B></font>
						<font face="arial" size="3" color="#FF0000"><B>Excluir</B></font>
		</fieldset>
					<br><br>
    	

</form>
</div> -->
	<table id="tabela" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	            	<th>ID</th>
	                <th>Deletar</th>
	                <th>Data da Venda</th>
	                <th>Tipo do Produto</th>
	                <th>Especificação</th>
	                <th>Preço SC</th>
	                <th>Preço PR</th>
	                <th>Carga</th>
	                <th>Retorno</th>
	                <th>Venda SC</th>
	                <th>Venda PR</th>
	                <th>Valorização SC</th>
	                <th>Valorização PR</th>
	                <th>Recarga</th>
	                <th>Carga dia seguinte</th>
	                <th>Funcionario</th>
	            </tr>
	        </thead>

	 	<div>
	 	<tbody>
	    <?php
			while ($row = $pag->fetch_assoc()) {
	          	echo "<tr>
	          			<td>".$row['id']."</td>
		                <th><a class='deletar-pag' href='deletar_pag.php?id=".$row['id']."'>Apagar</a></th>
		        		<td>".$row['dia'] ."/".$row['mes'] ."/".$row['ano'] ."</td>
		                <td>". $row['tipo']."</td>
		                <td>". $row['especificacao']."</td>
		                <td> R$ ". $row['preco_sc']."</td>
		                <td> R$ ". $row['preco_pr']."</td>
		                <td>". $row['carga']."</td>
		                <td>". $row['retorno']."</td>
		                <td>". $row['venda_sc']."</td>
		                <td>". $row['venda_pr']."</td>
		                <td> R$ ". $row['val_sc']."</td>
		                <td> R$ ". $row['val_pr']."</td>
		                <td>". $row['recarga']."</td>
		                <td>". $row['carga_seguinte']."</td>
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
   
