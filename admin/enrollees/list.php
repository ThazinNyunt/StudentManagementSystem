<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
<style type="text/css">
th {
	text-align: center;
}
</style>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">New Enrollees</h1>
       		</div>
       		<div class="col-lg-6" >
       			<img style="float:right;" src="<?php echo web_root; ?>img/school_seal_100x100.jpg" >
       		</div>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th >Admission Number</th>
				  		<th width="10%">Roll No</th> 
				  		<!-- <th width="5%">No.</th> -->
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Name</th>
				  		<th width="5%">Gender</th> 
				  		<th width="10%">Date of Birth</th>
				  		<th>Major</th>
				  		<th>Year</th>
				  		<th>Contact No.</th>
				  		<th>Email Address</th>
				  		<!-- <th>Age</th> -->
				  		<!-- <th>Address</th> -->
				  		<!-- <th width="5%">Total Score</th> -->
				  		<!-- <th>Status</th> -->
				  		<th width="14%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`,
				  	// `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `student_status`
				  		$mydb->setQuery("SELECT * FROM `tblstudent` s, course c WHERE s.COURSE_ID=c.COURSE_ID AND NewEnrollees=1");

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							if($result->BDAY!='0000-00-00'){
								$age = date_diff(date_create($result->BDAY),date_create('today'))->y;
							}else{
								$age='None';
							}
							$department = New Department();
							$resdept = $department->single_departments($result->DEPT_ID);
							$studentdetails = New StudentDetails();
							$resguardian = $studentdetails->single_StudentDetails($result->IDNO);
							$studentdata = New StudentData();
							$resdata = $studentdata->single_StudentData($resguardian->ADMISSION_NO);
							$i=1;
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
				  		echo '<td>' .$resguardian->ADMISSION_NO.'</td>';
				  		echo '<td>'. $Year.' '.$resdept->DEPARTMENT_NAME.' - ' . $resdata->ROLL.'</td>';
				  		echo '<td>'. $result->FNAME.'</td>';
				  		echo '<td>'. $result->SEX.'</td>';
				  		echo '<td>'. $result->BDAY.'</td>';
				  		echo '<td>'. $resdept->DEPARTMENT_NAME.'</td>';
				  		echo '<td>'. $Level.'</td>';
				  		echo '<td>'. $result->CONTACT_NO.'</td>';
				  		echo '<td>'. $result->EMAIL.'</a></td>';
				  		// echo '<td>' .$i.'</td>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td>' . $result->IDNO.'</a></td>';				  		
				  		// echo '<td>' .$age.'</td>';
				  		// echo '<td>'. $result->HOME_ADD.'</td>';
				  		// echo '<td align="center">'. $resguardian->TOTAL_SCORE.'</td>';
				  		// echo '<td>'. $result->student_status.'</td>'; 
				  		 if($result->student_status=='New'){
				  		 	echo '<td align="center" >
				  		 		    <a title="View Information" href="index.php?view=view&id='.$result->IDNO.'"  class="btn btn-primary btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
				  		                
				  			      </td>';
				  		// echo '<td align="center" > <a title="View Grades" href="index.php?view=grades&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a>
				  		// 			 </td>';
				  		 }else{
				  		 	echo '<td align="center" > 
				  		             <a title="Add Subject" href="index.php?view=addCredit&IDNO='.$result->IDNO.'"  class="btn btn-info btn-xs  ">Confirm <span class="fa fa-info-circle fw-fa"></span></a>
				  			      </td>';
				  		 }
				  		
				  		echo '</tr>';
				  		$i=$i+1;
				  	} 
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>
	

</div> <!---End of container-->