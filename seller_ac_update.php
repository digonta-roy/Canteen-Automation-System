
<?php 
session_start();
 ?>
<?php
include ('insert.php');
error_reporting(0);
$ii=$_GET['idd'];
$emm=$_GET['emm'];
$nmm=$_GET['nmm']; 
$cnn=$_GET['cnn']; 
$addd =$_GET['addd'];
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
	.form-group input,
	.form-group button,
	.form-group a{
		font-size: 15px!important;
	}
	h1{
		font-size: 80px;
		color: orange!important;
	}
	h2{
		font-size: 25px!important;
	}
</style>
</head><!--/head-->
<?php
	include ('insert.php');
			if(isset($_POST['submit']))
			{
         
		$username=mysqli_real_escape_string($con, $_POST['username']);
		$number= mysqli_real_escape_string($con,$_POST['nmbr']);
		$email= mysqli_real_escape_string($con,$_POST['email']);
		$id= mysqli_real_escape_string($con,$_POST['id']);
		$address=mysqli_real_escape_string( $con,$_POST['address']);

         $emailquery="UPDATE loginseller SET id='$id',name='$username',contact='$number',address='$address' WHERE email='$email'";

         $query = mysqli_query($con,$emailquery) or die("query faild");
         if($query)
		$qury =" select * from loginseller where email='$email'";
		$qry = mysqli_query ($con,$qury) or die("query faild");
         { $email_pas=mysqli_fetch_assoc($qry);
           $_SESSION['idd'] = $email_pas['id'];
			$_SESSION['namee'] = $email_pas['name'];
			$_SESSION['emaill'] = $email_pas['email'];
			$_SESSION['nmbrr'] = $email_pas['contact'];
			$_SESSION['addresss'] = $email_pas['address'];
         ?>
         
         <script>
		 alert("Successful !");
		location.replace("seller_account.php");
		</script>
		<?php
	}
}
        ?> 
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
													<li><a href="seller_account.php"><i class="fa fa-user"></i> Account</a></li>
							</ul>
			</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		
	</header><!--/header-->
	<section>
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info pos">
						<div class="card-header">
							<h1 class="text-danger text-center"><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1>
							<h2 class="text-danger text-center">My Profile</h2>
						</div>
						<div class="card-body ">
							
							<form action="#" method="post">
								<div class="form-group">
									<label for="id">Id</label>
									<input type="text" name="id" id="id" class="form-control " value="<?php echo $ii;?>" readonly="">
								</div>
								<div class="form-group">
									<label for="email">E-mail address</label>
									<input type="email" name="email" id="email"  class="form-control" value="<?php echo $emm;?>" readonly="">
								</div>
								<div class="form-group">
									<label for="name">Full Name </label>
									<input type="text" name="username" id="username" class="form-control" value="<?php echo $nmm;?>" >
									
								</div>
								<div class="form-group">
									<label for="nmbr">Contact Number</label>
									<input type="text" name="nmbr" id="nmbr" class="form-control "  value="<?php echo $cnn;?>" >
								</div>
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" name="address" id="address" class="form-control"  value="<?php echo $addd;?>" >
									
								</div>
								</div>
								
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit"class="btn btn-success mx-3">Update</button>
										
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