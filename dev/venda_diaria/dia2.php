<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>

<body>

<p>

<?php

$db = mysql_connect("localhost", "rrdistri_usersis", "GX1k^hHmZsDK");

mysql_select_db("pagamentos",$db);

$resultado = mysql_query("select `tipo`﻿, sum(val_sc) valor from pagamentos 
group by tipo",$db);


if ($linha = mysql_fetch_array($resultado)) {

echo "<table border=1>\n";

while ($val_sc = $linha["val_sc"]);

echo "<tr><td>Name</td><td>Posição</td></tr>\n";

do {

printf("<tr><td>%s %s</td><td>%s</tr>\n", $linha["val_sc"], $linha["sobrenome"], $linha["endereco"]);

} while ($linha = mysql_fetch_array($resultado));

echo "</table>\n";

} else {

echo "Nenhum registro encontrado!";

}

?>

</p>

<form id=form1" name="form1" method="post" action="">

<label>nome

<input type="text" name="nome" id="nome" value="<?php echo $linha["nome];?>"/>

</label>

<p>

<label>sobrenome

<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $linha["sobrenome"];?>"/>

</label>

</p>

<p>

<label>endereco

<input type=text" name="endereco" id="endereco" value="<?php echo $linha["endereco];?>"/>

</label>

</p>

</form>

<p>&nbsp;</p>

</body>

</html>