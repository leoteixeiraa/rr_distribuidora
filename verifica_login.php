<?php
    
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
  $nivel_necessario = 2;
    
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['usuario']) and ($_SESSION['nivel'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: http://177.85.98.125/~rrdistri/index.php"); exit;
  }
    
?>