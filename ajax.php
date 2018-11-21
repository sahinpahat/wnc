<?php require_once('admin_kausal/ConfigDbOnly/DbOnly.php'); ?>
<?php 
if (isset($_POST['type']) && $_POST['type']=='add_to_cart')
 {
 
 	$pro_id=$_POST['product_id'];
 	$qty = $_POST['qty'];
	if (isset($_SESSION['shopping_cart']))
	 {
		
		if (array_key_exists($pro_id,$_SESSION['shopping_cart']))
		 {
			
		 	//increase qty
			 $_SESSION['shopping_cart'][$pro_id]['item_quantity']+=$qty;

			
		 }else
		 {
		 	$item_array = array(
			'item_id'          => $_POST['product_id'],
			'item_image'       => $_POST['image'],
			'item_name'        => $_POST['name'],
			'item_quantity'    => $qty,
			'item_price'       => $_POST['price']
	);
			$_SESSION['shopping_cart'][$pro_id] = $item_array;

	 }


	}else {

		$item_array = array(
			'item_id'          => $_POST['product_id'],
			'item_image'       => $_POST['image'],
			'item_name'        => $_POST['name'],
			'item_quantity'    => $qty,
			'item_price'       => $_POST['price']
	);
		$_SESSION['shopping_cart'][$pro_id] = $item_array;
	} 

	

	echo count($_SESSION['shopping_cart']);
	
}


if (isset($_POST['type']) && $_POST['type']=='delete_from_cart')
 {

	
	 	$product_id = $_POST['product_id'];	

		unset($_SESSION['shopping_cart'][$product_id]);

		$total = array_column($_SESSION['shopping_cart'] , "price");
			
		$output = array('items'=>count($_SESSION['shopping_cart']),'total_amt'=>array_sum($total));	

		echo json_encode($output);			

 }



?>