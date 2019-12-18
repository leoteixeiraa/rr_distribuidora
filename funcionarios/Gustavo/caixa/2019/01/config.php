<?php
include('verifica_login.php');
session_start();
?>
<?php

//Configuração BD
$host = "localhost";
$user = "rrdistri_usersis";
$pass = "GX1k^hHmZsDK";
$d_b = "rrdistri_sisc";

//////////////////////////////////////
//Não altere a partir daqui!
/////////////////////////////////////
//Estilo orientado a objetos
$con = new mysqli($host, $user, $pass, $d_b);

$res = mysqli_query($con,"SELECT * FROM fornecedores");
$pag = mysqli_query($con,"SELECT * FROM pagamentos_gustavo");
$car = mysqli_query($con,"SELECT * FROM carga_gustavo");
$cai = mysqli_query($con,"SELECT * FROM caixa_gustavo");
?>
