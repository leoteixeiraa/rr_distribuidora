<?php
include('conexao.php');
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

$res = mysqli_query($con,"SELECT * FROM produtos");
$pag = mysqli_query($con,"SELECT * FROM pagamentos_paulo");
$car = mysqli_query($con,"SELECT * FROM carga_paulo");
$cai = mysqli_query($con,"SELECT * FROM caixa_paulo");
$sis = mysqli_query($sis,"SELECT * FROM sistema");
?>
