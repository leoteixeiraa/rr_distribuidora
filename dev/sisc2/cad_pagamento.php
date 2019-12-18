<?php

include 'config.php';
include 'topo.php';
?>
<script>
$(function($){
 
    // No id #enviar assim que clicar executa a função

    $('.campo').blur(function(){
 
    /* veja que eu criei variáveis para guardar os itens
     * e só precisei usar a função val() para
     * retornar o valor dos campo para a várivel
     */        

        var campo =   $('.campo');

        var numero1 = $('#parcela').val();
        var numero2 = $('#valor').val();
        var numero3 = $('#acrescimo').val();
        var numero4 = $('#desconto').val();
        if ($('#parcela').val()=="") {
          var numero1 = 1 ;
        };
        if ($('#acrescimo').val()=="") {
          var numero3 = 0 ;
        };
        if ($('#desconto').val()=="") {
          var numero4 = 0 ;
        };

        var conta = ((parseFloat(numero1)*parseFloat(numero2))+parseFloat(numero3))-parseFloat(numero4);

        $('#total').val(conta.toFixed(2));

    });
});
</script>

<body>
<form class="" action="" method="post">

  <center>
    <font face="arial" size="5" color="black">
      <B>Cadastro Pagamento</B>
    </font>
  </center>

  <div class="col-md-12">
      Origem:<br>
      <div class="col-md-6">
        <label>Nr. Doc:</label>
                <input type="text" name="numero_doc" class="txt" maxlength="50" style="width:100px;margin-bottom:20px;">
        <label>Série:</label>
                <input type="text" name="serie" class="txt" maxlength="50" style="width:65px;margin-bottom:20px;">
        <label>Emissão:</label>
                <input type="date" name="emissao" class="txt" maxlength="50" style="width:200px;margin-bottom:20px;">
      </div>
      <div class="col-md-6"> 
        <label>Vencimento:</label>
                <input type="date" name="vencimento" class="txt" maxlength="50" style="width:200px;margin-bottom:20px;">
        <label>Prorrogado:</label>
              <input type="date" name="prorrogado" class="txt" maxlength="50" style="width:200px;margin-bottom:20px;">
      </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <label>Centro de Custo:</label>
          <input type="text" name="centro_de_custo" class="txt" maxlength="50" style="margin-bottom:20px;">     
    </div>
    <div class="col-md-6">
     <label>Fornecedor:</label>
     <select name="id_for" class="form-control" style="margin-bottom:20px;">
      <?php
      while ($row = $res->fetch_assoc()) {
            echo "
                    <option value=".$row['id'].">".$row['nome']."</option>";
      }
      ?>
      </select>
      </div>

      <div class="col-md-12">
        <div class="col-md-3">
            <label>Data Pagamento:</label><br>
               <input type="date" name="pagamento" class="txt" maxlength="50" maxlength="2" style="width:100%;margin-bottom:20px;" >
        </div>
        <div class="col-md-3">
          <label>Forma de Pagamento : </label>
            <select name="forma_pagamento" class="form-control"  style="margin-bottom:20px;">
                      <option>Selecione...</option>
                      <option value="Dinheiro">Dinheiro</option>
                      <option value="Cartão Crédito">Cartão Crédito</option>
                      <option value="Cartão Débito">Cartão Débito</option>
                      <option value="Cheque">Cheque</option>
                      <option value="Boleto">Boleto</option>
                      <option value="Depósito">Depósito</option>
             </select>
        </div>
        <div class="col-md-3">
            <label>Lançar e Baixar:</label><br>
                <input type="checkbox" name="baixar" id="baixar" style="margin-bottom:20px;"/>
        </div>
        <div class="col-md-3">
            <label>Parcela:</label>
                <input id="parcela" type="number" name="parcela" min="1" max="99" placeholder="1" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" >
        </div>
        <div class="col-md-3">
          <label>Valor:</label>
            <input id="valor" type="text" name="valor" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" >
        </div>
        <div class="col-md-3">
          <label>Acréscimo:</label>
              <input id="acrescimo" type="text" name="acrescimo" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" >
        </div>
        <div class="col-md-3">
          <label>Desconto:</label>
              <input id="desconto" type="text" name="desconto" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" >
        </div>
        <div class="col-md-3">
          <label>Valor Total:</label>
              <input id="total" type="text" name="total" class="txt" maxlength="50" style="width:100%;margin-bottom:20px;" readonly />
        </div>
      </div>

    <div class="col-md-12">
      <label for="cPed">Observações:</label>
        <textarea name="obs" rows="2" cols="56" class="form-control" onfocus="this.value='';"
            style="font-size: 30px; font-family:Times New Roman;color:red;white-space:pre-wrap;width:100%;margin-bottom:20px;">Observações sobre o título
        </textarea>
      
    </div>
    <div class="col-md-12">
      <center>
        <input type="submit" name="cadastrar" value="Cadastrar" id="btncad">
        <input type="button" value="Cancelar" id="btncan">
      </center>
    </div>
<?php
if(isset($_POST["cadastrar"])){

  $sql = "INSERT INTO pagamentos (id_for, numero_doc, serie, emissao, vencimento, prorrogado, centro_de_custo, pagamento, forma_pagamento, baixar, parcela, valor, acrescimo, desconto, total, obs)
  VALUES ('".$_POST["id_for"]."','".$_POST["numero_doc"]."','".$_POST["serie"]."','".$_POST["emissao"]."','".$_POST["vencimento"]."','".$_POST["prorrogado"]."','".$_POST["centro_de_custo"]."','".$_POST["pagamento"]."','".$_POST["forma_pagamento"]."','".$_POST["baixar"]."','".$_POST["parcela"]."','".$_POST["valor"]."','".$_POST["acrescimo"]."','".$_POST["desconto"]."','".$_POST["total"]."','".$_POST["obs"]."')";

  if ($con->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Novo pagamento foi cadastrado com sucesso!');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
  }
  
  $con->close();
}
?>
