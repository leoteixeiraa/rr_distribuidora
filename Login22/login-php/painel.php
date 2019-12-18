<?php
session_start();
include('verifica_login.php');
?>
<?php header("Location: http://177.85.98.125/~rrdistri/carregar/".$_SESSION['usuario']);?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>

<?php
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://site.com.br>";
?>