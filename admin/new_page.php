<?php

require_once('../classes/page.php');
require_once('../classes/form.php');

$form = new Form();
$product = new Product();

include('../includes/admin_header.php'); 

echo '<div class="main detail">';
	echo '<img src="../public/assets/images/upload.jpg" />';

	echo '<div class="description">';

<<<<<<< HEAD
	echo $form->open('save_new_page.php', 'post', 'editForm');
		echo $form->label('product_name', 'Product Name');
		echo $form->text('product_name');

		echo $form->hidden('id', $product->product_id);

		echo $form->label('description', 'Description');

		echo $form->textarea('description');

		echo $form->label('price', 'Price');

		echo $form->text('price');

		echo $form->label('image', 'Image URL');
		echo $form->text('image', "../public/assets/images/upload.jpg");

		echo '<br>';
		

			echo $form->submit('submit', 'CREATE');
	echo $form->close();
echo '</div>';
=======
		echo $form->open('save_new_page.php', 'post', 'editForm');
			echo $form->label('product_name', 'Product Name');
			echo $form->text('product_name');

			echo $form->hidden('id', $product->product_id);

			echo $form->label('description', 'Description');

			echo $form->textarea('description');

			echo $form->label('price', 'Price');

			echo $form->text('price');

			echo $form->label('image', 'Image URL');
			echo $form->text('image', "../public/assets/images/upload.jpg");

			echo '<br>';
			

				echo $form->submit('submit', 'CREATE');
		echo $form->close();
	echo '</div>';
echo '<div class="clear"></div>';
>>>>>>> 0f15a060c2b818338a3100b8792a9fc6fd99028d
echo '</div>';


include('../includes/footer.php');