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
<form   action="" method="POST" >
  <center>
    <font face="arial" size="5" color="black">
      <B>Cadastro Fornecedor</B>
    </font>
  </center>

<?php
    // Consulta que pega todos os produtos
if (isset($_GET['id'])){
$sql = "SELECT * FROM pagamentos WHERE id=".$_GET['id'];
}
$query = mysqli_query($con, $sql);
while ($pagamentos = mysqli_fetch_assoc($query)) {
  // Aqui temos o array $produto com todos os valores do produto
  // Consulta para pegar os dados da categoria:
  $sqlC = "SELECT * FROM `produtos` WHERE `id` = " . $pagamentos['id_for'];
  $queryC = mysqli_query($con, $sqlC);
  $fornecedor = mysqli_fetch_assoc($queryC);
  echo 'Emissão: ' . $pagamentos['emissao'] . '';
  echo 'Vencimento: ' . $pagamentos['vencimento'] . '';
  echo 'Fornecedor: ' . $fornecedor['nome']. '';
  echo '
  <div class="col-md-12">
      Origem:<br>
      <div class="col-md-6">
        <label>Nr. Doc:</label>
                <input type="text" name="numero_doc" class="txt" maxlength="50" value="'. $pagamentos['numero_doc']. '" style="width:100px;margin-bottom:20px;">
        <label>Série:</label>
                <input type="text" name="serie" class="txt" maxlength="50" value="'. $pagamentos['serie']. '"style="width:65px;margin-bottom:20px;">
        <label>Emissão:</label>
                <input type="date" name="emissao" class="txt" maxlength="50" value="'. $pagamentos['emissao']. '" style="width:200px;margin-bottom:20px;">
      </div>
      <div class="col-md-6"> 
        <label>Vencimento:</label>
                <input type="date" name="vencimento" class="txt" maxlength="50" value="'. $pagamentos['vencimento']. '" style="width:200px;margin-bottom:20px;">
        <label>Prorrogado:</label>
              <input type="date" name="prorrogado" class="txt" maxlength="50" value="'. $pagamentos['prorrogado']. '" style="width:200px;margin-bottom:20px;">
      </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <label>Centro de Custo:</label>
          <input type="text" name="centro_de_custo" class="txt" maxlength="50" value="'. $pagamentos['centro_de_custo']. '" style="margin-bottom:20px;">     
    </div>
    ';
  echo'
   <div class="col-md-6">
     <label>Fornecedor:</label>
  
     <select name="id_for" class="form-control" style="margin-bottom:20px;">
            <option value="' . $fornecedor['id']. '">' . $fornecedor['nome']. '</option>
      ';
            $sqlF = "SELECT * FROM produtos";
          
            $queryF = mysqli_query($con, $sqlF);
            while ($produtos = mysqli_fetch_assoc($queryF)) {
              echo'<option value="' .$produtos['id']. '">' . $produtos['nome']. '</option>';

            }
      
  echo' 
      </select>
       
    </div>  
   </div>
  <div class="col-md-12">
        <div class="col-md-3">
            <label>Data Pagamento:</label><br>
               <input type="date" name="pagamento" class="txt" maxlength="50" value="'. $pagamentos['pagamento']. '" style="width:100%;margin-bottom:20px;"" >
        </div>
        <div class="col-md-3">
          <label>Forma de Pagamento : </label>
            <select name="forma_pagamento" class="form-control"  style="margin-bottom:20px;">
                      <option value="'. $pagamentos['forma_pagamento']. '" >'. $pagamentos['forma_pagamento']. '</option>
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
                <input type="checkbox" name="baixar" id="baixar"'; 
                if($pagamentos['baixar']=='on') {echo 'checked="true"';}
                echo 'style="margin-bottom:20px;"/>
        </div>
        <div class="col-md-3">
            <label>Parcela:</label>
                <input id="parcela" type="number" name="parcela" min="1" max="99" placeholder="1" class="txt campo" maxlength="50" value="'. $pagamentos['parcela']. '"  style="width:100%;margin-bottom:20px;">
        </div>
        <div class="col-md-3">
          <label>Valor:</label>
            <input id="valor" type="text" name="valor" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" value="'. $pagamentos['valor']. '" >
        </div>
        <div class="col-md-3">
          <label>Acréscimo:</label>
              <input id="acrescimo" type="text" name="acrescimo" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;" value="'. $pagamentos['acrescimo']. '" >
        </div>
        <div class="col-md-3">
          <label>Desconto:</label>
              <input id="desconto" type="text" name="desconto" class="txt campo" maxlength="50" style="width:100%;margin-bottom:20px;"" value="'. $pagamentos['desconto']. '" >
        </div>
        <div class="col-md-3">
          <label>Valor Total:</label>
              <input id="total" type="text" name="total" class="txtu" maxlength="50" style="width:100%;margin-bottom:20px;" readonly value="'. $pagamentos['total']. '" />
        </div>
      </div>

    <div class="col-md-12">
      <label>Observações:</label>
        <textarea name="obs" rows="2" cols="56" class="form-control"    style="font-size: 30px; font-family:Times New Roman;color:red;white-space:pre-wrap;width:100%;margin-bottom:20px;">'. $pagamentos['obs']. '
        </textarea>      
    </div>';
  }

?>    
        
<div class="col-md-12">
  <center>
      <input type="submit" name="submit" value="Atualizar" id="btncad">
      <input type="button" value="Cancelar" id="btncan">
  </center>
</div>
</form>
<?php
if(isset($_POST["submit"])){

  $upd = "UPDATE pagamentos SET numero_doc='".$_POST['numero_doc']."',serie='".$_POST['serie']."',emissao='".$_POST['emissao']."',vencimento='".$_POST['vencimento']."',prorrogado='".$_POST['prorrogado']."', centro_de_custo='".$_POST['centro_de_custo']."',id_for='".$_POST['id_for']."',pagamento='".$_POST['pagamento']."',forma_pagamento='".$_POST['forma_pagamento']."',baixar='".$_POST['baixar']."',parcela='".$_POST['parcela']."',valor='".$_POST['valor']."',acrescimo='".$_POST['acrescimo']."',desconto='".$_POST['desconto']."',total='".$_POST['total']."',obs='".$_POST['obs']."' WHERE id='".$_GET['id']."'";

  if ($con->query($upd) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Atualizado com sucesso');</script>";
  } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $upd . "<br>" . $conn->error."');</script>";
  }
  echo "<script type= 'text/javascript'>location.href='lista_pag.php';</script>";
  
  $con->close();
}

?>

