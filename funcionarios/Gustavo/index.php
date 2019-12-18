<?php
include 'config.php';
include 'topo.php';
?>

<body>

<table width="539" border="0" align="left">
  <tbody>
    <tr>
      <td width="533" align="center" style="font-size: 35px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><strong>Bem-Vindo, Gustavo Luiz!</strong></td>
    </tr>
  </tbody>
</table>
<?php
mysql_connect("localhost", "rrdistri_usersis", "GX1k^hHmZsDK") or die(mysql_error());
mysql_select_db("rrdistri_sisc") or die(mysql_error());
?>
<?php

  //SACOLAS
$id = 1;
$busca = mysql_query("SELECT * FROM sistema WHERE id='$id'");
$dado = mysql_fetch_array($busca);
 
 
$versao = $dado['versao'];
    ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="226" border="0" align="right">
  <tbody>
    <tr>
      <td width="220" style="font-size: 35px; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;"><em><strong>  Versão:</strong></em> <em><strong><?php echo $dado['versao']; ?></strong></em></td>
    </tr>
  </tbody>
</table>
