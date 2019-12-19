<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$especificacao = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$especificacao = "SELECT * FROM produtos WHERE especificacao LIKE '%$especificacao%'";
	$resultado_cursos = mysqli_query($conn, $especificacao);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum produto encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){
			echo "<li>".$rows['id']." - ".$rows['especificacao']."</li>";
		}
	}
?>