<?php
define('HOST', 'localhost');
define('USUARIO', 'rrdistri_userlog');
define('SENHA', ';o9gwu*I+XOq');
define('DB', 'rrdistri_sislog');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');