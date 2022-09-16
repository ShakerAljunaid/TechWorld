<script src="jquery-1.7.min.js"></script>

<script>

function add_to_cart(a) { 


var dataS = "var_img=" + a ;
		
	$.ajax({
		type: "POST",
		url:"add_to_cart1.php",
		
		data: dataS,
		success: function(result){
		$('.shopping_cart').load('Index.php .shopping_cart');
		$('#crt_inf').load('Index.php #crt_inf');
		
		}
		

    
	});	

    
	
} 



function delete_from_cart(a) { 


   var dataS = "var_img=" + a ;
		
	$.ajax({
		type: "POST",
		url:"delete_from_cart.php",
		
		data: dataS,
		success: function(result){
	    $('.cart_info').load('Cart.php .cart_info');
	     $('.total_area').load('Cart.php .total_area');
	    $('#crt_inf').load('Index.php #crt_inf');
		}
		

    
	});	
	

    
	
} 




function quant_up(a) { 


var dataS = "var_id=" + a ;
		
	$.ajax({
		type: "POST",
		url:"quant_up.php",
		data: dataS,
		success: function(result){
		 $('.cart_info').load('Cart.php .cart_info');
		  $('.total_area').load('Cart.php .total_area');
		 $('#crt_inf').load('Index.php #crt_inf');
		}
		

    
	});	

    
	
} 


function quant_down(a) { 


var dataS = "var_id=" + a ;
		
	$.ajax({
		type: "POST",
		url:"quant_down.php",
		data: dataS,
		success: function(result){
	 $('.cart_info').load('Cart.php .cart_info');
	 	 $('.total_area').load('Cart.php .total_area');
	 $('#crt_inf').load('Index.php #crt_inf');
	
		}
		

    
	});	

    
	
} 


</script>