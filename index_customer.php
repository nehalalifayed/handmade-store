
<?php

 session_start();

if(isset($_POST['out']))
{session_destroy();
}

$num = $_SESSION['nop']; 


?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="bootstrap/css/bootstrap-theme.min.css" rel='stylesheet' type='text/css' />
    <link href="bootstrap/css/bootstrap-theme.min.css" rel='stylesheet' type='text/css' />


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!---- tabs---->
<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!---- tabs---->

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li class="active"><a href="index_customer.php">HOME</a></li>
				 <li><a href="woman.php">Products</a></li>
                 <li><a href="free_pattern_customer.php">FREE PATTERN</a></li>			 

				 </ul>
				 <!-- script-for-menu -->
				 <script>
						$("span.menu").click(function(){
							$(".top-menu ul").slideToggle("slow" , function(){
							});
						});
				 </script>
				 <!-- script-for-menu -->	 	 

			 </div>
		 </div>
		 <div class="logo">
			 <a href="index_customer.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
				 
			 <div class="signin">
				  <div class="cart-sec">
				  <a href="cart.php"><img href="cart.php" src="images/cart.png" alt=""/>(<?php echo $num; ?>)</a></div>
				  <ul>
					
					 <li><a href="account.php"> ِAccount</a></li>
				 </ul>			 
                  <ul>
					
					 <li><a name="out" href="index.php"> Log Out</a></li>
				 </ul>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        manualControls: '#slider3-pager',
      });
    });
  </script>
</head>
<body>
    
 <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				  <img src="images/bnr.jpg" alt="">
				  <div class="banner-info">
				  <h3>FASHIONS</h3>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				  </div>
	         </li>
	         <li>
				 <img src="images/bnr2.jpg" alt="">
	        	 <div class="banner-info">
	        	 <h3>MODELING</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
			 </li>
	         <li>
	             <img src="images/bnr3.jpg" alt="">
	        	 <div class="banner-info">
	        	 <h3>FASHIONS</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<div class="tab-section">
	 <div class="wrap">
		 <div id="horizontalTab">
			   <ul class="resp-tabs-list">
					<li><a href="#">FEATURED</a></li>
					<li class="active"><a href="#">JUST ARRIVED</a></li>
					<li><a href="#">SALE</a></li>
					<div class="clearfix"></div>				
			   </ul>
			   <div class="resp-tabs-container">
				 <!---tab1----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo1">	
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />		
										<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c2.jpg" alt="" />
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab1----->
				 <!---tab2----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo2">	
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />		
										<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c2.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo2").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab2----->
				 <!---tab3----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo3">	
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />		
										<a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c2.jpg" alt="" />
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c4.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c1.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="images/c3.jpg" alt="" />					
									<a href="single.html"> <div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab3----->
			 </div>
		 </div>
	 </div>
	
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <p>Copyright &copy; 2017 All rights reserved | Template by  <a href="#">  W3layouts</a></p>
		 <div class="social">
			 
			 <a href="https://www.facebook.com/KnittingWonders1/"><span class="icon2"></span></a>
			 
		 </div>
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>
		