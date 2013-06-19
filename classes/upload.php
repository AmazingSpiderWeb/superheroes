<?php
class Upload{

	public function upload_to($folder = ''){

		$file = file_get_contents($_FILES['image']['tmp_name']);
		$name = $_FILES['image']['name'];
		file_put_contents("$folder/$name", $file);
		
	}



	public function file_name(){
		return $_FILES['image']['name'];
	}

}