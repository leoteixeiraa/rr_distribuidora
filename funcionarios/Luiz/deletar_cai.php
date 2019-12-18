<?php

include 'config.php';



if (isset($_POST['id'])){

     $del = "DELETE FROM caixa_luiz WHERE id=".$_POST['id'];

     $delgo = mysqli_query($con,$del) or die('Erro ao deletar');



 if ($con->query($del) === TRUE) {

  echo "<script type= 'text/javascript'>alert('Deletado com sucesso');</script>";

  } else {

  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";

  }

  echo "<script type= 'text/javascript'>location.href='lista_cai.php';</script>";

  

  $con->close();

}

?>

