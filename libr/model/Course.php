<?php
ini_set("display_errors", "1");

require_once 'model/dbModel.php';

class CourseModel extends dbModel {

    private $Id;
    private $Name;
    //private $TableName="course";
    // setters

    function __construct() {
        parent::__construct();
    }

    function setId($value) {
        $this->Id=$value;
    }
    function setName($value) {
        $this->Name=$value;
    }

    // getters

    function getId() {
        return $this->Id;
    }
    function getName() {
        return $this->Name;
    }

    //functions
    function ReturnId() 
    {       
         $this->db->From('course')->Fields(array('id'))->Where(array('name'=> $this->getName()))->Select();
         $ReturnArray=$this->db->resultArray();
  
         if(count($ReturnArray)>0)
         {
             return $ReturnArray;
         }
         else 
         {
             return NULL;
         }
    }
    
    
    function ReturnCourseName($where = NULL) {
        if($where == null) {
            $this->db->Fields(array('name'))->From('course')->Select();
            $ReturnArray=$this->db->resultArray();
//             print_r("<pre>");
//             print_r($ReturnArray);
//             die;
            return $ReturnArray;
        }
        else {
            $this->db->Fields(array('name'))->Where($where)->From('course')->Select();
            $ReturnArray=$this->db->resultArray();
            return $ReturnArray;
        }
    }
    
    
    public function InsertId($values) {
        $this->db->Fields(array('name'=>$values))->From('course')->Insert();
        $Id=$this->db->lastInsertId();  
        return $Id;
    }
}

?>
