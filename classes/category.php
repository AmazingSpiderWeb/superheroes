<?php
/*
	This is a model of a record from tb_category
*/

require_once('database.php');

class Category{

	# These are the fields from tb_category
	public $id;
	public $name;

	function __CONSTRUCT($id=0){
		# Set the database property to the db we supplied.
		$this->db = new Database;
		if($id!=0){
			$this->load($id);
		}
	}



	# This function takes an id, and gets the record from the database with it.
	function load($id){
		# only get one item
		$result = $this->db->get_one(
			'name',
			'tb_categories',
			'category_id = '.$id
		);

		# if we got a result, then save the fields into the properties of this object
		if(count($result)){
			$this->id = $id;
			$this->name = $result['name'];
		}

		return $result;
	}

	# Create a new record in tb_category that reflects this object
	function save(){
		// $insert_query = 'INSERT INTO tb_categories';
		// $insert_query .= ' SET ';
		// $insert_query .= ' name = "'.$this->name.'"';

		// $this->db->query($insert_query);
			if($this->id){
				$this->update();
			}else{
				$this->id = $this->db->insert(
					'tb_categories',
					array('name' => $this->name)
				);
			}
		}

	function update(){
		// $update_query = 'UPDATE tb_categories';
		// $update_query .= ' SET ';
		// $update_query .= ' name = "'.$this->name.'"';
		// $update_query .= ' WHERE category_id = '.$this->id;

		// $this->db->query($update_query);
		$this->db->update(
			'tb_categories',
			array('name' =>$this->name),
			array('category_id' => $this->id)
		);
	}

	function hide(){
		$this->db->update(
			'tb_categories',
			array( 'hidden' => 1),
			array('category_id' => $this->id)
			);
		}
	}