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

	echo '<p>'.$page->content.'</p>';

	echo '<a href="admin_page_edit.php?id='.$page->page_id.'">Edit</a></p>';

	echo '</div>';

	echo '<div class="map">';
	
	echo '<img src="../public/assets/images/super_map.jpg" alt="">';

	echo '</div>';

	echo '</div>';





?>

<!-- 	<div class="main detail">
		<h2 class="subheading">Contact Us</h2>
		<div class="form">
			<form>
				<input name="fname" class="fname" type="text" placeholder="first name" />
				<input name="lname" class="lname" type="text" placeholder="last name" />
				<input name="phone" class="phone" type="text" placeholder="phone" />
				<input name="country" class="country" type="text" placeholder="country" />
				<input name="email" class="email" type="text" placeholder="email" />
				<textarea name="comment" id="comment" placeholder="comment..." cols="30" rows="10"></textarea>
				<input name="submit" id="submitbutton" value="Submit" type="submit" />
			</form>
		</div>
		<div class="content">
			<p>You can contact us using the form to the left or alternatively by taking advantage of the contact information beneath.</p><br>
			
<pre>
Phone:	+64 9 634 4399
Email:		info@amazingsuperheroes.co.nz
Address:	264 The Mall,
			Onehunga, Auckland, 
			New Zealand</pre>

		</div>
		<div class="map">
			<img src="assets/images/super_map.jpg" alt="">
		</div>
	</div> -->

			
	<?php include '../includes/footer.php'; ?>