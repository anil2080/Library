<?php

class dbModel {
	
	protected $db;
	
	function __construct()  {
	   
	   //die("hello");
		$this->db = DBConnection::Connect();
	} 
}

?>