<!DOCTYPE html>
<html>

<head>
<title> [تكنو ورلد [سلة المشتريات]</title>>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
  
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/prettyCheckboxes.css" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/main.css" rel="stylesheet">
	
    <script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	

	<script src="js/functions.js" type="text/javascript"></script>
	
		 <script src="js/Save_scroll.js" type="text/javascript"></script>
           <link rel="stylesheet" type="text/css" href="css/style_login.css" />
      
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
   
    
   
    
  
    
    <script>


 function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>


    	<?php
	include('./classes/img_class.php');
    include('ajax_codes.php');
	  session_start();
	
	$obj_img=new Image();
	 	 $dataImage=$obj_img->show_items();
		 $row=mysql_num_rows($dataImage);
		 ?>
</head>

<body onload="loadScroll()"  onunload="saveScroll()">


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
			<h1 id="logo"><a title="Home" >صفحة المشتريات</a></h1>
                          
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
			
			
			
 <h1 id="pg_title">[المشتريات]</h1>			
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
		
           <div class="table-responsive cart_info">
                          <?php
                        if($row!=0)
                             {    
                            ?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu ">
							<td class="image"> المنتج</td>
							<td class="description">اسم المنتج</td>
							<td class="price">سعر المفرد</td>
							<td class="quantity">الكمية</td>
							<td class="total">المجموع</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
				
                            
                            <?php while($data=mysql_fetch_assoc($dataImage))
                            {
                             ?>
						<tr>
						
							<td class="cart_product ">
							
								<a href=""><img src="Images/<?php echo $data['prd_img'];?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $data['prd_name'];?></a></h4>
								<p><?php echo $data['prd_desc'];?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $data['prd_price'];?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
		<a class="cart_quantity_up" href="" onclick="quant_up('<?php echo $data['ID'];?>'); return false;"  id="btn_up"> + </a>
				<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $data['Quant'];?>" autocomplete="off" size="2">
				<?php
				         if($data['Quant']>1)
				          {
				           ?>
		<a class="cart_quantity_down" href="" onclick="quant_down('<?php echo $data['ID'];?>'); return false;"  id="btn_down"> - </a>
		           <?php 	}  			    ?>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php echo $data['prd_price']*$data['Quant'];?></p>
							</td>
							<td class="cart_delete">
	<a class="cart_quantity_delete" href="" onclick="delete_from_cart('<?php echo $data['ID']; ?>');  return false;" id="btn"><img src="images/remove.gif"></a>
							</td>
						</tr>
							<?php } ?>	

						
					</tbody>
				</table>
					<?php } ?>	
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section dir="rtl" id="do_action">
		<div class="container">
			<div class="heading">
				<h3>ماذا تريد ان تفعل الان هل تريد الموافقه؟</h3>
				<p>اذا اردت الموفقه الرجاء ملء البيانات الخاصة بك وسيتم ارسال رسالة الى ايميلك نعلمك بموعد الشحن</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						
						<ul  class="user_info">
							<li class="single_field">
								<label>المحافظه/الولاية:</label>
								<select>
									<option>صنعاء</option>
									<option>عدن</option>
									<option>بيروت</option>
									<option>دمشق</option>
									<option>حلب</option>
									<option>بغداد</option>
									<option>واشنطن</option>
									<option>نيودلهي</option>
								</select>
								
							</li>
							<li class="single_field">
								<label  dir="rtl">الدولة:</label>
								<select  dir="rtl">
									<option >تحديد</option>
									<option>اليمن</option>
									<option>لبنان</option>
									<option>سوريا</option>
									<option>العراق</option>
									<option>الصين</option>
									<option>الولايات المتحدة</option>
									<option>الهند</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>الرقم البريدي:</label>
								<input type="text">
							</li>
						</ul>
						
						<a class="btn btn-default check_out" href="">استمرار</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li >  <span>$<?php echo $obj_img->subtotal();?> </span><div class="arb">السعر الكلي: </div>  </li>
							<li><span>$2</span><div class="arb">الجمرك: </div> </li>
							<li><span>مجاناً</span><div class="arb">تكاليف النقل:</div></li>
							<li><span>$<?php echo $obj_img->subtotal()+2; ?></span><div class="arb">السعر النهائي:</div></li>
						</ul>
							
							<a class="btn btn-default check_out" href="" onClick="alert('Please confirm the message sent to your email');">موافقة</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

   
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

    



</body>
</html>