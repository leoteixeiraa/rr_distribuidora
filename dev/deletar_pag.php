<?php
include 'config.php';

if (isset($_POST['id'])){
     $del = "DELETE FROM pagamentos WHERE id=".$_POST['id'];
     $delgo = mysqli_query($con,$del) or die('Erro ao deletar');
     echo "deletado".$_POST['id'];
}