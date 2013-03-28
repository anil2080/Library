<?php
error_reporting(0);

class bookLogicModel {
	
	function insertBook($values) {
		
		print_r("<pre>");
		//print_r($values); echo "in booklogic model class <br/>";
		//die;
		
		$subject_obj = new subjectModel();
		$subject_obj->setName($values['subject_id']);
		$arraySubjectId = $subject_obj->returnId();
		$subjectId = $arraySubjectId[0]['id'];
		
		// new entry for Subject
		if($subjectId == NULL) {
			$subjectId = $subject_obj->insertSubject();
		}
		
		$mainSubject_obj= new mainSubjectModel();
		$mainSubject_obj->setName($values['main_subject_id']);
		$arrayMainSubjectId=$mainSubject_obj->returnId();
		$mainSubjectId = $arrayMainSubjectId[0]['id'];
		echo $mainSubjectId;
		//new entry for Main Subject
		if($mainSubjectId == NULL) {
			$mainSubjectId = $mainSubject_obj->insertMainSubject();
		}
// 		print_r("<pre>");
// 		print_r($arraySubjectId);
// 		die;
// 		print_r("<pre>");
// 		print_r($arrayMainSubjectId);
// 		die;
// 		echo $arrayId[0]['id'];
// 		echo $arrayMainSubjectId[0]['id'];
// 		die;
		
		$bookCopy_obj = new BookCopiesModel();
		
		$bookCopy_obj->setBookTitle($values['book_title']);
		$bookCopy_obj->setAuthorName($values['author_name']);
		$bookCopy_obj->setPublisherName($values['publisher_name']);
		$bookCopy_obj->setSubjectId($subjectId);// id being retrive earlier
		$bookCopy_obj->setNumberOfCopy($values['number_of_copy']);
		$bookCopy_obj->setMainSubjectId($mainSubjectId);// id being retrive earlier
		
		
		$bookCopy_obj->setExistingBookId($values['existing_book_id']);
		
                // updated code
                $bookCopy_obj->setAddition($values['addition']);
                $bookCopy_obj->setPrice($values['price']);
                $bookCopy_obj->setDiscount($values['discount']);
                $bookCopy_obj->setNetPrice($values['net_price']);
                $bookCopy_obj->setPrice($values['price']);
                $bookCopy_obj->setBillDetailId($values['bill_detail_id']);
                $bookCopy_obj->setVendorId($values['vendor_id']);
                $bookCopy_obj->setVolume($values['volume']);
                $bookCopy_obj->setDateOfPurchase($values['date_of_purchase']);
                $bookCopy_obj->setIsbnNumber($values['isbn_number']);
                $bookCopy_obj->setIssuedTo($values['issued_to']);
 		$bookCopy_obj->setVisible($values['visible']);
 		$bookCopy_obj->setReserveFor($values['setreserve_for']);
 		$bookCopy_obj->setRemark($values['setremark']);
                //-------------
 		//die;
		
		$bookCopy_obj->checkAndAdd();
		
		
	}
        
        function removeBook($values) {
            echo("in book logic delete book function line 67");
            
            // we have to set the visible field of particular book = false
            
           
            
           
               $subject_obj = new subjectModel();
               $subject_obj->setName($values['subject_id']);
               $arraySubjectId = $subject_obj->returnId(); 
            
                $mainSubject_obj = new mainSubjectModel();
                $mainSubject_obj->setName($values['main_subject_id']);
                $arrayMainSubjectId = $mainSubject_obj->returnId();
            
            $bookCopy_obj = new BookCopiesModel();
		
	$bookCopy_obj->setBookTitle($values['book_title']);
	$bookCopy_obj->setAuthorName($values['author_name']);
	$bookCopy_obj->setPublisherName($values['publisher_name']);
	$bookCopy_obj->setSubjectId($subjectId);// id being retrive earlier
        $bookCopy_obj->setMainSubjectId($mainSubjectId);
        
        $bookCopy_obj->setExistingBookId($values['existing_book_id']);
        echo $values['existing_book_id']; echo ( " line no 92 " );
        
        echo " properties are set <br/>";
        
        $bookCopy_obj->deleteBook();
            
        }
}

?>