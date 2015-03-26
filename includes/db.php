<?php

class db{

	private $host = "localhost";
	private $user = "root";


	private $pass = "";
	private $base_name = "bid";

	public function __construct(){
		@$this->connect($this->host, $this->user,$this->pass,$this->base_name);
	}

	/**
	* open mysql connection and select database
	* 
	* @param uses define variables
	**/
	function connect($host, $user, $pass, $base_name)
	{
		if ( !mysql_connect($host, $user, $pass) )
		{
			die("Could not connect to MySQL server");
		}

		$db = mysql_select_db($base_name);

		if ( !$db )
		{
			die("Unknown MySQL database");
		}

	}


	function getAll($query)
	{
		$result = mysql_query($query);
		$res = array();
		
		while($rows = mysql_fetch_assoc($result)){
			$res[] = $rows;
		}
		
		return $res;	

	}

	function getOne($table, $id)
	{
		$table = "auction_".$table;

		$query = "select * from {$table} where id = '{$id}' LIMIT 1";
		
		$result = mysql_query($query);
		
		$row = mysql_fetch_assoc($result);
		
		return $row;	

	}

	


}