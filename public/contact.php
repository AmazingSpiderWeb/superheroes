<?php include '../includes/header.php'; ?>

	<div class="main">
			
		<div class="form">
			<h1>Contact Us</h1>
			
			<form>
				<div class="submitfield"><label id="fname">First Name:</label><br />
				<input name="fname" type="text" placeholder="e.g. John" /></div>

				<div class="submitfield"><label id="lname">Last Name:</label><br />
				<input name="fname" type="text" placeholder="e.g. Doe" /></div>

				<div class="submitfield"><label id="phone">Phone:</label><br />
				<input name="email" type="text" placeholder="e.g. (04)3959220" /></div>

				<div class="submitfield"><label id="email">Email:</label><br />
				<input name="email" type="text" placeholder="e.g. user@example.com" /></div>

				<div class="submitfield"><label id="country">Country:</label><br />
				<input name="email" type="text" placeholder="e.g. New Zealand" /></div>
				
				<div class="submitbutton">
				<input name="submit" id="submits" value="Submit" type="submit" />
				</div>
			</form>

			
		</div>

		<div class="content">
			<p>You can contact us using the form to the left or alternatively by taking advantage of the contact information beneath.</p>
			
			<p>Phone:</p>
			<p>Email:</p>
			<p>Address:</p>
		</div>

	</div>

<?php include '../includes/footer.php'; ?>