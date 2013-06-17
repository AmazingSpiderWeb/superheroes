<?php

require_once('database.php');
require_once('page.php');
$product = new Product($_GET['id']);

class Navigation{

	private $db;

	function __CONSTRUCT($id=0){
		# Set the database property to the db we supplied.
		$this->db = new Database;
		if($id!=0){
			$this->load($id);
		}
	}


	# Since the navigation sidebar needs to be slightly different for the admin,
	# we need to make a specialised function for it.
	function make_admin_lists(){
		$all_of_the_products = $this->get_products();

		foreach($all_of_the_products as $product){
			# Make the title of the category a link, so that we can edit it.
			echo '<div class="features">';
			echo '<img src="'.$product['image'].'" />';
			echo '<h3>'.$product['product_name'].'</h3>';
			echo '<p>'.substr($product['description'],0,150).'...';
			echo '<span class="price">$'.$product['price'].'</span></p>';
			echo '<a href="product_edit_page.php?id='.$product['product_id'].'" class="edit">Edit Page</a>';
			echo '<a href="" name="delete">Delete</a>';
			echo '</a></div>';

		}
	}



	# We need a function to get all the categories
	function get_products(){
		$products = $this->db->get('product_id, product_name, image, description, price', 'tb_products');
		return $products;
	}


	# We also need a function to get all of the pages
	# for a specific category that we ask for.
	function get_products_by_product_id($product_id){
		$products = $this->db->get(
			'product_name, product_id',
			'tb_proucts',
			'product_id = '.$product_id.' ORDER BY product_id ASC' 
		);


		return $pages;
	}

}