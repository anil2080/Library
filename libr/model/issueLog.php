<?php

require_once 'model/dbModel.php';
// require book_copies
//requiremember


class IssueLogModel extends dbModel {
	
	
	private $Id;
	private $BookId;
	private $BookIdForCopies;
	private $MemberId;
	private $DateOfIssue;
	private $DateOfReturn;
	
	public function Issue() {
	//transaction start
	$member_obj=new MemberModel();
	// call a function to update member aloted copy
	// call a function to update list of book in member_copy


//stuck here will ask from sir tommorow
	}


// report work
	public function IssueReport() {



	}
}
