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
				<h3 class="tag"><i class="fa fa-star-o" aria-hidden="true"></i> Admin</h3>
			</div>
		</div>
		<div class="col-md-8 clearfix">
			<div class="shop-menu clearfix pull-right">
				<ul class="nav navbar-nav">
				<!-- /	<li><a href=""><i class="fa fa-user"></i> Account</a></li> -->
				</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->
<section id="cart_items"> <!-- cart -->
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<ul class="nav navbar-nav listy">
				<li><a href="admin_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp Dashboard</a></li>
				<li><a href="productlist.php"><i class="fa fa-list" aria-hidden="true"></i>&nbsp Food list</a></li>
				<li><a href="orderlist.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Order List & Status</a></li>
				
				<li><a href="admin_feedback.php"><i class="fa fa-star" aria-hidden="true"></i>&nbsp Feedback List</a></li>
				<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp logout</a></li>
				</ul>
			</div>
			<?php
         include 'insert.php';
           $query="SELECT * FROM loginstu ORDER BY email ASC";
           $result = mysqli_query($con,$query) or die("Failed");
           $count = mysqli_num_rows($result);

           if($count >0){
           ?>
			<div class="col-sm-9">
				<div class="breadcrumbs">
					<h1 class="headd">Customer's-information</h1>
				</div>
				<div class="table-responsive cart_info">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="cart_menu">
								<th class="serial">Serial</th>
								<th class="name">User name</th>
								<th class="conct">Contact</th>
								<th class="email">E-mail</th>
								<th class="div">ID</th>
								<th class="address">Gender</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$serial = 1;
						while($row = mysqli_fetch_assoc($result))
						{	
						
						?>
							<tr>
								<td class="serial"><?php echo $serial++ ?></td>
								<td class="name"><?php echo $row['name']?></td>
								<td class="conct"><?php echo $row['phn']?></td>
								<td class="email"><?php echo $row['email']?></td>
								
								<td class="div"><?php echo $row['id']?></td>
								<td class="address"><?php echo $row['gender']?></td>
							</tr>
							<?php } ?>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3">
		</div>
		<?php
         include 'insert.php';
           $query="SELECT * FROM loginseller ORDER BY email ASC";
           $result = mysqli_query($con,$query) or die("Failed");
           $count = mysqli_num_rows($result);

           if($count >0){
           ?>
		<div class="col-sm-9">
				<div class="breadcrumbs">
					<h1 class="headd">Stuff's-information</h1>
				</div>
				<div class="table-responsive cart_info">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="cart_menu">
								<th class="serial">Serial</th>
								<td class="id">Seller Id</td>
								<td class="email">E-mail</td>
								<td class="name">name</td>
								<td class="contact">Contact no</td>
								<td class="address">Address</td>
							</tr>
						</thead>
						<tbody>
							<?php
							$serial = 1;
						while($row = mysqli_fetch_assoc($result))
						{	
						
						?>
							<tr>
								<td class="serial"><?php echo $serial++ ?></td>
								<td class="id"><?php echo $row['id']?></td>
								<td class="email"><?php echo $row['email']?></td>
								<td class="name"><?php echo $row['name']?></td>
								<td class="contact"><?php echo $row['contact']?></td>
								<td class="address"><?php echo $row['address']?></td>
							</tr>
						<?php } ?>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
			<div class="col-sm-3">
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