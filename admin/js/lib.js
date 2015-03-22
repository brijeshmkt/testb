$(function(){
   
   //$('#categoryform').hide();
   $('#start_date').datetimepicker({
   	dateFormat : 'yy-mm-dd'
   });

   $('#end_date').datetimepicker({
   	dateFormat : 'yy-mm-dd'
   });
}); 

$("#addCategoryBtn").click(function(){
    $('#categoryform').toggle(500);


});

$("#submitCategory").click(function(){
	console.log('hi');

	var data = $('form').serialize();
	$.post( 
		"ajaxscript.php", 
		data,  
		function( data ) {
		$("#responsemsg").html(data);
		
	});

	
});

$("td").on("click","#deleteCategory",function(){

	var id = $(this).data('categoryid');
	
	$.post( 
		"ajaxscript.php", 
		{ deletecategory: "yes", id: id },  
		function( data ) {
		$("#responsemsg").html(data);
		
	});

});

$("td").on("click","#editCategory",function(){

	var id = $(this).data('categoryid');
	var categoryname = $(this).data('categoryname');


	$('#categoryform').show(500);

	$('#inputAddCategory').val(categoryname);

	$('#inputAddCategory').append("<input type='hidden' name='inputCategoryId' value='"+id+"'>");
	

});
	
