<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart | FashionBD</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<style>
	/*img{
		height:90px;
		width: 90px;
	}*/
	</style>
</head>


<body>
	<header id="header"><!--header-->
    <div class="header-top"><!--header-top-->
      <div class="container">
        <div class="row">
          <div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
            <div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
           <img src="projectpic/FashionBD (4).png" alt="" height="150px">
            </div>
          </div>
          <div class="col-md-8 clearfix">
            <div class="shop-menu clearfix pull-right">
              <ul class="nav navbar-nav">
                <li><a href="index1.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#"></a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-top-->
  
    <!--  -->
  </header><!--/header-->

	<section id="cart_items"> <!-- cart -->
		<?php 
     include("header.php");


   ?>

	 <div class="container">
	 	<div class="breadcrumbs">
				<h1 class="headd">Cart</h1>
			</div>
	 	<div class="col-md-12 get_cart my-5">
	 		
	 	</div>
	 </div>


	 <script type="text/javascript">
	 	$(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
              	$("#get_cart").html(data.out);
                $("#cart").text(data.da);
                $("#total").text(data.total);
              }
           });
           }

           setInterval(show_mycart,1000);

	 	});

	 	$(document).on("click",".remove",function(){
             var id = $(this).attr("id");

             var action ="delete";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});

	 		$(document).on("click",".clearall",function(){
             var id = $(this).attr("id");

             var action = "clearall";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});
	 </script>



<div class="text-center">
  
  <a class="btn btn-dark  col-md-2" href="payment.php">Payment</a>
</div>


	</section><!--/#do_action-->
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="header_top"><!--footer bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="">&copy; BFMH.com 2022 All Rights Reserved.</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/footer bottom-->
		</div>
		
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>