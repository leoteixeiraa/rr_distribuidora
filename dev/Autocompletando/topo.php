<meta charset="UTF-8">
<title>**Pesquisa Fornecedor**</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>

<link rel="stylesheet" href="style.css">
<script type="text/javascript">
	$(document).ready(function() {

    $('#tabela').DataTable( {
    	"language": {
				    "sEmptyTable": "Nenhum registro encontrado",
				    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
				    "sInfoPostFix": "",
				    "sInfoThousands": ".",
				    "sLengthMenu": "_MENU_ resultados por página",
				    "sLoadingRecords": "Carregando...",
				    "sProcessing": "Processando...",
				    "sZeroRecords": "Nenhum registro encontrado",
				    "sSearch": "Pesquisar",
				    "oPaginate": {
				        "sNext": "Próximo",
				        "sPrevious": "Anterior",
				        "sFirst": "Primeiro",
				        "sLast": "Último"
				    },
				    "oAria": {
				        "sSortAscending": ": Ordenar colunas de forma ascendente",
				        "sSortDescending": ": Ordenar colunas de forma descendente"
				    }
		},
        responsive: true,
        "paging":   true,
        "ordering": true,
        "info":     true
        
    } );

	    // Delete a record
     $('.deletar').click(function()
    {
    	var id = $(this).attr('id');
    	var data = 'id=' + id ;
        var parent = $(this).parent().parent();
        if (confirm("Tem certeza que deseja deletar este Fornecedor?"))
        {           
            $.ajax(
            {
                   type: "POST",
                   url: 'deletar_for.php',
                   data:{id: id},
                   cache: false,
                   success: function()
                   {
                    parent.fadeOut('fast', function() {$(this).remove();});
                   }
             });
        }
    });
     $('.deletar-pag').click(function()
    {
    	var id = $(this).attr('id');
    	var data = 'id=' + id ;
        var parent = $(this).parent().parent();
        if (confirm("Tem certeza que deseja deletar este Pagamento?"))
        {           
            $.ajax(
            {
                   type: "POST",
                   url: 'deletar_pag.php',
                   data:{id: id},
                   cache: false,
                   success: function()
                   {
                    parent.fadeOut('fast', function() {$(this).remove();});
                   }
             });
        }
    }); 

    
} );
</script>
</head>
<nav class="navbar navbar-default">

	    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2">
    	       <a class="navbar-brand" href="index.php">Ínicio</a>
            </div>
            <div class="col-md-2"> 
    	      <a class="navbar-brand" href="cad_produto.php">Cadastro de Produtos</a>
            </div>
            <div class="col-md-2">
    	      <a class="navbar-brand" href="lista_for.php">Lista de Produtos</a>
            </div>
            <div class="col-md-2">
    	      <a class="navbar-brand" href="cad_pagamento.php">Cadastro de Pagamentos</a>
            </div>
            <div class="col-md-2">
    	      <a class="navbar-brand" href="lista_pag.php">Lista de Pagamentos</a>
            </div>  	  
</nav>

