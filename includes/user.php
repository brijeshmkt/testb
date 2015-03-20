<?php

/**
* 
*/
class User{
	
	function getUsername($id)
	{
		global $db;
		$sql = "select username from `bid`.`auction_users` where id = '$id' LIMIT 1 ";
		
		$username = $db->getAll($sql);

		$username = $username[0]['username'];

		return $username;
	}
}