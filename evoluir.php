<?php
session_start();
$id_paciente = $_REQUEST['id_paciente'];
include 'assets/controllers/cadastrarComentario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/block.js"></script> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Evolu√ß√£o</title>
</head>
<body>
    <div class="container-md">
        <div class="container-lg">
            <div class="container-xl">
                <div class="container-xxl">
                    <div class="container">
                    <table class="table table-striped table-bordered table-hoverable">
                            <?= listarCabecalho($id_paciente) ?>
                    </table>
                    <form action="" method="POST">
                        <input hidden type="text" name="id_paciente" value="<?=$id_paciente?>">
                        <input hidden type="text" name="id_profissional" value="1">
                        <div class="span9">
                            <textarea style=" font-size: 30px;"required name="comentario" id="" cols="40" rows="4"></textarea>
                        </div>
                        <button name="acao" value="evoluir" class="btn btn-success">Enviar</button>
                        <a href="index.php" class="btn btn-info">Voltar</a>
                    </form>
                    <table id="example" class="table table-striped table-bordered table-hoverable">  
                        <thead class="thead-dark">
                            <th style="width:50px;">#</th>
                            <th><center>√Årea</th>
                            <th><center>Evolu√ß√£o</th>
                        </thead>
                        <tbody>
                            <?= listar($id_paciente) ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
$(document).ready( function () 
	{
		$('#example').dataTable( 
		{ 
			columnDefs: [{targets: -1,className: 'dt-body-right'}],
			"pageLength": 25,
			 "order": [[ 2, 'asc' ], [ 1, 'asc' ]],
			 "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50,100,"All"] ],
			language: 
			{
				"sEmptyTable": "Nenhum registro encontrado",
				"sInfo": "Mostrando de _START_ atÈ _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 atÈ 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "_MENU_ resultados por pagina",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": 
				{
					"sNext": "PrÛximo",
					"sPrevious": "Anterior",
					"sFirst": "Primeiro",
					"sLast": "⁄ltimo"
				},
				"oAria":
				{
					"sSortAscending": ": Ordenar colunas de forma ascendente",
					"sSortDescending": ": Ordenar colunas de forma descendente"
				},
				"select": 
				{
					"rows": 
					{
						"_": "Selecionado %d linhas",
						"0": "Nenhuma linha selecionada",
						"1": "Selecionado 1 linha"
					}
				}
			 }
		});
	} 
);
function PopupCenter(url, title, w, h) {  
    // Fixes dual-screen position                         Most browsers      Firefox  
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
              
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
              
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
  
    // Puts focus on the newWindow  
    if (window.focus) {  
        newWindow.focus();  
    }  
}  
</script>