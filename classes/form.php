<?php

class Form{


	# this function creates a new form tag
	function open($action, $method, $class, $enctype=""){
		return '<form action="'.$action.'" method="'.$method.'" class="'.$class.'" enctype="'.$enctype.'">';
	}


	# this function closes the form tag
	function close(){
		return '</form>';
	}


	# this function creates a Label tag 
	function label($for, $title){
		return '<label for="'.$for.'">'.$title.'</label>';
	}


	# this function makes a new text input tag
	function text($name, $value = '', $placeholder = ''){
		return '<input type="text" id="'.$name.'" name="'.$name.'" value="'.$value.'" placeholder="'.$placeholder.'">';
	}

	function file($name){
		return '<input type="file" name="'.$name.'" >';
	}


	# this function makes a new hidden input tag
	function hidden($name, $value = ''){
		return '<input type="hidden" id="'.$name.'" name="'.$name.'" value="'.$value.'" >';
	}


	# this function make a select menu
	function select($name, $options){
		$html = '<select name="'.$name.'">';

		foreach($options as $option){
			$html .= "<option>$option</option>";
		}

		$html .= '</select>';

		return $html;
	}


	# this function makes a submit button
	function submit($name, $value){
		return '<input type="submit" name="'.$name.'" value="'.$value.'">';
	}


	# this function makes a text area
	function textarea($name, $value = ''){
		return '<textarea id="'.$name.'" name="'.$name.'">'.$value.'</textarea>';
	}
}