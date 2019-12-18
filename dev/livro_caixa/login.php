<?php
session_start();
set_time_limit(0);

$pagina_login = 1;

include 'config.php';
include 'functions.php';

if (isset($_GET['sair'])) {
    $_SESSION['logado'] = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title id='titulo'>Livro caixa <?php echo $lc_titulo ?></title>
        <meta name="LANGUAGE" content="Portuguese" />
        <meta name="AUDIENCE" content="all" />
        <meta name="RATING" content="GENERAL" />
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <script language="javascript" src="scripts.js"></script>
    </head>
    <body style="padding: 10px; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size: 15px;">


        <table cellpadding="1" cellspacing="10"  width="900" align="center" style="background-color:#033">

            <tr>
                <td colspan="11" style="background-color:#005B5B;">
                    <h2 style="color:#FFF; margin:5px">Livro Caixa - <?php echo $lc_titulo ?></h2>
                </td>
                <td colspan="2" align="right" style="background-color:#005B5B;">
                    <a style="color:#FFF" href="?mes=<?php echo date('m') ?>&ano=<?php echo date('Y') ?>">Hoje:<strong> <?php echo date('d') ?> de <?php echo mostraMes(date('m')) ?> de <?php echo date('Y') ?></strong></a>&nbsp; 
                </td>
            </tr>
        </table>
        <br />
        <br />
        <table cellpadding="1" cellspacing="10"  width="900" align="center" >

            <tr>
                <td colspan="11" align="center" >
                    Faca Login para entrar no sistema:
                    <br><br>
                            <form action="" method="post">

                                <p><span style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; font-size: 15px;"><strong>Login:</strong></span> 
                                  <input type='text' name='login'>
                                </p>
                                <p><br>
                                  <span style="font-size: 15px"><strong>Senha:</strong></span>
                                  <input name='senha' type='password'><br>
                                  <br>
                                  <input type='submit' name='OK' value='Entrar'>
                                </p>

                                                        </form>
                                                        <br>

                                                            </td>
                                                            </tr>
                                                            </table>

                                                            <table cellpadding="5" cellspacing="0" width="900" align="center">
                                                                <tr>
                                                                    <td align="right">
                                                                        <hr size="1" />
                                                                        <em>Livro Caixa - <strong><?php echo $lc_titulo ?></strong><a href=http://www.nivell.com.br> - NIVELL</a>. Versão 1.0 (11/06/13)</em>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            </body>
                                                            </html>
