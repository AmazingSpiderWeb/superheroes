<?php 
include '../includes/header.php'; 
require_once('../classes/page_admin.php');

$page = new Page(3);

?>


	<div class="main detail">
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
			<pre><?php echo $page->content ?></pre>

		</div>
		<div class="map">
			<img src="assets/images/super_map.jpg" alt="">
		</div>
		<div class="clear"></div>
	</div>

			
	<?php include '../includes/footer.php'; ?>