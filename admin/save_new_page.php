<?php

require_once('../classes/page.php');
require_once('../classes/upload.php');

$product = new Product();
$upload = new Upload();


# Handle the form submit
if(isset($_POST['submit'])){
	$product = new Product($_GET['id']);

	$product->product_name = $_POST['product_name'];

	$product->description = $_POST['description'];

	$product->price = $_POST['price'];

	$upload->upload_to('../public/assets/images/uploads');
	
	$product->image = $upload->file_name();

	

	$product->product_id = $_POST['id'];

	$product->save();

}


header('location: index.php');
