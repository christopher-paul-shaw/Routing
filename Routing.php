<?php

class Routing {

	public $found = false;

	public function get ($value, $function) { 
		if (isset($_GET[$value])) {
			$this->found = true;
			return $function($_GET[$value]);
		}
	}
	
	public function post ($value, $function) { 
		if (isset($_POST[$value])) {
			$this->found = true;
			return $function($_POST[$value]);
		}
	}

	public function home ($function) {
		if (!$this->found) {
			return	call_user_func($function);
		}
	}
}
