<?php 

require_once('../classes/page.php');
require_once('../classes/form.php');

$form = new Form();
$product = new Product($_GET['id']);

<<<<<<< HEAD
=======

>>>>>>> 0f15a060c2b818338a3100b8792a9fc6fd99028d
include '../includes/header.php'; 

	echo '<div class="main detail">';
	echo '<a href="view_cart.php" class="viewCart">(2) View Cart</a>';	
	echo '<img src="'.$product->image.'" />';
		echo '<div class="description">';
		echo '<h2>'.$product->product_name.'</h2>';
		echo '<p class="intro">'.$product->description.'</p>';
		echo '<span class="price">$ '.$product->price.'</span>';

		echo $form->open('view_cart.php', 'post', '');
		echo $form->text('qty', '', 'Qty');	
		echo $form->submit('submit', 'Add to Cart');	
		echo $form->close();

		echo '</div>';
	echo '</div>';

	include '../includes/footer.php'; 

?>


