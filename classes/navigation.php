<?php

require_once('database.php');
require_once('page.php');
require_once('form.php');


$product = new Product($_GET['id']);


class Navigation extends Form{

	private $db;

	function __CONSTRUCT($id=0){
		# Set the database property to the db we supplied.
		$this->db = new Database;
		if($id!=0){
			$this->load($id);
		}
	}


	function make_lists(){
		$all_of_the_products = $this->get_products();

		foreach($all_of_the_products as $product){
			# Make the title of the category a link, so that we can edit it.
			echo '<div class="features">';
			echo '<a href="product_detail.php?id='.$product['product_id'].'"><img src="../public/assets/images/uploads/'.$product['image'].'" /></a>';
			echo '<h3>'.$product['product_name'].'</h3>';
			echo '<p>'.$this->limit_words($product['description'],15).'... <a href="product_detail.php?id='.$product['product_id'].'">Read More +</a>' ;
			echo '<span class="price">$'.$product['price'].'</span></p>';			
			echo '</div>';
		}
	}

	# Since the navigation sidebar needs to be slightly different for the admin,
	# we need to make a specialised function for it.
	function make_admin_lists(){
		$all_of_the_products = $this->get_products();

		foreach($all_of_the_products as $product){
			# Make the title of the category a link, so that we can edit it.
			echo '<div class="features admin">';
			echo '<a href="product_edit_page.php?id='.$product['product_id'].'"><img src="../public/assets/images/uploads/'.$product['image'].'" /></a>';
			echo '<h3>'.$product['product_name'].'</h3>';
			echo '<p>'.$this->limit_words($product['description'],15).'...';
			echo '<span class="price">$'.$product['price'].'</span></p>';
			echo '<a href="product_edit_page.php?id='.$product['product_id'].'" class="edit">Edit Page</a>';

			echo '<a href="delete_page.php?id='.$product['product_id'].'" name="delete" onclick="return confirm(\'Are you sure you want to delete this?\');"  class="delete">Delete</a>';
			echo '</a></div>';

		}
	}



	# We need a function to get all the categories
	function get_products(){
		$products = $this->db->get('product_id, product_name, image, description, price', 'tb_products', 'hidden = 0');
		return $products;
	}


	# We also need a function to get all of the pages
	# for a specific category that we ask for.
	function get_products_by_product_id($product_id){
		$products = $this->db->get(
			'product_name, product_id',
			'tb_proucts',
			'product_id = '.$product_id.' AND hidden=0 ORDER BY product_id ASC' 
		);


		return $products;
	}

	function get_page(){
		$products = $this->db->get('product_id, product_name, image, description, price', 'tb_products', 'hidden = 0');
		return $products;
	}


	# We also need a function to get all of the pages
	# for a specific category that we ask for.
	function get_page_by_page_id($page_id){
		$products = $this->db->get(
			'product_name, product_id',
			'tb_proucts',
			'product_id = '.$product_id.' AND hidden=0 ORDER BY product_id ASC' 
		);


		return $products;
	}


	function limit_words($string, $word_limit){
		$words = explode(" ",$string);
		return implode(" ",array_splice($words,0,$word_limit)
		);
	}

}