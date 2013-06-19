<?php

require_once('../classes/page.php');
require_once('../classes/form.php');


$form = new Form();
$product = new Product();


include('../includes/admin_header.php'); 



echo '<div class="main detail">';
	echo '<img src="../public/assets/images/upload.jpg" />';

	echo '<div class="description">';

		echo $form->open('save_new_page.php', 'post', 'editForm', 'multipart/form-data');
			
			echo $form->label('product_name', 'Product Name');
			echo $form->text('product_name');

			echo $form->hidden('id', $product->product_id);

			echo $form->label('description', 'Description');

			echo $form->textarea('description');

			echo $form->label('price', 'Price');

			echo $form->text('price');

			echo $form->label('image', 'Image URL');
			echo $form->file('image');
			echo $form->hidden('MAX_FILE_SIZ', "10000000");

			echo '<br>';
			

				echo $form->submit('submit', 'CREATE');
		echo $form->close();
	echo '</div>';
echo '<div class="clear"></div>';
echo '</div>';


include('../includes/footer.php');