<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: http://177.85.98.125/~rrdistri/index.php');
	exit();
}
?>