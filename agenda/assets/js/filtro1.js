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
				"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "Mostrar _MENU_ ",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": 
				{
					"sNext": "Próximo",
					"sPrevious": "Anterior",
					"sFirst": "Primeiro",
					"sLast": "Último"
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
