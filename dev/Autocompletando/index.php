<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Completar proximos campos</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	</head>
	<body>
		<script type='text/javascript'>
			$(document).ready(function(){
				$("input[name='id']").blur(function(){
					var $tipo = $("input[name='tipo']");
					var $especificacao = $("input[name='especificacao']");
					var $preco_sc = $("input[name='preco_sc']");
					$.getJSON('function.php',{ 
						id: $( this ).val() 
					},function( json ){
						$tipo.val( json.tipo );
						$especificacao.val( json.especificacao );
						$preco_sc.val( json.preco_sc );
					});
				});
			});
		</script>
		<form method="POST" action="">
		  <label>Digite o ID do Produto</label>
			<input type="text" class="form-control" name="id"><br><br>

			<label>Categoria</label>
			<input type="text" class="form-control" name="tipo"><br><br>
			
			<label>Especificação</label>
			<input type="text" class="form-control" name="especificacao"><br><br>
			
			<label>Preço SC</label>
			<input type="text" class="form-control" name="preco_sc"><br><br>
		</form>
	</body>
</html>