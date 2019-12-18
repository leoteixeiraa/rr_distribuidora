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
	        </thead>

	 	<div>
	 	<tbody>
<?php
mysql_connect("localhost", "rrdistri_usersis", "GX1k^hHmZsDK") or die(mysql_error());
mysql_select_db("rrdistri_sisc") or die(mysql_error());
?>

<table width="286" height="77" border="1">
    		  <tbody>
    		    <tr>
    		      <td width="136" align="center"><strong>Tipo de Produto</strong></td>
    		      <td width="134" align="center"><strong>Valor Total</strong></td>
  		      </tr>
    		    <tr>
    		      <td height="45">&nbsp;</td>
    		      <td>&nbsp;</td>
  		      </tr>
  		    </tbody>
  		  </table>

<?php

$query = "SELECT tipo, SUM(val_sc) FROM pagamentos GROUP BY tipo"; 
	 
$result = mysql_query($query) or die(mysql_error());


echo "<table border='1' align='center'>";
echo "<tr> <th align='center'>Tipo</th> align='center' <th align='center'>Total</th> </tr>";

while($row = mysql_fetch_array($result)){

	echo "<tr><td>"; 
	echo $row['tipo'];
	echo "</td><td>"; 
	echo $row['SUM(val_sc)'];
	echo "</td></tr>"; 

}

?>
		</tbody>
	 </table>
	 <center>
	 		<input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
	 		<input type="button" value="Fechar" id="btncan">
    		<p>&nbsp;</p>
</center>
   
