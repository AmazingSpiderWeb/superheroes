<?php include '../includes/header.php'; ?>

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
	</div>

			
	<?php include '../includes/footer.php'; ?>