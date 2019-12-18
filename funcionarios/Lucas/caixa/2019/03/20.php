<?php

include 'config.php';
include 'topo.php';
 

?>


<script type="text/javascript">function SubstituiVirgulaPorPonto(campo){  campo.value = campo.value.replace(/,/gi, ".");}</script>

<script type="text/javascript">
function calcValor(){
    //CALCULO TOTAL DE ENTRADA
    //TOTAL DE ENTRADAS= vendas do dia + saldo anterior + cheque devolvido + cheque devolvido
    // zerando total
    document.getElementById("total_entrada").value = '0';

    //CALCULO DE DIFERENÇA DE ENTRADA E SAIDA ---> ABAIXO
    
    document.getElementById("entrada_saida").value = '0';
 
    // valor da -> vendas_do_dia
    var VTOTALLIQUIDO = parseFloat(document.getElementById("vendas_dia").value);
 
    // valor do -> saldo anterior
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("saldo_anterior").value);

     // valor do cheque devolvido 1
    var VTOTALLIQUIDO3 = parseFloat(document.getElementById("cheque_devolvido1").value);

    // valor do cheque devolvido 2
    var VTOTALLIQUIDO4 = parseFloat(document.getElementById("cheque_devolvido2").value);
      
      //CALCULO DIFERENÇA ENTRADA E SAIDA
        // valor da -> vendas_do_dia
    var VTOTALLIQUIDO5 = parseFloat(document.getElementById("total_entrada").value);
 
    // valor do -> saldo anterior
    var VTOTALLIQUIDO6 = parseFloat(document.getElementById("total_saida").value);


    var TOTAL = parseFloat(VTOTALLIQUIDO) + parseFloat(VTOTALLIQUIDO2) + parseFloat(VTOTALLIQUIDO3) + parseFloat(VTOTALLIQUIDO4);
    var TOTAL2 = parseFloat(VTOTALLIQUIDO5) - parseFloat(VTOTALLIQUIDO6);

    document.getElementById("total_entrada").value = '' + TOTAL.toFixed(2);
    document.getElementById("entrada_saida").value = '' + TOTAL2.toFixed(2);

 
    
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

    // valor da oficina
    var VTOTALLIQUIDO5 = parseFloat(document.getElementById("oficina").value);

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
    var VTOTALLIQUIDO12 = parseFloat(document.getElementById("vale_funcionario").value);

    //valor saida 4
    var VTOTALLIQUIDO13 = parseFloat(document.getElementById("furo_caixa").value);

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
    var VTOTALLIQUIDO5 = parseFloat(document.getElementById("total_entrada").value);
 
    // valor do -> saldo anterior
    var VTOTALLIQUIDO6 = parseFloat(document.getElementById("total_saida").value);

    var TOTAL2 = parseFloat(VTOTALLIQUIDO5) - parseFloat(VTOTALLIQUIDO6);
 
    document.getElementById("entrada_saida").value = '' + TOTAL2.toFixed(2);
}

</script>

<script type="text/javascript">
function calcValor4(){
    //CALCULO DE SALDO PROMISSORIA DO DIA:
    // SALDO PROMISSORIA = SALDO PROMISSORIA DO CAIXA ANTERIOR(SALDO PROMISSORIA JA NO INPUT) + PROMISSORIA DO DIA - PROMISSORIA A COBRAR
    //CALCULO DE FALTA OU SOBRA
    document.getElementById("saldo_promissoria").value = '0';
    document.getElementById("soma").value = '0';
    document.getElementById("falta_sobra").value = '0';


 
    // valor saldo promissoria
    var VTOTALLIQUIDO1 = parseFloat(document.getElementById("promissoria_anterior").value);
 
    // valor promissoria do dia
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("promissoria_dia").value);

    //valor promissoria a cobrar
    var VTOTALLIQUIDO3 = parseFloat(document.getElementById("promissoria_cobrar").value);

    //valor do campo vazio para a SOMA da promissoria
    var VTOTALLIQUIDO4 = parseFloat(document.getElementById("promissoria_soma").value);

    //VALOR DA DIFERENÇA DE ENTRADA E SAIDA ---> PARA CALCULO DE FALTA OU SOBRA

    var VTOTALLIQUIDO6 = parseFloat(document.getElementById("entrada_saida").value);


    var TOTAL4 = parseFloat(VTOTALLIQUIDO1) + parseFloat(VTOTALLIQUIDO2) - parseFloat(VTOTALLIQUIDO3);
    var TOTAL5 = parseFloat(VTOTALLIQUIDO4) + parseFloat(TOTAL4);
    var TOTAL6 = parseFloat(TOTAL5) - parseFloat(VTOTALLIQUIDO6);

 
    document.getElementById("saldo_promissoria").value = '' + TOTAL4.toFixed(2);
    document.getElementById("soma").value = '' + TOTAL5.toFixed(2);
    document.getElementById("falta_sobra").value = '' + TOTAL6.toFixed(2);

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
                  <th>Total SC</th>
                  <th>Total PR</th>
                  <th>Total SC+PR</th>
              </tr>
          </thead>

    <div>
    <tbody>
      

      <?php

    $query = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_lucas where dia=('20') and mes=('03') and ano=('2019') GROUP BY tipo"; 
   
    $result = mysql_query($query) or die(mysql_error());

    $total = 0;

     $produtos = " Produtos: ";
     $total_produtos = " Total R$: " ;

      while($row = mysql_fetch_array($result)){
              echo "<tr>
                  <td>".$row['tipo']."</td>
                    <td> R$ ". $row['SUM(val_sc)']."</td>
                    <td> R$ ". $row['SUM(val_pr)']."</td>
                     <td> R$ ". $row['vendas_total']."</td>

                </tr>";
          $total += $row['SUM(val_sc)']+$row['SUM(val_pr)'];

             $produtos .=  $row['tipo'] .' | ';
             $total_produtos .=  $row['vendas_total'] .'  |  ';


        }
        

      ?>

      <?php
        $query2 = "SELECT entrada_saida FROM caixa_lucas ORDER BY entrada_saida DESC LIMIT 1";
        $result2 = mysql_query($query2) or die(mysql_error());
      
      while($row2 = mysql_fetch_array($result2)){

          $total2 = $row2['entrada_saida'];
        }

      ?>

     <?php
        $query3 = "SELECT saldo_promissoria FROM caixa_lucas ORDER BY saldo_promissoria DESC LIMIT 1";
        $result3 = mysql_query($query3) or die(mysql_error());

        while($row3 = mysql_fetch_array($result3)){

          $total3 = $row3['saldo_promissoria'];
        }
     ?>

<br/>
</form>

  </tbody>
</div>
<!--
OS VALORES ESTARAO INVISIVEL NO INPUT

**AO CADASTRAR NO SISTEMA, NÃO ESQUECER DE:**
> ALTERAR O DIA NO SELECT E NO INPUT
> CHECAR O MES NO SELECT E NO INPUT
> CHECAR O ANO SELECT E NO INPUT
> CHECAR NOME DO FUNCIONARIO NO INPUT

LOGO A BAIXO

-->
<input type="text" name="dia" id="dia" style="display:none;" value="20">
<input type="text" name="mes" id="mes" style="display:none;" value="03">
<input type="text" name="ano" id="ano" style="display:none;" value="2019">
<input type="text" name="funcionario" id="funcionario" style="display:none;" value="Lucas Lins">


  <table width="37%" height="92" border="0" align="center">
        <tbody>
          <tr>
            <td width="40%" height="41" align="center"><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Saldo Anterior:</strong></td>
            <td><strong>R$</strong>
              <input type="text" name="saldo_anterior" id="saldo_anterior" value="<?php

            echo
              $total2
             ?>" onblur="calcValor()" onkeyup="SubstituiVirgulaPorPonto(this)" ></td>
            </tr>
          <tr>

            <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">Vendas do dia</strong></td>
            <td><strong>R$</strong><input type="text" id="vendas_dia" name="vendas_dia" onblur="calcValor()" value="<?php

            echo
              $total
             ?>" readonly required></td>
            </tr>
      </tbody>
</table>
<p>&nbsp;</p>
<table width="37%" height="98" border="0" align="center">
  <tbody>
    <tr>
      <td width="34%" height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Cheque Devolvido</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">:</strong></td>
      <td width="66%" bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="cheque_devolvido1" id="cheque_devolvido1" value="0" onblur="calcValor()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr bgcolor="#FFFF00">
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Cheque Devolvido</strong></td>
      <td><strong>R$</strong>
      <input type="text" name="cheque_devolvido2" id="cheque_devolvido2" value="0" onblur="calcValor()" onkeyup="SubstituiVirgulaPorPonto(this)"  required></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
 <table width="37%" height="174" border="0" align="center">
  <tbody>
    <tr>
      <td width="32%" height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Promissórias do dia</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">:</strong></td>
      <td width="68%" bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="promissoria_dia" id="promissoria_dia" value="0" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor4()" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Promissórias a cobrar:</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="promissoria_cobrar" id="promissoria_cobrar" value="0" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor4()"  required></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">TOTAL DE ENTRADAS</strong></td>
      <td><strong>R$</strong>
        <input type="text" name="total_entrada" id="total_entrada" onblur="calcValor();calcValor3();" readonly onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
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
        <input type="text" name="almoco" id="almoco" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Combustível:</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="combustivel" id="combustivel" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Hotel</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="hotel" id="hotel" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Depósito</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="deposito" id="deposito" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Oficina</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="oficina" id="oficina" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 6</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="despesa6" id="despesa6" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 7</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
        <input type="text" name="despesa7" id="despesa7" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)"  required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 8</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="despesa8" id="despesa8" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)"  required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Despesa 9</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="despesa9" id="despesa9" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>

      <input rows="8" cols="45" id="produtos_vendido" name="produtos_vendido" style="display:none;" value="<?php echo $produtos ?>" >
        <input rows="8" cols="45" id="total_produtos" style="display:none;" name="total_produtos" value="<?php echo $total_produtos ?>">



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
        <input type="text" name="cheque" id="cheque" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Dinheiro</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="dinheiro" id="dinheiro" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Vale Funcionário</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="vale_funcionario" id="vale_funcionario" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Furo de Caixa</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="furo_caixa" id="furo_caixa" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center" bgcolor="#FFFF00"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Saída 5</strong></td>
      <td bgcolor="#FFFF00"><strong>R$</strong>
      <input type="text" name="saida5" id="saida5" value="0" onblur="calcValor2()" onkeyup="SubstituiVirgulaPorPonto(this)"  required></td>
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
<table width="37%" height="219" border="0" align="center">
  <tbody>
    <tr>
      <td width="40%" height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">TOTAL SAÍDA:</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><p><strong>R$</strong>
        <input type="text" name="total_saida" id="total_saida" onblur="calcValor();calcValor3(this);" readonly onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center"><p>&nbsp;</p>
      <p><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">DIFERENÇA ENTRADA E SAÍDA:</strong></p></td>
      <td><strong>R$</strong>
        <input type="text" name="entrada_saida" id="entrada_saida" readonly onblur="calcValor3()" onkeyup="SubstituiVirgulaPorPonto(this)" required></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Promissória Anterior:</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><strong>R$
         <input type="text" name="promissoria_anterior" id="promissoria_anterior" value="<?php echo $total3 ?>" onKeyUp="SubstituiVirgulaPorPonto(this)" onBlur="calcValor4()">
      </strong></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Saldo Promissória:</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><strong>R$</strong>
        <input type="text" name="saldo_promissoria" id="saldo_promissoria" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor4()" ></td>
    </tr>
</table>
<p>&nbsp;</p>
<table width="37%" height="133" border="0" align="center">
  <tr style="display:none;">
    <td height="41" style="display:none;" align="center">&nbsp;</td>
    <td><input type="text" name="promissoria_soma" style="display:none;" id="promissoria_soma" value="0" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor4()" ></td>
  </tr>
  <tbody>
    <tr>
      <td width="40%" height="41" align="center"><strong style="font-size: 24px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">SOMA</strong><strong style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"></strong></td>
      <td><strong>R$</strong>
        <input type="text" name="soma" id="soma" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor4()" required></td>
    </tr>
    <tr>
      <td height="41" align="center"><strong style="font-size: 18px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #FF0004;">FALTA OU SOBRA</strong></td>
      <td><strong>R$</strong>
        <input type="text" name="falta_sobra" id="falta_sobra" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor4()" required></td>
    </tr>
  </tbody>
</table>
<p>
</p>
<p>&nbsp;</p>


<div class="col-md-12">

  <center>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="submit" value="Cadastrar" id="btncad" class="accordion">
        <input type="button" value="Cancelar" id="btncan">


    </p>
  </center>
</div>
</form>
</div>
</tr>

<?php
if(isset($_POST["submit"])){

  $sql = "INSERT INTO caixa (dia, mes, ano, saldo_anterior, vendas_dia, produtos_vendido, total_produtos, cheque_devolvido1, cheque_devolvido2, promissoria_dia, promissoria_cobrar, total_entrada, almoco, combustivel, hotel, deposito, oficina, despesa6, despesa7, despesa8, despesa9, espc_despesa, cheque, dinheiro, vale_funcionario, furo_caixa, saida5, espc_saidas, total_saida, entrada_saida, saldo_promissoria, soma, falta_sobra, funcionario, registro)
  VALUES ('".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["saldo_anterior"]."','".$_POST["vendas_dia"]."','".$_POST["produtos_vendido"]."','".$_POST["total_produtos"]."','".$_POST["cheque_devolvido1"]."','".$_POST["cheque_devolvido2"]."','".$_POST["promissoria_dia"]."','".$_POST["promissoria_cobrar"]."','".$_POST["total_entrada"]."','".$_POST["almoco"]."','".$_POST["combustivel"]."','".$_POST["hotel"]."','".$_POST["deposito"]."','".$_POST["oficina"]."','".$_POST["despesa6"]."','".$_POST["despesa7"]."','".$_POST["despesa8"]."','".$_POST["despesa9"]."','".$_POST["espc_despesa"]."','".$_POST["cheque"]."','".$_POST["dinheiro"]."','".$_POST["vale_funcionario"]."','".$_POST["furo_caixa"]."','".$_POST["saida5"]."','".$_POST["espc_saidas"]."','".$_POST["total_saida"]."','".$_POST["entrada_saida"]."','".$_POST["saldo_promissoria"]."','".$_POST["soma"]."','".$_POST["falta_sobra"]."','".$_POST["funcionario"]."', NOW())";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Caixa cadastrado com sucesso!');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }

  $sql2 = "INSERT INTO caixa_lucas (dia, mes, ano, saldo_anterior, vendas_dia, produtos_vendido, total_produtos, cheque_devolvido1, cheque_devolvido2, promissoria_dia, promissoria_cobrar, total_entrada, almoco, combustivel, hotel, deposito, oficina, despesa6, despesa7, despesa8, despesa9, espc_despesa, cheque, dinheiro, vale_funcionario, furo_caixa, saida5, espc_saidas, total_saida, entrada_saida, saldo_promissoria, soma, falta_sobra, funcionario, registro)
  VALUES ('".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["saldo_anterior"]."','".$_POST["vendas_dia"]."','".$_POST["produtos_vendido"]."','".$_POST["total_produtos"]."','".$_POST["cheque_devolvido1"]."','".$_POST["cheque_devolvido2"]."','".$_POST["promissoria_dia"]."','".$_POST["promissoria_cobrar"]."','".$_POST["total_entrada"]."','".$_POST["almoco"]."','".$_POST["combustivel"]."','".$_POST["hotel"]."','".$_POST["deposito"]."','".$_POST["oficina"]."','".$_POST["despesa6"]."','".$_POST["despesa7"]."','".$_POST["despesa8"]."','".$_POST["despesa9"]."','".$_POST["espc_despesa"]."','".$_POST["cheque"]."','".$_POST["dinheiro"]."','".$_POST["vale_funcionario"]."','".$_POST["furo_caixa"]."','".$_POST["saida5"]."','".$_POST["espc_saidas"]."','".$_POST["total_saida"]."','".$_POST["entrada_saida"]."','".$_POST["saldo_promissoria"]."','".$_POST["soma"]."','".$_POST["falta_sobra"]."','".$_POST["funcionario"]."', NOW())";

    if ($con->query($sql2) === FALSE) {
  echo "<script type= 'text/javascript'>alert('Caixa não cadastrado! Procure o analista para resolver');</script>";
  }
  
  $con->close();
}
?>
