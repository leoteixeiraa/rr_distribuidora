<?php
include 'topo1.php';
include 'config.php';
include 'conexao.php';
if( $_SERVER['REQUEST_METHOD']=='POST' ) {

    $hash = md5( implode( $_POST ) );

    if( isset( $_SESSION['hash'] ) && $_SESSION['hash'] == $hash ) {

        // Refresh! Não faz nada ou re-exibe o formulário preenchido

    } else {

        $_SESSION['hash']  = $request;

        // Submissão legítima! Insere ;)
    }
}
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <body>
    <script type='text/javascript'>
      $(document).ready(function(){
        $("input[name='id']").blur(function(){
          var $especificacao = $("input[name='especificacao']");
          $.getJSON('function.php',{ 
            id: $( this ).val() 
          },function( json ){
            $especificacao.val( json.especificacao );
          });
        });
      });
    </script>

        <script type='text/javascript'>
      $(document).ready(function(){
        $("input[name='id']").blur(function(){
          var $carga = $("input[name='carga']");
          $.getJSON('function2.php',{ 
            id: $( this ).val() 
          },function( json ){
            $carga.val( json.carga );
          });
        });
      });
    </script>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <form   action="" method="POST" >

<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>RECARGA EMERSON</title>
<link href="general.css" rel="stylesheet" type="text/css">
<link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="411" height="75" border="0" align="center">
  <tbody>
    <tr>
      <td width="459" align="center" valign="middle" style="font-weight: 400; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size: 45px;"><strong>Carga Janderson</strong></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

  <form   action="" method="POST" >     
<table width="166" border="0" align="center">
  <tbody>
    <tr>
      <td width="156"><p>
        <label for="textfield">Digite o ID do Produto:<br>
        </label>
        <input name="id" type="text" id="id" size="45" required>
      </p>
      <p>Produto:
        <input name="especificacao" type="text" id="especificacao" size="45" readonly required>
      </p>
      <p>Em Carga:</p>
      <p>
      <input name="carga" type="text" id="carga" size="15" required>
      </p>
      <p>
        <input type="submit" name="submit" class="btn-success accordion" id="button" value="Atualizar">
      </p></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<body>
<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td><center>
        <center>
          <p>
            <!doctype html>
          </p>
<div class="container">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID PRODUTO</th>
                  <th>PRODUTO</th>
                  <th>EM CARGA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
			include("DBConfig.php");
			$result = mysql_query("SELECT id, especificacao, carga FROM carga_janderson INNER JOIN produtos using (id)");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo"<td>".$test['id']."</td>";
				echo"<td>".$test['especificacao']."</td>";
				echo"<td>".$test['carga']."</td>";			
				echo "</tr>";
			}
			mysql_close($conn);
			?>
              </table>
          </div>
        </center>
      </center></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
</form>
</head>
</html>
<?php

if(isset($_POST["submit"])){
    $sql = "REPLACE INTO carga_janderson (id, carga) VALUES ('".$_POST["id"]."','".$_POST["carga"]."')";
  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Carga Atualizada !');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}

