<?php 
session_start();
require_once('../classes/page.php');
require_once('../classes/form.php');

$form = new Form();
$product = new Product($_GET['id']);

include '../includes/header.php'; 
	
	echo '<div class="main detail">';
	echo '<a href="view_cart.php" class="viewCart">('.count($_SESSION['cart']).') View Cart</a>';	

	echo '<img src="../public/assets/images/uploads/'.$product->image.'" />';
		echo '<div class="description">';
			echo '<h2>'.$product->product_name.'</h2>';
			echo '<p class="intro">'.$product->description.'</p>';
			echo '<span class="price">$ '.$product->price.'</span>';

			echo $form->open('add_to_cart.php', 'post', '');
			echo '<input type="text" name="quantity" id="quantity" value="1" />';	
			echo '<input type="hidden" name="product_id" id="product_id" value="'.$product->product_id.'" />';
			echo $form->submit('submit', 'Add to Cart');	
			echo $form->close();

			if(isset($_GET['msg']) && $_GET['msg'] == 'added'){
			echo '<a href="view_cart.php" class="success">Successfully added to the cart!</a>';
			}

		echo '</div>';
	echo '<div class="clear"></div>';
	echo '</div>';

	include '../includes/footer.php'; 

?>
