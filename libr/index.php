<?php


require_once 'library/dbConnect.php';
require_once 'model/dbModel.php';
require_once 'model/book.php';
require_once 'model/bookCopies.php';
require_once 'model/mainSubject.php';
require_once 'model/subject.php';
///xampp/phpnetbeans/library18/library18
include_once($_SERVER['DOCUMENT_ROOT'].'/github/abc/Library/trunk/libr/library/common.inc.php');

if(isset($_GET['controller']) && !empty($_GET['controller'])){
	$controller =$_GET['controller'];
}else{
	$controller ='guest';  //default controller
}

if(isset($_GET['function']) && !empty($_GET['function'])){
	$function =$_GET['function'];
}else{
	$function ='homePage';    //default function
}

$controller=strtolower($controller);

$fn = SITE_ROOT.'controller/'.$controller . '.php';
  //echo $fn;die;
if(file_exists($fn))
{
	require_once($fn);
	$controllerClass=$controller.'Controller';
	if(!method_exists($controllerClass,$function)){
		die($function .' function not found');
	}
		
	$obj=new $controllerClass;
	$obj-> $function();

}else{
	die($controller .' controller not found');
}
