<?php

require_once 'model/issueLog.php';

class IssueLogCurrentModel extends IssueLogModel {
	
	
	private $IssueId;
	private $BookId;
	private $BookIdForCopies;
	private $MemberId;
	private $DateOfIssue;
	private $DateOfReturn;
	
	// issue report for currently issued books
	
	public function CurrentIssuedReport($values="") {
	
	 // made such that can be used for
		//--> currently issued books
		//--> currently issued books regarding some condition
		//--> currently issued books to a particular member
		//--> currently issued books whichhas ttomorrow last date of return
	//all
// select b.book_title,b.author_name,m.id,m.member_name,m.department,i.date_of_issue,i.date_of_return from issue_current as i join book as b join book_copies as b1 join member as m where b1.existing_book_id=1023;

	}

// form to be designed
//search for
//currently issed book
//tom as a last day
//against any member
//against any main subject
//against any subject


//ISSUE   LOG   

//mostly issued book in month year
	//-->> validate here that month enter should not be greater than the current month
		//-> is yes then treat that month as of last year

// detail log of a student
	//->> regarding one book

// detail log of a book
	// --> regarding a paricular student

}
