<?php

require_once 'model/dbModel.php';
require_once 'model/Course.php';

class MemberModel extends dbModel
{
    private $_id;
    private $_memberName;
    private $_department;
    private $_yearOfJoining;
    private $_courseId;
    private $_university;
    private $_fatherName;
    private $_address;
    private $_cityId;
    private $_streetId;
    private $_stateId;
    private $_countryId;
    private $_zip;
    private $_remark;
    private $_contactNumber;
    private $_maxCopy;
    private $_copyAlloted;
    private $_visible;
    private $_fineTillYet;
    private $_finePaid;
    private $_imageExtension;
    private $_reserveStatus;
    private $_reserveId;
    private $_reserveVoidDate;
    
    public function __construct() {
        parent::__construct();
    }
    
	/**
     * @return the $_id
     */
    public function getId ()
    {
        return $this->_id;
    }

	/**
     * @return the $_memberName
     */
    public function getMemberName ()
    {
        return $this->_memberName;
    }

	/**
     * @return the $_department
     */
    public function getDepartment ()
    {
        return $this->_department;
    }

	/**
     * @return the $_yearOfJoining
     */
    public function getYearOfJoining ()
    {
        return $this->_yearOfJoining;
    }

	/**
     * @return the $_courseId
     */
    public function getCourseId ()
    {
        return $this->_courseId;
    }

	/**
     * @return the $_university
     */
    public function getUniversity ()
    {
        return $this->_university;
    }

	/**
     * @return the $_fatherName
     */
    public function getFatherName ()
    {
        return $this->_fatherName;
    }

	/**
     * @return the $_address
     */
    public function getAddress ()
    {
        return $this->_address;
    }

	/**
     * @return the $_cityId
     */
    public function getCityId ()
    {
        return $this->_cityId;
    }

	/**
     * @return the $_streetId
     */
    public function getStreetId ()
    {
        return $this->_streetId;
    }

	/**
     * @return the $_stateId
     */
    public function getStateId ()
    {
        return $this->_stateId;
    }

	/**
     * @return the $_countryId
     */
    public function getCountryId ()
    {
        return $this->_countryId;
    }

	/**
     * @return the $_zip
     */
    public function getZip ()
    {
        return $this->_zip;
    }

	/**
     * @return the $_remark
     */
    public function getRemark ()
    {
        return $this->_remark;
    }

	/**
     * @return the $_contactNumber
     */
    public function getContactNumber ()
    {
        return $this->_contactNumber;
    }

	/**
     * @return the $_maxCopy
     */
    public function getMaxCopy ()
    {
        return $this->_maxCopy;
    }

	/**
     * @return the $_copyAlloted
     */
    public function getCopyAlloted ()
    {
        return $this->_copyAlloted;
    }

	/**
     * @return the $_visible
     */
    public function getVisible ()
    {
        return $this->_visible;
    }

	/**
     * @return the $_fineTillYet
     */
    public function getFineTillYet ()
    {
        return $this->_fineTillYet;
    }

	/**
     * @return the $_finePaid
     */
    public function getFinePaid ()
    {
        return $this->_finePaid;
    }

	/**
     * @return the $_imageExtension
     */
    public function getImageExtension ()
    {
        return $this->_imageExtension;
    }

	/**
     * @return the $_reserveStatus
     */
    public function getReserveStatus ()
    {
        return $this->_reserveStatus;
    }

	/**
     * @return the $_reserveId
     */
    public function getReserveId ()
    {
        return $this->_reserveId;
    }

	/**
     * @return the $_reserveVoidDate
     */
    public function getReserveVoidDate ()
    {
        return $this->_reserveVoidDate;
    }

	
	/**
     * @param field_type $_id
     */
    public function setId ($_id)
    {
        $this->_id = $_id;
    }

	/**
     * @param field_type $_memberName
     */
    public function setMemberName ($_memberName)
    {
        $this->_memberName = $_memberName;
    }

	/**
     * @param field_type $_department
     */
    public function setDepartment ($_department)
    {
        $this->_department = $_department;
    }

	/**
     * @param field_type $_yearOfJoining
     */
    public function setYearOfJoining ($_yearOfJoining)
    {
        $this->_yearOfJoining = $_yearOfJoining;
    }

	/**
     * @param field_type $_courseId
     */
    public function setCourseId ($_courseId)
    {
        $this->_courseId = $_courseId;
    }

	/**
     * @param field_type $_university
     */
    public function setUniversity ($_university)
    {
        $this->_university = $_university;
    }

	/**
     * @param field_type $_fatherName
     */
    public function setFatherName ($_fatherName)
    {
        $this->_fatherName = $_fatherName;
    }

	/**
     * @param field_type $_address
     */
    public function setAddress ($_address)
    {
        $this->_address = $_address;
    }

	/**
     * @param field_type $_cityId
     */
    public function setCityId ($_cityId)
    {
        $this->_cityId = $_cityId;
    }

	/**
     * @param field_type $_streetId
     */
    public function setStreetId ($_streetId)
    {
        $this->_streetId = $_streetId;
    }

	/**
     * @param field_type $_stateId
     */
    public function setStateId ($_stateId)
    {
        $this->_stateId = $_stateId;
    }

	/**
     * @param field_type $_countryId
     */
    public function setCountryId ($_countryId)
    {
        $this->_countryId = $_countryId;
    }

	/**
     * @param field_type $_zip
     */
    public function setZip ($_zip)
    {
        $this->_zip = $_zip;
    }

	/**
     * @param field_type $_remark
     */
    public function setRemark ($_remark)
    {
        $this->_remark = $_remark;
    }

	/**
     * @param field_type $_contactNumber
     */
    public function setContactNumber ($_contactNumber)
    {
        $this->_contactNumber = $_contactNumber;
    }

	/**
     * @param field_type $_maxCopy
     */
    public function setMaxCopy ($_maxCopy)
    {
        $this->_maxCopy = $_maxCopy;
    }

	/**
     * @param field_type $_copyAlloted
     */
    public function setCopyAlloted ($_copyAlloted)
    {
        $this->_copyAlloted = $_copyAlloted;
    }

	/**
     * @param field_type $_visible
     */
    public function setVisible ($_visible)
    {
        $this->_visible = $_visible;
    }

	/**
     * @param field_type $_fineTillYet
     */
    public function setFineTillYet ($_fineTillYet)
    {
        $this->_fineTillYet = $_fineTillYet;
    }

	/**
     * @param field_type $_finePaid
     */
    public function setFinePaid ($_finePaid)
    {
        $this->_finePaid = $_finePaid;
    }

	/**
     * @param field_type $_imageExtension
     */
    public function setImageExtension ($_imageExtension)
    {
        $this->_imageExtension = $_imageExtension;
    }

	/**
     * @param field_type $_reserveStatus
     */
    public function setReserveStatus ($_reserveStatus)
    {
        $this->_reserveStatus = $_reserveStatus;
    }

	/**
     * @param field_type $_reserveId
     */
    public function setReserveId ($_reserveId)
    {
        $this->_reserveId = $_reserveId;
    }

	/**
     * @param field_type $_reserveVoidDate
     */
    public function setReserveVoidDate ($_reserveVoidDate)
    {
        $this->_reserveVoidDate = $_reserveVoidDate;
    }

    
public function InsertMember($values) {
        // do database code here
      
//        print_r("<pre>");
//        print_r($values);
//        die;
//        $this->setAddress($values['address']);
/*======================================================
 * CourseModel class is used to insert or return the id of course entered by user at the time of adding member.
 * ReturnId() and InsertId() are two functions used for insertion of new id and then returning that id.
 * 
 * 
 * 
 * 
 */
        $course_obj = new CourseModel();
        $course_obj->setName($values['course_id']);
        
        $courseId=$course_obj->ReturnId();
 
        if($courseId==NULL)
        {    
        $qq=$course_obj->InsertId($values['course_id']);
        $this->setCourseId($qq);
        }
        else
        {
            $this->setCourseId($courseId[0]['id']);
        }

       $this->setId($values['id']);
       $this->setMemberName($values['member_name']);
       $this->setDepartment($values['department']);
       $this->setYearOfJoining($values['year_of_joining']);
       //$this->setCourseId($values['course_id']);
       $this->setUniversity($values['university']);
       $this->setFatherName($values['father_name']);
       $this->setAddress($values['address']);
       $this->setCityId($values['city_id']);
       $this->setStreetId($values['street_id']);
       $this->setStateId($values['state_id']);
       $this->setCountryId($values['country_id']);
       $this->setZip($values['zip']);
       $this->setRemark($values['remark']);
       $this->setContactNumber($values['contact_number']);
       $this->setMaxCopy($values['max_copy']);
       $this->setCopyAlloted($values['copy_alloted']);
       $this->setVisible($values['visible']);
       $this->setFineTillYet($values['fine_till_yet']);
       $this->setFinePaid($values['fine_paid']);
       $this->setImageExtension($values['image_extension']);
       $this->setReserveVoidDate($values['reserve_void_date']);
       $this->setReserveId($values['reserve_id']);
		
		try {
			$array1 = array();
			
			$value = $this->getId(); 
			if($value != null)
				$array1["id"]	= $value;
			
			$value = $this->getMemberName();
			if($value != null)
				$array1["member_name"]	= $value;
			
			$value = $this->getDepartment();
			if($value != null)
				$array1["department"]	= $value;
			
			$value = $this->getYearOfJoining();
			if($value != null)
			    $array1["year_of_joining"]	= $value;
			
			$value = $this->getCourseId();
			if($value != null)
				$array1["course_id"]	= $value;
			
			$value = $this->getUniversity();
			if($value != null)
				$array1["university"]	= $value;
			
			$value = $this->getFatherName();
			if($value != null)
				$array1["father_name"]	= $value;
			
			$value = $this->getAddress();
			if($value != null)
			    $array1["address"]	= $value;
			
              $value = $this->getCityid();
			if($value != null)
				$array1["city_id"]	= $value;
			
			$value = $this->getStreetId();
			if($value != null)
				$array1["street_id"]	= $value;
			
			$value = $this->getStateId();
			if($value != null)
			    $array1["state_id"]	= $value;
			
			$value = $this->getCountryId();
			if($value != null)
				$array1["country_id"]	= $value;
			
			$value = $this->getZip();
			if($value != null)
				$array1["zip"]	= $value;
			
			$value = $this->getRemark();
			if($value != null)
				$array1["remark"]	= $value;
			
			$value = $this->getContactNumber();
			if($value != null)
				$array1["contact_number"]= $value;
			
                        $value = $this->getMaxCopy();             
			if($value != null)
				$array1["max_copy"]	= $value;
			
			$value = $this->getCopyAlloted();
			if($value != null)
				$array1["copy_alloted"]	= $value;
                        $value = $this->getVisible();
			if($value != null)
				$array1["visible"]	= $value;
			
			$value = $this->getFineTillYet();
			if($value != null)
				$array1["fine_till_yet"]= $value;
			
			$value = $this->getFinePaid();
			if($value != null)
				$array1["fine_paid"]= $value;
			
			$value = $this->getImageExtension();
			if($value != null)
				$array1["image_extension"]= $value;
			
			$value = $this->getReserveVoidDate();
			if($value != null)
				$array1["reserve_void_date"]= $value;
			
			$value = $this->getReserveid();
			if($value != null)
				$array1["reserve_id"]	= $value;
                        
			
                        
			//print_r("<pre>");
			//print_r($array1);
			//die("dfdf");
		
			$this->db->startTransaction();
			$this->db->Fields($array1)->From("member")->Insert();
			$this->db->commit();
			//$this->db->startTransaction();
			//$this->db->Fields($array1)->From("member")->Insert();
			//$this->db->commit();
			
		}
		catch (Exception $e) {
			$this->db->rollback();
                    
		}
		
	}
	
	
	
	
	
	
// 	CREATE TABLE `member` (
// 	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
// 	`member_name` char(30) DEFAULT NULL,
// 	`department` char(15) DEFAULT NULL,
// 	`year_of_joining` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
// 	`course_id` int(10) unsigned DEFAULT NULL,
// 	`university` varchar(50) DEFAULT NULL,
// 	`father_name` char(30) DEFAULT NULL,
// 	`address` varchar(50) DEFAULT NULL,
// 	`city` char(30)  DEFAULT NULL,
// 	`street` char(30)  DEFAULT NULL,
// 	`state` char(30)  DEFAULT NULL,
// 	`country` char(30)  DEFAULT NULL,
// 	`zip` char(6) DEFAULT NULL,
// 	`remark` varchar(500) DEFAULT NULL,
// 	`contact_number` char(10) DEFAULT NULL,
// 	`max_copy` tinyint(3) unsigned DEFAULT NULL,
// 	`copy_alloted` tinyint(3) unsigned DEFAULT NULL,
// 	`visible` enum('TRUE','FALSE') DEFAULT 'TRUE',
// 	`fine_till_yet` int(10) unsigned DEFAULT NULL,
// 	`fine_paid` int(10) unsigned DEFAULT NULL,
// 	`image_extension` char(5) DEFAULT NULL,
// 	`reserve_status` enum('TRUE','FALSE') DEFAULT 'TRUE',
// 	`reserve_id` int(10) unsigned DEFAULT NULL,
// 	`reserve_void_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
// 	PRIMARY KEY (`id`),
	
// 	KEY `course_id` (`course_id`),
// 	CONSTRAINT `member_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
// 	) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 |
	
	
	
	
	
	
	
	
	
        
        public function UpdateMember($values) {
       		$obj = new MemberModel();

		try {
                    
//                        $obj->setId($values['reserve_void_date']);
//                        $obj->setMemberName($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//			$obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//                        $obj->setReserveVoidDate($values['reserve_void_date']);
//			$this->db->startTransaction();
//			$this->db->Fields($array1)->From("member")->Insert();
//			$this->db->commit();
			
		}
		catch (Exception $e) {
			$this->db->rollback();
                    
		}
		
	}
        
        
        public function DeleteMember($values) {
           
            $this->setId($values['id']);
            $id=$this->getId();
             echo $id;
            //first we need that id which is entered by user that id is valid or not...
            $whereid=array('id'=>$id);//key value pair for updation
            $this->db->Fields(array('id'))->From("member")->where($whereid)->select();
            //print_r($boolval) or die("if the value of boolvalue is 0");
            
            $memberResultArray=$this->db->resultArray();
            //print_r($memberResultArray);die;
            $recordsNumber=count($memberResultArray);
            if($recordsNumber>0)
            {
                //i.e. The id entered by user to delete exists....
                $this->db->Fields(array('visible'))->From("member")->where($whereid)->select();
                $memberIdExistArray=$this->db->resultArray();
                $visiblevalue=$memberIdExistArray[0]['visible'];
                if($visiblevalue==TRUE)
                { echo "halo";
                    $this->db->Fields(array('visible'=>'FALSE'))->From("member")->where($whereid)->update();
                }
            }
            else {
                echo "not valid value";
                
            }
            
            
        }
    }


