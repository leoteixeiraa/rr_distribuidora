<?php

include 'config.php';
include 'topo.php';
?>

<body>
<form   action="" method="POST" >
  <center>
    <font face="arial" size="5" color="black">
      <B>Cadastro Fornecedor</B>
    </font>
  </center>


  <div class="col-md-12">
      <div class="col-md-6">
        <input id="text1" type="radio" name="cnpj" value="cnpj" checked> CNPJ
        <input id="text1" type="radio" name="cnpj" value="cpf_radio"> CPF                
      <input type="text" name="cpf" class="txt" style="margin-bottom:20px;">
      </div>   
      <div class="col-md-6">      
        <label  id="text1">IE/RG:</label>
        <input type="text" name="rg" class="txt" maxlength="50" style="margin-bottom:20px;">
    </div>
  </div>
  <div class="col-md-12">
      <div class="col-md-6">
  		  <label id="text1">Razão Social/Nome:</label>
        <input type="text" name="nome" class="txt" maxlength="50" style="margin-bottom:20px;">
      </div>
      <div class="col-md-6">
        <label id="text1">Fantasia/Apelido:</label>
        <input type="text" name="apelido" class="txt" maxlength="30" style="margin-bottom:20px;"><br>
      </div>
  </div>

<div class="col-md-12">

  <div class="col-md-6">
    <label id="text1">CEP:</label>
    <input type="text" name="cep"  class="txt" maxlength="9" style="margin-bottom:20px;">
  </div>
  
  <div class="col-md-6">
      
    <div class="col-md-8" style="padding-left:0px;">
      <label id="text1">Endereço:</label>
      <input type="text" name="endereco" class="txt" style="margin-bottom:20px;">
    </div>    

    <div class="col-md-4" style="padding-right:0px;">
      <label id="text1">Nº:</label>
      <input type="text" name="numero" class="txt" style="margin-bottom:20px;">
    </div>

  </div>

</div>
<div class="col-md-12">
  <div class="col-md-6">
    <label id="text1">Bairro:</label>
    <input type="text" name="bairro" class="txt" style="margin-bottom:20px;">
    <label id="text1">Complemento:</label>
    <input type="text" name="complemento" class="txt" style="margin-bottom:20px;">
  </div>
  <div class="col-md-6">
    <div class="col-md-8" style="padding-left:0px;">
      <label id="text1">Cidade:</label>
      <input type="text" name="cidade" class="txt" style="margin-bottom:20px;">
    </div>
    <div class="col-md-4" style="padding-right:0px;">
        <label id="text" for="uf">UF : </label><br>
        <select id="text1" class="form-control" name="uf" style="margin-bottom:20px;">
            <option></option>
              <option value="" disabled selected>Selecione o estado</option>
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AP">AP</option>
              <option value="AM">AM</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="ES">ES</option>
              <option value="DF">DF</option>
              <option value="MA">MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RS">RS</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SP">SP</option>
              <option value="SE">SE</option>
              <option value="TO">TO</option>
       </select>
      
    </div>
  </div>
  <div class="col-md-6">
      <label id="text1">Telefone:</label>
      <input type="text" name="telefone" class="txt" style="margin-bottom:20px;">
  </div>
</div>


<div class="col-md-12">
  <div class="col-md-6">
      
      <label id="text1">Celular:</label>
      <input type="text" name="celular" class="txt" style="margin-bottom:20px;" >
  </div>
  <div class="col-md-6">
      <label id="text1">E-mail:</label>
      <input type="email" name="email" class="txt" style="margin-bottom:20px;"><br>
  </div>
<div class="col-md-12">
      <label id="text1">Observações:</label>
      <textarea name="obs" rows="2" onfocus="this.value='';" style="font-size:30px; font-family:Times New Roman;color:red;white-space:pre-wrap;width:100%;margin-bottom:20px;">
        Observações
      </textarea>
</div>

  <center>
      <input type="submit" name="submit" value="Cadastrar" id="btncad">
      <input type="button" value="Cancelar" id="btncan">
  </center>

</form>

<?php
if(isset($_POST["submit"])){

  $sql = "INSERT INTO fornecedores (cpf, rg, nome, apelido, cep, endereco, numero, bairro, complemento, cidade, uf, telefone, celular, email, obs)
  VALUES ('".$_POST["cpf"]."','".$_POST["rg"]."','".$_POST["nome"]."', '".$_POST["apelido"]."','".$_POST["cep"]."','".$_POST["endereco"]."','".$_POST["numero"]."','".$_POST["bairro"]."','".$_POST["complemento"]."','".$_POST["cidade"]."','".$_POST["uf"]."','".$_POST["telefone"]."','".$_POST["celular"]."','".$_POST["email"]."','".$_POST["obs"]."')";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}
?>
