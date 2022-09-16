<?php
	include('./classes/img_class.php');
    	$obj_img=new Image();
	if($_SERVER['REQUEST_METHOD']=="POST"){
	    	$n =$_POST["var_img"] ;
	       $obj_img->add_to_cart($n);
	       
	       
	    
	   
        
             
}
?>