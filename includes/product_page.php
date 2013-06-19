<<<<<<< HEAD
<div class="main">

	<a href="add_to_cart.php" class="addProduct">+ ADD A PRODUCT</a>
	<h2>Welcome to Amazing Super Heroes</h2>
	<p class="intro">Get in on the "action" with our incredible action figures including Marvel and DC. "The Amazing Super Heroes" carries your favorite superhero action figures from Spider-man and Thor to Iron Man and Batman! <a href="">Edit</a></p>

<?php
	require_once('../classes/navigation.php');
	$nav = new Navigation();
?>

=======
<?php   

	echo '<div class="main">';
	echo '<a href="view_cart.php" class="viewCart">(0) View Cart</a>'; 
	echo '<h2>'.$page->title.'</h2>'; 

	echo '<p class="intro">'.$page->content.'';
	?>
>>>>>>> 0f15a060c2b818338a3100b8792a9fc6fd99028d

<?php $nav->make_lists(); ?>



	