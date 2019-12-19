<?php

//Configuração BD
$host = "localhost";
$user = "rrdistri_sistest";
$pass = "GGl-0Y;gnU#r";
$d_b = "rrdistri_testi";

//////////////////////////////////////
//Não altere a partir daqui!
/////////////////////////////////////
//Estilo orientado a objetos
$con = new mysqli($host, $user, $pass, $d_b);

$res = mysqli_query($con,"SELECT * FROM produtos");
$pag = mysqli_query($con,"SELECT * FROM pagamentos");

?>
