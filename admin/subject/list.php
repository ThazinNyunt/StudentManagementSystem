<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-8">
            <h1 class="page-header">List of Subjects <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a>  </h1>

       		</div>
       		<div class="col-lg-4" >
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
				  		<th width="5%">No.</th>
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Code</th>
				  		<th>Name</th>
				  		<th>Year</th>
				  		<!-- <th>Semester</th> -->
				  		<th>Course</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * FROM `subject` s, `course` c WHERE s.COURSE_ID=c.COURSE_ID ORDER BY s.SUBJ_ID DESC");

				  		$cur = $mydb->loadResultList();
				  		$i=1;

						foreach ($cur as $result) {

						switch ($result->COURSE_LEVEL) {
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
								case 5:
									# code...
								$Level ='Fifth Year';
									break;
								case 6:
									# code...
								$Level ='Final Year';
									break;

								default:
									# code...
								$Level ='First Year';
									break;
							}
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td>' . $result->SUBJ_ID.'</a></td>';
				  		echo '<td>'. $i.'</td>';
				  		echo '<td>'. $result->SUBJ_CODE.'</td>';
				  		echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';	  		
				  		echo '<td>'. $Level.'</td>';
				  		// echo '<td>'. $result->SEMESTER.'</td>'; 		
				  		echo '<td>'. $result->COURSE_NAME.'</td>';
				  		// echo '<td>' . $result->AY.'</a></td>';
				  		 
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->SUBJ_ID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->SUBJ_ID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 </td>';
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