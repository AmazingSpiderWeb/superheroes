<?php
	require_once('../classes/navigation.php');
	require_once('../classes/page_admin.php');
	$nav = new Navigation();
	$page = new Page(3); 

	include('../includes/admin_header.php'); 

	echo '<div class="main detail">';

	echo '<h2 class="subheading">'.$page->title.'</h2>';

		echo '<div class="form">';

			echo '<form>';

			echo '<input name="fname" class="fname" type="text" placeholder="first name" />';
			
			echo '<input name="lname" class="lname" type="text" placeholder="last name" />';
			echo '<input name="phone" class="phone" type="text" placeholder="phone" />';
			echo '<input name="country" class="country" type="text" placeholder="country" />';
			echo '<input name="email" class="email" type="text" placeholder="email" />';
			echo '<textarea name="comment" id="comment" placeholder="comment..." cols="30" rows="10"></textarea>';
			echo '<input name="submit" id="submitbutton" value="Submit" type="submit" />';

			echo '</form>';


			echo '</div>';

			echo '<div class="content">';

			echo '<p>'.nl2br($page->content).'</p>';

			echo '<a href="admin_page_edit.php?id='.$page->page_id.'">Edit</a></p>';

			echo '</div>';

			echo '<div class="map">';
			
			echo '<img src="../public/assets/images/super_map.jpg" alt="">';

		echo '</div>';

	echo '<div class="clear"></div>';
	echo '</div>';


?>
	<?php include '../includes/footer.php'; ?>