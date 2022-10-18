$(document).ready(function () {

	function tabela(idTabela) {
		$(idTabela).DataTable({
			"scrollX": true,
			"language": {
				"lengthMenu": "MENU",
				"zeroRecords": "Nenhum registro encontrado",
				"info": "Páginas",
				"infoEmpty": "Nenhum registro encontrado",
				"infoFiltered": "MAX registros no total",
				"sSearch": "Buscar:",
				"paginate": {
					"previous": "Anterior",
					"next": "Próximo",
					"first": "Primeira página",
					"last": "Última página"
				}
			}
		});
	}
	tabela('#tabelaUm');
	tabela('#tabelaDois');
	tabela('#tabelaTres');
	tabela('#tabelaQuatro');
	tabela('#tabelaCinco');
	tabela('#tabelaSeis');
	tabela('#tabelaSete');
	tabela('#tabelaOito');
  function tabelaComModal(idTabela,idModal) {
		$(idTabela).DataTable({
			"scrollX": true,
			"language": {
				"lengthMenu": "MENU",
				"zeroRecords": "Nenhum registro encontrado",
				"info": "Páginas",
				"infoEmpty": "Nenhum registro encontrado",
				"infoFiltered": "MAX registros no total",
				"sSearch": "Buscar:",
				"paginate": {
					"previous": "Anterior",
					"next": "Próximo",
					"first": "Primeira página",
					"last": "Última página"
				}
			},
			dropdownParent: $("#lista_clientes")
		});
	}

	$('#tableTimeline').DataTable({
		"scrollX": true,
		"order":false,
		"language": {
			"lengthMenu": "MENU",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Páginas",
			"infoEmpty": "Nenhum registro encontrado",
			"infoFiltered": "MAX registros no total",
			"sSearch": "Buscar:",
			"paginate": {
				"previous": "Anterior",
				"next": "Próximo",
				"first": "Primeira página",
				"last": "Última página"
			}
		}
	});
});