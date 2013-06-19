<?php

require_once('database.php');

class Page{

	public $page_id;
	public $title;
	public $content;
	public $location;

	function __CONSTRUCT($page_id=0){
		# Set the database property to the db we supplied.
		$this->db = new Database;
		if($page_id!=0){
			$this->load($page_id);
		}
	}



	# This function takes an id, and gets the record from the database with it.
	function load($page_id){
		# only get one item
		$result = $this->db->get_one(
			'title, content, location',
			'tb_pages',
			'page_id = '.$page_id
		);

		# if we got a result, then save the fields into the properties of this object
		if(count($result)){
			$this->page_id = $page_id;
			$this->title = $result['title'];
			$this->content = $result['content'];
			$this->location = $result['location'];

		}

		return $result;
	}

	# Create a new record in tb_category that reflects this object
	function save(){
		// $insert_query = 'INSERT INTO tb_categories';
		// $insert_query .= ' SET ';
		// $insert_query .= ' name = "'.$this->name.'"';

		// $this->db->query($insert_query);
			if($this->page_id){
				$this->update();
			}else{
				$this->page_id = $this->db->insert(
					'tb_pages',
					array(					
					'title' => $this->title,
					'content' => $this->content)
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
			'tb_pages',
			array(					
			'title' => $this->title,
			'content' => $this->content),
			array('page_id' => $this->page_id)
		);
	}

	function hide(){
		$this->db->update(
			'tb_pages',
			array( 'hidden' => 1),
			array('page_id' => $this->page_id)
			);
		}
	}



