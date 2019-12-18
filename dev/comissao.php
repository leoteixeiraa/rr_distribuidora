<html>
<head>
<title>Javascript: Calcular Desconto</title>

<script type="text/javascript">
function calcValor(){
    // zerando total
    document.getElementById("total").value = '0';
 
    // valor líquido
    var VTOTALLIQUIDO = parseFloat(document.getElementById("valor1").value);
 
    // desconto em porcentagem
    var DESCONTO1 = parseFloat(document.getElementById("desconto1").value);
    if( isNaN ( DESCONTO1 ) ){
    	DESCONTO1 = 0;
    }
    var PDESCONTO = parseFloat( ( VTOTALLIQUIDO * DESCONTO1 ) / 100 );
 
    // desconto em valor
    var VDESCONTO = parseFloat(document.getElementById("desconto2").value);
    if( isNaN ( VDESCONTO ) ){
    	VDESCONTO = 0;
    }
 
    var TOTAL = parseFloat(VTOTALLIQUIDO) + parseFloat(PDESCONTO) + parseFloat(VDESCONTO);
 
    document.getElementById("total").value = 'R$ ' + TOTAL.toFixed(2);
}
</script>
 
<style type="text/css">
table tr td {
    padding: 5px;
}
table tr td.dir {
    padding-right: 15px;
    text-align: right;
    width: 120px;
}
</style>

</head>
<body>
<p>Calcular valor do desconto:</p>
<table cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td class="dir">campo 1:</td>
      <td><input type="text" name="valor1" id="valor1" value="550.25" /></td>
    </tr>
    <tr>	
      <td class="dir">desconto %:</td>
      <td><input type="text" name="desconto1" id="desconto1" onblur="calcValor()" /></td>
    </tr>
    <tr>
      <td class="dir">desconto R$:</td>
      <td><input type="text" name="desconto2" id="desconto2" onblur="calcValor()" /></td>
    </tr>
    <tr>
      <td class="dir">valor total:</td><td><input type="text" name="total" id="total" value="0.00" /></td>
    <tr>            
</table>
</body>
</html>