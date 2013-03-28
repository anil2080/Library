<?php

require_once 'model/dbModel.php';

class FineModel extends dbModel {
	
	
	private $Id;
	private $BookId;
	private $BookIdForCopies;
	private $MemberId;
	private $FineAmount;
	private $DateTime;
	private $Remarks;
	
	public function ValidFineRecord($choice){
		//$startperiod = "" , $endPeriod = "") { // $peroiod depict the time interval
//search for how tofetch the today date from the php command from server

//select m.member_name,b.book_title,b1.existing_book_id,f.date_time,f.remarks from book as b join book_copies as b1 join member as m join fine as f;

// date_time > '2013-03-18 13:23:25' and date_time <= '2013-03-22 13:23:25' ;
// 		die($choice);
		switch ($choice)
		{
			case "All":echo"for all";
			           $this->db->Fields(array("book_id","member_id","fine_amount","date_time"))->From("fine")->select();
				       return ($this->db->resultArray());
			case "Last Month":echo"for Last Month";break;
			case "Last week":echo"for Last week";break;
			case "Between Dates":echo $_POST['date1']." = ".$_POST['date2'];break;
			default:echo("glt baat");
		}

	}
}
