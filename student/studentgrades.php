<?php  
     if (!isset($_SESSION['IDNO'])){
      redirect(web_root."index.php");
     }
 
  $student = New Student();
  $res = $student->single_student($_SESSION['IDNO']);
  
?>
<style type="text/css">
th,td {
	text-align: center;

}
</style>
 
<div class="row">
      <div class="col-lg-12"> 
            <h3 class="page-header">Student Subjects </h3>
       	 
       		</div>
        	<!-- /.col-lg-12 -->
   		 	    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0" >
				
				  <thead >
				  	<tr>
				  	<!-- <th>#</th> -->
				  		 <th>
				  		  Subject</th>
				  		<th>Description</th>
				  		<!-- <th>Year Level</th> -->
				  		<th>Marks</th> 
				  		<!-- <th>Final Exam</th>  -->
				  		<!-- <th>Unit</th> 
				  		<th>Average</th> -->
				  		<!-- <th>Remarks</th> -->
				  		<!-- <th>Semester</th>  -->
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  	// `GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`,
				  	//  `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`

						$sql = "SELECT * FROM `tblstudent` st, `grades` g,`subject` s ,studentsubjects ss
						WHERE st.`IDNO`=g.`IDNO` and g.`SUBJ_ID`=s.`SUBJ_ID`  and s.`SUBJ_ID`=ss.`SUBJ_ID` AND g.`IDNO`=ss.`IDNO`  AND g.`REMARKS` NOT IN ('Drop') and st.`IDNO`=".$_SESSION['IDNO'];
				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							switch ($result->LEVEL) {
								case 1:
									# code...
								$Level ='First Year';
									break;
								case 2:
									# code...
								$Level ='Second Year';
									break;
								case 3:
									# code...
								$Level ='Third Year';
									break;
								case 4:
									# code...
								$Level ='Fourth Year';
									break;

								default:
									# code...
								$Level ='First Year';
									break;
							}

							// First Exam Grading 
							if ($result->FIRST >= 80) {
								$FEXAM = 'A';
							} elseif ($result->FIRST >= 65) {
								$FEXAM = 'B';	
							} elseif ($result->FIRST >= 50) {
								$FEXAM = 'C';	
							} elseif ($result->FIRST >= 40) {
								$FEXAM = 'D';	
							} elseif ($result->REMARKS == NUll) {
								$FEXAM = '-';	
							} else {
								$FEXAM = 'F';
							}

							// Final Exam Grading 
							// if ($result->SECOND >= 80) {
							// 	$LEXAM = 'A';
							// } elseif ($result->SECOND >= 60) {
							// 	$LEXAM = 'B';	
							// } elseif ($result->SECOND >= 40) {
							// 	$LEXAM = 'C';	
							// } elseif ($result->SECOND >= 20) {
							// 	$LEXAM = 'D';	
							// } else {
							// 	$LEXAM = '-';
							// }





				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td></td>';
				  		echo '<td>'. $result->SUBJ_CODE.'</td>';
				  		echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
				  		// echo '<td style="text-align: center;">'. $Level.'</td>'; 
				  		echo '<td style="text-align: center;" >' . $FEXAM . '</td>';
				  		// echo '<td style="text-align: center;" >' . $LEXAM . '</td>';
				  		// echo '<td>' .$result->UNIT.'</a></td>'; 
				  		// echo '<td>'. $result->AVE.'</td>'; 
				  		// echo '<td>'. $result->REMARKS.'</td>'; 
				  		// echo '<td>'. $result->SEMESTER.'</td>';
				  	
				  		 
				  		// echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->SUBJ_ID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  		// 			 <a title="Delete" href="controller.php?action=delete&id='.$result->SUBJ_ID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  		// 			 </td>';
				  		echo '</tr>';
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