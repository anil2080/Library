<?php

class adminController
{

    public function authenticatelogin ()
    {
        loadView('homePage/afterLogin.php');
    }

    public function MenuAddBook_Click ()
    {
        // die("this is raman");
        loadView('book/AddBook.php');
    }

    public function MenuAddMember_Click ()
    {
        loadView('Member/AddMember.php');
    }

    public function MenuDeletePeriodical_Click()
    {
        loadView('Periodical/DeletePeriodical.php');
    }
    
    public function AddBook_Click ()
    {
        loadModel('bookLogic', 'insertBook', $_POST);
    }

    public function AddMember_Click ()
    {
        loadModel('Member', 'InsertMember', $_POST);
    }

    public function MenuUpdateMember_Click ()
    {
        loadView('Member/updateMember.php');
    }

    public function MenuDeleteMember_Click ()
    {
        loadView('Member/deleteMember.php');
    }

    public function UPDATEMember_Click ()
    {
        loadModel('Member', 'UpdateMember', $_POST);
    }

    public function DELETEMember_Click ()
    {
        loadModel('Member', 'DeleteMember', $_POST);
    }

    
    public function DELETEPeriodical_Click ()
    {
        loadModel('Periodical', 'DeletePeriodical', $_POST);
    }
    public function DeleteBook_Click ()
    {}

    public function UpdateBook_Click ()
    {}

    public function search_Click ()
    {}

    public function createReport ()
    {
        // report class object
    }

    public function ImgFineToday_Click ()
    {
        loadView('Fine.php');
    }

    public function Fine_Load ()
    {
        die("hello");
    }
}





// if($request == "BookEntery") {
// // 	echo $request;
// // 	die;

// 	$objAdminController=new AdminController();
// 	$objAdminController->AddBook_Click();
// }





















// public function DeleteBook_Click() {
// 	// situation
// 	// normal one only particular book will be deleted
// 	// book got omited from syllabus so all copy being getining remove
// 	// the delete can thus now be perform by id or name

// 	$arraywhere =array();
// 	if( isset($_POST["book_id"]) )
// 		$arraywhere["book_id"]	= $_POST["book_id"];
// 	if( isset($_POST["id_for_copies"]) )
// 		$arraywhere["id_for_copies"]	= $_POST["id_for_copies"];
// 	if( isset($_POST["existing_book_id"]) )
// 		$arraywhere["existing_book_id"]	= $_POST["existing_book_id"];
// 	if( isset($_POST["book_title"]) )
// 		$arraywhere["book_title"]	= $_POST["book_title"];
// 	if( isset($_POST["book_id"]) )
// 		$arraywhere["book_id"]	= $_POST["book_id"];
// 	if( isset($_POST["book_id"]) )
// 		$arraywhere["book_id"]	= $_POST["book_id"];


// 	$arraywhere1= array(
// 			"book_id"			 => $_POST["book_id"],
// 			"id_for_copies"		 => $_POST["id_for_copies"],
// 			"existing_book_id"   => $_POST["existing_book_id"],
// 			"book_title"		 => $_POST["book_title"],
// 			"author_name" 		 => $_POST["author_name"],
// 			"publisher_name" 	 => $_POST["publisher_name"],
// 			"subject_id" 		 => $_POST["subject_id"],
// 			"number_of_copy" 	 => $_POST["number_of_copy"],
// 			"subject_id"		 => $_POST["subject_id"],
// 			"addition"			 => $_POST["addition"],
// 			"price"				 => $_POST["price"],
// 			"discount"			 => $_POST["discount"],
// 			"net_price"			 => $_POST["net_price"],
// 			"bill_detail_id"	 => $_POST["bill_detail_id"],
// 			"vendor_id"			 => $_POST["vendor_id"],
// 			"volume"			 => $_POST["volume"],
// 			"date_of_purchase"	 => $_POST["date_of_purchase"],
// 			"isbn_number"		 => $_POST["isbn_number"],
// 			"issued_to"			 => $_POST["issued_to"],
// 			"reserve_for"		 => $_POST["reserve_for"],
// 			"remark"			 => $_POST["remark"]
// 	);

// 	$obj=new Book();
// 	$obj->updateBook($arraywhere);
// }
