<?php

include 'config.php';
include 'topo.php';
?>

<body>
<form   action="" method="POST" >
  <center>
    <font face="arial" size="5" color="black">
      <B>Cadastro de produtos</B>
    </font>
  </center>


  <div class="col-md-6">
    <div class="col-md-4" style="padding-right:0px;">
        <label id="text" for="tipo">Tipo de Produto : </label><br>
        <select id="text1" class="form-control" name="tipo" style="margin-bottom:20px;">
            <option></option>
              <option value="" disabled selected>Categoria</option>
              <option value="Embalagem">Embalagem</option>
              <option value="Cigarro">Cigarro</option>
              <option value="Cipapel">Cipapel</option>
              <option value="Sacolas">Sacolas</option>
              <option value="Isqueiro">Isqueiro</option>
              <option value="Fermento">Fermento</option>
              <option value="Copos">Copos</option>
              <option value="Guardanapo">Guardanapo</option>
              <option value="Cigarro Nacional">Cigarro Nacional</option>
              <option value="Sacola Plástica">Sacola Plástica</option>
              <option value="Saco de Lixo">Saco de Lixo</option>
              <option value="Baralho">Baralho</option>
              <option value="Canudos">Canudos</option>
              <option value="Kraft">Kraft</option>
              <option value="Pedra Sanitária">Pedra Sanitária</option>
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
        <label id="text1">Preço SC:</label>
        <input name="preco_sc" type="text"  class="txt" style="margin-bottom:20px;" value="R$ " maxlength="30">
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
        <input name="preco_pr" type="text"  class="txt" style="margin-bottom:20px;" value="R$ " maxlength="30">
      </div>
      <div class="col-md-6">
        <div class="col-md-4" style="padding-right:0px;"></div>
      </div>
    </div>
    <p>
    Observações:
      <textarea name="obs" rows="2" onfocus="this.value='';" style="font-size:30px; font-family:Times New Roman;color:red;white-space:pre-wrap;width:100%;margin-bottom:20px;">
        Observações
      </textarea>
    </p>
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

  $sql = "INSERT INTO produtos (tipo, especificacao, preco_sc, preco_pr, obs)
  VALUES ('".$_POST["tipo"]."','".$_POST["especificacao"]."','".$_POST["preco_sc"]."', '".$_POST["preco_pr"]."','".$_POST["obs"]."')";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}
?>
