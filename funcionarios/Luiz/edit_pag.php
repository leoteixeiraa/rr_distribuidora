<?php

include 'config.php';
include 'topo.php';

if (isset($_GET['id'])){
     $upd = mysqli_query($con,"SELECT * FROM produtos WHERE id=".$_GET['id']);     
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
      </div>

      <div class="col-md-6">      
        <label  id="text1">Especificação do Produto:</label>
        <input type="text" name="especificacao" class="txt" maxlength="50" value="'.$row['especificacao'].'">
    </div>
  </div>
  <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Preço SC:</label>
        <input type="text" name="preco_sc" class="txt" maxlength="50" value="'.$row['preco_sc'].'">
      </div>
      <div class="col-md-6">
        <label id="text1">Preço PR:</label>
        <input type="text" name="preco_pr" class="txt" maxlength="30" value="'.$row['preco_pr'].'"><br>
      </div>
  </div>    

</div>

    <div class="col-md-4" style="padding-right:0px;">
        <label id="text" for="tipo">Tipo do Produto : </label><br>
        <select id="text1" class="form-control" name="tipo" >
            <option></option>
              <option value="'.$row['tipo'].'" disabled selected>'.$row['tipo'].'</option>
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

  $sql = "UPDATE `produtos` SET especificacao='".$_POST['especificacao']."',preco_sc='".$_POST['preco_sc']."',preco_pr='".$_POST['preco_pr']."',tipo='".$_POST['tipo']."',obs='".$_POST['obs']."' WHERE id='".$_POST['id']."'";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Atualizado com sucesso');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  echo "<script type= 'text/javascript'>location.href='lista_for.php';</script>";
  
  $con->close();
}

?>

