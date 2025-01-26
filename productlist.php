<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Product List | FashionBD</title>
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
		.al{
			color: gray;
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
								<li><a href="admin_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
							</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->

		<?php
         include 'insert.php';
           $query="SELECT * FROM cart ORDER BY id ASC";
           $result = mysqli_query($con,$query) or die("Failed");
           $count = mysqli_num_rows($result);

           if($count >0){
           ?>
<section id="cart_items"> <!-- cart -->
		<div class="container">
			<div class="breadcrumbs">
				<h1 class="headd">Product List</h1>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed table-hover">
					<thead>
						<tr class="cart_menu">
							<th class="serial">Serial</td>		
							<th class="image">Image</td>						
							<th class="id">Product Id</th>
							<th class="name">Product Name</th>
							<th class="price">price</th>
							<th class="edit">Edit</th>
							<th class="delete">Delete</th>
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
							<td class="image"> <?php echo "<img src='img/".$row['image']."'>" ?></td>
							<td class="id"> <?php echo $row['id']?></td>
							<td class="name"><?php echo $row['name']?></td>
							<td class="price"><?php echo $row['price']?></td>
							<td class="edit"><a class="al" href="admin_pro_edit.php?id= <?php echo $row['id']; ?> & nm=<?php echo $row['name']; ?> &price=<?php echo $row['price']; ?> "><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
							<td class="delete"><a class="al" href="admin_pro_delete.php?id= <?php echo $row['id']; ?> & nm=<?php echo $row['name']; ?> &price=<?php echo $row['price']; ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
						</tr>
						<?php } ?>
					</tbody>
                  <?php   } ?>	
				</table>
			</div>
		</div>
	</section>

	
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>