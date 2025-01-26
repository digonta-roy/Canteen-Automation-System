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
    background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
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
				
		if(isset($_POST['submit']))
		{
				
				$email = mysqli_real_escape_string($con, $_POST['email']);
				
				$emailquery =" select * from loginstu where email='$email' ";
				$query = mysqli_query ($con,$emailquery);

				$emailcount = mysqli_num_rows($query);

				if($emailcount){

					$userdata = mysqli_fetch_array($query);

					$username = $userdata['name'];
					$token  = $userdata['token'];

			$subject = "Password Reset";
			$body = "Hi, $username. Click here to reset your Password  
			http://localhost/SE_project/reset_pass.php?token=$token";
			$sender = "From: saha06571@gmail.com";
			if (mail($email, $subject, $body, $sender)) {
			$_SESSION['msg'] = "Check your mail to reset your password $email";
			header('location:logincustomer.php');
			} else {
					echo "Email sending failed...";
	
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
		
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Recover Password</h2>
						</div>
						<div class="card-body ">
							
							<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
							
								<div class="form-group">
									<label for="email">Email Address <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email"  class="form-control "placeholder="Please enter your email">
								</div>
								
							
								</div>
							
							
								<div class="card-footer">
									<div class="form-group text-center">
										<button type="submit" name= "submit" class="btn btn-warning text-center ">Send Mail</button>
										
									</div>


								</div>

								</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>