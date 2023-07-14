"use strict";
var KTDatatablesBasicPaginations = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');
		var table2 = $('#kt_datatable2');
		var table3 = $('#kt_datatable3');
		var table4 = $('#kt_datatable4');
		var table5 = $('#kt_datatable5');
		var table6 = $('#kt_datatable6');
		var table7 = $('#kt_datatable7');

		// begin first table
		table.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			columnDefs: [
				
			],
		});
		table2.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			columnDefs: [
				{ "width": "100%", "targets": 1 }
			],
		});
	
		table3.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			"autoWidth": true,
			columnDefs: [
				
			],
		});
		
		table4.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			"autoWidth": true,
			columnDefs: [
				
			],
		});
		table5.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			"autoWidth": true,
			columnDefs: [
				
			],
		});
		table6.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			"autoWidth": true,
			columnDefs: [
				
			],
		});
		table7.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			"autoWidth": true,
			columnDefs: [
				
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesBasicPaginations.init();
});
