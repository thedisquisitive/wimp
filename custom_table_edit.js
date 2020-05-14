$(document).ready(function() {
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,
		columns: { 
			identifier: [0, 'id'],
			editable: [[1, 'manufacturer'], [2, 'name'], [3, 'stock'], [4, 'reserved'], [5, 'ordered'], [6, 'tech_use']] },
		buttons: {
			edit: {
				class: 'btn',
				html: '<span class="glyphicon glyphicon-pencil"></span>',
				action:'edit'
			}
		},
		hideIdentifier: true,
		url: 'live_edit.php'
	});
});
