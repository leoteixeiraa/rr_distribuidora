<?php

include 'config.php';
include 'topo.php';
?>


<body>
<p><!-- <div id="box2">
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
</p>
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
	                <th>id_for</th>
	                <th>             </th>
	                <th>Número do Documento</th>
	                <th>Série</th>
	                <th>Emissão</th>
	                <th>Vencimento</th>
	                <th>Prorrogado</th>
	                <th>Centro de Custo</th>
	                <th>Pagamento</th>
	                <th>Forma de Pagamento</th>
	                <th>Baixado</th>
	                <th>Parcelas</th>
	                <th>Valor</th>
	                <th>Acrescimo</th>
	                <th>Desconto</th>
	                <th>Total</th>
	                <th>Observação</th>
	                
	            </tr>
      </thead>

	 	<div>
	 	<tbody>
	    <?php
			while ($row = $pag->fetch_assoc()) {
	          	echo "<tr>
	          			<td>".$row['id']."</td>
		                <td>".$row['id_for']."</td>
		                <th><a href='#?id=".$row['id']."' class=' '> </a>  <div class=' ' id=".$row['id']."> </div></th>
		        		<td>".$row['numero_doc'] ."</td>
		                <td>". $row['serie']."</td>
		                <td>". $row['emissao']."</td>
		                <td>". $row['vencimento']."</td>
		                <td>". $row['prorrogado']."</td>
		                <td>". $row['centro_de_custo']."</td>
		                <td>". $row['pagamento']."</td>
		                <td>". $row['forma_pagamento']."</td>
		                <td>"; 
		                if($row['baixar']==='on') {echo 'PAGO';}else{echo 'À PAGAR';}
		                echo "</td>
		                <td>". $row['parcela']."</td>
		                <td>". $row['valor']."</td>
		                <td>". $row['acrescimo']."</td>
		                <td>". $row['desconto']."</td>
		                <td>". $row['total']."</td>
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
   
