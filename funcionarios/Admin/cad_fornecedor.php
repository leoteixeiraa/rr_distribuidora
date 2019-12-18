<?php

include 'config.php';
include 'topo.php';
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</head>

<body>
<script>$(function() {
  $('#Preco').maskMoney({ decimal: '.', thousands: '', precision: 2 });
})</script>
<script>$(function() {
  $('#Preco2').maskMoney({ decimal: '.', thousands: '', precision: 2 });
})</script>
<script>$(function() {
  $('#Preco3').maskMoney({ decimal: '.', thousands: '', precision: 2 });
})</script>


</body>

<form   action="" method="POST" >
  <center>
    <p><font face="arial" size="5" color="black"><B>Cadastro de produtos</B>
    </font></p>
  </center>

  
  <div class="col-md-6">
    <div class="col-md-4" style="padding-right:0px;">
        <label id="text" for="tipo">Tipo de Produto : </label><br>
        <select id="text1" class="form-control" name="tipo" style="margin-bottom:20px;">
            <option></option>
              <option value="" disabled selected>Categoria</option>
              <option value="Sacolas">Sacolas</option>
              <option value="Cigarro">Cigarro</option>
              <option value="Isqueiro">Isqueiro</option>
              <option value="Fermento">Fermento</option>
              <option value="Copos">Copos</option>
              <option value="Guardanapo">Guardanapo</option>
              <option value="Cigarro Nacional">Cigarro Nacional</option>
              <option value="Sacola Plastica">Sacola Plástica</option>
              <option value="Saco de Lixo">Saco de Lixo</option>
              <option value="Baralho">Baralho</option>
              <option value="Canudos">Canudos</option>
              <option value="Kraft">Kraft</option>
              <option value="Pedra Sanitaria">Pedra Sanitária</option>
              <option value="Luvas Sanro">Luvas Sanro</option>
              <option value="Outros">Outros</option>
       </select>
      
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
  		  <label id="text1">Especificação do Produto:</label>
        <input name="especificacao" type="text" class="txt" style="margin-bottom:20px;" maxlength="50">
      </div>
  </div>
  <div class="col-md-12">
<div class="col-md-12">
    <label id="text1"><br>
    </label>
    <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Custo:</label>
        <input name="custo" type="text" id="Preco"  class="txt" style="margin-bottom:20px;" value="0.00" maxlength="30">
      </div>
      <div class="col-md-6">
        <div class="col-md-4" style="padding-right:0px;"></div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Preço SC:</label>
        <input name="preco_sc" type="text" id="Preco2"  class="txt" style="margin-bottom:20px;" value="0.00" maxlength="30">
      </div>
      <div class="col-md-6">
        <div class="col-md-4" style="padding-right:0px;"></div>
      </div>
    </div>
    <label><br>
    </label>
    <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Preço PR:</label>
        <input name="preco_pr" type="text" id="Preco3"  class="txt" style="margin-bottom:20px;" value="0.00" maxlength="30">
      </div>
      <div class="col-md-6">
        <div class="col-md-4" style="padding-right:0px;"></div>
      </div>
    </div>

</div>

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

  $sql = "INSERT INTO fornecedores (tipo, especificacao, custo, preco_sc, preco_pr)
  VALUES ('".$_POST["tipo"]."','".$_POST["especificacao"]."','".$_POST["custo"]."','".$_POST["preco_sc"]."', '".$_POST["preco_pr"]."')";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Produto cadastrado com sucesso!');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}
?>
