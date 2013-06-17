<?php
	require_once('../classes/navigation.php');
	require_once('../classes/page_admin.php');
	$nav = new Navigation();
	$page = new Page(2); 

	include('../includes/admin_header.php'); 

	echo '<div class="main detail">';
	echo '<div class="description">';

	echo '<h2>'.$page->title.'</h2>';

	echo '<p>'.$page->content.'</p>';

	echo '<a href="admin_page_edit.php?id='.$page->page_id.'">Edit</a></p>';

	echo '</div>';

	echo '<div class="recommend">';

	echo '<span>Recommendation:</span>';

	echo '<p>"I have had the pleasure of purchasing numerous products from the Amazing Superheroes team over the past two years and am happy to recommend the company to any future collectors."</p>';

	echo '</div>';

	echo '<div class="superheroGroup">';

	echo '<img src="../public/assets/images/superhero_group2.jpg" alt="">';

	echo '</div>';

	echo '</div>'


?>
			
	<?php include '../includes/footer.php'; ?>