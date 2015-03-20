<?php
/**
* 
*/
class Category 
{
	
	function getName($id)
	{
		global $db;
		$sql = "select category from auction_categories where id = '$id' LIMIT 1 ";
		
		//echo $sql;
		$res = $db->getAll($sql);

		//print_r($res);

		return $res[0]['category'];
	}

	function getIdValueArray(){
		global $db;
		
		$array = array();

		$sql = "select id, category from auction_categories ";

		$res = $db->getAll($sql);

		return $res;
	}
}