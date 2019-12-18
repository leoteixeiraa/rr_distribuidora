<?php
/*
@utor-Leonardo Musashi Miyamoto

th3ultimat3@hotmail.com

http://harukanata.no-ip.org
*/
include('config/classe.php');


$nome_banco  = $_POST['nome_banco'];
$nome_tabela = $_POST['nome_tabela'];

$banco -> conexao($nome_banco);
echo "<input name='nome' value='$nome_banco' type='hidden' />";
echo "<input name='nome' value='$nome_tabela' type='hidden' />";

$check = $_POST['check'];
$novo = array();
	for($i = 0; $i < count($check); $i++) {
    	$novo[$i] = $check[$i];	
			
    }

	$cont = count($novo);
	
	for($i = 0; $i < $cont; $i++) {
		
		$sql = "select * from $nome_tabela $novo[$cont]";
		$result = mysql_query($sql) or die(mysql_error());
		
		
		while($r = mysql_fetch_assoc($result)){		
				
				
					
						echo '<div>'.$r[$novo[$i]].'</div>';
				
				
					//echo '<div>'.$r[$novo[$i]].'</div>';
						
					
		}
		
			echo '------------------------------------------------------------------------------';
					
    }

		




?>