<?php
include_once("conexao.php");

function retorna($id, $conn){
	$result_aluno = "SELECT * FROM fornecedores WHERE id = '$id' LIMIT 1";
	$resultado_aluno = mysqli_query($conn, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
		$valores['tipo'] = $row_aluno['tipo'];
		$valores['especificacao'] = $row_aluno['especificacao'];
		$valores['preco_sc'] = $row_aluno['preco_sc'];
		$valores['preco_pr'] = $row_aluno['preco_pr'];
		$valores['custo'] = $row_aluno['custo'];
	}else{
		$valores['tipo2'] = 'Produto não encontrado, verifique o ID';
	}
	return json_encode($valores);
}

if(isset($_GET['id'])){
	echo retorna($_GET['id'], $conn);
}
?>