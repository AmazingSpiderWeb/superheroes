<?php
/*
	This is a model of a record from tb_pages
*/

require_once('database.php');

class Product{

	# These are the fields from tb_products
	public $product_id;
	public $product_name;
	public $image;
	public $description;
	public $price;

	function __CONSTRUCT($product_id=0){
		# Set the database property to the db we supplied.
		$this->db = new Database;
		if($product_id!=0){
			$this->load($product_id);
		}
	}

	# This function takes an id, and gets the record from the database with it.
	function load($product_id){
		$result = $this->db->get_one(
			'product_name, image, description, price',
			'tb_products',
			'product_id = '.$product_id
		);

		if(count($result)){
			$this->product_id = $product_id;
			$this->product_name = $result['product_name'];
			$this->image = $result['image'];
			$this->description = $result['description'];
			$this->price = $result['price'];
		}

		return $result;
	}

	# Create a new record in tb_page that reflects this object
	function save(){
	// 	$insert_query = 'INSERT INTO tb_pages';
	// 	$insert_query .= ' SET ';
	// 	$insert_query .= ' title = "'.$this->title.'"';
	// 	$insert_query .= ', content = "'.$this->content.'"';
	// 	$insert_query .= ', category_id = '.$this->category_id;

	// 	$this->db->query($insert_query);
	// }
		if($this->product_id){
			$this->update();
		}else{
			$this->product_id = $this->db->insert(
				'tb_products',
				array(
					'product_name' => $this->product_name,
					'description' => $this->description,
					'price' => $this->price,
					'image' =>$this->image
				)
			);
		}
	}



	function update(){
		// $update_query = 'UPDATE tb_pages';
		// $update_query .= ' SET ';
		// $update_query .= ' title = "'.$this->title.'"';
		// $update_query .= ', content = "'.$this->content.'"';
		// $update_query .= ', category_id = '.$this->category_id;
		// $update_query .= ' WHERE page_id = '.$this->id;

		// $this->db->query($update_query);
		$this->db->update(
			'tb_products',
			array('product_name' =>$this->product_name, 
			'description' =>$this->description,
			'price' =>$this->price, 'image' =>$this->image),
			array('product_id' => $this->product_id)
		);
	}	

	function hide(){
		$this->db->update(
			'tb_products',
			array( 'hidden' => 1),
			array('product_id' => $this->product_id)
			);
		}
	}

