<?php

ob_start(); // inicia o buffer de memória
include 'luiz.php';
include 'paulo.php';
include 'emerson.php';
include 'gustavo.php';
include 'janderson.php';
include 'lucas.php';
$conteudo = ob_get_contents(); // guarda o conteúdo do arquivo na variável (parseado normal).
ob_end_clean(); // limpa a memória.

?>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'rrdistri_usersis'; // Username
$db_pass = 'GX1k^hHmZsDK'; // Password
$db_name = 'rrdistri_sisc'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT DISTINCT(especificacao), preco_sc, preco_pr, custo, 
SUM(CASE WHEN funcionario = 'Luiz Henrique' THEN venda_sc END) venda_sc_luiz,
SUM(CASE WHEN funcionario = 'Janderson' THEN venda_sc END) venda_sc_janderson,
SUM(CASE WHEN funcionario = 'Janderson' THEN venda_pr END) venda_pr_janderson,
SUM(CASE WHEN funcionario = 'Lucas' THEN venda_sc END) venda_sc_lucas,
SUM(CASE WHEN funcionario = 'Emerson' THEN venda_sc END) venda_sc_emerson,
SUM(CASE WHEN funcionario = 'Gustavo' THEN venda_sc END) venda_sc_gustavo,
SUM(CASE WHEN funcionario = 'Gustavo' THEN venda_pr END) venda_pr_gustavo,
SUM(CASE WHEN funcionario = 'Paulo' THEN venda_sc END) venda_sc_paulo
	FROM pagamentos where (dia >='01' and dia <='31') and mes=('01') and ano=('2019') GROUP BY especificacao";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>JANEIRO</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
	transition: all .5s;
	font-size: 18px;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Fechamento Mensal</h1>
	<table align="center" class="data-table">
	</table>
	<table width="200" border="0" align="center">
	  <tbody>
	    <tr>
	      <td align="center" valign="middle"><span class="title" style="font-size: 16px">Mês de Janeiro 2019</span></td>
        </tr>
      </tbody>
</table>
	<table align="center" class="data-table">
	  <caption class="title">&nbsp;</caption>
	  <thead>
	    <tr>
	      <th>Nº</th>
	      <th>DESCRICAÇÃO</th>
	      <th>PREÇO SC</th>
	      <th>PREÇO PR</th>
	      <th>CUSTO</th>
	      <th>MARGEM SC</th>
	      <th>MARGEM PR</th>
	      <th>DIFERENÇA SC</th>
	      <th>DIFERENÇA PR</th>
	      <th>VENDA LUIZ SC</th>
	      <th>LUCRO LUIZ SC</th>
	      <th>VENDA LUCAS SC</th>
	      <th>LUCRO LUCAS SC</th>
	      <th>VENDA EMERSON SC</th>
	      <th>LUCRO EMERSON SC</th>
	      <th>VENDA JANDERSON SC</th>
	      <th>VENDA JANDERSON PR</th>
	      <th>LUCRO JANDERSON SC</th>
	      <th>LUCRO JANDERSON PR</th>
	      <th>VENDA GUSTAVO SC</th>
	      <th>LUCRO GUSTAVO SC</th>
	      <th>VENDA GUSTAVO PR</th>
	      <th>LUCRO GUSTAVO PR</th>
	       <th>VENDA PAULO SC</th>
	      <th>LUCRO PAULO SC</th>
	      <th>TOTAL VENDA MÊS</th>
        </tr>
      </thead>
	  <tbody>
	    <?php
		$no 	= 1;
		$total_custo 	= 0;
		$margem_sc = 0;
		$margem_pr = 0;
		$diferanca_sc = 0;
		$diferanca_pr = 0;
		$lucro_luiz_sc = 0;
		$lucro_lucas_sc = 0;
		$lucro_emerson_sc = 0;
		$lucro_janderson_sc = 0;
		$lucro_janderson_pr = 0;
		$lucro_gustavo_sc = 0;
		$lucro_gustavo_pr = 0;
		$lucro_paulo_sc = 0;
		$total_venda_mes = 0;
		//TOTAL LUCRO
		$total_lucro_luiz_sc = 0;
		$total_lucro_lucas_sc = 0;
		$total_lucro_emerson_sc = 0;
		$total_lucro_janderson_sc = 0;
		$total_lucro_janderson_pr = 0;
		$total_lucro_gustavo_sc = 0;
		$total_lucro_gustavo_pr = 0;
		$total_lucro_paulo_sc = 0;
		while ($row = mysqli_fetch_array($query))
		{

			//MARGEM SC
			$margem_sc0 = ($row['preco_sc'])/($row['custo']) *1.0;
			$margem_sc1= substr(number_format($margem_sc0, 3), 2);
			$margem_sc = substr_replace($margem_sc1, ',', -1, 0) . "%<br />\n";
			//MARGEM PR
			$margem_pr0 = ($row['preco_pr'])/($row['custo']) *1.0;
			$margem_pr1= substr(number_format($margem_pr0, 3), 2);
			$margem_pr = substr_replace($margem_pr1, ',', -1, 0) . "%<br />\n";

			$total_custo += $row['custo'];
			$amount  = $row['preco_sc'] == 0 ? '' : number_format($row['preco_sc']);

			//diferenca sc
			$diferenca_sc0 = $row['preco_sc'] - $row['custo'];
			$diferenca_sc = number_format($diferenca_sc0, 2, ',','.');

			//diferenca pr
			$diferenca_pr0 = $row['preco_pr'] - $row['custo'];
			$diferenca_pr = number_format($diferenca_pr0, 2, ',','.');

			//LUCRO LUIZ
			$lucro_luiz_sc0 = $row['venda_sc_luiz'] * $diferenca_sc0;
			$lucro_luiz_sc = number_format($lucro_luiz_sc0, 2, ',','.');
			//LUCRO JANDERSON SC
			$lucro_janderson_sc0 = $row['venda_sc_janderson'] * $diferenca_sc0;
			$lucro_janderson_sc = number_format($lucro_janderson_sc0, 2, ',','.');
			//LUCRO JANDERSON PR
			$lucro_janderson_pr0 = $row['venda_pr_janderson'] * $diferenca_pr0;
			$lucro_janderson_pr = number_format($lucro_janderson_pr0, 2, ',','.');
			//LUCRO LUCAS SC
			$lucro_lucas_sc0 = $row['venda_sc_lucas'] * $diferenca_sc0;
			$lucro_lucas_sc = number_format($lucro_lucas_sc0, 2, ',','.');
			//LUCRO EMERSON SC
			$lucro_emerson_sc0 = $row['venda_sc_emerson'] * $diferenca_sc0;
			$lucro_emerson_sc = number_format($lucro_emerson_sc0, 2, ',','.');
			//LUCRO GUSTAVO SC
			$lucro_gustavo_sc0 = $row['venda_sc_gustavo'] * $diferenca_sc0;
			$lucro_gustavo_sc = number_format($lucro_gustavo_sc0, 2, ',','.');
			//LUCRO GUSTAVO PR
			$lucro_gustavo_pr0 = $row['venda_pr_gustavo'] * $diferenca_pr0;
			$lucro_gustavo_pr = number_format($lucro_gustavo_pr0, 2, ',','.');
			//LUCRO PAULO SC
			$lucro_paulo_sc0 = $row['venda_sc_paulo'] * $diferenca_sc0;
			$lucro_paulo_sc = number_format($lucro_paulo_sc0, 2, ',','.');
			//TOTAL VENDA MES
			$total_venda_mes0 = $row['venda_sc_luiz'] + $row['venda_sc_lucas'] + $row['venda_sc_emerson'] + $row['venda_sc_janderson'] + $row['venda_pr_janderson'] + $row['venda_sc_gustavo'] + $row['venda_pr_gustavo'] + $row['venda_sc_paulo'];
			$total_venda_mes = number_format($total_venda_mes0, 2, ',','.');

			//NUMERO FORMATO
			$row['venda_sc_luiz'] = number_format($row['venda_sc_luiz'], 2, ',','.');
			$row['venda_sc_janderson'] = number_format($row['venda_sc_janderson'], 2, ',','.');
			$row['venda_pr_janderson'] = number_format($row['venda_pr_janderson'], 2, ',','.');
			$row['venda_sc_lucas'] = number_format($row['venda_sc_lucas'], 2, ',','.');
			$row['venda_sc_emerson'] = number_format($row['venda_sc_emerson'], 2, ',','.');
			$row['venda_sc_gustavo'] = number_format($row['venda_sc_gustavo'], 2, ',','.');
			$row['venda_pr_gustavo'] = number_format($row['venda_pr_gustavo'], 2, ',','.');
			$row['venda_sc_paulo'] = number_format($row['venda_sc_paulo'], 2, ',','.');
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['especificacao'].'</td>
					<td>R$ '.$row['preco_sc'].'</td>
					<td>R$ '.$row['preco_pr'].'</td>
					<td>R$ '.$row['custo'].'</td>		
					<td>'.$margem_sc.'</td>
					<td>'.$margem_pr.'</td>
					<td>R$ '.$diferenca_sc.'</td>
					<td>R$ '.$diferenca_pr.'</td>
					<td>'.$row['venda_sc_luiz'].'</td>
					<td>R$ '.$lucro_luiz_sc.'</td>
					<td>'.$row['venda_sc_lucas'].'</td>
					<td>R$ '.$lucro_lucas_sc.'</td>
					<td>'.$row['venda_sc_emerson'].'</td>
					<td>R$ '.$lucro_emerson_sc.'</td>
					<td>'.$row['venda_sc_janderson'].'</td>
					<td>'.$row['venda_pr_janderson'].'</td>
					<td>R$ '.$lucro_janderson_sc.'</td>
					<td>R$ '.$lucro_janderson_pr.'</td>
					<td>'.$row['venda_pr_gustavo'].'</td>
					<td>'.$row['venda_pr_gustavo'].'</td>
					<td>R$ '.$lucro_gustavo_sc.'</td>
					<td>R$ '.$lucro_gustavo_pr.'</td>
					<td>'.$row['venda_sc_paulo'].'</td>
					<td>R$ '.$lucro_paulo_sc.'</td>
					<td>'.$total_venda_mes.'</td>
				</tr>';
			$total_custo += $row['amount'];
			//valor TOTAL DO LUCRO FUNCIONARIO ESTADO
			$total_lucro_luiz_sc0 += $lucro_luiz_sc0;
			$total_lucro_luiz_sc = number_format($total_lucro_luiz_sc0, 2, ',','.');
			$total_lucro_lucas_sc0 += $lucro_lucas_sc0;
			$total_lucro_lucas_sc = number_format($total_lucro_lucas_sc0, 2, ',','.');
			$total_lucro_emerson_sc0 += $lucro_emerson_sc;
			$total_lucro_emerson = number_format($total_lucro_emerson_sc0, 2, ',','.');
			$total_lucro_janderson_sc0 += $lucro_janderson_sc;
			$total_lucro_janderson_sc = number_format($total_lucro_janderson_sc0, 2, ',','.');
			$total_lucro_janderson_pr0 += $lucro_janderson_pr;
			$total_lucro_janderson_pr = number_format($total_lucro_janderson_pr0, 2, ',','.');
			//TOTAL LUCRO BRUTO JANDERSON SC + PR
			$total_lucro_janderson_sc_pr0 = $total_lucro_janderson_sc0 + $total_lucro_janderson_pr0;
			$total_lucro_janderson_sc_pr = number_format($total_lucro_janderson_sc_pr0, 2, ',','.');


			$total_lucro_gustavo_sc0 += $lucro_gustavo_sc;
			$total_lucro_gustavo_sc = number_format($total_lucro_gustavo_sc0, 2, ',','.');
			$total_lucro_gustavo_pr0 += $lucro_gustavo_pr;
			$total_lucro_gustavo_pr = number_format($total_lucro_gustavo_pr0, 2, ',','.');
			$total_lucro_paulo_sc0 += $lucro_paulo_sc;
			$total_lucro_paulo_sc = number_format($total_lucro_paulo_sc0, 2, ',','.');
			//TOTAL LUCRO BRUTO GUSTAVO SC + PR
			$total_lucro_gustavo_sc_pr0 = $total_lucro_gustavo_sc0 + $total_lucro_gustavo_pr0;
			$total_lucro_gustavo_sc_pr = number_format($total_lucro_gustavo_sc_pr0, 2, ',','.');
			$no++;

			//ULTIMA TABELA PLANILHA

			$venda_luiz_sc_total0 += $row['venda_sc_luiz'];
			$venda_luiz_sc_total = number_format($venda_luiz_sc_total0, 2, ',','.');
			//lucro liquido luiz
			$lucro_liquido_luiz0 = $total_lucro_luiz_sc0 - $total_despesa_luiz0;
			$lucro_liquido_luiz = number_format($lucro_liquido_luiz0, 2, ',','.');
			//lucro janderson liquido
			$lucro_liquido_janderson0 = $total_lucro_janderson_sc_pr0 - $total_despesa_janderson0;
			$lucro_liquido_janderson = number_format($lucro_liquido_janderson0, 2, ',','.');
			//TOTAL VENDA EMERSON
			$venda_emerson_sc_total0 += $row['venda_sc_emerson'];
			$venda_emerson_sc_total = number_format($venda_emerson_sc_total0, 2, ',','.');
			//TOTAL EMERSON LIQUIDO
			$lucro_liquido_emerson0 = $total_lucro_emerson_sc0 - $total_despesa_emerson0;
			$lucro_liquido_emerson = number_format($lucro_liquido_emerson0, 2, ',','.');

			//EFETIVIDADE VENDA EMERSON
			$eft_venda_emerson0 = ($lucro_liquido_emerson0)/($venda_emerson_sc_total0);
			$eft_venda_emerson1= substr(number_format($eft_venda_emerson0, 3), 2);
			$eft_venda_emerson = substr_replace($eft_venda_emerson1, ',', -1, 0) . "%<br />\n";

			//TOTAL VENDA LUCAS
			$venda_lucas_sc_total0 += $row['venda_sc_lucas'];
			$venda_sc_lucas_total = number_format($venda_lucas_sc_total0, 2, ',','.');
			//LUCRO LIQUIDO LUCAS
			$lucro_liquido_lucas0 = $total_lucro_lucas_sc0 - $total_despesa_lucas0;
			$lucro_liquido_lucas = number_format($lucro_liquido_lucas0, 2, ',','.');
			//EFETIVIDADE VENDA LUCAS
			$eft_venda_lucas0 = ($lucro_liquido_lucas0)/($venda_lucas_sc_total0);
			$eft_venda_lucas1= substr(number_format($eft_venda_lucas0, 3), 2);
			$eft_venda_lucas = substr_replace($eft_venda_lucas1, ',', -1, 0) . "%<br />\n";

			//VENDA SC PAULO
			$venda_paulo_sc_total0 += $row['venda_sc_paulo'];
			$venda_paulo_sc_total = number_format($venda_paulo_sc_total0, 2, ',','.');
			//lucro liquido PAULO
			$lucro_liquido_paulo0 = $total_lucro_paulo_sc0 - $total_despesa_paulo0;
			$lucro_liquido_paulo = number_format($lucro_liquido_paulo0, 2, ',','.');
			//EFETIVIDADE VENDA PAULO
			$eft_venda_paulo0 = ($lucro_liquido_paulo0)/($venda_paulo_sc_total0);
			$eft_venda_paulo1= substr(number_format($eft_venda_paulo0, 3), 2);
			$eft_venda_paulo = substr_replace($eft_venda_paulo1, ',', -1, 0) . "%<br />\n";



			//EFETIVIDADE VENDA LUIZ
			$eft_venda_luiz0 = ($lucro_liquido_luiz0)/($venda_luiz_sc_total0);
			$eft_venda_luiz1= substr(number_format($eft_venda_luiz0, 3), 2);
			$eft_venda_luiz = substr_replace($eft_venda_luiz1, ',', -1, 0) . "%<br />\n";
			//EFETIVIDADE VENDA JANDERSON
			$eft_venda_janderson0 = ($lucro_liquido_janderson0)/($venda_janderson_sc_pr0);
			$eft_venda_janderson1= substr(number_format($eft_venda_janderson0, 3), 2);
			$eft_venda_janderson = substr_replace($eft_venda_janderson1, ',', -1, 0) . "%<br />\n";

			//VENDA SC + PR JANDERSON
			$venda_janderson_sc_pr0 += $row['venda_sc_janderson']; + $row['venda_pr_janderson'];
			$venda_janderson_sc_pr = number_format($venda_janderson_sc_pr0, 2, ',','.');
			//VENDA SC + PR GUSTAVO
			$venda_gustavo_sc_pr0 += $row['venda_sc_gustavo']; + $row['venda_pr_gustavo'];
			$venda_gustavo_sc_pr = number_format($venda_gustavo_sc_pr0, 2, ',','.');
			//TOTAL LUCRO GUSTAVO LIQUIDO
			$lucro_liquido_gustavo0 = $total_lucro_gustavo_sc_pr0 - $total_despesa_gustavo0;
			$lucro_liquido_gustavo = number_format($lucro_liquido_gustavo0, 2, ',','.');
			//EFETIVIDADE VENDA GUSTAVO
			$eft_venda_gustavo0 = ($lucro_liquido_gustavo0)/($venda_gustavo_sc_pr0);
			$eft_venda_gustavo1= substr(number_format($eft_venda_gustavo0, 3), 2);
			$eft_venda_gustavo = substr_replace($eft_venda_gustavo1, ',', -1, 0) . "%<br />\n";

			//TABELA TOTAL FINAL 
			//TOTAL DE VENDAS
			$vendas_total0 = 0;
			$vendas_total = 0;
			$lucro_bruto_total0 = 0;
			$lucro_bruto_total = 0;
			$lucro_liquido_total0 = 0;
			$lucro_liquido_total = 0;
			$resultado0 = 0;
			$resultado = 0;
			$despesas_total0 = 0;
			$despesas_total = 0;
 
			$vendas_total0 = $venda_luiz_sc_total0 + $venda_janderson_sc_pr0 + $venda_gustavo_sc_pr0 + $venda_emerson_sc_total0 + $venda_sc_lucas_total0 + $venda_sc_paulo_total0;
			$vendas_total = number_format($vendas_total0, 2, ',','.');
			$lucro_bruto_total0 = $total_lucro_luiz_sc0 + $total_lucro_janderson_sc_pr0 + $total_lucro_gustavo_sc_pr + $total_lucro_emerson + $total_lucro_lucas_sc0 + $total_lucro_paulo_sc0; 
			$lucro_bruto_total = number_format($lucro_bruto_total0, 2, ',','.');
			//DESPESAS TOTAL
			$despesas_total0 = $total_despesa_luiz0 + $total_despesa_janderson0 + $total_despesa_gustavo0 + $total_despesa_emerson0 + $total_despesa_lucas0 + $total_despesa_paulo0;
			$despesas_total1 = $despesas_total0;
			$despesas_total = number_format($despesas_total1, 2, ',','.');
			//LIQUIDO TOTAL
			$lucro_liquido_total0 = $lucro_liquido_luiz0 + $lucro_liquido_janderson0 + $lucro_liquido_gustavo0 + $lucro_liquido_emerson0 +$lucro_liquido_lucas0 + $lucro_liquido_paulo0;
			$lucro_liquido_total = number_format($lucro_liquido_total0, 2, ',','.');
			//EFETIVIDADE VENDAS TOTAL
			$eft_total0 = ($lucro_liquido_total0)/($vendas_total0);
			$eft_total1 = substr(number_format($eft_total0, 3), 2);
			$eft_total = substr_replace($eft_total1, ',', -1, 0) . "%<br />\n";
			//RESULTADO !!!
			$resultado0 = $lucro_bruto_total0 - $despesas_total0;
			$resultado = number_format($resultado0, 2, ',','.');
		}?>
      </tbody>
	  <tfoot>
	    <tr>
	      <th>TOTAL</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_luiz_sc; //lucro luiz?> </th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_lucas_sc; //lucro lucas?></th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_emerson; //lucro emerson?></th>
	      <th>&nbsp;</th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_janderson_sc; //lucro janderson?></th>
	      <th>R$<?php echo $total_lucro_janderson_pr; //lucro janderson?></th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_gustavo_sc; //lucro gustavo?></th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_gustavo_pr; //lucro gustavo?></th>
	      <th>&nbsp;</th>
	      <th>R$<?php echo $total_lucro_paulo_sc; //lucro paulo?></th>
	      <th>&nbsp;</th>
        </tr>
      </tfoot>
</table>
<table class="data-table">
	  <tfoot>
      </tfoot>
</table>
	<p>&nbsp;</p>
<p>&nbsp;</p>

    <table width="1012" height="431" border="1" align="center">
      <tbody>
        <tr>
          <td width="112" bgcolor="#508abb">&nbsp;</td>
          <td width="68" align="center" bgcolor="#508abb"><strong style="font-size: 24px">VENDAS</strong></td>
          <td width="68" align="center" bgcolor="#508abb"><strong style="font-size: 24px">LUCRO BRUTO</strong></td>
          <td width="68" align="center" bgcolor="#508abb"><strong style="font-size: 24px">DESPESAS</strong></td>
          <td width="68" align="center" bgcolor="#508abb"><strong style="font-size: 24px">LUCRO LÍQUIDO</strong></td>
          <td width="68" align="center" bgcolor="#508abb"><strong style="font-size: 24px">EFETIVIDADE VENDA</strong></td>
        </tr>
        <tr>
          <td width="112" height="72" bgcolor="#508abb"><strong style="font-size: 14px">CARRO 01 (LUIZ)</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $venda_luiz_sc_total; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_lucro_luiz_sc; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_despesa_luiz; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_luiz; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_venda_luiz; ?></td>
        </tr>
        <tr>
          <td width="112" height="72" bgcolor="#508abb"><strong style="font-size: 14px">CARRO 02 (JANDERSON)</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $venda_janderson_sc_pr; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_lucro_janderson_sc_pr; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_despesa_janderson; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_janderson; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_venda_janderson; ?></td>
        </tr>
        <tr>
          <td width="112" height="70" bgcolor="#508abb"><strong style="font-size: 14px">CARRO 03(GUSTAVO)</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $venda_gustavo_sc_pr; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_lucro_gustavo_sc_pr; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_despesa_gustavo; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_gustavo; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_venda_gustavo; ?></td>
        </tr>
        <tr>
          <td width="112" height="65" bgcolor="#508abb"><strong style="font-size: 14px">CARRO 04(EMERSON)</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $venda_emerson_sc_total; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_lucro_emerson; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_despesa_emerson; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_emerson; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_venda_emerson; ?></td>
        </tr>
        <tr>
          <td width="112" height="68" bgcolor="#508abb"><strong style="font-size: 14px">CARRO 05 (LUCAS)</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $venda_sc_lucas_total; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_lucro_lucas_sc; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_despesa_lucas; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_lucas; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_venda_lucas; ?></td>
        </tr>
        <tr>
          <td width="112" height="68" bgcolor="#508abb"><strong style="font-size: 14px">CARRO 06 (PAULO)</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $venda_sc_paulo_total; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_lucro_paulo_sc; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $total_despesa_paulo; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_paulo; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_venda_paulo; ?></td>
        </tr>
        <tr>
          <td height="68" align="center" bgcolor="#508abb"><strong>TOTAL</strong></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $vendas_total; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_bruto_total; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $despesas_total0; ?></td>
          <td bgcolor="#e5f5ff">R$ <?php echo $lucro_liquido_total; ?></td>
          <td bgcolor="#e5f5ff"><?php echo $eft_total; ?></td>
        </tr>
        <tr>
          <td height="68" align="center" bgcolor="#508abb"><strong>RESULTADO</strong></td>
          <td colspan="5" align="center" bgcolor="#e5f5ff">R$ <?php echo $resultado; ?></td>
        </tr>
      </tbody>
    </table>
    <p>&nbsp;</p>
    
</body>
</html>

