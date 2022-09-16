


<!DOCTYPE html>
<html >
<head>
<title> [تكنو ورلد [المنتجات -طابعات</title>


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
         <link rel="stylesheet" type="text/css" href="css/style_login.css" />
      

  <!----------------------------------------------------------------------------------------->


<script>


 function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

    <!--Php code that set the connection to the database-->
   	<?php
	include('./classes/img_class.php');
		include('ajax_codes.php');
	//The session was proposed for the checkout page
     session_start();
     $id=0;
	
	//Instance of the class that has the functions of database connection
	  $obj_img=new Image();
	 
	 //Call get all data function to show the data in the page 
	     $dataImage=$obj_img->get_all_prd('طابعات');
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
					<form name="frmSearch " action="Search_page.php" method="post">					
						<input type="text" class="field light_hover" dir="rtl" name="criterion" value="اسم المنتج"  title="Ø§Ø§Ø³Ù… Ø§Ù„Ù…Ù†ØªØ¬" onfocus="clearText(this)" onblur="clearText(this)"  />
						 
						<input type="submit"  name="sbmit" value="" class="submit-button   " id="btnHover"/>
						
							<label><?php 
							
							if(isset($_SESSION['not found']))
							$_SESSION['Not found'] ?></label>						
					</form>
					  <!--End of the searching form-->
					 					
					<div class="cl"></div>
				</div>	
			</div>
			<!-- END Search -->						
			<div class="cl"></div>
			<!-- Logo -->
			<h1 id="logo"><a title="Home" >[طابعات]</a></h1>
                          
			<!-- Top Navigation -->
			<div id="top-navigation">	
				<ul>
		 <li id="crt_inf">  <?php echo ' عناصر: ' . $obj_img->count_items().'|المجموع: '.'$'. $obj_img->subtotal();?>  </li>
					<?php 
					if(isset( $_SESSION['user_name']))
					{
						?>
							<li><label  class="start hvr-hang " ><span></span><?php echo  $_SESSION['user_name'];?></label></li>
				<?php	} 
					else
					{
					if(isset($_POST['user_name']))
					 {
					  $_SESSION['user_name']=$_POST['user_name'];
					  ?>
						<li><label  class="start hvr-hang " ><span></span><?php echo  $_SESSION['user_name'];?></label></li>
				 <?php	} 
				 else {
				 ?>
				<li><a id="modal_trigger" href="#modal"  class="start hvr-hang   " title="حسابي"><span></span>حسابي</a></li>                   
					<?php }
					}?>
					<li><a class="cart hvr-hang  " title="سلة المشتريات" href="cart.php"><span></span>سلة المشتريات </a></li>
								
				</ul>		
			</div>	
			
			
			
<div id="pg_title"> <h3> [المنتجات-طابعات] </h3>	</div>			
			<!-- END Top Navigation -->	
			<div class="cl"></div>		
		</div>
		<!-- END Header -->
		
		 <!----Login and signup--->
		 
		 <div class="container " dir="rtl">


	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">تسجيل الدخول</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">التسجيل عبر فيسبوك</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">التسجيل عبر جوجل</span>
					</a>
				</div>

				<div class="centeredText">
					<span>او استخدم ايميلك الخاص</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn"  >تسجيل الدخول</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">اشتراك </a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form method="post">
					<label>الايميل / اسم المستخدم</label>
					<input type="text" name="user_name" />
					<br />

					<label>كلمة المرور</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">تذكر كلمة السر</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> السابق</a></div>
						<div class="one_half last"><a href="javascript:void(0)" id="login" class="btn btn_red" onclick="$(this).closest('form').submit();" >دخول</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">هل نسيت كلمة المرور؟</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form method="post">
					<label>الاسم الكامل</label>
					<input type="text" />
					<br />

					<label>البريد الالكتروني</label>
					<input type="email" />
					<br />

					<label>كلمة المرور</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">ارسال الهدايا الى ايميلي</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> السابق</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">تسجيل</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>
<!--End Signup and login-->
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a title="الرئيسية" href="index.php">الرئيسية<span class="sep-right"></span></a></li>
				<li>
					<a title="المنتجات" href=""><span class="sep-left"></span>المنتجات<span class="sep-right"></span></a>
                    <div class="dd">
						<ul>
							<li><a title="Drop down menu 1" href="Phones.php"><span class="sep-left"></span>جوالات</a></li>
							<li>
								<a title="Drop down menu 2" href=""><span class="sep-left"></span>كمبيوترات </a>
								<div class="dd">
									<ul>
								    <li><a title="Drop down menu 2" href="Laptops.php"><span class="sep-left"></span>محممولة </a></li>	
									 <li><a title="Drop down menu 3" href="Bags.php"><span class="sep-left"></span>حقائب</a></li>	
                                     <li><a title="Drop down menu 4" href="Computer_parts.php"><span class="sep-left"></span>قطع كمبيوترات</a></li>
                                     										
									</ul>
								</div>
                                </li>
							<li><a title="Drop down menu 3" href="Printers.php"><span class="sep-left"></span>طابعات</a></li>
                            <li><a title="Drop down menu 4" href="CDs.php"><span class="sep-left"></span>طابعات</a></li>
                              <li><a title="Drop down menu 4" href="Varieties.php"><span class="sep-left"></span>منوعات</a></li>										
						</ul>
					</div>
				</li>
			
				<li>
					<a title="Retro" href="About.php"><span class="sep-left"></span>حول الموقع<span class="sep-right"></span></a>
												
				</li>
				<li><a title="HI Tech" href="Contact.php"><span class="sep-left"></span>التواصل<span class="sep-right"></span></a></li>
					
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
							 	<p><?php echo $data['Name']; ?></p>
								<p class="model"></p>
								<a title="Buy Now!" class="buy-now" href="#">اشتري الان!</a>
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
  <p> <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"><font color="#FFFF99"><h3>بمناسبة العام الجديد2016 تخفيضات 10% لجميع المنتجات سريعاً</h3></font><font color="#00CC99"><h4>.................متعة تسوق التكنولوجيا في عالم مليء بالتكنولوجيا.</h4></font></marquee><br>

  </p>

 
  </div>
  
	 <!--The right content of the page the cart and the adds..etc -->
			<div class="cl"></div>
			 <div class="right_content">
			 <!---Php to get the items in the cart-->
			 
      <div class="shopping_cart">
      
        <div class="cart_title">سلة التسوق</div>
        	
        <div class="cart_details"> "<?php echo $obj_img->count_items();?>" عناصر <br />
          <span class="border_cart"></span> المجموع: <span class="price">$"<?php echo $obj_img->subtotal();?>"</span> </div>
         <div class="basket">
        
  <div  id="basket" class="cart_icon hover_move"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
  <div class="popup">
     <div class="row header">
       <span>السعر</span>
      <span>العنصر</span>
      
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
      <span>$<?php echo $data['prd_price'];?></span>
     <div class= "img_item">  <a href="javascript:void(0);"><img src="Images/<?php echo $data['prd_img'];?>" alt="" border="0" id="btn"  /></a></div>
     
     
    </div>
    <!----end of while loop-->
      <?php  }?>
      <!----end of if condition-->
      <?php  }?>
    <div class="row checkout">
     <span><div class="view_cart"><a href="cart.php">دخول الى سلة المشترايات></a></div></span>
    <span> <div class="checkout-button"><a href="cart.php" >صفحة الخروج</a></div></span> 
      
    </div>
  </div>
</div>
        
      </div>
      <div class="title_box">ما� الجديد</div>
      <div class="border_box">
        <div class="product_title "><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">المنتجات المتوفرة</div>
      <ul class="left_menu">
        <li class="odd"><a href="javascript:void(0)">كمبيوترات محمولة</a></li>
        <li class="even"><a href="javascript:void(0)">جوالات</a></li>
        <li class="odd"><a href="javascript:void(0)">حقائب كمبيوترات</a></li>
        <li class="even"><a href="javascript:void(0)">طابعات</a></li>
        <li class="odd"><a href="javascript:void(0)">طابعات</a></li>
        <li class="even"><a href="javascript:void(0)">منوعات</a></li>
        <li class="odd"><a href="javascript:void(0)">قطع كمبيوترات</a></li>
        
      </ul>
      <div class="banner_adds"> <a href="javascript:void(0)"><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of right content -->
			 <!-- List of the products avilable in the website-->
			<!-- احدث المنتجات -->
				<?php
				//Call the show data function to show all data from database
		      	   $dataImage=$obj_img->get_all_prd('طابعات');
		       	$row=mysql_num_rows($dataImage);
		       	
		       	//Make sure that the table is not empty
			     if($row!=0)
                   {     
                    ?>
			<div class="products">
				<h2>احدث المنتجات</h2>
				
					<?php while($data=mysql_fetch_assoc($dataImage))
                          {
                       ?>
                         
				<div class="product-holder">
					<div class="product">
					 <!--Show the product image in the img box-->
					
		<a href="#" class="hvrlink" ><img src="Images/<?php echo $data['img'];?>" data-fullsize="Images/<?php echo $data['img'];?>" ></a>
						
          
						 <!--Details pane shows a big img and details about item retrieved from database -->
						<div class="details-pane"  dir="rtl">
              <h3 class="title">تفاصيل:</h3>
              <p class="desc"></p><?php echo $data['Details'];?>
              <div class="big-img"><a href="#" target="_blank"><img src="Images/<?php echo $data['img'];?>"></a></div>
            </div><!-- @end .details-pane -->
						<p><?php echo $data['Name'];?></p>							
					</div>
					
					
                    <div class="price-label hvr-pulse">
					<!--Show the price of the product -->
						<strike>$<?php echo $data['Price']+3;?></strike>
					<!--Make discount 30$ from the orignal price -->
						<p class="Price">$<?php $total=$data['Price']; echo $total ;?></p> 
					
					</div>
						<!--Assing the img from database into a local var -->
					<?php $img = $data['img']; ?>
					<div class="prd_options">
			        <div class="prod_details_tab"> 
			 	<!--Send the other pages the img of the picture to be used e.g for the check out to be added into the cart -->
			 	
			<!-- 	<input type='button' onClick=" $obj_img->add_to_cart('$img);" ><img src="images/cart.gif" alt="" border="0" id="btn" class="left_bt hover_move" />	-->
	 <a href="javascript:void(0)" id="btn" onclick="add_to_cart('<?php echo $img; ?>');  return false;" title="header=[Gifts] body=[&nbsp;] fade=[on]" ><img src="images/cart.gif" alt="" border="0" class="left_bt hover_move"   />	   	     
													  
			 <a href="javascript:void(0);" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/unfav .png" onclick="ChangeMe(this);"  alt="" border="0" class="left_bt hover_move"   />	
			
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
			   $dataImage=$obj_img->get_all_prd('طابعات');
			$row=mysql_num_rows($dataImage);
			 if($row!=0)
                   {     
                    ?>
			<div class="products featured">
				<h2>المنتجات المميزه</h2>
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
						<h3>مميزتنا</h3>
						<ul>
							<li><a title="gamer" href="#"><span class="bullet"></span>التقنية العالية</a></li>
							<li><a title="abstract" href="#"><span class="bullet"></span>ضمانة المنتجات</a></li>
							<li><a title="retro" href="#"><span class="bullet"></span>منتجات نادرة</a></li>
							<li><a title="hi tech" href="#"><span class="bullet"></span>نواكب التكنولوجيا الحديثة</a></li>
							<li><a title="for children" href="#"><span class="bullet"></span>منتجات خاصة حسب الطلب</a></li>
							<li><a title="for ladies" href="#"><span class="bullet"></span>منتجات مناسبة لكل الاعمار</a></li>							
						</ul>
					</div>
					<div class="col info">
						<h3>معلومات</h3>
						<ul>
							<li><a title="About MEGAStore" href="#"><span class="bullet"></span>حول تكنو ورلد</a></li>
							<li><a title="Privacy Policy" href="#"><span class="bullet"></span>قوانين الموقع</a></li>
							<li><a title="Terms &amp; Conditions" href="#"><span class="bullet"></span> المصطلحات  و الشروط</a></li>
							<li><a title="Contact Us" href="#"><span class="bullet"></span>تواصل معنا</a></li>
							<li><a title="Site Map" href="#"><span class="bullet"></span>خريطة الموقع</a></li>												
						</ul>
					</div>
					<div class="col newsletter">
						<h3>االبلاغات</h3>
						<p>الموقع خالي تماماً من الاسبامس والاعلانات المزعجة اذا وجد الرجاء كتابة ايميلك هنا لتعلمنا بذالك</p>
						<form action="" method="post">
							<div class="field-holder"><input type="text" class="field" value="الرجاء كتابة ايميلك هنا" title="Enter Your Email" /></div>
							<div class="cl"></div>
							<input type="checkbox" name="check-box" value="" id="check-box" />
							<label for="check-box">اابلاغ عن الاسبام </label>
							<input type="submit" value="موافق" class="submit-button" />
						</form>
					</div>
					<div class="cl"></div>
				</div>
				<div id="footer-bottom">
					<p>&copy;  <a href="http://techno_world.com/">جميع الحقوق محفوظة لموقع تكنو ورلد</a></p>
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
  
  
$(document).ready(function(){
$( "#btn " ).click(function() {
   
	 //This scrolls up to the position of the basket,that makes the user see when the item is flied into the cart
	$('html, body').animate({
			'scrollTop' : $(".cart_icon").position().top
		});
		//Select item image and pass to the function
		var itemImg = $(this).parent().find('img').eq(0);
		flyToElement($(itemImg), $('.cart_icon'));

    });
     }); 
  
    
   

    //This stops scrolling to the top
    $('.hvrlink ').click(function(e) {
       
       return false;
       });


$("#modal_trigger").leanModal({top : 100, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});
		
		

	})
	
	

var isUnfav=true;
function ChangeMe(target)
{
isUnfav=!isUnfav;
if(isUnfav)
target.src = "images/unfav .png";
else
target.src = "images/favs.gif";
}
    
    </script>
    
    </script>
    
    
   	<!--End of javascript -->
   	
   	

 
	 
</body>
</html>