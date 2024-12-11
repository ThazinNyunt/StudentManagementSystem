<?php
require_once(LIB_PATH.DS.'database.php');
class StudentData {
	protected static  $tblname = "studentdata";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}
	function listofstudent(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname);
		return $cur;
	}
	function find_all_student($name="",$admissionNo=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE NAME= '{$name}' AND ADMISSION_NO='{$admissionNo}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	}
	 
	function single_student($id=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where IDNO= '{$id}' LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}

	function single_StudentData($admissionNo=""){
		
			global $mydb;
			 $mydb->setQuery("
        SELECT YEAR, ROLL
        FROM (
            SELECT 
                CASE
                    WHEN LOWER(ROLLNO) REGEXP '(^|[^a-z])i([^a-z]|$)' THEN 1
		            WHEN LOWER(ROLLNO) REGEXP '(^|[^a-z])ii([^a-z]|$)' THEN 2
		            WHEN LOWER(ROLLNO) REGEXP '(^|[^a-z])iii([^a-z]|$)' THEN 3
		            WHEN LOWER(ROLLNO) REGEXP '(^|[^a-z])iv([^a-z]|$)' THEN 4
		            WHEN LOWER(ROLLNO) REGEXP '(^|[^a-z])v([^a-z]|$)' THEN 5
		            WHEN LOWER(ROLLNO) REGEXP '(^|[^a-z])vi([^a-z]|$)' THEN 6
		            ELSE 0
                END AS YEAR,
                TRIM(REGEXP_REPLACE(ROLLNO, '[^0-9]', '')) AS ROLL,
                ADMISSION_NO 
            FROM " . self::$tblname . " 
            WHERE LOWER(ROLLNO) REGEXP 'i|ii|iii|iv|v|vi|[0-9]+'
        ) AS subquery
        WHERE ADMISSION_NO = '{$admissionNo}'");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
	
	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}

}
?>