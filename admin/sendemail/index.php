<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="New Enrollees"; 
 $header=$view; 
switch ($view) {
	case 'form' :
		$content    = 'form.php';		
		break;
	case 'send' :
		$content    = 'send.php';		
		break;

	
	default :
		$content    = 'list.php';		
}
require_once ("../theme/templates.php");
?>
  
