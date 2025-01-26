<?php 
session_start();
 ?>
<?php
include ('insert.php');
error_reporting(0);
$id=$_GET['id'];
$nm=$_GET['nm']; 
$price=$_GET['price'];  
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Product insert</title>
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
    .tag{
			color:rgb(208,78,9);
		font-family: 'Lobster', cursive;
		font-weight: bold;
		}
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
				<h3 class="tag"><i class="fa fa-star-o" aria-hidden="true"></i> Canteen</h3>
			</div>
		</div>
		<div class="col-md-8 clearfix">
			<div class="shop-menu clearfix pull-right">
				<ul class="nav navbar-nav">
								<li><a href="seller_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
								<li><a href="seller_productlist.php"><i class="fa fa-list" aria-hidden="true"></i>Food List</a></li>
							</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center">UPDATE FOOD INFORMATION</h2>
						</div>
						<hr>
						<div class="card-body">
							
							<form action="#" method="POST">
								<div class="form-group text-light font-weight-bold">
									<label for="id">Food Id <span class="text-danger">*</span></label>
									<input type="text" name="id" id="id"  class="form-control form-control-lg" value="<?php echo $id;?>" readonly="">
								</div>
								<div class="form-group text-light font-weight-bold">
									<label for="name">Food Name <span class="text-danger">*</span></label>
									<input type="text" name="name" id="name" class="form-control form-control-lg" required="" value="<?php echo $nm;?>" >
									
								</div>
								<div class="form-group text-light font-weight-bold">
									<label for="price">Price <span class="text-danger">*</span></label>
									<input type="text" name="price" id="price" class="form-control form-control-lg" required="" value="<?php echo $price;?>" >
									
								</div>	
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Update</button>
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
<?php
include 'insert.php';
if(isset($_POST['submit']))
{
$ids = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$insertquery = "UPDATE cart SET name='$name',price='$price' WHERE id=$ids";
$iquery =mysqli_query($con, $insertquery);
if($iquery){
?>
<script>
	alert("Food information is been updated");
	location.replace("seller_productlist.php");
</script>
<?php
}else{
?>
<script>
	alert("Food information is not been updated");
</script>
<?php
}
}
?>