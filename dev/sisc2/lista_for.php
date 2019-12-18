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
	                <th>Nome</th>
	                <th>Edit / Delete</th>
	                <th>CPF</th>
	                <th>RG</th>
	                <th>Apelido</th>
	                <th>CEP</th>
	                <th>Endereço</th>
	                <th>Número</th>
	                <th>Bairro</th>
	                <th>Complemento</th>
	                <th>Cidade</th>
	                <th>UF</th>
	                <th>Telefone</th>
	                <th>Celular</th>
	                <th>Email</th>
	                <th>Observação</th>
	                
	            </tr>
	        </thead>

	 	<div>
	 	<tbody>
	    <?php
			while ($row = $res->fetch_assoc()) {
	          echo "<tr>
	          			<td>".$row['id']."</td>
		                <td>".$row['nome']."</td>
		                <th><a href='edit_for.php?id=".$row['id']."' class='editar'>Edit</a> / <div class='deletar' id=".$row['id'].">Delete</div></th>
		                <td>".$row['cpf'] ."</td>
		                <td>". $row['rg']."</td>
		                <td>". $row['apelido']."</td>
		                <td>". $row['cep']."</td>
		                <td>". $row['endereco']."</td>
		                <td>". $row['numero']."</td>
		                <td>". $row['bairro']."</td>
		                <td>". $row['complemento']."</td>
		                <td>". $row['cidade']."</td>
		                <td>". $row['uf']."</td>
		                <td>". $row['telefone']."</td>
		                <td>". $row['celular']."</td>
		                <td>". $row['email']."</td>
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
   
