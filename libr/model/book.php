<?php



class BookModel extends dbModel {
	
	private $id;
	private $_existingBookId;
	private $_bookTitle;
	private $_authorName;
	private $_publisherName;
	private $_subjectId;
	private $_numberOfCopy;
        private $_existingNumberOfCopy; // addeted field
	private $_mainSubjectId;
	
	private $_tableName;
	
	
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $_existingBookId
	 */
	public function getExistingBookId() {
		return $this->_existingBookId;
	}

	/**
	 * @return the $_bookTitle
	 */
	public function getBookTitle() {
		return $this->_bookTitle;
	}

	/**
	 * @return the $_authorName
	 */
	public function getAuthorName() {
		return $this->_authorName;
	}

	/**
	 * @return the $_publisherName
	 */
	public function getPublisherName() {
		return $this->_publisherName;
	}

	/**
	 * @return the $_subjectId
	 */
	public function getSubjectId() {
		return $this->_subjectId;
	}

	/**
	 * @return the $_numberOfCopy
	 */
	public function getNumberOfCopy() {
		return $this->_numberOfCopy;
	}
        
        /**
	 * @return the $_existingNumberOfCopy
	 */
	public function getExistingNumberOfCopy() {
		return $this->_existingNumberOfCopy;
	}

	/**
	 * @return the $_mainSubjectId
	 */
	public function getMainSubjectId() {
		return $this->_mainSubjectId;
	}

	/**
	 * @return the $_tableName
	 */
	public function getTableName() {
		return $this->_tableName;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $_existingBookId
	 */
	public function setExistingBookId($_existingBookId) {
		$this->_existingBookId = $_existingBookId;
	}

	/**
	 * @param field_type $_bookTitle
	 */
	public function setBookTitle($_bookTitle) {
		$this->_bookTitle = $_bookTitle;
	}

	/**
	 * @param field_type $_authorName
	 */
	public function setAuthorName($_authorName) {
		$this->_authorName = $_authorName;
	}

	/**
	 * @param field_type $_publisherName
	 */
	public function setPublisherName($_publisherName) {
		$this->_publisherName = $_publisherName;
	}

	/**
	 * @param field_type $_subjectId
	 */
	public function setSubjectId($_subjectId) {
		$this->_subjectId = $_subjectId;
	}

	/**
	 * @param field_type $_numberOfCopy
	 */
	public function setNumberOfCopy($_numberOfCopy) {
		$this->_numberOfCopy = $_numberOfCopy;
	}
        
	/**
	 * @param field_type $_existingNumberOfCopy
	 */
	public function setExistingNumberOfCopy($_existingNumberOfCopy) {
		$this->_existingNumberOfCopy = $_existingNumberOfCopy;
	}

	

	/**
	 * @param field_type $_mainSubjectId
	 */
	public function setMainSubjectId($_mainSubjectId) {
		$this->_mainSubjectId = $_mainSubjectId;
	}

	/**
	 * @param string $_tableName
	 */
	public function setTableName($_tableName) {
		$this->_tableName = $_tableName;
	}

	
	
	public function addBook() {
		
		try {
			$array1 = array();
			
			$value = $this->getbook_title();
			if($value != null)
				$array1["book_title"]	= $value;
			
			$value = $this->getbook_title();
			if($value != null)
				$array1["author_name"]	= $value;
			
			$value = $this->getbook_title();
			if($value != null)
				$array1["publisher_name"]	= $value;
			
			$value = $this->getbook_title();
			if($value != null)
				$array1["subject_id"]	= $value;
			
			$value = $this->getbook_title();
			if($value != null)
				$array1["number_of_copy"]	= $value;
			
			$value = $this->getbook_title();
			if($value != null)
				$array1["main_subject_id"]	= $value;
			
			$this->db->startTransaction();
			$this->db->Fields($array1)->From($this->tableName)->Insert();
			$this->db->commit();
			
		}
		catch (Exception $e) {
			$this->db->rollback();
		}
		
	}
	
	public function updateBook($availableCopy,$arrayBookValues) {
            echo "inside updateBOOK() <br/>";
	// $availableCopy= no of copy in database field number of copy prior to update
		try {
				
			$this->db->startTransaction();
                        $this->db->Fields(array('existing_number_of_copy'))->From("book")->Where($arrayBookValues)->select();
                        $exitingCopy=$this->db->resultArray();
                        $existingNumberOfCopy=$exitingCopy[0]['existing_number_of_copy'];
                        echo "<br/> no copy in db = ".$existingNumberOfCopy."<br/>";
                        $numberOfCopy=$this->getNumberOfCopy(); //num of copies entered in form
                        $existingNumberOfCopy += $numberOfCopy;
                        echo $existingNumberOfCopy."<br/>";
                        $numberOfCopy += $availableCopy;
                        
			$this->db->Fields(array('number_of_copy'=>$numberOfCopy,'existing_number_of_copy'=>$existingNumberOfCopy))->From("book")->Where($arrayBookValues)->Update();
			// call select query
			//echo"<br/>Data updated succesfully "; die(" = line no 219 ");	
                        $this->db->commit();
		}
		catch (Exception $e) {
			$this->db->rollback();
                        echo "exception in updateBook() <br/>";
		}
	
	}
	
	public function deletBook() {
            echo"in book class delete book <br/>";
            
             $arrayBookValues = array (
                'book_title' => $this->getBookTitle (),
                'author_name' => $this->getAuthorName (),
                'publisher_name' => $this->getPublisherName (),
                'subject_id' => $this->getSubjectId (),
                'main_subject_id' => $this->getMainSubjectId () 
             );
		
		// 1.get the bid of book using book_title field of book table
            
            $this->db->Fields(array('id'))->where($arrayBookValues)->From("book")->select();
            $id=$this->db->resultArray();
            print_r($id); die("line 245 no <br/>");
            
            // 2. get the book id from form input (id) of book_copies table
            // check the value of visible field using bid and bool_id
            // if visible is true then execute
            // now we have book_id and id of book_copies
            // fire query
            // update book_copies set visible = false where book_id=bid and id= tep 2 value
            //another update in book table also
            // get the existing_number_of_copy
            // decrement existing_number_of_copy i.e.  $v= existing_number_of_copy --
            // update book set existing_number_of_copy=$v where id=bid;
            
	
	}
	
	public function searchBook($array) {
		
		$this->db->Select();
	}
	
	public function reserveBook() {
		
	}
	
	public function issueBook() {
		
	}
	
	public function returnBook() {
		
	}
	
}