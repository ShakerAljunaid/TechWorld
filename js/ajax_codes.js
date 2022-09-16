<script src="jquery-1.7.min.js"></script>

<script>

function delete_from_cart(a) { 


   var dataS = "var_img=" + a ;
		
	$.ajax({
		type: "POST",
		url:"delete_from_cart.php",
		data: dataS,
		success: function(result){
		location.reload();
		}
		

    
	});	
	

    
	
} 
</script>