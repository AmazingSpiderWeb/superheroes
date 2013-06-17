<?php 

require_once('../classes/page.php');
require_once('../classes/form.php');

$form = new Form();
$product = new Product($_GET['id']);

include('../includes/admin_header.php'); 

	echo '<div class="main detail">';

	echo '<img src="'.$product->image.'" />';

	echo '<div class="description">';
	echo $form->open('update_page.php', 'post', 'editForm');

	echo $form->label('product_name', 'Product Name');	

	echo $form->text('product_name', $product->product_name);
	echo $form->hidden('id', $product->product_id);


	echo $form->label('description', 'Description');

	echo $form->textarea('description', $product->description);

	echo $form->label('price', 'Price');

	echo $form->text('price', $product->price);

	echo $form->label('image', 'Image URL');
	echo $form->text('image', $product->image);

	echo '<br>';
	

		echo $form->submit('submit', 'SAVE');
		echo '<a href="delete_page.php?id='.$product->product_id.'" class="delete">Delete</a>';
	echo $form->close();

	echo '</div>';

	echo '</div>';

	include '../includes/footer.php'; 

	