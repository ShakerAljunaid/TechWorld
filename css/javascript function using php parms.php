


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz"><head><title>Company name - title</title>

<head>
	<title>CSS Free Templates with jQuery Slider</title>
	 <!--Linking to the files related to the page-->
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/prettyCheckboxes.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/Fly_to_cart.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/prettyCheckboxes.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/DetailsPanel.js" type="text/javascript"></script>
	<script src="js/Fly_tocart.js" type="text/javascript"></script>
     <script type='text/javascript' src="codex-fly.js"></script>
     <link rel="stylesheet" type="text/css" href="style2.css" />
     <link href="css/hover.css" rel="stylesheet" media="all">
     <script src="js/Save_scroll.js" type="text/javascript"></script>
  <!----------------------------------------------------------------------------------------->
<script>

function changeImg(thisImg) {
  if(prevImg) {
    prevImg.src=prevSrc;
  }  
  prevImg = thisImg;
  prevSrc = thisImg.src;
  thisImg.src = "Images/favs.gif";
}
</script>


    <!--Php code that set the connection to the database-->
   	<?php
	include('./classes/img_class.php');
	//The session was proposed for the checkout page
     session_start();
     $id=0;
	
	//Instance of the class that has the functions of database connection
	  $obj_img=new Image();
	 
	 //Call get all data function to show the data in the page 
	    $dataImage=$obj_img->get_all_prd();
		 $row=mysql_num_rows($dataImage);
	
	?>
	  <!--End of initial php code-->
	  
	   
      
  <!-------------------------------------------------------------------------------------------------->

  <!--html page starting-->
</head>
<body onload="loadScroll()"  onunload="saveScroll()" >
	<div class="shell">
		<!-- Header -->
		<div id="header">
			<!-- Search  -->			
			<div id="search">
				<div class="search-holder hvr-hang">
				  <!--Make the form to get the criterion set in the search input box-->
					<form name="frmSearch "action="Search_page.php" method="post">					
						<input type="text" class="field light_hover" name="criterion" value="Keywords" title="Keywords"  />
						<input type="submit"  name="sbmit" value="" class="submit-button   " id="btnHover"/>						
					</form>
					  <!--End of the searching form-->
					<a class="advanced-search" title="Advanced Search" href="#">Advanced Search</a>
					<div class="cl"></div>
				</div>	
			</div>
			<!-- END Search -->						
			<div class="cl"></div>
			<!-- Logo -->
			<h1 id="logo"><a title="Home" href="#">Mega Store</a></h1>
			<!-- Top Navigation -->
			<div id="top-navigation">	
				<ul>
					<li>  <?php echo  $obj_img->count_items().' items ...'   .'$'. $obj_img->subtotal();?>  </li>
					<li><a class="start hvr-hang   " title="My Account" href="#"><span></span>My Account</a></li>
					<li><a class="cart hvr-hang  " title="shopping cart" href="#"><span></span>shopping cart </a></li>
					<li><a class="end  hvr-hang  title="checkout" href="#">checkout<span></span></a></li>				
				</ul>		
			</div>				
			<!-- END Top Navigation -->	
			<div class="cl"></div>		
		</div>
		<!-- END Header -->
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a title="Home" href="#">الرئيسية<span class="sep-right"></span></a></li>
				<li>
					<a title="Games" href="#"><span class="sep-left"></span>المنتجات<span class="sep-right"></span></a>
				</li>
				<li><a title="Abstract" href="#"><span class="sep-left"></span>الخدمات<span class="sep-right"></span></a></li>
				<li>
					<a title="Retro" href="#"><span class="sep-left"></span>حول الموقع<span class="sep-right"></span></a>
					<div class="dd">
						<ul>
							<li><a title="Drop down menu 1" href="#"><span class="sep-left"></span>تلفونات</a></li>
							<li>
								<a title="Drop down menu 2" href="#"><span class="sep-left"></span>كمبيوترات </a>
								<div class="dd">
									<ul>
										<li><a title="Drop down menu 1" href="#"><span class="sep-left"></span><span class="dd-first"></span> مكتبية</a></li>
										<li><a title="Drop down menu 2" href="#"><span class="sep-left"></span>لوحية</a></li>
										<li><a title="Drop down menu 3" href="#"><span class="sep-left"></span>محممولة </a></li>	
                                       
                                          <li><a title="Drop down menu 4" href="#"><span class="sep-left"></span>قطع كمبيوترات</a></li>										
									</ul>
								</div>
							</li>
							<li><a title="Drop down menu 3" href="#"><span class="sep-left"></span>طابعات</a></li>
                            <li><a title="Drop down menu 4" href="#"><span class="sep-left"></span>اسيدهات</a></li>
                              <li><a title="Drop down menu 4" href="#"><span class="sep-left"></span>اكسسوارات</a></li>										
						</ul>
					</div>
				</li>
				<li><a title="HI Tech" href="#"><span class="sep-left"></span>التواصل<span class="sep-right"></span></a></li>
					
			</ul>
			<div class="cl"></div>
		</div>
		<!-- END Navigation -->
		<!-- Main  -->
		<div id="main">
			<!-- Slider -->
			<div id="slider-holder">
			
			  <!--First show the data as slides in the header part-->				
				<div id="slider">
				  <!--Php code that first checks if the table is not empty-->
				 <?php    if($row!=0) {       ?>
			
				
					<ul>
					  <!--If not then shows the its contents in the page-->
					 <?php //Start loop while the data from database exists
					      while($data=mysql_fetch_assoc($dataImage))
					       {
                       ?>
                      <!--Close php tag and start showing the products from database-->
						<li>
						     <!--Set the image in the page as the data in the databaase-->
							<img src="Images/<?php echo $data['img'];?>" alt="Beautiful white case with flowers" />
								<div class="caption">
							 	<p>For Real Gamers</p>
								<p class="model">Lian-Li PC-7FW Midi Tower</p>
								<a title="Buy Now!" class="buy-now" href="#">buy now!</a>
							</div>							
						</li>
						
						 <!--Close the while loop-->
						<?php } ?>				
					</ul>
					 <!--Close the if condition-->
					<?php } ?>
					<div class="slider-controls">
						<a title="slide 1" href="#">1</a>
						<a title="slide 2" href="#">2</a>
						<a title="slide 3" href="#">3</a>
						<a title="slide 4" href="#">4</a>
						<a title="slide 5" href="#">5</a>							
					</div>
					<a title="Previous Slide" id="prev" href="#">prev</a>
					<a title="Next Slide" id="next" href="#">next</a>
				</div>
			</div>
			<!-- END Slider -->
			
			 <!--The moving text shown at the to of the page -->
		<div id="Page_top">
  <p> <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"><font color="#FFFF99"><h3>30%off on all summer wear...Hurry!!!</h3></font><font color="#00CC99"><h4>Enjoy the pleasure of shopping with Fashion Shop...</h4></font></marquee><br>

  </p>

 
  </div>
  
	 <!--The right content of the page the cart and the adds..etc -->
			<div class="cl"></div>
			 <div class="right_content">
			 <!---Php to get the items in the cart-->
			 
      <div class="shopping_cart">
      
        <div class="cart_title">Shopping cart</div>
        	
        <div class="cart_details"> "<?php echo $obj_img->count_items();?>" items <br />
          <span class="border_cart"></span> Total: <span class="price">$"<?php echo $obj_img->subtotal();?>"</span> </div>
         <div class="basket">
        
  <div  id="basket" class="cart_icon hover_move"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
  <div class="popup">
     <div class="row header">
      <span>Items</span>
      <span>Amount</span>
    </div>
    <!-- Show the items from database when hovering-->
		 	<?php 
			 	//Call the show data function to show all data from database
		      	$dataImage=	$obj_img->show_items();
		       	$row=mysql_num_rows($dataImage);
		       	
		       	//Make sure that the table is not empty
			     if($row!=0)
                   {     
		             	 while($data=mysql_fetch_assoc($dataImage))
                          {
                       ?>
    
    <div class="row items">
    
      <a href="javascript:void(0);"><img src="Images/<?php echo $data['prd_img'];?>" alt="" border="0" id="btn"  /></a>
     
      <span>$<?php echo $data['prd_price'];?></span>
    </div>
    <!----end of while loop-->
      <?php  }?>
      <!----end of if condition-->
      <?php  }?>
    <div class="row checkout">
     <span><div class="view_cart"><a href="cart.php">View Cart ></a></div></span>
    <span> <div class="checkout-button"><a href="cart.php" >Checkout</a></div></span> 
      
    </div>
  </div>
</div>
        
      </div>
      <div class="title_box">What�s new</div>
      <div class="border_box">
        <div class="product_title "><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        <li class="odd"><a href="#">Sony</a></li>
        <li class="even"><a href="#">Samsung</a></li>
        <li class="odd"><a href="#">Daewoo</a></li>
        <li class="even"><a href="#">LG</a></li>
        <li class="odd"><a href="#">Fujitsu Siemens</a></li>
        <li class="even"><a href="#">Motorola</a></li>
        <li class="odd"><a href="#">Phillips</a></li>
        <li class="even"><a href="#">Beko</a></li>
      </ul>
      <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of right content -->
			 <!-- List of the products avilable in the website-->
			<!-- Latest Products -->
				<?php
				//Call the show data function to show all data from database
		      	$dataImage=	$obj_img->get_all_prd();
		       	$row=mysql_num_rows($dataImage);
		       	
		       	//Make sure that the table is not empty
			     if($row!=0)
                   {     
                    ?>
			<div class="products">
				<h2>Latest Products</h2>
				
					<?php while($data=mysql_fetch_assoc($dataImage))
                          {
                       ?>
                         
				<div class="product-holder">
					<div class="product">
					 <!--Show the product image in the img box-->
					
		<a href="#" class="hvrlink" ><img src="Images/<?php echo $data['img'];?>" data-fullsize="Images/<?php echo $data['img'];?>" ></a>
						
          
						 <!--Details pane shows a big img and details about item retrieved from database -->
						<div class="details-pane">
              <h3 class="title">Flat Toggles and Sliders<span>(Oct 18th, 2013)</span></h3>
              <p class="desc"></p><?php echo $data['Details'];?>
              <div class="big-img"><a href="#" target="_blank"><img src="Images/<?php echo $data['img'];?>"></a></div>
            </div><!-- @end .details-pane -->
						<p>Case Model</p>							
					</div>
					
					<div class="price-label">
					<!--Show the price of the product -->
						<strike>$<?php echo $data['Price']+30;?></strike>
					<!--Make discount 30$ from the orignal price -->
						<p class="Price">$<?php $total=$data['Price']; echo $total ;?></p> 
					
					</div>
						<!--Assing the img from database into a local var -->
					<?php $img = $data['img']; ?>
					<div class="prd_options">
			        <div class="prod_details_tab"> 
			 	<!--Send the other pages the img of the picture to be used e.g for the check out to be added into the cart -->
			 	
			<!-- 	<input type='button' onClick=" $obj_img->add_to_cart('$img);" ><img src="images/cart.gif" alt="" border="0" id="btn" class="left_bt hover_move" />	-->
	<div id="btn"> <a href="index.php"  onclick="test('<?php echo $img; ?>', '<?php echo $data['Price']; ?>'); return false;" title="header=[Gifts] body=[&nbsp;] fade=[on]" ><img src="images/cart.gif" alt="" border="0" class="left_bt hover_move"   />	</div>		     
													  
			 <a href="javascript:void(0);" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/unfav .png" onclick="src='images/favs.gif' " alt="" border="0" class="left_bt hover_move"   />	
			
				</a> <a href="index.php" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt hover_move" />
					 
      </div>
      
     
      
				   </div>
				    
				</div>
			             
					<!--Closing the brace of while loop -->
					<?php } ?>	
				<div class="cl"></div>
			</div>
			
			<!-- END Latest Products -->
				<!--Closing the brace of if condition -->
				<?php } ?>	
				
				
				
				
			<!-- Feartured Products -->
				<!--Similar to the above code the retrieve the images from database and show the them as a slide show -->
			<?php
			$dataImage=	$obj_img->get_all_prd();
			$row=mysql_num_rows($dataImage);
			 if($row!=0)
                   {     
                    ?>
			<div class="products featured">
				<h2>Featured Products</h2>
				<div class="products-slider">
					<ul>
					<?php while($data=mysql_fetch_assoc($dataImage))
                          {
                       ?>
                       
                    
					
						<li>
							<a title="<?php echo $data['Details'];?>" href="#"><img src="Images/<?php echo $data['img'];?>" class="hvr-pulse"/></a>
							
							<p>Model Name</p>
								
						</li>
					
						  <?php } ?>					
					</ul>
					<?php } ?>	
				</div>
			</div>
			<!-- END Featured Products -->
			
  			  </div>
			<!-- Footer  -->
			<div id="footer">
				<div id="footer-top"></div>
				<div id="footer-middle">
					<div class="col styles">
						<h3>Styles</h3>
						<ul>
							<li><a title="gamer" href="#"><span class="bullet"></span>gamer</a></li>
							<li><a title="abstract" href="#"><span class="bullet"></span>abstract</a></li>
							<li><a title="retro" href="#"><span class="bullet"></span>retro</a></li>
							<li><a title="hi tech" href="#"><span class="bullet"></span>hi tech</a></li>
							<li><a title="for children" href="#"><span class="bullet"></span>for children</a></li>
							<li><a title="for ladies" href="#"><span class="bullet"></span>for ladies</a></li>							
						</ul>
					</div>
					<div class="col info">
						<h3>Information</h3>
						<ul>
							<li><a title="About MEGAStore" href="#"><span class="bullet"></span>About MEGAStore</a></li>
							<li><a title="Privacy Policy" href="#"><span class="bullet"></span>Privacy Policy</a></li>
							<li><a title="Terms &amp; Conditions" href="#"><span class="bullet"></span>Terms &amp; Conditions</a></li>
							<li><a title="Contact Us" href="#"><span class="bullet"></span>Contact Us</a></li>
							<li><a title="Site Map" href="#"><span class="bullet"></span>Site Map</a></li>												
						</ul>
					</div>
					<div class="col newsletter">
						<h3>Newsletter</h3>
						<p>NO SPAM! Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<form action="" method="post">
							<div class="field-holder"><input type="text" class="field" value="Enter Your Email" title="Enter Your Email" /></div>
							<div class="cl"></div>
							<input type="checkbox" name="check-box" value="" id="check-box" />
							<label for="check-box">Lorem ipsum dolor sit amet, consectetur </label>
							<input type="submit" value="submit" class="submit-button" />
						</form>
					</div>
					<div class="cl"></div>
				</div>
				<div id="footer-bottom">
					<p>&copy; MegaStore. Design by <a href="http://css-free-templates.com/">CSS-FREE-TEMPLATES.COM</a></p>
				</div>
			</div>
			<!-- END Footer -->
		</div>
		<!-- END Main -->
	</div>	
	
	<!-- setup details pane template -->
      <div id="details-pane" style="display: none;">
        <h3 class="title"></h3>
        <p class="desc"></p>
        <div class="big-img"><a href="" target="_blank"><img src=""></a></div>
      </div><!-- @end #details-pane
    </div><!-- @end #content -->
  </div><!-- @end #w -->
	<!---------------------------------------------------------------------------------------------------------------------------- -->
  
  
  	<!--Javascript executed when the user clicks on add to cart ref -->
  
  <script>
  
  


  $( "#btn " ).click(function() {
   

     
     
    });
  
    
   

    //This stops scrolling to the top
    $('.hvrlink ').click(function(e) {
       
       return false;
       });


    
    </script>
    <!--var add ="<?php $obj_img->add_to_cart("<script>document.writeln(a);</script>");?>)"; -->
    <script type="text/javascript"> 
function test(a,b) { 
alert(a); 

var add ="<?php echo $a ;?>";
alert(add); 
} 
</script>

    
    
   	<!--End of javascript -->
   	
   	

 
	 
</body>
</html>\