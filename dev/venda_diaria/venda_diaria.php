<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exemplo MySQL</title>
<meta name="description" content="example-aggregate-functions-and-grouping-sum-with-group-by- php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Produtos somados referente a valorização:</h2>
<table class='table table-bordered'>
<tr>
<th>Tipo Produto:</th><th>Valorização:</th>
</tr>
<?php
$hostname="localhost";
$username="usuario_db";
$password="senha_db";
$db = "database";
$db﻿h = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT `tipo`﻿, sum(val_sc) valor 
FROM pagamentos 
GROUP BY tipo') as $row) {
echo "<tr>"; 
echo "<td>" . $row['tipo'] . "</td>";
echo "<td>" . $row['SUM(val_sc)'] . "</td>";
echo "</tr>"; 
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>