

<div class="main">

	<a href="new_page.php" class="addProduct">+ ADD A PRODUCT</a>
	<h2>Welcome to Amazing Super Heroes</h2>
	<p class="intro">Get in on the "action" with our incredible action figures including Marvel and DC. "The Amazing Super Heroes" carries your favorite superhero action figures from Spider-man and Thor to Iron Man and Batman! <a href="">Edit</a></p>

<?php
	require_once('../classes/navigation.php');
	$nav = new Navigation();

?>


	<?php $nav->make_admin_lists(); ?>

</div>

	