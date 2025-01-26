<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home | FashionBD</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link href="css/responsive.css" rel="stylesheet">
<style>
	.pagination {
    display: inline !important;
    margin: 20px 0;
    border-radius: 4px; 
    font-family: cursive;
    color: black !important;
    font-size: initial;
}
.container {
    padding-top: 30px !important;
    }
    h4,h5{
    	text-align: center !important;
    	font:cursive !important;
    }
    .show_data h4{
    	margin-top: 10px !important;
    	color:#fe980f !important ;
    	font-weight:bold !important;
    }
    h5{
    	color : gray !important;
    }
    h5 a{
    	color : orange !important;
    }
    .pagination a {
    color: #fe980f !important;
    text-decoration: solid;
    text-align: center !important;
    margin-left: 10px;
</style>
		

		</head><!--/head-->
		<body>
			<header id="header shadow-lg"><!--header-->
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
						<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
						

						<li> <a class="nav-link text-white" href="cart.php" ><i class="fa fa-shopping-cart"></i>Cart<span id="cart" class="badge badge-warning "></span></a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> Log out</a></li>
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
			<div class="mainmenu pull-left">
				<ul class="nav navbar-nav collapse navbar-collapse">
					<li><a href="about1.php">About</a></li>
					<li><a href="del_status.php">Trace Order</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="search_box pull-right">
				<input type="text" placeholder="Search"/>
			</div>
		</div>
	</div>
</div>
</div><!--/header-bottom-->



<script type="text/javascript">
    $(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $(".get_cart").html(data.out);
                $("#cart").text(data.da);
              }
           });
           }

           setInterval(show_mycart,1000);

    });
   </script>




<!--  -->


</header><!--/header-->
<section id="slider"><!--slider-->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div id="slider-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#slider-carousel" data-slide-to="1"></li>
					<li data-target="#slider-carousel" data-slide-to="2"></li>
					<li data-target="#slider-carousel" data-slide-to="3"></li>
					<li data-target="#slider-carousel" data-slide-to="4"></li>
					<li data-target="#slider-carousel" data-slide-to="5"></li>
				</ol>
				
				<div class="carousel-inner">
					<div class="item active">
						<div class="col-sm-6">
							<img src="image/slide2.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="image/slide6.jpg" class="girl img-responsive" alt="" />
						</div>
						
					</div>
					
					<div class="item">
						<div class="col-sm-6">
							<img src="image/slide4.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="image/slide.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="image/slide5.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="image/slide3.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="projectpic/dash9.jpeg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="projectpic/luckybuns.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="image/home6.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="image/dash4.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					
				</div>
				
				<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			
		</div>
	</div>
</div>
</section><!--/slider-->
<section>
	<div class="container">
			<div class="row">
						
				<div class="col-sm-12 padding-right"><!--features_items-->
				
					<h2 class="title text-center">Food Items</h2>

				<div class="" id="pagination">
      
    </div>
		<div class="col-md-16">
			<div class="row show_data">
				
			</div>
		</div>
	</div>



	<script type="text/javascript">
		
       $(document).ready(function(){
           
             load_data();
           function load_data(page){


           	$.ajax({
               url: "ajax/load_data.php",
               method: "POST",
               data:{page:page},
               dataType:"JSON",
               success:function(data){
                $(".show_data").html(data.output);
                $("#pagination").html(data.pagination);
               }
           	});
           }

        $(document).on("click", ".pagination a",function(event){
        event.preventDefault();
          var id  = $(this).attr("id");
          load_data(id);
       });




           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $("#cart").text(data.da);
              }
           });
           }

       });






       $(document).on("click",".add_cart", function(event){
       	event.preventDefault();
           var id = $(this).attr("id");
           var name = $("#name"+id+"").val();
           var price = $("#price"+id+"").val();
           var quantity = $("#quantity"+id+"").val();
           var action = "add";


           $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              dataType:"JSON",
              data: {id:id,name:name,price:price,quantity:quantity,action:action},
              success:function(data){
                 
              }
           });


       });


	</script>
				</div>
					</div>

					<!--features_items-->
							<div class="brands_products"><!--brands_products-->
						<h2></h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								
							</ul>
						</div>
						</div><!--/brands_products-->						
								<div class="recommended_items"><!--recommended_items-->
								<h2 class="title text-center">recommended items</h2>
								
								<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="image/breakfast.jpg" alt="" />
									<h2>80 TK</h2>
									<p>Breakfast package</p>
															<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="image/pizza.jpg" alt="" />
									<h2>600 TK</h2>
									<p>Pizza</p>
															<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="image/muttob.jpg" alt="" />
											<h2>200 TK</h2>
											<p>Mutton Teheri</p>
															<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
														</div>
														
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="image/pestry.jpg" alt="" />
													<h2>250 TK</h2>
													<p>Pestry</p>
															<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="image/burger.jpg" alt="" />
												<h2>200 TK</h2>
												<p>Burger<p>
															<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="image/drinks.jpg" alt="" />
													<h2>180 TK</h2>
													<p>Drinks package</p>
															<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
										<i class="fa fa-angle-left"></i>
									</a>
									<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
										<i class="fa fa-angle-right"></i>
									</a>
								</div>
								</div><!--/recommended_items-->
								
							</div>
						</div>
					</div>
				</section>
				
				<footer id="footer"><!--Footer-->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-2">
								<div class="companyinfo">
									<h2><span>BFMH canteen</span></h2>
									<p>Our hall Bangmata Fazilatunessa Mujib Hall of Jagannath University ,there have canteen system food buying.When we go and purches food there are too many crowd and it wastes our important time.It creates awkward situation.\n \n This BFMH Apss releases us from this problem.We can save our time. We can purches food in this apps.And we can take our food when it prepared and get notifications.And donot need to stand in queue for taking food.</p>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="address">
									<img src="images/home/bd-04.png" alt="" />
									<p>Fazilatunnesaa mujib hall,JnU,<br>Dhaka,Bangladesh</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-widget">
					<div class="container">
						<div class="row">
							<div class="single-widget">
								<div class="col-12 col-md-6">
									<h1 class="text-center"><i class="fa fa-phone" aria-hidden="true"></i></h1>
									<p class="text-center">
										01723850180 <br>
										01736061330 <br>
									</p>
								</div>
								<div class="col-12 col-md-6">
									<h1 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i></h1>
									<p class="text-left">
										Susmita47@gmail.com<br>
										tanvir20@gmail.com<br>
									</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
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