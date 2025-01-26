<?php 
session_start();
 ?>
<?php
include ('insert.php');
error_reporting(0);
?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>dashboard | FashionBD</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<style>
		img{
			height:90px;
			width: 90px;
		}
		.tag{
			color:rgb(208,78,9);
		font-family: 'Lobster', cursive;
		font-weight: bold;
		}
		.sub-menu{
			border-bottom: none !important;
		}
		.listy{
			border-radius: 50px !important;
			border-bottom: 0px !important;
			list-style: none !important;
			padding:10px 10px 10px 10px;
		}
		.listy :hover{
			border-radius: 50px !important;
			border-bottom: 0px !important;
			list-style: none !important;
			padding:10px 10px 10px 10px;
		}
		.listy li {
    list-style: none;
    border-bottom: none;
    width: 100%;

}
.listy ul li:hover {
	border-radius: 50px !important;
	}
.padding{
	padding:20px 50px 50px 50px;
}
		.name{
			font-size:50px !important;
			color: orange;
			text-align: center;
			font-family: 'Lobster', cursive;
		font-weight: bold;
		padding:20px 70px 70px 70px;
		}
		body{
    background-image: url(projectpic/back.jpeg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-attachment: fixed;
    }
   	   .pos{
        opacity: 0.9;
    }
	</head>
	</style>
	<body>
		<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
		<div class="container">
			<div class="row">
				<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
				<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
				<img src="projectpic/FashionBD (4).png" alt="" height="150px">
				<h3 class="tag"><i class="fa fa-star-o" aria-hidden="true"></i> Canteen</h3>
			</div>
		</div>
		<div class="col-md-8 clearfix">
			<div class="shop-menu clearfix pull-right">
				<ul class="nav navbar-nav">
					<li><a href="seller_account.php"><i class="fa fa-user"></i> Account</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->
<section id="cart_items"> <!-- cart -->

<div class="container">
 <p class="name">Welcome&nbsp;<?php echo $_SESSION['namee'];?></p>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-3">
			<ul class="nav navbar-nav listy">
				<li><a href="seller_productlist.php"><i class="fa fa-list" aria-hidden="true"></i>&nbsp; Food list</a></li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul class="nav navbar-nav listy">
				<li><a href="seller_product.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Food</a></li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul class="nav navbar-nav listy">
				<li><a href="seller_oderlist.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Orderlist & Status</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="padding"></p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
			</div>
		<div class="col-sm-3">
			<ul class="nav navbar-nav listy">
				<li><a href="seller_feedback.php"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; Feedback List</a></li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul class="nav navbar-nav listy">
				<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; logout</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="padding"></p>
			</div>
		</div>
	</div>
	</div>
</section>
	<footer id="footer"><!--Footer-->
	<div class="footer-bottom">
		<div class="header_top"><!--footer bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 ">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="">&copy; fashionBD.com 2021 All Rights Reserved.</a></li>
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