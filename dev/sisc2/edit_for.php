<?php

include 'config.php';
include 'topo.php';

if (isset($_GET['id'])){
     $upd = mysqli_query($con,"SELECT * FROM fornecedores WHERE id=".$_GET['id']);     
}

?>

<body>
<form   action="" method="POST" >
  <center>
    <font face="arial" size="5" color="black">
      <B>Cadastro Fornecedor</B>
    </font>
  </center>

<?php
    
           while($row = mysqli_fetch_assoc($upd)){
                echo '
  <div class="col-md-12">
      <div class="col-md-6">
        <input type="hidden" name="id" value="'.$row['id'].'">
        <input id="text1" type="radio" name="cnpj" value="cnpj" checked> CNPJ
        <input id="text1" type="radio" name="cnpj" value="cpf_radio"> CPF                
      <input type="text" name="cpf" class="txt" value="'.$row['cpf'].'">
      </div>
      <div class="col-md-6">      
        <label  id="text1">IE/RG:</label>
        <input type="text" name="rg" class="txt" maxlength="50" value="'.$row['rg'].'">
    </div>
  </div>
  <div class="col-md-12">
      <div class="col-md-6">
  		  <label id="text1">Razão Social/Nome:</label>
        <input type="text" name="nome" class="txt" maxlength="50" value="'.$row['nome'].'">
      </div>
      <div class="col-md-6">
        <label id="text1">Fantasia/Apelido:</label>
        <input type="text" name="apelido" class="txt" maxlength="30" value="'.$row['apelido'].'"><br>
      </div>
  </div>

<div class="col-md-12">

  <div class="col-md-6">
    <label id="text1">CEP:</label>
    <input type="text" name="cep"  class="txt" maxlength="9" value="'.$row['cep'].'">
  </div>
  
  <div class="col-md-6">
      
    <div class="col-md-8" style="padding-left:0px;">
      <label id="text1">Endereço:</label>
      <input type="text" name="endereco" class="txt" value="'.$row['endereco'].'">
    </div>    

    <div class="col-md-4" style="padding-right:0px;">
      <label id="text1">Nº:</label>
      <input type="text" name="numero" class="txt" value="'.$row['numero'].'">
    </div>

  </div>

</div>
<div class="col-md-12">
  <div class="col-md-6">
    <label id="text1">Bairro:</label>
    <input type="text" name="bairro" class="txt" value="'.$row['bairro'].'">
    <label id="text1">Complemento:</label>
    <input type="text" name="complemento" class="txt" value="'.$row['complemento'].'">
  </div>
  <div class="col-md-6">
    <div class="col-md-8" style="padding-left:0px;">
      <label id="text1">Cidade:</label>
      <input type="text" name="cidade" class="txt" value="'.$row['cidade'].'">
    </div>
    <div class="col-md-4" style="padding-right:0px;">
        <label id="text" for="uf">UF : </label><br>
        <select id="text1" class="form-control" name="uf" >
            <option></option>
              <option value="'.$row['uf'].'" disabled selected>'.$row['uf'].'</option>
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
      <input type="text" name="telefone" class="txt" value="'.$row['telefone'].'">
  </div>
</div>


<div class="col-md-12">
  <div class="col-md-6">
      
      <label id="text1">Celular:</label>
      <input type="text" name="celular" class="txt" value="'.$row['celular'].'">
  </div>
  <div class="col-md-6">
      <label id="text1">E-mail:</label>
      <input type="email" name="email" class="txt" value="'.$row['email'].'"><br>
  </div>
<div class="col-md-12">
      <label id="text1">Observações:</label>
      <textarea name="obs" rows="2" value="'.$row['obs'].'" style="font-size:30px; font-family:Times New Roman;color:red;white-space:pre-wrap;width:100%;margin-bottom:20px;">
        '.$row['obs'].'
      </textarea>
</div>
';
       }
          ?>
<br>
  <center>
      <input type="submit" name="submit" value="Atualizar" id="btncad">
      <input type="button" value="Cancelar" id="btncan">
  </center>

</form>
<?php
if(isset($_POST["submit"])){

  $sql = "UPDATE `fornecedores` SET rg='".$_POST['rg']."',nome='".$_POST['nome']."',cpf='".$_POST['cpf']."',apelido='".$_POST['apelido']."',cep='".$_POST['cep']."',endereco='".$_POST['endereco']."',numero='".$_POST['numero']."',bairro='".$_POST['bairro']."',cidade='".$_POST['cidade']."',uf='".$_POST['uf']."',complemento='".$_POST['complemento']."',telefone='".$_POST['telefone']."',celular='".$_POST['celular']."',email='".$_POST['email']."',obs='".$_POST['obs']."' WHERE id='".$_POST['id']."'";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Atualizado com sucesso');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  echo "<script type= 'text/javascript'>location.href='lista_for.php';</script>";
  
  $con->close();
}

?>

