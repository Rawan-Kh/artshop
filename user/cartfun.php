<?php 
error_reporting(0);
//product_details.php
include "header.php";
$connect = new PDO("mysql:host=localhost;dbname=artshop", "root", "");

$message = '';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);

		$cart_data = json_decode($cookie_data, true);
	}
	else
	{
		$cart_data = array();
	}

	$item_id_list = array_column($cart_data, 'item_id');

	if(in_array($_POST["product_id"], $item_id_list))
	{
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]["item_id"] == $_POST["product_id"])
			{
				$cart_data[$keys]["item_quantity"] =(int)$cart_data[$keys]["item_quantity"] + (int)$_POST["quantity"];
			}
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_POST["product_id"],
			'item_name'			=>	$_POST["product_name"],
			'item_price'		=>	$_POST["product_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$cart_data[] = $item_array;
	}

	
	$item_data = json_encode($cart_data);
	setcookie('shopping_cart', $item_data, time() + (86400 * 30));
	// header("location:product_details.php?id=$id");
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]['item_id'] == $_GET["id"])
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				setcookie("shopping_cart", $item_data, time() + (86400 * 30));
				// header("location:product_details.php?remove=1");
			}
		}
	}
	if($_GET["action"] == "clear")
	{
		setcookie("shopping_cart", "", time() - 3600);
		// header("location:product_details.php?clearall=1");
	}
}

// if(isset($_GET["success"]))
// {
// 	$message = '
// 	<div class="alert alert-success alert-dismissible">
// 	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// 	  	Item Added into Cart
// 	</div>
// 	';
// }

// if(isset($_GET["remove"]))
// {
// 	$message = '
// 	<div class="alert alert-success alert-dismissible">
// 		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// 		Item removed from Cart
// 	</div>
// 	';
// }
// if(isset($_GET["clearall"]))
// {
// 	$message = '
// 	<div class="alert alert-success alert-dismissible">
// 		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// 		Your Shopping Cart has been clear...
// 	</div>
// 	';
// }
//     ?>