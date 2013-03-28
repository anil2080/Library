<?php


class mainSubjectModel extends dbModel {
	
	private $id;
	private $name;
	
	function __construct() {
		parent::__construct();
	}
	
	// setters
	
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
		$this->db->From('main_subject')->Fields(array('id'))->Where(array('name'=> $this->getName()))->Select();
		$array=$this->db->resultArray();
		return $array;
	}
	
	function insertMainSubject() {
		$this->db->Fields(array('name'=>$this->getName()))->From("main_subject")->Insert();
		$lastInsert=$this->db->lastInsertId();
		echo $lastInsert;
		return $lastInsert;
	}
}

?>