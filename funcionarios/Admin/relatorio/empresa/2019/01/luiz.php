<?php 
include('topo.php');
include('config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RELATORIO - LUIZ</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/atomic-age:n4:default.js" type="text/javascript"></script>

</head>

<body>

<?php
mysql_connect("localhost", "rrdistri_usersis", "GX1k^hHmZsDK") or die(mysql_error());
mysql_select_db("rrdistri_sisc") or die(mysql_error());
?>
<!--
  Sacolas
-->
<?php

  //SACOLAS
    $query = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Sacolas') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 
   
    $result = mysql_query($query) or die(mysql_error());
  
  //ISQUEIRO
   $query2 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Isqueiro') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

  $result2 = mysql_query($query2) or die(mysql_error());

   //Fermento
   $query3 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Fermento') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

     $result3 = mysql_query($query3) or die(mysql_error());

   //Copos
  $query4 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Copos') and (dia >='01' and dia <=31) and mes=('11') and ano=('2018') GROUP BY tipo"; 

    $result4 = mysql_query($query4) or die(mysql_error());

   //Guardanapo
  $query5 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Guardanapo') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

   $result5 = mysql_query($query5) or die(mysql_error());

    //Cigarro
    $query6 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Cigarro') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

    $result6 = mysql_query($query6) or die(mysql_error());
        
    //Cigarro_nacional
    $query7 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Cigarro Nacional') and (dia >='01' and dia <'=31') and mes=('11') and ano=('2018') GROUP BY tipo"; 

    $result7 = mysql_query($query7) or die(mysql_error());
      
        //Sacola Plastica
    $query8 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Sacola Plastica') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

    $result8 = mysql_query($query8) or die(mysql_error());
        
        //Saco de Lixo
        $query9 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Saco de Lixo') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

        $result9 = mysql_query($query9) or die(mysql_error());
      
      //Baralho
       $query10 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Baralho') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

       $result10 = mysql_query($query10) or die(mysql_error());
      
      //Canudos
       $query11 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Canudos') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

       $result11 = mysql_query($query11) or die(mysql_error());
      
      //Kraft
       $query12 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Kraft') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

       $result12 = mysql_query($query12) or die(mysql_error());      
      
      //Pedra sanitaria
       $query13 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Pedra Sanitaria') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

       $result13 = mysql_query($query13) or die(mysql_error());
     
      //Luvas Sanro
       $query14 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Luvas Sanro') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

       $result14 = mysql_query($query14) or die(mysql_error()); 
      
      //Outros
       $query15 = "SELECT tipo, SUM(val_sc), SUM(val_pr), SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz where tipo=('Outros') and (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY tipo"; 

       $result15 = mysql_query($query15) or die(mysql_error()); 

   //--------------------------------------------- DESCONTOS e DESPESAS --------------------------------------------------------//
      
       $query16 = "SELECT SUM(almoco) as total_almoco, " .
                  "SUM(combustivel) as total_combustivel, " .
                  "SUM(hotel) as total_hotel, " .
                  "SUM(deposito) as total_deposito, " .
                  "SUM(oficina) as total_oficina, " .
                  "SUM(despesa6) as total_despesa6, " .
                  "SUM(despesa7) as total_despesa7, " .
                  "SUM(despesa8) as total_despesa8, " .
                  "SUM(despesa9) as total_despesa9, " .
                  "SUM(cheque) as total_cheque, " .
                  "SUM(dinheiro) as total_dinheiro, " .
                  "SUM(vale_funcionario) as total_vale_funcionario, " .
                  "SUM(furo_caixa) as total_furo_caixa, " .
                  "SUM(saida5) as total_saida5 " .
                  "FROM caixa_luiz where (dia >='01' and dia <='31') and mes=('01') and ano=('2019')";

       $result16 = mysql_query($query16) or die(mysql_error());

       // //Total dinheiro
       // $query17 = "SELECT SUM(dinheiro) as total_dinheiro FROM caixa_luiz where (dia >='01' and dia <='31') and mes=('01') and ano=('2019')";

       // $result17 = mysql_query($query17) or die(mysql_error());

       // //Vale Funcionario
       // $query18 = "SELECT SUM(vale_funcionario) as total_vale_funcionario FROM caixa_luiz where (dia >='01' and dia <='31') and mes=('01') and ano=('2019')";
       // $result18 = mysql_query($query18) or die(mysql_error());

       // //furo caixa
       // $query19 = "SELECT SUM(furo_caixa) as total_furocaixa FROM caixa_luiz where (dia >='01' and dia <='31') and mes=('01') and ano=('2019')";
       // $result19 = mysql_query($query19) or die(mysql_error());

       // // SAIDA 5
       // $query20 = "SELECT SUM(saida5) as total_saida5 FROM caixa_luiz where (dia >='01' and dia <='31') and mes=('01') and ano=('2019')";
       // $result20 = mysql_query($query20) or die(mysql_error());

       //------------------------------------ DESPESAS ------------------------------------------------------------------//


//VALOR PRODUTOS - CONTA
    $sacolas = 0;
    $isqueiro = 0;
    $fermento = 0;
    $copos = 0;
    $guardanapo = 0;
    $cigarro = 0;
    $cigarro_nacional = 0;
    $sc_plasticas = 0;
    $saco_lixo = 0;
    $baralho = 0;
    $canudos = 0;
    $kraft = 0;
    $pedra_sanitaria = 0;
    $luvas_sanro = 0;
    $outros = 0;

//VALOR PRODUTOS - IMPRIMIR USUARIO
    $sacolas1 = 0;
    $isqueiro1 = 0;
    $fermento1 = 0;
    $copos1 = 0;
    $guardanapo1 = 0;
    $cigarro1 = 0;
    $cigarro_nacional1 = 0;
    $sc_plasticas1 = 0;
    $saco_lixo1 = 0;
    $baralho1 = 0;
    $canudos1 = 0;
    $kraft1 = 0;
    $pedra_sanitaria1 = 0;
    $luvas_sanro1 = 0;
    $outros1 = 0;

//valor porcentagem- comissao
    $sacolas2 = 0;
    $isqueiro2 = 0;
    $fermento2 = 0;
    $copos2 = 0;
    $guardanapo2 = 0;
    $cigarro2 = 0;
    $cigarro_nacional2 = 0;
    $sc_plasticas2 = 0;
    $saco_lixo2 = 0;
    $baralho2 = 0;
    $canudos2 = 0;
    $kraft2 = 0;
    $pedra_sanitaria2 = 0;
    $luvas_sanro2 = 0;
    $outros2 = 0;
//VALOR IMPRIMIR USUARIO - COMISSAO
    $sacolas3 = 0;
    $isqueiro3 = 0;
    $fermento3 = 0;
    $copos3 = 0;
    $guardanapo3 = 0;
    $cigarro3 = 0;
    $cigarro_nacional3 = 0;
    $sc_plasticas3 = 0;
    $saco_lixo3 = 0;
    $baralho3 = 0;
    $canudos3 = 0;
    $kraft3 = 0;
    $pedra_sanitaria3 = 0;
    $luvas_sanro3 = 0;
    $outros3 = 0;

//DESCONTOS
    $cheque = 0;
    $dinheiro = 0;
    $vale_funcionario = 0;
    $furo_caixa = 0;
    $saida5= 0;
    

// DESPESAS
    $almoco = 0;
    $combustivel = 0;
    $hotel = 0;
    $deposito = 0;
    $oficina = 0;
    $despesa6 = 0;
    $despesa7 = 0;
    $despesa8 = 0;
    $despesa9 = 0;

    

      while($row = mysql_fetch_array($result)){

          $sacolas += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $sacolas1 = number_format($sacolas, 2, ',','.');
          $sacolas2 = ($sacolas / 100) * 6.0;
          $sacolas3 = number_format($sacolas2, 2, ',','.');
        }
        while($row = mysql_fetch_array($result2)){

          $isqueiro += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $isqueiro1 = number_format($isqueiro, 2, ',','.');
          $isqueiro2 = ($isqueiro / 100) * 2.5 ;
          $isqueiro3 = number_format($isqueiro2, 2, ',','.');

        }

      while($row = mysql_fetch_array($result3)){

          $fermento += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $fermento1 = number_format($fermento, 2, ',','.');
          $fermento2 = ($fermento/ 100) * 4.0 ;
          $fermento3 = number_format($fermento2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result4)){

          $copos += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $copos1 = number_format($copos, 2, ',','.');
          $copos2 = ($copos/ 100) * 6.0 ;
          $copos3 = number_format($copos2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result5)){

          $guardanapo += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $guardanapo1 = number_format($guardanapo, 2, ',','.');
          $guardanapo2 = ($guardanapo / 100) * 6.0;
          $guardanapo3 = number_format($guardanapo2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result6)){

          $cigarro += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $cigarro1 = number_format($cigarro, 2, ',','.');
          $cigarro2 = ($cigarro / 100) * 1.0;
          $cigarro3 = number_format($cigarro2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result7)){

          $cigarro_nacional += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $cigarro_nacional1 = number_format($cigarro_nacional, 2, ',','.');
          $cigarro_nacional2 = ($cigarro_nacional / 100) * 4.0;
          $cigarro_nacional3 = number_format($cigarro_nacional2, 2, ',','.');

        }
         while($row = mysql_fetch_array($result8)){

          $sc_plasticas += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $sc_plasticas1 = number_format($sc_plasticas, 2, ',','.');
          $sc_plasticas2 = ($sc_plasticas / 100) * 5.0;
          $sc_plasticas3 = number_format($sc_plasticas2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result9)){

          $saco_lixo += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $saco_lixo1 = number_format($saco_lixo, 2, ',','.');
          $saco_lixo2 = ($saco_lixo/ 100) * 5.0 ;
          $saco_lixo3 = number_format($saco_lixo2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result10)){

          $baralho += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $baralho1 = number_format($baralho, 2, ',','.');
          $baralho2 = ($baralho/ 100) * 4.0 ;
          $baralho3 = number_format($baralho2, 2, ',','.');

        }
         while($row = mysql_fetch_array($result11)){

          $canudos += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $canudos1 = number_format($canudos, 2, ',','.');
          $canudos2 = ($canudos/ 100) * 6.0 ;
          $canudos3 = number_format($canudos2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result12)){

          $kraft += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $kraft1 = number_format($kraft, 2, ',','.');
          $kraft2 = ($kraft/ 100) * 5.0 ;
          $kraft3 = number_format($kraft2, 2, ',','.');
        }
         while($row = mysql_fetch_array($result13)){

          $pedra_sanitaria += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $pedra_sanitaria1 = number_format($pedra_sanitaria, 2, ',','.');
          $pedra_sanitaria2 = ($pedra_sanitaria/ 100) * 5.0 ;
          $pedra_sanitaria3 = number_format($pedra_sanitaria2, 2, ',','.');
        }
        while($row = mysql_fetch_array($result14)){

          $luvas_sanro += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $luvas_sanro1 = number_format($luvas_sanro, 2, ',','.');
          $luvas_sanro2 = ($luvas_sanro / 100) * 5.0;
          $luvas_sanro3 = number_format($luvas_sanro2, 2, ',','.');
        }
        while($row = mysql_fetch_array($result15)){

          $outros += $row['SUM(val_sc)']+$row['SUM(val_pr)'];
          $outros1 = number_format($outros, 2, ',','.');
          $outros2 = ($outros / 100) * 5.0;
          $outros3 = number_format($outros2, 2, ',','.');
        }
        //------------------------------DESPESAS--------------------------------

        //almoco
        while($row = mysql_fetch_array($result16)){
          //descontos:
          $valores['cheque'] = $row['total_cheque'];
          $valor1 = number_format($valores['cheque'], 2, ',','.');

          $valores['dinheiro'] = $row['total_dinheiro'];
          $valor2 = number_format($valores['dinheiro'], 2, ',','.');

          $valores['vale_funcionario'] = $row['total_vale_funcionario'];
          $valor3 = number_format($valores['vale_funcionario'], 2, ',','.');

          $valores['furo_caixa'] = $row['total_furo_caixa'];
          $valor4 = number_format($valores['furo_caixa'], 2, ',','.');

          $valores['saida5'] = $row['total_saida5'];
          $valor5 = number_format($valores['saida5'], 2, ',','.');


          //despesas:
          $valores['almoco'] = $row['total_almoco'];
          $valor6 = number_format($valores['almoco'], 2, ',','.');

          $valores['combustivel'] = $row['total_combustivel'];
          $valor7 = number_format($valores['combustivel'], 2, ',','.');

          $valores['hotel'] = $row['total_hotel'];
          $valor8 = number_format($valores['hotel'], 2, ',','.');

          $valores['deposito'] = $row['total_deposito'];
          $valor9 = number_format($valores['deposito'], 2, ',','.');

          $valores['oficina'] = $row['total_oficina'];
          $valor10 = number_format($valores['oficina'], 2, ',','.');

          $valores['despesa6'] = $row['total_despesa6'];
          $valor11 = number_format($valores['despesa6'], 2, ',','.');

          $valores['despesa7'] = $row['total_despesa7'];
          $valor12 = number_format($valores['despesa7'], 2, ',','.');

          $valores['despesa8'] = $row['total_despesa8'];
          $valor13 = number_format($valores['despesa8'], 2, ',','.');

          $valores['despesa9'] = $row['total_despesa9'];
          $valor14 = number_format($valores['despesa9'], 2, ',','.');


        }
       
       $total_despesa_luiz0 = 0;

        $vendas_total = $sacolas + $isqueiro + $fermento + $copos + $guardanapo + $cigarro + $cigarro_nacional + $sc_plasticas + $saco_lixo + $baralho + $canudos + $kraft + $pedra_sanitaria + $luvas_sanro + $outros;
        $vendas_total2 = number_format($vendas_total, 2, ',','.');

         $comissao_total = $sacolas2 + $isqueiro2 + $fermento2 + $copos2 + $guardanapo2 + $cigarro2 + $cigarro_nacional2 + $sc_plasticas2 + $saco_lixo2 + $baralho2 + $canudos2 + $kraft2 + $pedra_sanitaria2 + $luvas_sanro2 + $outros2;
         $comissao_total2 = number_format($comissao_total, 2, ',','.');

         $total_desconto = $valores['cheque'] + $valores['dinheiro'] + $valores['vale_funcionario'] + $valores['furo_caixa'] + $valores['saida5'];
         $total_desconto2 = number_format($total_desconto, 2, ',','.');

         $total_despesa = $valores['almoco'] + $valores['combustivel'] + $valores['hotel'] + $valores['deposito'] + $valores['oficina'] + $valores['despesa6'] + $valores['despesa7'] + $valores['despesa8'] + $valores['despesa9'];
         $total_despesa_luiz0 = $total_despesa;
         $total_despesa2 = number_format($total_despesa, 2, ',','.');
         $total_despesa_luiz = number_format($total_despesa, 2, ',','.');

         //CALCULO SALARIO(COMISSAO TOTAL - TOTAL DESCONTO):

         $salario = $comissao_total - $total_desconto;
         $salario2 = number_format($salario, 2, ',','.');


      ?>

<table width="476" border="0" align="center">
  <tbody>
    <tr>
      <td width="466" height="75" align="center" valign="middle" style="font-size: 35px; font-style: normal; font-weight: 400;"><p><strong>Janeiro de 2019</strong></p>
      <p><strong style="font-style: 50">Luiz Henrique</strong></p></td>
    </tr>
  </tbody>
</table>
<table width="924" height="583" border="1" align="center">
  <tbody>
    <tr>
      <td width="153" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>VENDAS</strong></td>
      <td width="141" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;">TOTAL MÊS</td>
      <td width="144" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;">COMISSÃO %</td>
      <td width="127" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;">COMISSÃO</td>
      <td width="154" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>VENDAS TOTAL</strong></td>
      <td width="165" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>COMISSÃO TOTAL</strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Sacolas</td>
      <td align="left"><strong>R$ 
        <?php echo $sacolas1 ?>
      </strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>6,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $sacolas3; ?> </strong></td>
      <td rowspan="14"><strong style="font-size: 24px">R$ <?php echo $vendas_total2; ?></strong></td>
      <td rowspan="14"><strong style="font-size: 24px">R$ <?php echo $comissao_total2; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Isqueiro</td>
      <td align="left"><strong>R$ <?php echo $isqueiro1 ?> </strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>2,5%</strong></td>
      <td align="left"><strong>R$ <?php echo $isqueiro3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Fermento</td>
      <td align="left"><strong>R$ <?php echo $fermento1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>4,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $fermento3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Copos</td>
      <td align="left"><strong>R$ <?php echo $copos1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>6,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $copos3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Guardanapo</td>
      <td align="left"><strong>R$ <?php echo $guardanapo1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $guardanapo3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Cigarro</td>
      <td align="left"><strong>R$ <?php echo $cigarro1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>1,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $cigarro3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Cigarro Nacional</td>
      <td align="left"><strong>R$ <?php echo $cigarro_nacional1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>4,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $cigarro_nacional3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">SC Plásticas</td>
      <td align="left"><strong>R$ <?php echo $sc_plasticas1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $sc_plasticas3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Saco Lixo</td>
      <td align="left"><strong>R$ <?php echo $saco_lixo1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $saco_lixo3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Baralho</td>
      <td align="left"><strong>R$ <?php echo $baralho1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>4,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $baralho3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Canudos</td>
      <td align="left"><strong>R$ <?php echo $canudos1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>6,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $canudos3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Kraft</td>
      <td align="left"><strong>R$ <?php echo $kraft1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $kraft3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Pedra Sanitária</td>
      <td align="left"><strong>R$ <?php echo $pedra_sanitaria1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $pedra_sanitaria3; ?></strong></td>
    </tr>
    <tr>
      <td height="33" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Luvas Sanro</td>
      <td align="left"><strong>R$ <?php echo $luvas_sanro1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $luvas_sanro3; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Outros</td>
      <td align="left"><strong>R$ <?php echo $outros1 ?></strong></td>
      <td align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong>5,0%</strong></td>
      <td align="left"><strong>R$ <?php echo $outros3; ?></strong></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="469" height="286" border="1" align="center">
  <tbody>
    <tr>
      <td width="126" height="52" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>DESCONTOS</strong></td>
      <td width="199" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;">TOTAL MÊS</td>
      <td width="122" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>TOTAL DESCONTOS</strong></td>
    </tr>
    <tr>
      <td height="37" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Cheque</td>
      <td><strong>R$ <?php echo $valor1; ?></strong></td>
      <td rowspan="5"><strong style="font-size: 24px">R$ <?php echo $total_desconto2; ?></strong></td>
    </tr>
    <tr>
      <td height="34" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Dinheiro</td>
      <td><strong>R$ <?php echo $valor2; ?></strong></td>
    </tr>
    <tr>
      <td height="43" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Vale Funcionario </td>
      <td><strong>R$ <?php echo $valor3; ?></strong></td>
    </tr>
    <tr>
      <td height="35" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Furo de Caixa</td>
      <td><strong>R$ <?php echo $valor4; ?></strong></td>
    </tr>
    <tr>
      <td height="69" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Saída 5</td>
      <td><strong>R$ <?php echo $valor5; ?></strong></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="629" height="520" border="1" align="center">
  <tbody>
    <tr>
      <td width="204" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>DESPESAS</strong></td>
      <td width="220" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;">TOTAL MÊS</td>
     
      <td width="184" align="center" valign="middle" style="font-size: 26px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>TOTAL DESPESA</strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Almoço</td>
      <td align="left"><strong>R$ <?php echo $valor6; ?></strong></td>
      <td rowspan="9" align="center" style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 20px;"><strong style="font-size: 24px">R$ <?php echo $total_despesa2 ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Combustível</td>
      <td><strong>R$ <?php echo $valor7; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Hotel</td>
      <td><strong>R$ <?php echo $valor8; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Depósito</td>
      <td><strong>R$ <?php echo $valor9; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Oficina</td>
      <td><strong>R$ <?php echo $valor10; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Despesa 6</td>
      <td><strong>R$ <?php echo $valor11; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Despesa 7 </td>
      <td><strong>R$ <?php echo $valor12; ?></strong></td>
    </tr>
    <tr>
      <td align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Despesa 8</td>
      <td><strong>R$ <?php echo $valor13; ?></strong></td>
    </tr>
    <tr>
      <td height="42" align="center" style="font-style: normal; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 20px;">Despesa 9 </td>
      <td><strong>R$ <?php echo $valor14; ?></strong></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="295" border="0" align="center">
  <tr>
    <td width="289" align="center" valign="middle" style="font-size: 36px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-style: normal; color: #C55052;"><p><strong>Salário Mês: </strong><strong>R$ <?php echo $salario2; ?></strong></p></td>
  </tr>
  <tbody>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
