Selecione apenas as tabelas que deseja ver<br /><p>
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

$sql = "select * from $nome_tabela name";
$result = mysql_query($sql) or die(mysql_error());


for ($i = 0; $i < mysql_num_fields($result); ++$i) {

	$table = mysql_field_name($result,$i);
	echo "<form action='acao2.php' method='POST'>";
	echo "<input name='check[]' type='checkbox' value='$table' />".$table;
	echo '<br />';

}
	echo "<input name='nome_banco' value='$nome_banco' type='hidden' />";
	echo "<input name='nome_tabela' value='$nome_tabela' type='hidden' />";	
	echo "<input value='enviar' type='submit' />";
	echo "</form>";

?>


