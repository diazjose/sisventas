$(document).ready(function(){
		var cantidad1 = 0;
		$("#tbody tr .val").each(
		    function(index, value) {
		      if ( $.isNumeric( $(this).val() ) ){
			      cantidad1 = cantidad1 + eval($(this).val());
			  }			  
		    }
	  	);
	  	$("tr #total").text(cantidad1);
});
var i = 0;
function ag_producto(id){
	var codigo = $('#'+id+' .codigo').text();
	var producto = $('#'+id+' .producto').text();
	var cantidad = $('#'+id+' .cantidad input').val();
	var valor = $('#'+id+' .precio').text();
	var total = parseFloat(cantidad * valor);
	

	i++;

	var html = "<tr id='"+i+"'> <td>"+codigo+"</td> <td>"+cantidad+"</td> <td>"+producto+"</td> <td>"+valor+"</td> <td class='val'>"+total.toFixed(2)+"</td> <td><a href='#' onclick='eliminarPro("+i+")' class='btn btn-link' title='Eliminar Producto'><i class='fas fa-trash-alt'></i></a></tr>";
	
	$("#tbody").append(html);
};

function eliminarPro(id){
	$("#tbody #"+id).remove();
}