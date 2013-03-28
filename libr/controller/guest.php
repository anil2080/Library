<?php
class guestController {
	
	function __construct() {
	
	}
	
	function homePage(){
		//load view
		loadView('/homePage/afterLogin.php');
			//echo "hello";
	}
	
}
