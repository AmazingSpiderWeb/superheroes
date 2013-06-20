
<?php
	require_once('../classes/navigation.php');
	require_once('../classes/page_admin.php');
	$nav = new Navigation();
	$page = new Page(1);

	echo '<div class="main">';

	echo '<a href="new_page.php" class="addProduct">+ ADD A PRODUCT</a>';

	echo '<h2>'.$page->title.'</h2>';

	echo '<p class="intro">'.$page->content.'';


	echo ' <a href="admin_page_edit.php?id='.$page->page_id.'">Edit</a></p>';

?>


	<?php $nav->make_admin_lists(); ?>

</div>

	