<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Log In</title>
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

	</style>
	</head>
	
	<body>

		<?php 
        include 'insert.php';

		if(isset($_POST['submit'])){
         
        $name=$_POST['name'];
		$email= $_POST['email'];
		$pass=$_POST['password'];

		$emailquery ="select * from loginadmin where email='$email'";
		$query = mysqli_query ($con,$emailquery) or die("query faild");

		$emailcount = mysqli_num_rows($query);

		if($emailcount){
			$email_pass=mysqli_fetch_assoc($query);
			$db_pass=$email_pass['pass'];
			$_SESSION["emal"] =  $email_pass['email'];
			$_SESSION["nme"] =  $email_pass['name'];

			if($pass==$db_pass){
			  ?>
				<script>
					alert("Login Successful");
					location.replace("admin_dashboard.php");
				</script>
			  <?php
				}else{
				?>
				<script>
				alert("Password Incorrect");
				</script>
				<?php
				}
		}else{	
			?>
			<script>
			alert("Invalid Email");
			</script>
			<?php
				}
			}
        ?>

		<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
						<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
					<img src="projectpic/FashionBD (4).png" alt="" height="150px">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9"><div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li> 
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> LOG IN</h2>
						</div>
						<div class="card-body">
							
							<form action="#" method="post">
								<div class="form-group text-light font-weight-bold">
								<label for="name">Full Name<span class="text-danger">*</span></label>
									<input type="text" name="name" id="name" class="form-control" required="" placeholder="Please enter your name" >
									</div>
								<div class="form-group text-light font-weight-bold">
									<label for="email">Email Address <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email"  class="form-control form-control-lg" placeholder="Enter your email address">
								</div>
								<div class="form-group text-light font-weight-bold">
									<label for="pass">Token <span class="text-danger">*</span></label>
									<input type="password" name="password" id="pass"  class="form-control form-control-lg " required="" placeholder="Enter your password">
								</div>
								
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">login</button>
										<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
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