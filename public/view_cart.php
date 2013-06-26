<?php

session_start();
require_once('../classes/cart.php');

$cart = new Cart();

?>
<?php include '../includes/header.php'; ?>

	<div class="main">
		<?php
		if(isset($_GET['submitted'])){
			echo '<div class="success">Successfully submit your cart order! <a href="index.php">Back to Produsts</a></div>';
		}
		?>

		<table class="viewCart" width="100%">
			<tr>
				<th colspan="2" width="70%">Product</th>
				<th width="10%">Price</th>
				<th width="10%">Quantity</th>
				<th width="10%">Total</th>
			</tr>
			<?php if($products = $cart->get_all()): ?>
				<?php foreach ($products as $product): ?>
					<tr>						
						<td><a href="product_detail.php?id=<?php echo $product['id']; ?>"><img src="assets/images/uploads/<?php echo $product['image']; ?>" alt="" width="150"></a>						
						</td>
						<td><h2><a href="product_detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h2><a href="delete_item.php?id=<?php echo $product['id']; ?>" class="delete">Delete</a></td>
						<td><span class="price">$ <?php echo $product['price']; ?></span></td>
						<td><?php echo $product['quantity']; ?></td>
						<td>$ <?php echo $product['price'] * $product['quantity']; ?></td>
					</tr>
				<?php endforeach ?>
				<tr>
					<td colspan="4" align="right"><strong>Grand Total</strong></td>
					<td>$ <?php echo $cart->total_price(); ?></td>
				</tr>
				<tr >
					<td colspan="3"><a href="clear_cart.php" class="clearCart">Clear</a></td>
					<td colspan="2" align="right"><a href="checkout.php" class="checkout">Proceed to Checkout</a></td>
				</tr>
			<?php else: ?>
				<tr>
					<td colspan="5">There are no products to display</td>
				</tr>
			<?php endif; ?>
		</table>
	

	</div>

<?php include '../includes/footer.php'; ?>