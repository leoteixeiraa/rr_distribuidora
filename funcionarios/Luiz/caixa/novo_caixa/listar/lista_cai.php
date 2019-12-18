<?php

include 'config.php';
include 'topo.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<form   action="" method="POST" >
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Listar Caixa</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Nº</th>
								<th>Data do Caixa</th>
								<th>Funcionário</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php while($row = $cai->fetch_assoc()) { ?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['dia']; echo "/"; echo $row['mes']; echo "/"; echo $row['ano']; ?></td>
									<td><?php echo $row['funcionario']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">Visualizar</button>
										<a href='proc_apagar_usuario.php?id=<?php echo $row['id']; ?>'> <button type="button" class="btn btn-xs btn-danger">Apagar</button>
									</td>
								</tr>

									<!-- Inicio Modal -->
									<div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title text-center" id="myModalLabel"><?php echo "Data do Caixa: "; echo $row['dia']; echo "/"; echo $row['mes']; echo "/"; echo $row['ano']; ?></h4>
									      </div>
									      <div class="modal-body">

												<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Caixa Nº:</strong> <?php echo $row['id']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Vendas do dia:</strong> <?php echo $row['vendas_dia'];?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Saldo Anterior: </strong><?php echo $row['saldo_anterior']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Total de Entrada</strong>: <?php echo $row['total_entrada'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Diferença Entrada e Saída:</strong> <?php echo $row['entrada_saida']; ?></span></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Total Saída: </strong><?php echo $row['total_saida'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Saldo Promissória: </strong><?php echo $row['saldo_promissoria']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Saldo Promissória 2: </strong><?php echo $row['promissoria_soma']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Soma Promissória: </strong><?php echo $row['soma'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Falta ou Sobra: </strong><?php echo $row['falta_sobra']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Cheque Devolvido 1: </strong><?php echo $row['cheque_devolvido1'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Cheque Devolvido 2:</strong> <?php echo $row['cheque_devolvido2']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Promissória do Dia: </strong><?php echo $row['promissoria_dia'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Promissória a Cobrar: </strong><?php echo $row['promissoria_cobrar']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Almoço: </strong><?php echo $row['almoco'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Combustível: </strong><?php echo $row['combustivel']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Hotel: </strong><?php echo $row['hotel'] ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Depósito: </strong><?php echo $row['deposito']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Despesa5: </strong><?php echo $row['despesa5']; ?>.</span></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Despesa6:</strong> <?php echo $row['despesa6']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Despesa7:<span style="color: #FFFFFF">:</span></strong><?php echo $row['despesa7']; ?></span></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Despesa8: </strong><?php echo $row['despesa8']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Despesa9: <span style="color: #FFFFFF"></span></strong><span style="color: #FFFFFF"><?php echo $row['despesa9']; ?></span></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Cheque: </strong><?php echo $row['cheque']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Dinheiro: </strong><?php echo $row['dinheiro']; ?></span></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Saída3: </strong><?php echo $row['saida3']; ?></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Saída4: </strong><?php echo $row['saida4']; ?></span></p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Saída5: </strong><?php echo $row['saida5']; ?></p>
			<p>&nbsp;</p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Descrição de Despesas: </strong></p>
			<p><?php echo $row['espc_despesa']; ?></span></p>
			<p>&nbsp;</p>
			<p><strong style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 15px;">Descrição de Saídas:</strong></p>
			<p><?php echo $row['espc_saidas']; ?></span></p>
									      
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									      </div>
									    </div>
									  </div>
									</div>
									<!-- Fim Modal -->

							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/personalizado.js"></script>
  </body>
</html>