<?php include '../includes/header.php'; ?>

	<div class="main viewCart">
		<div class="row">
			<img src="assets/images/Batman.jpg" alt="" />
			<div class="title">
				<h2>Batman</h2><a href="">Delete</a>
			</div>
			<div class="price">
				$39.99
			</div>
			<div class="qty">
				<form action="">
					<input type="text" name="quantity" placeholder="Qty">
				</form>	
			</div>
			<div class="update">
				<form action="">
					<input type="submit" name="submit" value="Update Cart">
				</form>	
			</div>	
		</div>
		<div class="row">
			<img src="assets/images/CaptainAmerica.jpg" alt="" />
			<div class="title">
				<h2>Captain America</h2><a href="">Delete</a>
			</div>
			<div class="price">
				$39.99
			</div>
			<div class="qty">
				<form action="">
					<input type="text" name="quantity" placeholder="Qty">
				</form>	
			</div>
			<div class="update">
				<form action="">
					<input type="submit" name="submit" value="Update Cart">
				</form>	
			</div>	
		</div>
		<div class="row">
			<div class="title">			
			</div>
			<div class="price">
				
			</div>
			<div class="total">
				Total
			</div>
			<div class="totalPrice">
				$79.98
			</div>	
		</div>
		<form action="">
			<input type="submit" class="checkout" name="submit" value="Proceed to Checkout">
		</form>	
		

	</div>

<?php include '../includes/footer.php'; ?>