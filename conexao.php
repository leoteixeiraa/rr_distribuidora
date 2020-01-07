<?php
define('HOST', 'localhost');
define('USUARIO', 'rrdistri_usersis');
define('SENHA', 'GX1k^hHmZsDK');
define('DB', 'rrdistri_sisc');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');