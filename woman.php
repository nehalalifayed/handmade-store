<?php
session_start();
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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Woman :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li ><a href="index_customer.php">HOME</a></li>
				 <li class="active" ><a href="woman.php" >Products</a></li>
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
<div class="men-fashions">
	 <div class="container">
         
         	 <div class="col-md-3 side-bar">
			  <div class="categories">
					<h3>CATEGORIES</h3>
				  <ul>
						<li><a href="scarves.php">scarves</a></li>
						<li><a href="shco.php">cowls and shawls</a></li>
						<li><a href="hat.php">hats</a></li>
						<li><a href="sweat.php">sweaters</a></li>
						<li><a href="blanket.php">blankets</a></li>
						<li><a href="amug.php">amugrumi</a></li>
						<li><a href="yarn.php">Yarn</a></li>
				  </ul>
			  </div>
			 
		 </div>

         
         
		 <div class="col-md-9 fashions">
			 <div class="title">
				 <h3> BEST SELLINGS  </h3>
			 </div>
             
			 			 <div class="fashion-section">
                 <?php   
                    
                   $arrayName = $_SESSION['pr'];
                 $db = mysqli_connect("localhost","root","","store");
// Check connection
               if (!$db) {
             die("Connection failed: " . mysqli_connect_error());
                 }
                 $type="1";
                  $sql="SELECT * FROM product WHERE BEST_SELLINGS='$type' ";
                  $result = mysqli_query($db, $sql);
                 $num= mysqli_num_rows($result);
                 $counter=0;
                 while($row = mysqli_fetch_assoc($result)) {
                     $counter++;
                     $name = $row["Name"];
                     $adress = $row["Adress"];
                     $Price = $row["Price"];
                     $Statue = $row["Statue"];
                     $Image = $row["Image"];
                     $description = $row["Description"];
                     $material = $row["Material"];
                     $Weight = $row["Weight"];
                     
                     
                 ?>
                 <?php  if($counter<4) {?>
				 <div class="fashion-grid1">
					 <div class="col-md-4 fashion-grid">
						 <a href=" <?php echo $adress; ?> "><img src=" <?php echo $Image; ?>" alt=""/>
							 <div class="product">    
								 <h3> <?php echo $name; ?></h3>
								 <p><span></span>  <?php echo $Price; echo "L.E"; ?>  </p>								 
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href=" <?php echo $adress; ?>">Quick View</a></h4>
						 </div>
					 </div>
                     <?php } ?>
                     <?php if($counter == 3 ) {?>
                      <div class="clearfix"></div>
				 </div>
                     <?php } ?>
                     
                     <?php
                     
                      if( ($counter < 7) && ($counter > 3)){
                     ?>
                     
                      <div class="fashion-grid2">
					 <div class="col-md-4 fashion-grid">
						 <a href=" <?php echo $adress; ?> "><img src=" <?php echo $Image; ?>" alt=""/>
							 <div class="product">    
								 <h3> <?php echo $name; ?></h3>
								 <p><span></span>  <?php echo $Price; echo" L.E"; ?>  </p>								 
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href=" <?php echo $adress; ?>">Quick View</a></h4>
						 </div>
					 </div>
                     
                     <?php } ?>
                          
                          <?php if($counter == 6 ) {?>
                      <div class="clearfix"></div>
				 </div>
                     <?php } ?>
                     
                    
                         <?php
                      if(($counter <=9) && ($counter >6)) {
                     ?>
                     
                      <div class="fashion-grid3">
					 <div class="col-md-4 fashion-grid">
						 <a href=" <?php echo $adress; ?> "><img src=" <?php echo $Image; ?>" alt=""/>
							 <div class="product">    
								 <h3> <?php echo $name; ?></h3>
								 <p><span></span>  <?php echo $Price; echo" L.E"; ?>  </p>								 
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href=" <?php echo $adress; ?>">Quick View</a></h4>
						 </div>
					 </div>
                     
                     <?php } ?>
                     
                       <?php if(($counter == 9) ) {?>
                           <div class="clearfix"></div>

                           </div>
                                <?php  }  ?>
                          
                     
                     <?php } ?>
                 
                        
                     <?php if((($counter % 3) == 1) ) { ?>
                           <div class="clearfix"></div>

                           </div>
                                <?php  }  ?>
                 
                             <div class="clearfix"></div>
                                          
</div>
	
 </div>
</div>
<!---->
<div class="footer">
	 <div>
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