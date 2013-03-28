<?php
class BookCopiesModel extends BookModel
{
    private $_id;
    private $_bookId;
    private $_existingBookId;
    private $_addition;
    private $_price;
    private $_discount;
    private $_netPrice;
    private $_billDetailId;
    private $_vendorId;
    private $_volume;
    private $_dateOfPurchase;
    private $_isbnNumber;
    private $_issuedTo;
    private $_visible;
    private $_reserveFor;
    private $_remark;
    private $_tableName;
    
    /**
     *
     * @return the $_id
     */
    public function getId()
    {
        return $this->_id;
    }
    
    /**
     *
     * @return the $_bookId
     */
    public function getBookId()
    {
        return $this->_bookId;
    }
    
    /**
     *
     * @return the $_existingBookId
     */
    public function getExistingBookId()
    {
        return $this->_existingBookId;
    }
    
    /**
     *
     * @return the $_addition
     */
    public function getAddition()
    {
        return $this->_addition;
    }
    
    /**
     *
     * @return the $_price
     */
    public function getPrice()
    {
        return $this->_price;
    }
    
    /**
     *
     * @return the $_discount
     */
    public function getDiscount()
    {
        return $this->_discount;
    }
    
    /**
     *
     * @return the $_netPrice
     */
    public function getNetPrice()
    {
        return $this->_netPrice;
    }
    
    /**
     *
     * @return the $_billDetailId
     */
    public function getBillDetailId()
    {
        return $this->_billDetailId;
    }
    
    /**
     *
     * @return the $_vendorId
     */
    public function getVendorId()
    {
        return $this->_vendorId;
    }
    
    /**
     *
     * @return the $_volume
     */
    public function getVolume()
    {
        return $this->_volume;
    }
    
    /**
     *
     * @return the $_dateOfPurchase
     */
    public function getDateOfPurchase()
    {
        return $this->_dateOfPurchase;
    }
    
    /**
     *
     * @return the $_isbnNumber
     */
    public function getIsbnNumber()
    {
        return $this->_isbnNumber;
    }
    
    /**
     *
     * @return the $_issuedTo
     */
    public function getIssuedTo()
    {
        return $this->_issuedTo;
    }
    
    /**
     *
     * @return the $_visible
     */
    public function getVisible()
    {
        return $this->_visible;
    }
    
    /**
     *
     * @return the $_reserveFor
     */
    public function getReserveFor()
    {
        return $this->_reserveFor;
    }
    
    /**
     *
     * @return the $_remark
     */
    public function getRemark()
    {
        return $this->_remark;
    }
    
    /**
     *
     * @return the $_tableName
     */
    public function getTableName()
    {
        return $this->_tableName;
    }
    
    /**
     *
     * @param field_type $_id            
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }
    
    /**
     *
     * @param field_type $_bookId            
     */
    public function setBookId($_bookId)
    {
        $this->_bookId = $_bookId;
    }
    
    /**
     *
     * @param field_type $_existingBookId            
     */
    public function setExistingBookId($_existingBookId)
    {
        $this->_existingBookId = $_existingBookId;
    }
    
    /**
     *
     * @param field_type $_addition            
     */
    public function setAddition($_addition)
    {
        $this->_addition = $_addition;
    }
    
    /**
     *
     * @param field_type $_price            
     */
    public function setPrice($_price)
    {
        $this->_price = $_price;
    }
    
    /**
     *
     * @param field_type $_discount            
     */
    public function setDiscount($_discount)
    {
        $this->_discount = $_discount;
    }
    
    /**
     *
     * @param field_type $_netPrice            
     */
    public function setNetPrice($_netPrice)
    {
        $this->_netPrice = $_netPrice;
    }
    
    /**
     *
     * @param field_type $_billDetailId            
     */
    public function setBillDetailId($_billDetailId)
    {
        $this->_billDetailId = $_billDetailId;
    }
    
    /**
     *
     * @param field_type $_vendorId            
     */
    public function setVendorId($_vendorId)
    {
        $this->_vendorId = $_vendorId;
    }
    
    /**
     *
     * @param field_type $_volume            
     */
    public function setVolume($_volume)
    {
        $this->_volume = $_volume;
    }
    
    /**
     *
     * @param field_type $_dateOfPurchase            
     */
    public function setDateOfPurchase($_dateOfPurchase)
    {
        $this->_dateOfPurchase = $_dateOfPurchase;
    }
    
    /**
     *
     * @param field_type $_isbnNumber            
     */
    public function setIsbnNumber($_isbnNumber)
    {
        $this->_isbnNumber = $_isbnNumber;
    }
    
    /**
     *
     * @param field_type $_issuedTo            
     */
    public function setIssuedTo($_issuedTo)
    {
        $this->_issuedTo = $_issuedTo;
    }
    
    /**
     *
     * @param field_type $_visible            
     */
    public function setVisible($_visible)
    {
        $this->_visible = $_visible;
    }
    
    /**
     *
     * @param field_type $_reserveFor            
     */
    public function setReserveFor($_reserveFor)
    {
        $this->_reserveFor = $_reserveFor;
    }
    
    /**
     *
     * @param field_type $_remark            
     */
    public function setRemark($_remark)
    {
        $this->_remark = $_remark;
    }
    
    /**
     *
     * @param string $_tableName            
     */
    public function setTableName($_tableName)
    {
        $this->_tableName = $_tableName;
    }
    
    
    
    
//     public function addBook()
//     {
//         $this->db->startTransaction ();
//         $this->db->Fields ( $array1 )->From ( $this->$tableName )->Insert ();
//         $this->db->commit ();
//     }
    //=================================
    // code to add the book details in book tables
    //=================================
    function addBook1($insertArr=array()) {
        $this->db->startTransaction();
        $insertArr = $this->array_push_assoc($insertArr, 'existing_number_of_copy', $this->getNumberOfCopy());
        $bool = $this->db->Fields($insertArr)->From("book")->Insert();
        // if bool is true then execute if
        if($bool) {
            $this->db->commit();
        }
        else {
            $this->db->rollback();
        }
    }
    
    //=================================
    // code to add the book copies details in book_copies tables
    //=================================
    
    function addBookCopies($insertCopies=array(),$bookValues=array()) {
        //print_r($insertCopies); die(" insert array print");
        //echo "in add book copies line no 359 ";die;
        $numberOfCopies = $this->getNumberOfCopy();
        
        echo " <br/> number = " .$numberOfCopies;
        //echo $numberOfCopies; die("num of copies");
        // get the number_of_copies from book class getNumberOfCopies()
      
        // 1. bid = select the id from book table where $arrayBookValues or use lastInsertId()
       //select book id from book table
       print_r($bookValues); 
        $this->db->Fields(array('id'))->Where($bookValues)->From("book")->select();
        $resultId = $this->db->resultArray();
        print_r($resultId);
        $id = $resultId[0]['id'];
        echo $id;
        
        // get existing_book_id from bookcopiestable
       
        $this->db->Fields(array('max(existing_book_id)'))->Where()->From("book_copies")->select();
        $existingId=$this->db->resultArray();
        print_r($existingId);
        $existingBookId = $existingId[0]['max(existing_book_id)'];
        
        echo $existingBookId; //die("line no 370 <br/>");
//        print_r($resultId); //die;
        echo $resultId[0]['id']; echo " line 364 <br/>"; 
//        echo"book id";
//        print_r($resultId); die;
        
        // 2. mid=select the max id from book_copies where book id = bid
        //mid to store max id available in the table book_copies if entry is there else mid is NULL
        $this->db->Fields(array('max(id)'))->From("book_copies")->Where(array('book_id' => $id))->select();
        //die;
        $mid=$this->db->resultArray();
        echo "<pre>";
        echo(" mid data <br/>"); print_r ($mid); //die;
         if($mid[0]['max(id)'] == NULL){
             $mid[0]['max(id)'] = 0; //if mid=null then mid is assigned 0 so that entry starts from 1
         }
         
         echo $mid[0]['max(id)'];
        // pust bid and mid in array $insertCopies
         $insertCopies = $this->array_push_assoc($insertCopies, 'book_id', $resultId[0]['id']);
         $insertCopies = $this->array_push_assoc($insertCopies, 'id', $mid[0]['max(id)']);
         $insertCopies = $this->array_push_assoc($insertCopies, 'existing_book_id', $existingBookId);
         print_r($insertCopies); //die(" Inset copis data");
         $i=0;
         while($i<$numberOfCopies) { //i.e 0<10
         
         $insertCopies['id']+=1;
         $insertCopies['existing_book_id'] +=1; 
        // 3. iteratively call the Insert() to insert record in the book_copies. by passing $insertCopies
         
         $this->db->Fields($insertCopies)->From("book_copies")->Insert();
        
        //  as fields in query
        // $this->db->fields($insertCopies)->from("book_copies")->Insert()
         $i++; // increment value of $i
         }
         //die(" after while 390 ");
        
        
    }
    

    
    public function array_push_assoc($array, $key, $value){
        $array[$key] = $value;
        return $array;
    }
    
    // updated code 19-03-12
    public function checkAndAdd()
    {
        
        // echo "there i m";
        // print_r($book); die;
        $fields = array (
                'book_title',
                'author_name',
                'publisher_name',
                'subject_id',
                'main_subject_id' 
        );
        $arrayBookValues = array (
                'book_title' => $this->getBookTitle (),
                'author_name' => $this->getAuthorName (),
                'publisher_name' => $this->getPublisherName (),
                'subject_id' => $this->getSubjectId (),
                'main_subject_id' => $this->getMainSubjectId () 
        );
        $bookCopiesArray= array(
            //'book_id' => $this->getBookID(),
            //'id' => $this->getId(),
           // 'existing_book_id' => $this->getExistingBookId(),
            //'issued_to' => $this->getIssuedTo(),
            'addition' => $this->getAddition(),
            'price' => $this->getPrice(),
            'discount' => $this->getDiscount(),
            'net_price' => $this->getNetPrice(),
           // 'bill_detail_id' => $this->getBillDetailId(),
           // 'vendor_id' => $this->getVendorId(),
            'volume' => $this->getVolume(),
            'date_of_purchase' => $this->getDateOfPurchase(),
            'isbn_number' => $this->getIsbnNumber(),
            'remark' => $this->getRemark(),
            'reserve_for' => $this->getReserveFor()
        );
        
         echo("<pre> CALL TO ADD BOOK COPIES");
         
         //print_r($bookCopiesArray); die(" book copies array ");
//         echo "before push array <br/>";
//        print_r($arrayBookValues);
        
        // select the records to chec whether the entry for boo is new or old
        $this->db->Fields($fields)->From("book")->Where($arrayBookValues)->Select();
        
       // echo count($this->db->resultArray()); die(" count value");
        //this if will work if book already exists in book table
        if(count($this->db->resultArray())) {
           echo ("in if line 452 <br/>");
            //note
            // make sure is book alredy exist the new no of copy value should be taken after giving prior mgs
            //save pe check in java script
             //and show mgs to user
            
            // and then forward it to controller
            // get the number of copy from database for particular book
            $this->db->Fields(array('number_of_copy'))->From("book")->Where($arrayBookValues)->Select();
            $availableCopy=$this->db->resultArray();// returns the num of copy as array
            
            $availableNumberOfCopy=$availableCopy[0]['number_of_copy'];
            
            $this->updateBook($availableNumberOfCopy,$arrayBookValues);// is book exist then we have to change the value in book regarding no of copy
            // but first fetch the earlier id so that we can start the loop from there upto new id
           // echo("<br/> inside if 467 <br/>"); die(" line 467 ");
            $this->addBookCopies($bookCopiesArray,$arrayBookValues);
            // new value will all be inserted
            
        }
        else{
            echo "inside else ";
            
            // insert into subject and main_subject table
            
            $arrayBookValues = $this->array_push_assoc($arrayBookValues, 'number_of_copy', $this->getNumberOfCopy());
           // print_r($arrayBookValues); die(" after push");
            $this->addBook1($arrayBookValues);
            //die("bac to chech an add");
          //  print_r($bookCopiesArray); die("book copies ");
            $this->addBookCopies($bookCopiesArray,$arrayBookValues);
        }
        
        
        
        //$arrayBookValues = $this->array_push_assoc($arrayBookValues, 'number_of_copy', $this->getNumberOfCopy());
        
//         print_r("<pre>");
//         print_r($arrayBookValues);
//         die;

        // $i=0;
        // foreach($fields as $k => $v) {
        // $where[$fields[$i]]
        // }
        // $x="get";
        // $i=0;
        // foreach($fields as $k => $v) {
        // $where[$fields[$i]]=$this->$x.$fields[$i]."()";
        // $i++;
        // }
        // print_r($where);
        // $arr=$book->getbook_title();
        // echo $arr;    
    }
    
    
    public function deleteBook() {
            echo "in book class delete book <br/>";
            
             $arrayBookValues = array (
                'book_title' => $this->getBookTitle (),
                'author_name' => $this->getAuthorName (),
                'publisher_name' => $this->getPublisherName (),
                'subject_id' => $this->getSubjectId (),
                'main_subject_id' => $this->getMainSubjectId () 
             );
		
		// 1.get the bid of book using book_title field of book table
            
//             $this->db->Fields(array('id'))->where($arrayBookValues)->From("book")->select();
//             $idArray=$this->db->resultArray();
//             print_r($idArray); echo("line 537 no <br/>");
            
//             $id = $idArray[0]['id']; // id field of book table
            
             // above code is changed to following code
             
             
             
            
            // 2. get the book id from form input (id) of book_copies table
             
            $existingBookId = $this->getExistingBookId(); // exisiting book id field of book_copies table
            
            echo "existing Book Id = " .$existingBookId." line no 546 ";
            
            $whereExistingId = array('existing_book_id'=>$existingBookId);
            
            $boolval = $this->db->Fields(array('book_id'))->From("book_copies")->Where($whereExistingId)->Select();
            echo $boolval; echo " line 555 <br/>";
           // print_r($this->db->resultArray()); echo " line 556 <br/>";

            echo " boolvalk is true line 559 <br/>";
            $bookIdArray = $this->db->resultArray();
            print_r($bookIdArray); echo " line no 561 <br/>";
            
            if(count($bookIdArray) > 0) {
            	
            	$bookId = $bookIdArray[0]['book_id'];
            	echo $bookId." <br/>";	
            
            // check the value of visible field using bid and bool_id
            
            $visibleWhere = array('book_id'=>$bookId,'existing_book_id'=>$existingBookId);
            print_r($visibleWhere); echo (" Line no 564 ");
           
            $this->db->Fields(array('visible'))->Where(($visibleWhere))->From("book_copies")->Select();
            
            $visible=$this->db->resultArray();
            print_r($visible); echo(" line no 557 <br/>");
            
            $checkVisible = $visible[0]['visible'];
            echo $checkVisible; echo " on line 560 <br/>";
            // if book visible = true
            if($checkVisible == "TRUE") {
                
                // if visible is true then execute
            // now we have book_id and id of book_copies
            // fire query
            // update book_copies set visible = false where book_id=bid and id= tep 2 value
               
            $this->db->Fields(array('visible'=>"FALSE"))->Where($visibleWhere)->From("book_copies")->Update();
            
            //another update in book table also
            // get the existing_number_of_copy
            $this->db->Fields(array('existing_number_of_copy'))->Where(array('id'=>$bookId))->From("book")->Select();
            $existingCopy = $this->db->resultArray();
            print_r($existingCopy); echo"line no 591 <br/>";
           // print_r($existingCopy); die("line no 575 <br/>");
            $existingNumberOfCopy = $existingCopy[0]['existing_number_of_copy'];
            echo $existingNumberOfCopy; echo" line no 596 <br/>";
            
           if($existingNumberOfCopy > 0 ) {
            
            // decrement existing_number_of_copy i.e.  $v= existing_number_of_copy --
            $existingNumberOfCopy--;
            echo $existingNumberOfCopy; echo (" line no 602 <br/>");
            // update book set existing_number_of_copy=$v where id=bid;
            
            $upcnt = $this->db->Fields(array('existing_number_of_copy'=>$existingNumberOfCopy))->Where(array('id'=>$bookId))->From("book")->Update();
            echo $upcnt; echo " update count ";
            
            return true;
           // $this->db->commit();
            }
            else {
                echo " there is no copy exist in database with id = ". $existingBookId; 
            }
            }
            else {
            	echo "The Record with id = ".$existingBookId." already deleted ";
            }
            
         }
         else {
         	echo "no Record found  with existing id = ".$existingBookId;
         }     
            
	
	}
}