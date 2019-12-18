<?php
include_once("conexao.php");

function retorna($dia, $mes, $ano, $conn){
	$result_aluno = "SELECT tipo, SUM(val_sc)+SUM(val_pr) as vendas_total FROM pagamentos_luiz WHERE dia =('$dia') and mes('$mes') and ano=('$ano') GROUP by tipo LIMIT 10";
	$resultado_aluno = mysqli_query($conn, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
		$valores['vendas_total'] = $row_aluno['vendas_total'];
	}else{
		$valores['vendas_total'] = 'Produto não encontrado, verifique o ID';
	}
	return json_encode($valores);
}

if(isset($_GET['dia'], $_GET['mes'], $_GET['ano'])){
	echo retorna($_GET['dia'], $_GET['mes'], $_GET['ano'], $conn);
}
?>