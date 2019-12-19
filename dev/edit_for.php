<?php

include 'config.php';
include 'topo.php';

if (isset($_GET['id'])){
     $upd = mysqli_query($con,"SELECT * FROM produtos WHERE id=".$_GET['id']);     
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</head>

<body>
<script>$(function() {
  $('#Preco').maskMoney({ decimal: '.', thousands: '', precision: 2 });
})</script>


<body>
<form   action="" method="POST" >
  <center>
    <font face="arial" size="5" color="black">
      <B>Cadastro de Produto</B>
    </font>
  </center>

<?php
    
           while($row = mysqli_fetch_assoc($upd)){
                echo '
  <div class="col-md-12">
      <div class="col-md-6">
        <input type="hidden" name="id" value="'.$row['id'].'">
      </div>

      <div class="col-md-12">
       <div class="col-md-6" style="padding-right:0px;">
        <label id="text" for="tipo">Tipo do Produto : </label><br>
        <select id="text1" class="form-control" name="tipo" >
            <option></option>
              <option value="'.$row['tipo'].'" selected>'.$row['tipo'].'</option>
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
        <label  id="text1">Especificação do Produto:</label>
        <input type="text" name="especificacao" id="Preco" class="txt" maxlength="50" value="'.$row['especificacao'].'">
    </div>
  </div>

    <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Custo:</label>
        <input type="text" name="custo" id="Preco" class="txt" maxlength="50" value="'.$row['custo'].'">
      </div>
      </div>
 
  <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Preço SC:</label>
        <input type="text" name="preco_sc" id="Preco" class="txt" maxlength="50" value="'.$row['preco_sc'].'">
      </div>
      </div>

       <div class="col-md-12">
      <div class="col-md-6">
        <label id="text1">Preço PR:</label>
        <input type="text" name="preco_pr" class="txt" id="Preco" maxlength="30" value="'.$row['preco_pr'].'"><br>
      </div>
  </div>    

</div>

   
  </div>
</div>


';
       }
          ?>
<br>
  <center>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="submit" value="Atualizar" id="btncad">
        <input type="submit" name="deletar" value="Apagar" id="btncan">
    </p>
  </center>

</form>
<?php
if(isset($_POST["submit"])){

  $sql = "UPDATE `produtos` SET especificacao='".$_POST['especificacao']."',custo='".$_POST['custo']."',preco_sc='".$_POST['preco_sc']."',preco_pr='".$_POST['preco_pr']."',tipo='".$_POST['tipo']."' WHERE id='".$_POST['id']."'";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Atualizado com sucesso');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  echo "<script type= 'text/javascript'>location.href='lista_for.php';</script>";
  
  $con->close();
}

?>

<?php

if (isset($_POST['deletar'])){
     $del = "DELETE FROM produtos WHERE id=".$_POST['id'];
     $delgo = mysqli_query($con,$del) or die('Erro ao deletar');
 
 if ($con->query($del) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Deletado com sucesso');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  echo "<script type= 'text/javascript'>location.href='lista_for.php';</script>";
  
  $con->close();
}

?>



