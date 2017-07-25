$(document).ready(function() {
    $('.summernote').summernote({
	  height: 350
	});
    
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true,
        today: "Today",
        clear: "Clear",
        locale: 'id'
        });
    
    $('#cp1').colorpicker({
        format: 'hex'
    });
    $('#cp2').colorpicker();
});