<?php
	include('./classes/img_class.php');
    	$obj_img=new Image();
	if($_SERVER['REQUEST_METHOD']=="POST"){
	    	$n =$_POST["var_id"] ;
	        $obj_img->quant_down($n);
        
             
}
?>