<?php 
session_start();

include 'insert.php';
if(isset($_GET['token']))
{
	$token=$_GET['token'];
	$updatequery= "update loginstu set status='active' where token='$token'";
	$query=mysqli_query($con,$updatequery);
	if($query)
	{
		if(isset($_SESSION['msg'])){
			$_SESSION['msg']="Account activated successfully";
			header('location:logincustomer.php');
		}else{
			$_SESSION['msg']="You are logged out";
			header('location:logincustomer.php');
		}
	}else{
		$_SESSION['msg']="Account not activated";
			header('location:registrationCust.php');
	}
}

 ?>