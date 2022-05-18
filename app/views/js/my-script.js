// $("button.delete-cart").click(function(e){
$(document).on('click', 'button.delete-cart', function(e){
    e.preventDefault();

    var id = $(this).val();
    $.ajax({
   		url: 'server/delete-cart-ajax.php',
   		type: 'POST',
   		dataType: 'html',
   		data: {id : id},

   		success : function(data){
   			if (data == 1){
   				$("#data-cart").load(" .table-cart");
   			}
   		},

   		error : function(){
   			console.log('Error');
   		}
   });
});


$(document).on('change', '.update-cart', function(){
	// lay duoc id, qty sản pham
	var id = $(this).attr('id_product');
	var qty = $(this).val();

	alert('id = ' + id +" qty = " + qty);

	// Xu ly tiep phan update cart cho tung san pham
});