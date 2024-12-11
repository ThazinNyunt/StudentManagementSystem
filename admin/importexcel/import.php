<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

if(isset($_POST["import"])){
	$fileName = $_FILES["excel"]["name"];
	$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
	$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$name 	= $row[0];
				$email 	= $row[1];
				$gender 	= $row[2];
				$rollno 	= $row[3];
				$nrc 		= $row[4];
				$admissionNo = $row[5];
				$ay 		= $row[6];
				$bday 	= $row[7];
				$contact 	= $row[8];
				$address 	= $row[9];
				$fatherName = $row[10];
				$fatherOccup = $row[11];
				$motherName = $row[12];
				$motherOccup = $row[13];
				$fatherOccup = addslashes($fatherOccup);
				$motherOccup = addslashes($motherOccup);

				// print_r("INSERT INTO studentdata(NAME,EMAIL,SEX,ROLLNO,NRC,ADMISSION_NO,AY,BDAY,CONTACT_NO,HOME_ADD,FATHER_NAME,FATHER_OCCUPTION,MOTHER_NAME,MOTHER_OCCUPTION) VALUES($name', '$email', '$gender', '$rollno', '$nrc', $admissionNo, '$ay', '$bday', $contact, '$address', '$fatherName', '$fatherOccup', '$motherName', '$motherOccup')");
				$studentdata = New StudentData();
				$res = $studentdata->single_StudentData($admissionNo);

				if (!$res) {
				    	$sql1 = "INSERT INTO studentdata (NAME, EMAIL, SEX, ROLLNO, NRC, ADMISSION_NO, AY, BDAY, CONTACT_NO, HOME_ADD, FATHER_NAME, FATHER_OCCUPTION, MOTHER_NAME, MOTHER_OCCUPTION) 
				         VALUES ('$name', '$email', '$gender', '$rollno', '$nrc', $admissionNo, '$ay', '$bday', '$contact', '$address', '$fatherName', '$fatherOccup', '$motherName', '$motherOccup')";

					mysqli_query($mydb->conn, $sql1) or die(mysqli_error($mydb->conn));

					
				}
					// echo "
					// <script>
					// alert('Successfully Saved!');
					// document.location.href = '';
					// </script>
					// ";

					message("Successfully Saved!" ,"success");
					redirect("index.php");
				
			}

			
		}
?>

<style type="text/css">
	input[type="file"]::file-selector-button {
	  border-radius: 4px;
	  padding: 0 16px;
	  height: 40px;
	  cursor: pointer;
	  background-color: white;
	  border: 1px solid rgba(0, 0, 0, 0.16);
	  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
	  margin-right: 16px;
	  transition: background-color 200ms;
	}

	th { 
	    text-align: center;
	}
</style>

<div class="col-md-14"><h2>Import Excel File</h2><br></div>
<form class="" action="" method="post" enctype="multipart/form-data">
<div class="row invoice-info">
      <div class="col-sm-3 invoice-col">
	      <address>
	      <div class="form-group">
			<input type="file" name="excel" required value="">
		</div>
	      </address>
      </div>
      <div class="col-sm-2 invoice-col">
	      <address>
	      <div class="form-group">
			<button style="align: left;" type="submit" name="import" class="btn btn-primary">Import Excel</button>
		</div>
	      </address>
      </div>
</div>
</form>




 <div class="row">
 	<div class="col-md-14"><br></div>
	<div class="table-responsive">			
		<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th width="3%">No.</th>
				  		<th width="10%">Admission Number</th>
				  		<th width="8%">Roll No</th>
				  		<th> Name</th>
				  		<th width="5%">Gender</th> 
				  		<th width="10%">Date of Birth</th>
				  		<th>Major</th>
				  		<th>Year</th>
				  		<th>Contact No.</th>
				  		<th>Email Address</th>				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php
				  		$mydb->setQuery("SELECT * FROM `studentdata` ORDER BY `IDNO` DESC");
				  		$cur = $mydb->loadResultList();
				  		$i=1;
						foreach ($cur as $result) {

						$department = New Department();
						$resdept = $department->single_departments(1);
						$studentdata = New StudentData();
						$resdata = $studentdata->single_StudentData($result->ADMISSION_NO);
							if ($resdata->YEAR == 1) {
								$Level ='First Year';
					                	$Year  = 'I';
							} elseif ($resdata->YEAR == 2) {
								$Level ='Second Year';
					                	$Year  = 'II';	
							} elseif ($resdata->YEAR == 3) {
								$Level ='Third Year';
					                	$Year  = 'III';	
							} elseif ($resdata->YEAR == 4) {
								$Level ='Fourth Year';
					                	$Year  = 'IV';	
							} elseif ($resdata->YEAR == 5) {
								$Level ='Fifth Year';
					                	$Year  = 'V';	
							} else {
								$Level ='Final Year';
					                	$Year  = 'VI';
							}

							

				  		echo '<tr align="center">';
				  		echo '<td>' .$i.'</td>';
				  		echo '<td>' .$result->ADMISSION_NO.'</td>';
				  		echo '<td>'. $Year.' '.$resdept->DEPARTMENT_NAME.' - ' . $resdata->ROLL.'</td>';
				  		echo '<td>' .$result->NAME.'</td>';
				  		echo '<td>' .$result->SEX.'</td>';
				  		echo '<td>' .$result->BDAY.'</td>';
				  		echo '<td>'. $resdept->DEPARTMENT_NAME.'</td>';
				  		echo '<td>' .$Level.'</td>';
				  		echo '<td>' .$result->CONTACT_NO.'</td>';
				  		echo '<td>' .$result->EMAIL.'</td>';
				  		echo '</tr>';
				  		$i=$i+1;
				  	} 
				  	?>
			</tbody>
					
		</table>
	</div>
</div> 