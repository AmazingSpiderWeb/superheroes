
<?php
	require_once('../classes/navigation.php');
	$nav = new Navigation();

	echo '<div class="main">';
	echo '<a href="view_cart.php" class="viewCart">('.count($_SESSION['cart']).') View Cart</a>'; 
	echo '<h2>'.$page->title.'</h2>'; 

	echo '<p class="intro">'.$page->content.'';
	?>


<?php $nav->make_lists(); ?>



	