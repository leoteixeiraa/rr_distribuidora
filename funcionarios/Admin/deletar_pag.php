<?php
session_start();
include_once("config.php");

$id = $_GET['id'];

if (isset($_GET['id'])){
     $del = "DELETE FROM pagamentos_luiz WHERE id=".$_GET['id'];
     $delgo = mysqli_query($con,$del);
     $linhas = mysql_affected_rows();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body>
		<?php 
			if(mysql_affected_rows() != 0 ){
				echo "
					<meta HTTP-EQUIV=REFRESH CONTENT = '0;URL= http://177.85.98.125/~rrdistri/funcionarios/Luiz/lista_pag.php'>
					<script type=\"text/javascript\">
					alert(\"venda apagado com sucesso.\");
					</script>
				";
			}else
			{
				echo "
					<meta HTTP-EQUIV=REFRESH CONTENT = '0;URL= http://177.85.98.125/~rrdistri/funcionarios/Luiz/lista_pag.php'>
					<script type=\"text/javascript\">
					alert(\"Venda APAGADO COM SUCESSO!\");
					</script>
				";
			}
			?>