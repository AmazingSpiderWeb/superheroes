<?php   

	echo '<div class="main">';
	echo '<a href="view_cart.php" class="viewCart">(0) View Cart</a>'; 
	echo '<h2>'.$page->title.'</h2>'; 

	echo '<p class="intro">'.$page->content.'';
	?>

<?php $nav->make_lists(); ?>



	