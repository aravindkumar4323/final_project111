<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Auto Scope</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.flipster.css">
		<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/bootstrap-show-password.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile">
		<div class="header_left">
			<ul>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
			</ul>
		</div>
		<div class="header_right">
		     

		</div>
		<div class="clearfix"></div>
</div>
<!-- //header -->

	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span class="logo-c">Auto</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" class="hvr-underline-from-center active">Home</a></li>
							<li><a href="#about" class="hvr-underline-from-center scroll">About Us</a></li>
							<li><a href="#gallery" class="hvr-underline-from-center scroll">Latest Cars</a></li>
							<li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>				
							  <ul class="dropdown-menu" role="menu">
				                <li><a href="admin/index.php">Admin</a></li>
				                <li><a href="emplogin.php">Staffs</a></li>
				                <li><a href="userlogin.php">Users</a></li>
				              </ul>                
				            </li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>

		</div>
		<div class="clearfix"></div>
		<br>
			<div class="container">

		<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="well login-container" style="margin-top: -8px;">
					<h4 class="text-center">Register Now</h4>
					<hr>

					<form name="" method="post" action="" enctype="multipart/form-data" style="margin-left: 80px; margin-right: -50px;">
					 <div class="row">
						<div class="form-group col-md-4">
							<label>Full name:</label>
							<input type="text" name="fname" pattern="[a-zA-Z]{3,14}" placeholder="Enter your full name" class="form-control" required> 
						</div>
						<div class="form-group col-md-4">
							<label>Gender:</label><br>
							<input type="radio" name="gender" value="Male" checked>Male
							<input type="radio" name="gender" value="Female">Female
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label>Address:</label>
							<input type="text" name="address" placeholder="Enter your Address" class="form-control" required> 
						</div>
						<div class="form-group col-md-4">
							<label>Contact:</label>
							<input type="text" name="contact" pattern="[0-9]{10}" placeholder="Enter your contact no" class="form-control" required> 
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label>Iamge:</label>
							<input type="file" name="photo" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Email:</label>
							<input type="email" name="email" placeholder="Enter your email_ID" class="form-control" required> 
						</div>
						
						
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label>Password:</label>
							<input type="password" id="password" name="password" placeholder="Enter your Password"  data-toggle="password" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Confirm Password:</label>
							<input type="password" id="password" name="cpassword" placeholder="Enter your Password again"  data-toggle="password" class="form-control" required>
						</div>
					</div>	
					<div class="row">
						<div class="form-group col-md-4">
						<label></label>
						<input type="submit" name="register" value="REGISTER" class="btn btn-primary btn-block">
						</div>
					</div>	
					</form>
		 <?php 
    	include('con_db.php');
    	if(isset($_POST['register'])) 
    	{
    		 //Image storing code
			$file = rand(1000,100000)."-".$_FILES['photo']['name'];
		    $file_loc = $_FILES['photo']['tmp_name'];
		    $file_size = $_FILES['photo']['size'];
		    $file_type = $_FILES['photo']['type'];
		    $folder="photos/";
		    // new file size in KB
		    $new_size = $file_size/2048;  
		    // new file size in KB
		    
		    // make file name in lower case
		    $new_file_name = strtolower($file);
		    // make file name in lower case
		    
		    $final_file=str_replace(' ','-',$new_file_name);
		    
		    if(move_uploaded_file($file_loc,$folder.$final_file))
		    {// Start of if image file upload successful
    		$fname=$_POST['fname'];
    		$gender=$_POST['gender'];
    		$address=$_POST['address'];
    		$contact=$_POST['contact'];
    		$pwd=$_POST['password'];
    		$cpwd=$_POST['cpassword'];
    		$email=$_POST['email'];
    		if($pwd==$cpwd)
    		{
	    		$sql=mysql_query("INSERT INTO `user`(`Full_Name`,`Image`, `Address`, `Contact_no`, `E_Mail`, `Gender`, `Password`,`Reg_date`) VALUES ('$fname','$final_file','$address','$contact','$email','$gender','$pwd',now())") or die(mysql_error());
	    		if($sql)
	    		{
	    			echo '<script>alert("Registered!! now please login!!!!"); window.location="userlogin.php"; </script>';
	    		}
	    		else
	    		{
	    			echo '<script>alert("Failed to add"); </script>';
	    		}
        	}
        	else{
        		echo '<script>alert("Password Mismatch"); </script>';
        	}
        }
    	}

    ?>
  </div>
 	</div>
				</div>
			</div>		  
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
		$("#password").password('toggle');
	</script>
<!-- //banner -->
<!-- bootstrap-pop-up -->
	
<!-- //bootstrap-pop-up -->
<!-- /banner-bottom -->
	
<!-- //banner-bottom -->
									

<!-- about -->

<!--about-section-->

<!-- about -->

<!-- /contact -->
	
<!-- //contact -->
	
<!-- footer -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h3>About us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum.</p>
<div class="w3ls_newsletter_social">
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>				
			</div>
			<div class="col-md-2 footer-grid">
			     <h3>Need Help ?</h3>
					<ul>
						
						<li><a class="scroll" href="#home">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#team">Team</a></li>
						<li><a class="scroll" href="#service">Deals</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid">
					<h3>Recently Launched</h3>
			
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="#"><img src="images/s3.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="footer-grid1-right">
							<a href="#">Lorem ipsum dolor eveniet ut molesti</a>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid1">
				
						<div class="footer-grid1-left">
							<a href="#"><img src="images/s1.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="footer-grid1-right">
							<a href="#">Lorem ipsum dolor earum rerum tenet</a>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
				<div class="col-md-3 footer-grid">
					
				</div>
				<div class="clearfix"> </div>
			</div>
	
	</div>
	<div class="w3l_footer_agile">
			<p>© 2017 Car Rental. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			
		</div>
<!-- //footer -->
	
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--scripts--> 
<!-- Counter required files -->
		<script type="text/javascript" src="js/dscountdown.min.js"></script>
		<script src="js/demo-1.js"></script>
		<script>
			jQuery(document).ready(function($){						
				$('.demo2').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black'
					});								
			});
		</script>
	<!-- //Counter required files -->

	<!--//scripts--> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<script src="js/modernizr.custom.js"></script>
		
							
	<script src="js/jquery.flipster.js"></script>
<script>

	$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });


</script>	
<!--banner Slider starts Here-->
							 <!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination :false,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>