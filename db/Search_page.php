


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz"><head><title>Company name - title</title>

<head>
	<title>CSS Free Templates with jQuery Slider</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/prettyCheckboxes.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/prettyCheckboxes.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
		<script src="js/DetailsPanel.js" type="text/javascript"></script>

	
	<?php
	include('./classes/img_class.php');
     session_start();
	  
	
	$obj_img=new Image();
	/*if(isset( $_SESSION['keyword']))
	  {
	   $keyword=$_SESSION['keyword'];
	   
	   $dataImage=	$obj_img->search_item($keyword);
		 $row=mysql_num_rows($dataImage);
	  
	 }*/
	 
	 if(@$_POST['sbm'])
	 {  $keyword=$_POST['sbm'];
	 	$dataImage=	$obj_img->search_item($keyword);
		 $row=mysql_num_rows($dataImage);
 	}
		 
		
	
	      
       
		
	?>
	


</head>
<body>
	<div class="shell">
		<!-- Header -->
		<div id="header">
			<!-- Search  -->			
			<div id="search">
				<div class="search-holder">
					<form action="" method="post">					
						<input type="text" name="keyword" class="field" value="Keywords" title="Keywords" />
						<input type="submit" name="sbm" value="" class="submit-button" />						
					</form>
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
					<li>0 items  $ 0,00</li>
					<li><a class="start" title="My Account" href="#"><span></span>My Account</a></li>
					<li><a class="cart" title="shopping cart" href="#"><span></span>shopping cart </a></li>
					<li><a class="end" title="checkout" href="#">checkout<span></span></a></li>				
				</ul>		
			</div>				
			<!-- END Top Navigation -->	
			<div class="cl"></div>		
		</div>
		<!-- END Header -->
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a title="Home" href="#">االرئيسية<span class="sep-right"></span></a></li>
				<li>
					<a title="Games" href="#"><span class="sep-left"></span>????????<span class="sep-right"></span></a>
				</li>
				<a title="Retro" href="#"><span class="sep-left"></span>??? ??????<span class="sep-right"></span></a>
			
				<li>
						<li><a title="Abstract" href="#"><span class="sep-left"></span>????????<span class="sep-right"></span></a></li>
					<div class="dd">
						<ul>
							<li><a title="Drop down menu 1" href="#"><span class="sep-left"></span>???????</a></li>
							<li>
								<a title="Drop down menu 2" href="#"><span class="sep-left"></span>????????? </a>
								<div class="dd">
									<ul>
										<li><a title="Drop down menu 1" href="#"><span class="sep-left"></span><span class="dd-first"></span> ????? ????</a></li>
										<li><a title="Drop down menu 2" href="#"><span class="sep-left"></span>?????</a></li>
										<li><a title="Drop down menu 3" href="#"><span class="sep-left"></span>??????? </a></li>	
                                       
                                          <li><a title="Drop down menu 4" href="#"><span class="sep-left"></span>??? ?????????</a></li>										
									</ul>
								</div>
							</li>
							<li><a title="Drop down menu 3" href="#"><span class="sep-left"></span>??????</a></li>
                            <li><a title="Drop down menu 4" href="#"><span class="sep-left"></span>???????</a></li>
                              <li><a title="Drop down menu 4" href="#"><span class="sep-left"></span>?????????</a></li>										
						</ul>
					</div>
				</li>
				<li><a title="HI Tech" href="#"><span class="sep-left"></span>???????<span class="sep-right"></span></a></li>
					
			</ul>
			<div class="cl"></div>
		</div>
		<!-- END Navigation -->
		<!-- Main  -->
		<div id="main">
			<!-- Slider -->
			<div id="slider-holder">				
				<div id="slider">
				 <?php 
        if($row!=0)
            {    
               ?>
			
				
					<ul>
					<?php while($data=mysql_fetch_assoc($dataImage))
                          {
                       ?>
						<li>
							<img src="Images/<?php echo $data['img'];?>" alt="Beautiful white case with flowers" />
										<div class="caption">
								<p>For Real Gamers</p>
								<p class="model">Lian-Li PC-7FW Midi Tower</p>
								<a title="Buy Now!" class="buy-now" href="#">buy now!</a>
							</div>							
						</li>
						<li>
							<img src="Images/<?php echo $data['img'];   ?>" alt="Computer case with cartoon characters" />
							
							<div class="caption">
								<p>For Gamers</p>
								<p class="model">Lian-Li PC-7FW Tower</p>
								<a title="Buy Now!" class="buy-now" href="#">buy now!</a>
							</div>							
						</li>
						<?php } ?>				
					</ul>
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
			
		<div id="Page_top">
  <p> <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"><font color="#FFFF99"><h3>30%off on all summer wear...Hurry!!!</h3></font><font color="#00CC99"><h4>Enjoy the pleasure of shopping with Fashion Shop...</h4></font></marquee><br>

  </p>

 
  </div>
	
			<div class="cl"></div>
			 <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> 3 items <br />
          <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
        <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <div class="title_box">What�s new</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
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
			
			<!-- Latest Products -->
				<?php
			$dataImage=	$obj_img->get_all_imgs();
			$row=mysql_num_rows($dataImage);
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
					
					<a href="http://pixelsdaily.com/resources/photoshop/psds/flat-toggles-and-sliders/" class="hvrlink" target="_blank"><img src="Images/<?php echo $data['img'];?>" data-fullsize="img/flat-toggles-sliders.jpg" alt="Flat Toggles and Sliders"></a>
						
          
						
						<div class="details-pane">
              <h3 class="title">Flat Toggles and Sliders<span>(Oct 18th, 2013)</span></h3>
              <p class="desc"></p><?php echo $data['Datials'];?>
              <div class="big-img"><a href="http://pixelsdaily.com/resources/photoshop/psds/flat-toggles-and-sliders/" target="_blank"><img src="Images/<?php echo $data['img'];?>"></a></div>
            </div><!-- @end .details-pane -->
						<p>Case Model</p>							
					</div>
					
					<div class="price-label">
					
						<strike>$117.50</strike>
						<p class="Price">$<?php echo $data['Price'];?>.<sup><?php $total=$data['Price']-0.30; echo settype($total,"int") ;?></sup></p> 
					
					</div>
					<?php $img = $data['img']; ?>
					<div class="prd_options">
			 <div class="prod_details_tab"> <form method="post"> 
			      <button type="submit"  name="sumit"><img src="images/cart.gif" alt="" border="0" id="btn" class="left_bt" ></button>
												   	<input type="hidden" name="prd_ID" value="<?php echo $data['ID']; ?>" />
													    </form>
					 <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" />
					 
      </div>
      
     
      
				   </div>
				    
				</div>
			             
				
					<?php } ?>	
				<div class="cl"></div>
			</div>
			
			<!-- END Latest Products -->
				<?php } ?>	
				
				<?php if(@$_POST['sumit'])
          { $obj_img->ins_cart($data['Name'],$data['img'],$data['Datials'],$data['Price']); } ?>
				
				
			<!-- Feartured Products -->
			
			<?php
			$dataImage=	$obj_img->get_all_imgs();
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
							<a title="Details" href="#"><img src="Images/<?php echo $data['img'];?>" /></a>
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
		<script>
$( "#btn " ).click(function( event ) {
 var name="<?php  echo $product_img ?>";
    alert(name);
 
});
</script>

	 
</body>
</html>