<?php

include 'config.php';
include 'topo.php';
session_start();
include('http://177.85.98.125/~rrdistri/verifica_login.php');

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">function SubstituiVirgulaPorPonto(campo){  campo.value = campo.value.replace(/,/gi, ".");}</script>

<script type="text/javascript">
function calcValor(){
    //CALCULO CARGA DIA SEGUINTE
    // zerando total
    document.getElementById("carga_seguinte").value = '0';
 
    // valor líquido - retorno
    var VTOTALLIQUIDO = parseFloat(document.getElementById("retorno").value);
 
    // desconto em porcentagem - recarga
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("recarga").value);
 
    var TOTAL = parseFloat(VTOTALLIQUIDO) + parseFloat(VTOTALLIQUIDO2);
 
    document.getElementById("carga_seguinte").value = '' + TOTAL.toFixed(2);
}

</script>

<script type="text/javascript">
function calcValor2(){
    //CALCULO VENDA PR
    // zerando total
    document.getElementById("venda_sc").value = '0';
 
    // valor líquido - carga
    var VTOTALLIQUIDO = parseFloat(document.getElementById("carga").value);
 
    // desconto em porcentagem - retorno
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("retorno").value);
 
    var TOTAL = parseFloat(VTOTALLIQUIDO) - parseFloat(VTOTALLIQUIDO2);
 
    document.getElementById("venda_sc").value = '' + TOTAL.toFixed(2);
}
</script>

<script type="text/javascript">
function calcValor3(){
    //CALCULO VALORIZAÇÃO SC
    // zerando total
    document.getElementById("val_sc").value = '0';
 
    // valor líquido - valor do produto
    var VTOTALLIQUIDO = parseFloat(document.getElementById("preco_sc").value);
 
    // VENDA PR - venda_pr
    var VTOTALLIQUIDO2 = parseFloat(document.getElementById("venda_sc").value);
    var TOTAL = parseFloat(VTOTALLIQUIDO) * parseFloat(VTOTALLIQUIDO2);
 
    document.getElementById("val_sc").value = '' + TOTAL.toFixed(2);
}
</script>

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  </head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
  <body>
    <script type='text/javascript'>
      $(document).ready(function(){
        $("input[name='id']").blur(function(){
          var $tipo = $("input[name='tipo']");
          var $especificacao = $("input[name='especificacao']");
          var $preco_sc = $("input[name='preco_sc']");
          var $preco_pr = $("input[name='preco_pr']");
          var $custo = $("input[name='custo']");
          $.getJSON('function.php',{ 
            id: $( this ).val() 
          },function( json ){
            $tipo.val( json.tipo );
            $especificacao.val( json.especificacao );
            $preco_sc.val( json.preco_sc );
            $preco_pr.val( json.preco_pr );
            $custo.val( json.custo );
          });
        });
      });
    </script>

        <script type='text/javascript'>
      $(document).ready(function(){
        $("input[name='id']").blur(function(){
          var $carga = $("input[name='carga']");
          $.getJSON('function2.php',{ 
            id: $( this ).val() 
          },function( json ){
            $carga.val( json.carga );
          });
        });
      });
    </script>

       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <form   action="" method="POST" >
  <center>
    <p><font face="arial" size="5" color="black"><B>Cadastro de Venda - SC</B>
    </font></p>
    <input type="text" name="custo" id="custo" style="display:none;" >
    <input type="text" name="preco_pr" id="preco_pr" style="display:none;" >
    <table width="478" height="161" border="0" align="left">
      <tbody>
        <tr>
          <td width="69" height="157" valign="top"><span class="col-md-4" style="padding-right:0px;">
            <label id="text" for="tipo5">Data   da   Venda:</label>
          </span></td>
          <td width="56" height="157" align="left" valign="top"><div class="col-md-6">
            <div class="col-md-4" style="padding-right:0px;">
              <p>Dia:              </p>
              <p><span class="col-md-4" style="padding-right:0px;">
                <select name="dia" size="1" class="form-control" id="dia" style="margin-bottom:0px;width:70";>
                  <option></option>
                  <option value="<?=date('d')?>" selected="selected"><?=date('d')?></option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                </span><br>
            </p>
            </div>
          </div></td>
          <td width="82" height="157" align="left" valign="top"><div class="col-md-6">
            <div class="col-md-4" style="padding-right:0px;">
              <p>Mês:              </p>
              <p><span class="col-md-4" style="padding-right:0px;">
                <select id="tipo2" class="form-control" name="mes" style="margin-bottom:0px;width:75"; readonly >
                  <option></option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="<?=date('m')?>" selected="selected"><?=date('m')?></option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
            </span></p>
              <p><br>
              </p>
            </div>
          </div></td>
          <td width="73" colspan="3" align="left" valign="top"><p>Ano:
            </p>
            <p><span class="col-md-4" style="padding-right:0px;">
                <select id="tipo3" class="form-control" name="ano" style="margin-bottom:0px;width:80";>
                  <option></option>
                  <option value="" disabled>Ano</option>
                  <option value="<?=date('Y')?>" selected="selected"><?=date('Y')?></option>
                </select>
            </span>                            
            <p><br>
        </p>
            </div>
          </div></td>
        </tr>
      </tbody>
    </table>
    <table width="252" border="0" align="right">
      <tbody>
        <tr>
          <td width="242"><strong>Funcionário: 
              <input name="funcionario" type="text" class="txt" style="margin-bottom:20px;" value="Gustavo Luiz" maxlength="50" readonly>
          </strong></td>
        </tr>
      </tbody>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="456" border="0" align="left">
      <tbody>
        <tr>
          <td height="191"><label><strong>Digite o ID do Produto</strong></label>
      <input type="text" class="form-control" name="id" required><br>
      <br>
            <label>Categoria</label>
            <input type="text" class="form-control" name="tipo" readonly>
            <br>
            <br>
            <label>Especificação</label>
            <input type="text" class="form-control" name="especificacao" readonly>
            <br>
            <br>
            <label>Preço SC   R$</label>
            <input type="text" class="form-control" id="preco_sc" name="preco_sc" onblur="calcValor3()" readonly>
            <br>
          <br></td>
        </tr>
      </tbody>
    </table>
    <table width="405" border="0" align="right">
      <tbody>
        <tr>
          <td width="399" align="left"><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
            <script type="text/javascript" src="javascriptpersonalizado.js"></script>
            <h1 style="font-size: 24px"><strong>Pesquisar Produto</strong></h1>
            <p><strong style="font-size: 24px">Pesquisar:
            </strong>
              <input name="pesquisa" type="text" id="pesquisa" placeholder="O que você está procurando?" size="35">
            </p>
            <p>
              <input type="submit" name="enviar" value="Pesquisar">
            </p>
            <ul class="resultado">
          </ul></td>
        </tr>
      </tbody>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </center>
  
  <div class="col-md-6">
    <div class="col-md-4" style="padding-right:0px;"><br>
    </div>
  </div>
  <div class="col-md-12">
<div class="col-md-12">
  <label id="text1"><br>
  </label>
  <label><br>
</label>
    <table width="417" height="265" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td width="173" class="dir"><strong>Carga:</strong></td>
      <td width="179"><input type="text" name="carga" onkeyup="SubstituiVirgulaPorPonto(this)" id="carga" onblur="calcValor2()" required/></td>
    </tr>
    <tr>  
      <td class="dir"><strong>Retorno:</strong></td>
      <td><input type="text" name="retorno" id="retorno" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor2()" required/></td>
    </tr>
    <tr>
      <td class="dir"><strong>Venda SC:</strong></td>
      <td><input type="text" name="venda_sc" id="venda_sc" onblur="calcValor2()" readonly required /></td>
    </tr>
    <tr>
      <td class="dir"><p>&nbsp;</p>
        <p><strong>Valorização SC:</strong></p></td><td><p>&nbsp;
          </p>
          <p>R$
            <input type="text" name="val_sc" id="val_sc" value="0.00" onblur="calcValor3()" readonly />
          </p></td>
    <tr>
      <td class="dir"><strong>Recarga</strong></td>
      <td><input type="text" name="recarga" id="recarga" onkeyup="SubstituiVirgulaPorPonto(this)" onblur="calcValor()" required /></td>
    <tr>
      <td class="dir"><strong>Carga dia seguinte</strong></td>
      <td><input type="text" name="carga_seguinte" id="carga_seguinte" onblur="calcValor()" readonly /></td>
    <tr>            
        </table>
    <p>&nbsp;</p>
   
</div>

    <div class="col-md-12">

  <center>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="submit" value="Cadastrar" id="btncad" class="accordion">
        <input type="button" value="Cancelar" id="btncan">
    </p>
  </center>

</form>
</div>
</tr>


<?php
if(isset($_POST["submit"])){

  $sql = "INSERT INTO pagamentos (dia, mes, ano, tipo, especificacao, preco_sc, preco_pr, custo, carga, retorno, venda_sc, val_sc, recarga, carga_seguinte, funcionario, registro)
  VALUES ('".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["tipo"]."','".$_POST["especificacao"]."','".$_POST["preco_sc"]."','".$_POST["preco_pr"]."','".$_POST["custo"]."','".$_POST["carga"]."','".$_POST["retorno"]."','".$_POST["venda_sc"]."','".$_POST["val_sc"]."','".$_POST["recarga"]."','".$_POST["carga_seguinte"]."','".$_POST["funcionario"]."', NOW())";


  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Venda cadastrada com sucesso!');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  

    $sql = "REPLACE INTO carga_gustavo (id, carga) VALUES ('".$_POST["id"]."','".$_POST["carga_seguinte"]."')";
  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Carga Atualizada !');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }

    $sql2 = "INSERT INTO pagamentos_gustavo (dia, mes, ano, tipo, especificacao, preco_sc, preco_pr, custo, carga, retorno, venda_sc, val_sc, recarga, carga_seguinte, funcionario, registro)
  VALUES ('".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["tipo"]."','".$_POST["especificacao"]."','".$_POST["preco_sc"]."','".$_POST["preco_pr"]."','".$_POST["custo"]."','".$_POST["carga"]."','".$_POST["retorno"]."','".$_POST["venda_sc"]."','".$_POST["val_sc"]."','".$_POST["recarga"]."','".$_POST["carga_seguinte"]."','".$_POST["funcionario"]."', NOW())";

    if ($con->query($sql2) === FALSE) {
  echo "<script type= 'text/javascript'>alert('Venda não cadastrada! Procure o desenvolvedor imediatamente');</script>";
  }
  
  $con->close();
}
