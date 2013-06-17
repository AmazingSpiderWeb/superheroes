<?php 

	require_once('../classes/page.php');

	$product = new Product($_GET['id']);

	$product->hide();

	header('location: index.php');
	exit;