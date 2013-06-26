<?php

require_once('../classes/cart.php');
$cart = new Cart();


$cart->order();
$cart->order_date = date("Y-m-d");

foreach($_SESSION['cart'] as $id => $quantity){

	$cart->product_id = $id;
	$cart->quantity = $quantity;
	
	$cart->checkout();
}

$cart->clear();
header('location: view_cart.php?submitted');
