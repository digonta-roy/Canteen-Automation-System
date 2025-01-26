<?php 
session_start();


if (isset($_POST['action'])) {


	if ($_POST['action'] == "clearall") {
		unset($_SESSION['mycart']);
	}

	if ($_POST['action'] == "delete") {
		
		foreach ($_SESSION['mycart'] as $key => $value) {
			
			if ($value['id'] == $_POST['id']) {
				unset($_SESSION['mycart'][$key]);
			}
		}
	}
	
	if ($_POST['action'] == "add") {
		

		if (isset($_SESSION['mycart'])) {

			$is_available = 0;
		     
            foreach ($_SESSION['mycart'] as $key => $value) {
            	
            	if ($_SESSION['mycart'][$key]['id'] == $_POST['id'] ) {
            		$is_available++;

            		$_SESSION['mycart'][$key]['quantity'] = $_SESSION['mycart'][$key]['quantity'] + $_POST['quantity'];
            	}
            }

            if ($is_available == 0) {
            	$item_array = array(
               'id'  => $_POST['id'],
               'name' => $_POST['name'],
               'price' => $_POST['price'],
               'quantity' => $_POST['quantity']
			);

            $_SESSION['mycart'][] = $item_array;

            }

		}else{

			$item_array = array(
               'id'  => $_POST['id'],
               'name' => $_POST['name'],
               'price' => $_POST['price'],
               'quantity' => $_POST['quantity']
			);

            $_SESSION['mycart'][] = $item_array;

		}
	}
}



 ?>