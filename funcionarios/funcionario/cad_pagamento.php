<?php

include 'config.php';
include 'topo.php';

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

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
          $.getJSON('function.php',{ 
            id: $( this ).val() 
          },function( json ){
            $tipo.val( json.tipo );
            $especificacao.val( json.especificacao );
            $preco_sc.val( json.preco_sc );
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
    <p><font face="arial" size="5" color="black"><B>Cadastro de Vendas</B>
    </font></p>
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
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">15</option>
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
                <select id="tipo2" class="form-control" name="mes" style="margin-bottom:0px;width:75";>
                  <option></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="<?=date('m')?>" selected="selected"><?=date('m')?></option>
                  <option value="8">8</option>
                  <option value="9">9</option>
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
              <input name="funcionario" type="text" class="txt" style="margin-bottom:20px;" value="Administrador" maxlength="50" readonly>
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
    <table width="425" border="0" align="left">
      <tbody>
        <tr>
          <td height="176"><label>Digite o ID do Produto</label>
      <input type="text" class="form-control" name="id"><br>
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
    <table height="216" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td width="173" class="dir"><strong>Carga:</strong></td>
      <td width="179"><input type="text" name="carga" id="carga" onblur="calcValor2()" /></td>
    </tr>
    <tr>  
      <td class="dir"><strong>Retorno:</strong></td>
      <td><input type="text" name="retorno" id="retorno" onblur="calcValor2()" /></td>
    </tr>
    <tr>
      <td class="dir"><strong>Venda SC:</strong></td>
      <td><input type="text" name="venda_sc" id="venda_sc" onblur="calcValor2()" readonly /></td>
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
      <td><input type="text" name="recarga" id="recarga" onblur="calcValor()" /></td>
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
        <input type="submit" name="submit" value="Cadastrar" id="btncad">
        <input type="button" value="Cancelar" id="btncan">
    </p>
  </center>

</form>


<?php
if(isset($_POST["submit"])){

  $sql = "INSERT INTO pagamentos (dia, mes, ano, tipo, especificacao, preco_sc, carga, retorno, venda_sc, val_sc, recarga, carga_seguinte, funcionario)
  VALUES ('".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["tipo"]."','".$_POST["especificacao"]."','".$_POST["preco_sc"]."','".$_POST["carga"]."','".$_POST["retorno"]."','".$_POST["venda_sc"]."','".$_POST["val_sc"]."','".$_POST["recarga"]."','".$_POST["carga_seguinte"]."','".$_POST["funcionario"]."')";


  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Venda cadastrada com sucesso!');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  

    $sql = "REPLACE INTO carga (id, carga) VALUES ('".$_POST["id"]."','".$_POST["carga_seguinte"]."')";
  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Carga Atualizada !');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}
