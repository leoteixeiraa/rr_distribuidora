<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: http://177.85.98.125/~rrdistri/index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select usuario, nivel from usuario where nivel = '{$nivel}' and usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['nivel'] = $nivel;
	header('Location: painel.php');
	exit();

} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: http://177.85.98.125/~rrdistri/index.php');
	exit();
}