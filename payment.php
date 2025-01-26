<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Payment</title>
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
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
   	   .pos{
        opacity: 0.9;
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
	.form-group input,
	.form-group button,
	.form-group a{
		
		font-size: 16px!important;
	}
	.form-control{
		color: black !important;
	}

	</style>
	</head>
	 <?php
         include 'insert.php';

			if(isset($_POST['submit']))
			{

					$email = $_POST['email'];
					$name = $_POST['username'];
					$bank = $_POST['bank'];
					$number = $_POST['number'];
					$tnx = $_POST['tnx'];
					$product = $_POST['product'];
					$amount = $_POST['amount'];
					$status='Queue';
					$insertquery = "insert into payment(email,username,bank,number,transaction_id,product_id,amount,status) values('$email', '$name', '$bank', '$number', '$tnx', '$product', '$amount','$status')";
						$iquery =mysqli_query ($con, $insertquery);

						if($iquery){
							unset($_SESSION['mycart']);
							?>
						<script>
							alert("Payment is been stored");
							location.replace("index1.php");
						</script>
						<?php
					}else{
						?>
						<script>
							alert("payment is not been stored");
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
								
								<li><a href="index1.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
								
							</ul>
						</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		
	</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-7 offset-md-2">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> PAYMENT </h2>
						</div>
						<hr>
						<div class="card-body">
							
							<form action="#" method="POST">
								<div class="form-group text-light font-weight-bold">
									<label for="email">Email Address :<span class="text-danger"></span></label>
									<input type="email" name="email" id="email"  class="form-controll form-control-lg" value="<?php echo $_SESSION['email'];?>" readonly="">
								</div>
								<div class="form-group">
									<label for="name">Full Name : </label>
									<input type="text" name="username" id="name" class="form-controll" required="" value="<?php echo $_SESSION['username'];?>" readonly="" >
									
								</div>
								<div class="form-group">
									<label for="number">Contact Number : </label>
									<input type="text" name="number" id="number" class="form-controll " required="" value="<?php echo $_SESSION['nmbr'];?>" readonly="">
									
								</div>	
								
									<div class="form-group">
									<label for="pr">Products ID :</label>
									<input type="text" name="product" id="pr" class="form-controll " required="" value="<?php echo $_SESSION['i_d'];?>" readonly="">
									
								</div>

								<div class="form-group">
									<label for="amount">Total Price : </label>
									<input type="text" name="amount" id="amount" class="form-controll" required="" value="<?php echo $_SESSION['total_price'];?>" readonly="" >
									
								</div>
								
								<div class="form-group">
									<label for="bank">Select Payment method : <span class="text-danger">*</span></label>
									<select name="bank" id="dis"  class="form-control" required="">
										<option value="Bkash">BKash</option>
										<option value="Nagad">Nagad</option>
										<option value="Duch Bangla">Duch Bangla</option>
									</select>
								</div>
								
								<div class="form-group">
									<label for="tnx">Transaction ID :<span class="text-danger">*</span></label>
									<input type="text" name="tnx" id="tnx" class="form-control "required=" "placeholder="Enter Transaction Id " >
									
								</div>
								
								
								

								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Submit</button>
										<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
		
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>