<?php

class Common{

	public function englishDate($date){
		return date('F jS, Y g:i:s a', $date);	
	}

	public function pr($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}