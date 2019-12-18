<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Calculadora dinâmica</title>

<link rel="stylesheet" type="text/css" href="pega-dados.css" />

</head>
 
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

<script>
$(function($){
 
    // No id #enviar assim que clicar executa a função

    $('.campo').blur(function(){
 
    /* veja que eu criei variáveis para guardar os itens
     * e só precisei usar a função val() para
     * retornar o valor dos campo para a várivel
     */

        var campo =   $('.campo');

        var numero1 = $('#numero1').val();
        var numero2 = $('#numero2').val();
	var conta = parseInt(numero1)+parseInt(numero2);	

if(numero2==""){

  $("#resultado").val(numero1);
 
}else if(numero1==""){

  $("#resultado").val(numero2);
 
}else{
       $("#resultado").val(conta);
}
    });
});
</script>

<div class="titulo">
<span>Calculadora Dinâmica</span>
</div><!-- /titulo-->
 
<form>
    <!-- Repare que coloquei um ID para cada input -->
    <input class="campo" id="numero1" type="text" />
    <input class="campo" id="numero2" type="text" />

    <input id="resultado" type="text" value="0" placeholder="Resultado" disabled/>

</form>

   	
 
</body>
</html>