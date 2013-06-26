<?php

session_start();

require_once('../classes/page.php');
require_once('../classes/database.php');

class Cart extends Database{

# These are the fields from tb_products
	public $order_id;
	public $quantity;
	public $product_id;
	public $order_date;

	function __CONSTRUCT($order_id=0){
		# Set the database property to the db we supplied.
		$this->db = new Database;

		if($order_id!=0){
			$this->load($order_id);
		}
	}


	/**
	* 
	* Add a product to the cart
	* 
	* $id 			int
	* $quantity 	int
	*/
	public function store_product($id, $quantity){
		# Make sure there is a cart array inside the session
		$this->init();

		# if this product already exists then just bump up the quantity
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id] += $quantity;

		# if the product doesn't exist yet, create a new entry for it
		}else{
			$_SESSION['cart'][$id] = $quantity;
		}
	}



	/**
	* 
	* Clear the cart
	* 
	*/
	public function clear(){
		unset($_SESSION['cart']);
	}


	public function delete($id){
		unset($_SESSION['cart'][$id]);
	}






	/**
	* 
	* Get all the relevant info on each product in the cart
	* 
	*/
	public function get_all(){
		if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
			foreach($_SESSION['cart'] as $id => $quantity){
				$temp = new Product($id);
				$products[] = array(
					'id' => $temp->product_id,
					'name' => $temp->product_name,
					'image' => $temp->image,
					'price' => $temp->price,
					'quantity' => $quantity
				);
			}
			return $products;
		}else{
			return false;
		}
	}



	/**
	* 
	* Return the total price of all products in the cart
	* 
	*/
	public function total_price(){
		$products = $this->get_all();

		foreach($products as $product){
			$total += $product['price'] * $product['quantity'];
		}

		return $total;
	}




	/**
	* 
	* Make sure there is a cart entry in the $_SESSION array
	* 
	*/
	private function init(){
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}
	}




	public function order(){
		$this->order_id = $this->db->insert(
			'tb_order',
			array(
				'order_date' => $this->order_date
			)
		);
	}


	public function checkout(){		

		$this->db->insert(
			'tb_orderline',
			array(
				'order_id' => $this->order_id,
				'quantity' => $this->quantity,
				'product_id' => $this->product_id
			)
		);	

	}







}