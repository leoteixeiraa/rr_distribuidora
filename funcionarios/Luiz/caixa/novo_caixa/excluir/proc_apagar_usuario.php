<?php
session_start();
include_once("config.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM caixa WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Caixa apagado com sucesso</p>";
		header("Location: http://177.85.98.125/~rrdistri/funcionarios/funcionario/lista_cai2.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: http://177.85.98.125/~rrdistri/funcionarios/funcionario/lista_cai2.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: http://177.85.98.125/~rrdistri/funcionarios/funcionario/lista_cai2.php");
}
