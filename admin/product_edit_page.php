<?php include '../includes/admin_header.php'; ?>

	<div class="main detail">
		<img src="../public/assets/images/Batman.jpg" alt="" />
		<div class="description">
			<form action="" class="editForm">	
			<label for="title">Product Title</label>
			<input type="text" name="title" value="Batman"/><br />
			<label for="description">Description</label>
			<textarea name="description">
				Bruce Wayne witnessed the murder of his billionaire parents as a child, swearing to avenge them. He trained extensively to achieve both mental and physical perfection, mastering detective skills, martial arts, and criminal psychology.
				<br /><br />
				 Costumed as a bat to prey on criminals' fear and utilizing a high-tech arsenal in his crusade to rid Gotham City of crime, the legendary Batman was born.
			</textarea><br />
			<label for="price">Price</label>
			<input type="text" name="price" value="$39.99"/><br />
			<label for="image">Image</label>
			<input type="file" name="image" /><br />

			<input type="submit" name="submit" value="Save">
			<a href="" name="delete">Delete</a>
			</form>		
		</div>

	</div>