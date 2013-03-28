<?php
ini_set("display_errors", "1");


class subjectModel extends dbModel {
	
	private $id;
	private $name;
	
	// setters
	
	function __construct() {
		parent::__construct();
	}
	
	function setId($value) {
		$this->id=$value;
	}
	function setName($value) {
		$this->name=$value;
	}
	
	// getters
	
	function getId() {
		return $this->id;
	}
	function getName() {
		return $this->name;
	}
	
	//functions
	function returnId() {
		$this->db->From('subject')->Fields(array('id'))->Where(array('name'=> $this->getName()))->Select();
		$array=$this->db->resultArray();
		return $array;
// 		if(count($array) > 0) {
// 			
		}		
		function insertSubject() {
			$this->db->Fields(array('name'=>$this->getName()))->From("subject")->Insert();
			$lastInsert=$this->db->lastInsertId();
			echo $lastInsert;
			return $lastInsert;
		}
	}


?>