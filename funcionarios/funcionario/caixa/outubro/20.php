<?php

include 'config.php';
include 'topo.php';
 

?>


<script type="text/javascript">function SubstituiVirgulaPorPonto(campo){	campo.value = campo.value.replace(/,/gi, ".");}</script>

<script type="text/javascript">
function calcValor(){
    //CALCULO TOTAL DE ENTRADA
    //TOTAL DE ENTRADAS= vendas do dia + saldo anterior + cheque devolvido + cheque devolvido
    // zerando total
    document.getElementById("total_entrada").value = '0';
 
    // valor da -> vendas_do_dia
    var VTOTALLIQUIDO = parseFloat(document.getElementById("vendas_do_dia").value);
 
    // valor do -> saldo anterior
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("saldo_anterior").value);

     // valor do cheque devolvido 1
    var VTOTALLIQUIDO3 = parseFloat(document.getElementById("cheque_devolvido1").value);

    // valor do cheque devolvido 2
    var VTOTALLIQUIDO4 = parseFloat(document.getElementById("cheque_devolvido2").value);
 
    var TOTAL = parseFloat(VTOTALLIQUIDO) + parseFloat(VTOTALLIQUIDO2) + parseFloat(VTOTALLIQUIDO3) + parseFloat(VTOTALLIQUIDO4);
 
    document.getElementById("total_entrada").value = '' + TOTAL.toFixed(2);
}

</script>

<script type="text/javascript">
function calcValor2(){
    //CALCULO TOTAL DE SAÍDA
    //TOTAL DE SAIDA= almoço, combustivel + hotel + deposito + despesa 5 + "" 6 + "" 7 + ""8 + ""9 + cheque + dinheiro + saida 3 + ""4 +"" 5
    // zerando total
    document.getElementById("total_saida").value = '0';
 
    // valor almoço
    var VTOTALLIQUIDO = parseFloat(document.getElementById("almoco").value);
 
    // valor do combustivel
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("combustivel").value);

     // valor do hotel
    var VTOTALLIQUIDO3 = parseFloat(document.getElementById("hotel").value);

    // valor do deposito
    var VTOTALLIQUIDO4 = parseFloat(document.getElementById("deposito").value);

    // valor da despesa 5
    var VTOTALLIQUIDO5 = parseFloat(document.getElementById("despesa5").value);

    // valor da despesa 6
    var VTOTALLIQUIDO6 = parseFloat(document.getElementById("despesa6").value);

    //valor da despesa 7
    var VTOTALLIQUIDO7 = parseFloat(document.getElementById("despesa7").value);

    //valor da despesa 8
    var VTOTALLIQUIDO8 = parseFloat(document.getElementById("despesa8").value);

    //valor da despesa 9
    var VTOTALLIQUIDO9 = parseFloat(document.getElementById("despesa9").value);

    //valor cheque
    var VTOTALLIQUIDO10 = parseFloat(document.getElementById("cheque").value);

    //valor dinheiro
    var VTOTALLIQUIDO11 = parseFloat(document.getElementById("dinheiro").value);

    //valor saida 3
    var VTOTALLIQUIDO12 = parseFloat(document.getElementById("saida3").value);

    //valor saida 4
    var VTOTALLIQUIDO13 = parseFloat(document.getElementById("saida4").value);

    //valor saida 5
    var VTOTALLIQUIDO14 = parseFloat(document.getElementById("saida5").value);

 
    var TOTAL = parseFloat(VTOTALLIQUIDO) + parseFloat(VTOTALLIQUIDO2) + parseFloat(VTOTALLIQUIDO3) + parseFloat(VTOTALLIQUIDO4) + parseFloat(VTOTALLIQUIDO5) + parseFloat(VTOTALLIQUIDO6) + parseFloat(VTOTALLIQUIDO7) + parseFloat(VTOTALLIQUIDO8) + parseFloat(VTOTALLIQUIDO9) + parseFloat(VTOTALLIQUIDO10) + parseFloat(VTOTALLIQUIDO11) + parseFloat(VTOTALLIQUIDO12) + parseFloat(VTOTALLIQUIDO13) + parseFloat(VTOTALLIQUIDO14);
 
    document.getElementById("total_saida").value = '' + TOTAL.toFixed(2);
}

</script>

<script type="text/javascript">
function calcValor3(){
    //CALCULO DE DIFERENÇA DE ENTRADA E SAIDA
    //TOTAL DE ENTRADAS= vendas do dia + saldo anterior + cheque devolvido + cheque devolvido
    // zerando total
    document.getElementById("entrada_saida").value = '0';
 
    // valor da -> vendas_do_dia
    var VTOTALLIQUIDO = parseFloat(document.getElementById("total_entrada").value);
 
    // valor do -> saldo anterior
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("total_saida").value);

    var TOTAL = parseFloat(VTOTALLIQUIDO) - parseFloat(VTOTALLIQUIDO2);
 
    document.getElementById("entrada_saida").value = '' + TOTAL.toFixed(2);
}

</script>

<body>



<?php
mysql_connect("localhost", "rrdistri_usersis", "GX1k^hHmZsDK") or die(mysql_error());
mysql_select_db("rrdistri_sisc") or die(mysql_error());
?>

<form   action="" method="POST" >
<center>
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

		$query = "SELECT tipo, SUM(val_sc) FROM pagamentos where (dia= '20') and (mes= '10') and (ano= '2018') GROUP BY tipo"; 
	 
		$result = mysql_query($query) or die(mysql_error());

    $total = 0;

			while($row = mysql_fetch_array($result)){
	          	echo "<tr>
	          			<td>".$row['tipo']."</td>
		                <td> R$ ". $row['SUM(val_sc)']."</td>
		            </tr>";
          $total += $row['SUM(val_sc)'];
	      }

	    ?>

<br/>
</form>

	</tbody>
</div>
 	<table width="37%" height="92" border="0" align="center">
	      <tbody>
	        <tr>
	          <td width="40%" height="41" align="center"><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Saldo Anterior:</strong></td>
	          <td><strong>R$</strong>
	            <input type="text" name="saldo_anterior" id="saldo_anterior" value="0" onblur="calcValor()" ></td>
            </tr>
	        <tr>

	          <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">Vendas do dia</strong></td>
	          <td><strong>R$</strong><input type="text" id="vendas_dia" name="vendas_dia" onblur="calcValor()" value="<?php

            echo
              $total
	           ?>" readonly></td>
            </tr>
      </tbody>
</table>
<p>&nbsp;</p>
<table width="37%" height="98" border="0" align="center">
  <tbody>
    <tr>
      <td width="34%" height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Cheque Devolvido</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">:</strong></td>
      <td width="66%" bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="cheque_devolvido1" id="cheque_devolvido1" value="0" onblur="calcValor()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr bgcolor="#FFFF00">
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Cheque Devolvido</strong></td>
      <td><strong>R$</strong>
      <input type="text" name="cheque_devolvido2" id="cheque_devolvido2" value="0" onblur="calcValor()" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
 <table width="37%" height="174" border="0" align="center">
  <tbody>
    <tr>
      <td width="32%" height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Promissórias do dia</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">:</strong></td>
      <td width="68%" bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="promissoria_dia" id="promissoria_dia" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Promissórias a cobrar:</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="promissoria_cobrar" id="promissoria_cobrar" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">TOTAL DE ENTRADAS</strong></td>
      <td><strong>R$</strong>
        <input type="text" name="total_entrada" id="total_entrada" onblur="calcValor3()" readonly onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
   </tbody>
</table>
<table width="868" height="35" border="0" align="center">
  <tbody>
    <tr>
      <td align="center" style="font-size: 30px; color: #FF0000;"><strong>Saídas</strong></td>
    </tr>
  </tbody>
</table>
<table width="37%" height="555" border="0" align="center">
  <tbody>
    <tr>
      <td width="32%" height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Almoço</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td width="68%" bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="almoco" id="almoco" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Combustível:</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="combustivel" id="combustivel" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Hotel</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="hotel" id="hotel" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Depósito</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="deposito" id="deposito" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 5</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="despesa5" id="despesa5" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 6</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="despesa6" id="despesa6" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 7</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="despesa7" id="despesa7" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 8</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="despesa8" id="despesa8" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 9</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="despesa9" id="despesa9" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>

    <tr>
      <td height="41" colspan="2" align="center" valign="middle"> <textarea name="espc_despesa" cols="60" rows="4" id="espc_despesa" placeholder="Caso as despesas de 5 á 9 forem preenchidas, especique-as"></textarea></td>
    </tr>
  </tbody>
</table>
<table width="37%" height="260" border="0" align="center">
  <tbody>
    <tr>
      <td width="40%" height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Cheque</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="cheque" id="cheque" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Dinheiro</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="dinheiro" id="dinheiro" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Saída 3</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="saida3" id="saida3" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Saída 4</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="saida4" id="saida4" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Saída 5</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="saida5" id="saida5" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
    <tr>
      <td height="41" colspan="2" align="center" valign="middle"> <p>
        <textarea name="espc_saidas" cols="60" rows="4" id="espc_saidas" placeholder="Caso as saídas de 3 á 5 forem preenchidas, especique-as"></textarea>
      </p></td>
      <td height="41" colspan="2" align="center" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="37%" height="131" border="0" align="center">
  <tbody>
    <tr>
      <td width="40%" height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">TOTAL SAÍDA:</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><p><strong>R$</strong>
        <input type="text" name="total_saida" id="total_saida" onblur="calcValor3()" readonly onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
      </p></td>
    </tr>
    <tr>
      <td height="41" align="center"><p>&nbsp;</p>
      <p><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">DIFERENÇA ENTRADA E SAÍDA:</strong></p></td>
      <td><strong>R$</strong>
        <input type="text" name="entrada_saida" id="entrada_saida" readonly onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Saldo Promissória:</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><strong>R$</strong>
        <input type="text" name="saldo_promissoria" id="saldo_promissoria" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="37%" height="98" border="0" align="center">
  <tbody>
    <tr>
      <td width="40%" height="41" align="center"><strong style="font-size: 24px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">SOMA</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><strong>R$</strong>
        <input type="text" name="soma" id="soma" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">FALTA OU SOBRA</strong></td>
      <td><strong>R$</strong>
        <input type="text" name="falta_sobra" id="falta_sobra" onkeyup="SubstituiVirgulaPorPonto(this)"  ></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="col-md-12">

  <center>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="submit" value="Cadastrar" id="btncad">
        <input type="button" value="Cancelar" id="btncan">


    </p>
  </center>
</div>
</form>
</div>
</tr>

<?php
if(isset($_POST["submit"])){

  $sql = "INSERT INTO caixa (saldo_anterior, vendas_dia, cheque_devolvido1, cheque_devolvido2, promissoria_dia, promissoria_cobrar, total_entrada, almoco, combustivel, hotel, deposito, despesa5, despesa6, despesa7, despesa8, despesa9, espc_despesa, cheque, dinheiro, saida3, saida4, saida5, espc_saidas, total_saida, entrada_saida, saldo_promissoria, soma, falta_sobra)
  VALUES ('".$_POST["saldo_anterior"]."','".$_POST["vendas_dia"]."','".$_POST["cheque_devolvido1"]."','".$_POST["cheque_devolvido2"]."','".$_POST["promissoria_dia"]."','".$_POST["promissoria_cobrar"]."','".$_POST["total_entrada"]."','".$_POST["almoco"]."','".$_POST["combustivel"]."','".$_POST["hotel"]."','".$_POST["deposito"]."','".$_POST["despesa5"]."','".$_POST["despesa6"]."','".$_POST["despesa7"]."','".$_POST["despesa8"]."','".$_POST["despesa9"]."','".$_POST["espc_despesa"]."','".$_POST["cheque"]."','".$_POST["dinheiro"]."','".$_POST["saida3"]."','".$_POST["saida4"]."','".$_POST["saida5"]."','".$_POST["espc_saidas"]."','".$_POST["total_saida"]."','".$_POST["entrada_saida"]."','".$_POST["saldo_promissoria"]."','".$_POST["soma"]."','".$_POST["falta_sobra"]."')";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Caixa cadastrado com sucesso!');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}
?>
