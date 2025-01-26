
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile | FashionBD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapreg.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Icon/css/font-awesome.min.css">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<style>
	body{
    background-image: url(projectpic/back.jpeg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-attachment: fixed;
    }
	.card{
		background: black!important;
		opacity: 0.8;
		
	}
	.form-group label
	{
		color: orange!important;
		font-size: 18px!important;
		
	}
	.form-controll {
		color: white !important;
    background-color: black !important;
    border: 0px !important;
    vertical-align: text-top !important;
    padding-left: 20px;
}
.form-control{
	color: black !important;
}
	.form-group input,
	.form-group button,
	.form-group a{
		color: black;
		font-size: 16px!important;
	}
	h1{
		font-size: 100px;
		color: orange!important;
	}
	h2{
		font-size: 25px!important;
	}
	.already{
				color: white;
				font-size: 17px;
			}
			.al{
				color: orange;
				font-size: 17px;
			}
			.p{
				font-size: 50px !important;
				text-align: center!important;
				
			}
</style>
</head><!--/head-->

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
								<li><a href="seller_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
							</ul>
			</div>
		</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section>
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center">My Profile</h2>
							<h1 class="text-danger text-left"><i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="p"><?php echo $_SESSION['namee'];?></span></h1>
						</div>
						<div class="card-body ">
							
							<form action="#" method="post">
								<div class="form-group">
									<label for="id">Canteen Id : </label>
									<input type="text" name="id" id="id" class="form-controll" value="<?php echo $_SESSION['idd'];?>" >
									
								</div>
								<div class="form-group">
									<label for="email">E-mail address : </label>
									<input type="email" name="email" id="email"  class="form-controll"value="<?php echo $_SESSION['emaill'];?>">
								</div>
								
								<div class="form-group">
									<label for="name">Full Name : </label>
									<input type="text" name="username" id="name" class="form-controll" value="<?php echo $_SESSION['namee'];?>" >
									
								</div>
								<div class="form-group">
									<label for="nmbr">Contact Number : </label>
									<input type="text" name="nmbr" id="nmbr" class="form-controll " value="<?php echo $_SESSION['nmbrr'];?>" >
								</div>
								<div class="form-group">
									<label for="address">Address : </label>
									<input type="text" name="address" id="address" class="form-controll"value="<?php echo $_SESSION['addresss'];?>">
									
								</div>
								</div>
								
								<div class="card-footer text-center">
									<div>
										<p class="already"><span><a class="al" href="seller_ac_update.php?idd=<?php echo $_SESSION['idd'];?> & emm=<?php echo $_SESSION['emaill'];?> & nmm=<?php echo $_SESSION['namee'];?> &cnn=<?php echo $_SESSION['nmbrr'];?> & addd=<?php echo $_SESSION['addresss'];?>">Update information ?</a></span></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer"><!--Footer-->
		<div class="footer-bottom"><!--footer bottom-->
			<div class="header_top">
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