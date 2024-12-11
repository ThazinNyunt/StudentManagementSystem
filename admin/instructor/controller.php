<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
 
	
	case 'delete' :
	doDelete();
	break;
  
 
	}
   
	function doInsert(){
		global $mydb;

		if(isset($_POST['save'])){
	
			$inst = New Instructor(); 
			$inst->INST_NAME 	= $_POST['INST_NAME'];
			$inst->INST_MAJOR	= 1; 
			$inst->INST_CONTACT	= $_POST['INST_CONTACT'];
			$inst->INST_EMAIL	= $_POST['INST_EMAIL'];
			$inst->create();

			$lastInsertId = $mydb->conn->insert_id;

			$sql = "SELECT * FROM useraccounts WHERE ACCOUNT_USERNAME='" .$_POST['U_USERNAME']."'";
			$res = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
			$userresult = mysqli_fetch_assoc($res);

			if ($userresult) {
				# code...
				message("Username is already taken.", "error");
				redirect('index.php?view=add');
			}else{

			$user = New User();
			$user->ACCOUNT_NAME 		= $_POST['INST_NAME'];
			$user->ACCOUNT_USERNAME		= $_POST['U_USERNAME'];
			$user->ACCOUNT_PASSWORD		=sha1($_POST['U_PASS']);
			$user->ACCOUNT_TYPE			= "Instructor";
			$user->EMPID				= $lastInsertId;
			$user->USERIMAGE			= "photos/LoginRed.jpg";
			$user->create();

 
			message("Instructor created successfully!", "success");
			redirect("index.php");
			
		}
	}
	}

	function doEdit(){
	if(isset($_POST['save'])){
			global $mydb;
		
			$inst = New Instructor();
			$inst->INST_NAME 	= $_POST['INST_NAME'];
			$inst->INST_MAJOR	= 1; 
			$inst->INST_CONTACT	= $_POST['INST_CONTACT'];
			$inst->INST_EMAIL	= $_POST['INST_EMAIL']; 
			$inst->update($_POST['INST_ID']);

			$ACCOUNT_NAME 	= $_POST['INST_NAME'];
			$U_USERNAME 	= $_POST['U_USERNAME'];

			if ($_POST['U_PASS']) {
				$U_PASS 	= sha1($_POST['U_PASS']);
				$sql = "UPDATE useraccounts SET ACCOUNT_NAME = '$ACCOUNT_NAME', ACCOUNT_USERNAME = '$U_USERNAME', ACCOUNT_PASSWORD = '$U_PASS' WHERE EMPID ='".$_POST['INST_ID']."'";
			} else {
				$sql = "UPDATE useraccounts SET ACCOUNT_NAME = '$ACCOUNT_NAME', ACCOUNT_USERNAME = '$U_USERNAME' WHERE EMPID ='".$_POST['INST_ID']."'";
			}
		 	mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));


		 
			message("Instructor has been updated!", "success");
			redirect("index.php");
	 
 		}

		
	}


	function doDelete(){
	 	$id = 	$_GET['id'];

				$inst = New Instructor();
	 		 	$inst->delete($id);
			 
			message("Instructor already Deleted!","info");
			redirect('index.php');
		 
		
	}
  
 
?>