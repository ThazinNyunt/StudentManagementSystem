<?php
require_once(LIB_PATH.DS.'database.php');
class Payment {
	protected static  $tblname = "tblpayment";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}
	function listofpayment(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname);
		return $cur;
	}

	function single_payment($id="",$coureseId=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where IDNO= '{$id}' AND COURSE_ID = '{$coureseId}' ");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
}