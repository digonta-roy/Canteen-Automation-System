<?php 
session_start();
    $total = 0;

 $array="";   
$to = 0;
$comma=",";
$output = "";

$output .= "
  <table class='table table-bordered table-striped'>
    <tr >
       <th>ID</th>
       <th>NAME</th>
       <th>PRICE</th>
       <th>QUANTITY</th>
       <th>Total</th>
       <th>ACTION</th>
    </tr>
";

if (!empty($_SESSION['mycart'])) {

	foreach ($_SESSION['mycart'] as $key => $value) {


		$output .= "
           <tr>
             <td>".$value['id']."</td>
             <td>".$value['name']."</td>
             <td> TK ".$value['price']."</td>
             <td>".$value['quantity']."</td>
             <td> TK ".number_format($value['quantity'] * $value['price'], 2)."</td>
             <td>
               <button class='btn btn-danger remove' id='".$value['id']."'>Remove</button>
             </td>
		";

		$total = $total + $value['quantity'] * $value['price'];
    $_SESSION['total_price'] = $total;	
    $array.=(string)$value['id'];
    $array.=$comma;
    
	}
$_SESSION['i_d']=$array;
	$output .= "
         <tr>
         <td><b>You Have to Pay</b></td>
         <td></td>
 
            <td>
             
            </td>
            <td>
           <b>Total Price</b>
            </td>
            <td><b> TK ".number_format($total, 2)."</b></td>
            <td>
              <button class='btn btn-warning btn-block clearall' id='".$value['id']."'>Clear All</button>
            </td>
            
         </tr>
   
	";

	$to = count($_SESSION['mycart']);
	
}else{

}

$data['da'] = $to;
$data['out'] = $output;

echo json_encode($data);

 ?>