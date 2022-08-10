$(document).ready(function() {
  $('#example').dataTable({
          columnDefs: [{
                  targets: -1,
                  className: 'dt-body-right'
          }],
          "pageLength": 25,
          "order": [
                  [0, 'desc'],       
          ],
          "lengthMenu": [
                  [10, 25, 50, 100, -1],
                  [10, 25, 50, 100, "All"]
          ],
          language: {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ ate _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 ate 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por pagina",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                        "sNext": "Proximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Ultimo"
                },
                "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                },
                "select": {
                        "rows": {
                                "_": "Selecionado %d linhas",
                                "0": "Nenhuma linha selecionada",
                                "1": "Selecionado 1 linha"
                        }
                
                  }
          }
  });
});