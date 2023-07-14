"use strict";
var KTDatatablesAdvancedColumnVisibility = function() {

	var init = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,

		});
	};

	return {

		//main function to initiate the module
		init: function() {
			init();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesAdvancedColumnVisibility.init();
});
