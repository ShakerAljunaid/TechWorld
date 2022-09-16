<!DOCTYPE html >
<html >


<head>
	<title> [تكنو ورلد [التواصل</title>
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
         <link rel="stylesheet" type="text/css" href="css/style_login.css" />
     <script src="js/Save_scroll.js" type="text/javascript"></script>
  <!----------------------------------------------------------------------------------------->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html ><head> <title>تكنو ورلد</title>

<head>
	
	 <!--Linking to the files related to the page-->
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	
    
     <link rel="stylesheet" type="text/css" href="style2.css" />
 

   

  <!-------------------------------------------------------------------------------------------------->
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
	
	//The session was proposed for the checkout page
     session_start();
    
	
	//Instance of the class that has the functions of database connection
	  $obj_img=new Image();
	 //Call the show data function to show all data from database
		      	$dataImage=	$obj_img->show_items();
		       	$row=mysql_num_rows($dataImage);
	 
	?>
	  <!--End of initial php code-->
	  
  <!--html page starting-->
</head>
<<body onload="loadScroll()"  onunload="saveScroll()" >
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
			<h1 id="logo"><a title="Home" >[الرئيسية]</a></h1>
                          
			<!-- Top Navigation -->
			<div id="top-navigation">	
				<ul>
					<li>  <?php echo ' عناصر: ' . $obj_img->count_items().'|المجموع: '.'$'. $obj_img->subtotal();?>  </li>
					
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
			
			
			
 <h3 id="pg_title">[التواصل]</h3>			
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
                            <li><a title="Drop down menu 4" href="CDs.php"><span class="sep-left"></span>سيديهات</a></li>
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
        <li class="even"><a href="javascript:void(0)">سيديهات</a></li>
        <li class="odd"><a href="javascript:void(0)">طابعات</a></li>
        <li class="even"><a href="javascript:void(0)">منوعات</a></li>
        <li class="odd"><a href="javascript:void(0)">قطع كمبيوترات</a></li>
        
      </ul>
      <div class="banner_adds"> <a href="javascript:void(0)"><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of right content -->
    
     <div class="center_content">
      <div class="center_title_bar">تواصل معانا</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form" dir="rtl">
            <div class="form_row">
             <input type="text" class="contact_input" />
              <label class="contact"><strong>الاسم:</strong></label>
             
            </div>
            <div class="form_row">
            <input type="text" class="contact_input" />
              <label class="contact"><strong>الايميل:</strong></label>
              
            </div>
            <div class="form_row">
            <input type="text" class="contact_input" />
              <label class="contact"><strong>الهاتف:</strong></label>
              
            </div>
            <div class="form_row">
             <input type="text" class="contact_input" />
              <label class="contact"><strong>الشركة:</strong></label>
             
            </div>
            <div class="form_row">
             
              <textarea class="contact_textarea" ></textarea>
               <label class="contact"><strong>رسالة:</strong></label>
            </div>
            <div class="form_row"> <a href="#" class="contact">ارسال</a> </div>
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
    
		
  
  
  	<!--Javascript executed when the user clicks on add to cart ref -->
  
  
  
  <script type="text/javascript">
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
	
	
</script>

    
    
   	<!--End of javascript -->
   	
   	

 
	 
</body>
</html>