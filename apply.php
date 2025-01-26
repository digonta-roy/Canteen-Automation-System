<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Application</title>
		<link href="css/bootstrapreg.min.css" rel="stylesheet">
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
		<style type="text/css">
			.btn-danger {
   					 float: none !important;
   					margin-right: 76px!important;
                    margin-left: 76px!important;
            }

			body{
				background-image: url(projectpic/back.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			}
			.pos{
				opacity: 0.8;
				font-weight: bold;
			}
			.already{
				color: white;
				font-size: 17px;
			}
			.al{
				color: orange;
			}
			.form-controll{
				color: white;
				
			}
		</style>
	</head>
	<body>

		<?php 
        include 'insert.php';
        if(isset($_POST['submit'])){

         $email= $_POST['email'];
		 $nm=$_POST['name'];
		 $pos=$_POST['app'];

      //    $filename = 'Presentation1.pdf';
   		 // $path = 'pdf';
   		 // $file = $path . "/" . $filename;
   		 $filenamee=$_FILES['files']['name'];
		 $file=$_FILES['files']['tmp_name'];

    $mailto = 'ps4966829@gmail.com';
    $subject = 'Application for a Job as';
    $subject.= $pos;
    $message = 'Dear sir,';
    $message .= "Here is my CV.Kindly check it.";

    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From:" .$nm."<".$email.">" .$eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenamee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
       ?>
         <script>
         alert("Mail sent successfully...");
         location.replace("index.php");
         </script>
         <?php
         }else {
            ?>
         <script>
         alert("Message could not be sent...");
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
					<div class="col-sm-9">
						<div class="navbar-header">
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
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Apply for Canteen Job </h2>
						</div>
						<div class="card-body ">
							
							<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="email">E-mail address <span class="text-danger">*</span></label>
									<input type="text" name="email" id="email"  class="form-control "required="" placeholder="Please enter your email">
								</div>
								<div class="form-group">
									<label for="email">CV <span class="text-danger">*</span></label>
									<input type="file" name="files" id="files"  class="form-controll ">
								</div>
								</div>
								<div class="card-footer text-center">
									<div class="form-group">
										<button onclick="popUp()" type="submit" name="submit" class="btn btn-success mx-3">Apply</button>
										<button type="reset" class="btn btn-danger mx-3">Reset</button>
										
									</div>
								</form>
							</div>
						</div>
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

						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>
