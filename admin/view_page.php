<?php

require_once('../classes/page.php');

$product = new Product($_GET['id']);

include('../includes/admin_header.php'); 

	echo '<div class="main detail">';

		echo '<img src="'.$product->image.'" />';

	echo '<div class="description">';

		echo '<h3>'.$product->product_name.'</h3>';

		echo '<p>'.$product->description.'</p>';

		echo '<span class="price">$'.$product->price.'</span>';

		echo '<a href="product_edit_page.php?id='.$product->product_id.'" class=edit>Edit Page</a>';

		echo '</br>';

		echo '<a href="index.php">View Products</a>';

	echo '</div>';

	echo '</div>';
	include '../includes/footer.php'; 