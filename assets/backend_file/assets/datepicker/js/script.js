$(function () {
    $("#datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    }).datepicker('update', new Date());
});

$(function () {
    $("#datepicker2").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    }).datepicker('update', new Date());
});

CKEDITOR.replace( 'editor1' );