<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	
case 'update' :
	updateStudent();
	break;
}
   
function updateStudent(){

		global $mydb;

	 	$student = New Student();
		$student->IDNO 				= $_GET['IDNO'];
		$student->ACC_USERNAME= $_GET['USERNAME'];
		$student->ACC_PASSWORD= sha1($_GET['PASSWORD']);
	 	$student->update($_GET['IDNO']);
	 		
			
		message("Student has been added to the new enrollees!", "success");
		redirect(web_root."admin/enrollees/index.php");
}

?>