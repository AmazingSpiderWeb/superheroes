<?php

require_once('../classes/page.php');

$product = new Product();

# Handle the form submit
if(isset($_POST['submit'])){
	$product = new Product($_GET['id']);

	$product->product_name = $_POST['product_name'];

	$product->description = $_POST['description'];

	$product->price = $_POST['price'];

	$product->image = $_POST['image'];

	$product->product_id = $_POST['id'];

	$product->save();

}

header('location: index.php');
