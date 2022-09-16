<?php
	include('./db/db.php');

	
	class Image
	{
	 
	    //Function the retrive all the data of items from database
		function get_all_prd($field)
		{  $sql="select *from products where prd_type= '$field'";
            $result=mysql_query($sql);
            return  $result;
			
			
		}
		
		//Insert the product selected into the cart to be used for checkout process
		function ins_cart($name,$img,$price,$details)
		{
			$sql="insert into cart (prd_name,prd_img,prd_desc,prd_price)  values('$name','$img','$details','$price'); ";
              $result=mysql_query($sql);
            			
		}
		
		function show($f)
		{
			echo $f;
			
		}
		//Select an item data to be inserted into cart table[called from javascript]
		function add_to_cart($img)
		{
			         
         $sql="SELECT * FROM products WHERE img = '$img'"; 
                 
        $query=mysql_query($sql);
        
         while($row=mysql_fetch_array($query)) 
          { 
              
               
                if($this->check_existence($row['Name'])==0)
	       	     {$this->ins_cart($row['Name'],$row['img'],$row['Price'],$row['Details']);}
	           	else
	        	{$this->update_quant($row['Name']); }	 
            
          } 
		 return "done";
		     	
		}
		
		//Function to filter the repeated items and not send them
		function check_existence($field)
		{  $sql="SELECT prd_name FROM cart WHERE prd_name= '$field'";
           $query=mysql_query($sql);
		   $rows=mysql_num_rows($query);
		   return $rows;
			
		}
		
		//Checks if the item is repeated then update the quantity
		Function update_quant($field)
		{ $sql="update cart set Quant=Quant+1 where prd_name= '$field'";
           $query=mysql_query($sql);
		  			
		}
		
		
		//Function to search for a criterion
		function search_item($criterion)
		{
			         
         $sql="SELECT * FROM products WHERE Name = '$criterion'"; 
                 
        $result=mysql_query($sql);
            return  $result;
		}
		
		
		///Function used in cart and checkout to show data existing in the cart
		function show_items()
		{
			         
         $sql="SELECT * FROM cart ";
                 
        $result=mysql_query($sql);
            return  $result;
		}
		
		
		//Function to delete the item from the cart
		Function delete_item($field)
		{  
		   $sql="delete from cart  where ID= $field";
           $query=mysql_query($sql);
		  			
		}	
		
		//Function to count the items in the database
		Function count_items()
		{  
		   $sql=mysql_query("select count(ID) as result  from cart ");
           $result=mysql_fetch_row($sql);
           return $result[0];
           
		  			
		}
		//Function to sum the price*quant the items in the database
		Function subtotal()
		{  
		   $sql=mysql_query("select sum(prd_price*Quant)as result from cart; ");
           $result=mysql_fetch_row($sql);
           return $result[0];
           
		  			
		}	
		//Function used to decrease the quantity
		
		Function quant_down($field)
		{  
		   $sql="update cart set Quant=Quant-1 where ID= $field ";
           $query=mysql_query($sql);
		  			
		}	
		//Function used to increase the quantity
		
		Function quant_up($field)
		{  
		   $sql="update cart set Quant=Quant+1 where ID= $field";
           $query=mysql_query($sql);
		  			
		}	
	
	
		
		
	}
?>