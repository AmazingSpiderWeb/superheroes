<?php 
include '../includes/header.php'; 
require_once('../classes/page_admin.php');

$page = new Page(2);

?>


	<div class="main detail">
		<div class="description">
			<h2><?php echo $page->title ?></h2>
			<p><?php echo $page->content ?></p>
		</div>
		<div class="recommend">
			<span>Recommendation:</span>
			<p>"I have had the pleasure of purchasing numerous products from the Amazing Superheroes team over the past two years and am happy to recommend the company to any future collectors."</p>

			<p>"Amazing Superheroes have proven their ability in their chosen field."</p>
		</div>
		<div class="superheroGroup">
			<img src="assets/images/superhero_group2.jpg" alt="">
		</div>
	</div>

			
	<?php include '../includes/footer.php'; ?>