 
 <form action="" method="POST" >
    <!-- Main content --> 
        <!-- title row -->
      <div class="row invoice-info">
      <div class="col-sm-6 invoice-col">
       
      </div>
      
        <div class="col-sm-4 invoice-col">
          Course and Year
          <address>
            <div class="form-group">
			  <select name="COURSE_ID" class="form-control">  
      <?php 
        $COURSE_ID = '';
        $mydb->setQuery("SELECT * FROM `course` WHERE COURSE_LEVEL = 3");
        $cur = $mydb->loadResultList();

        foreach ($cur as $result) {
          echo '<option i value="'.$result->COURSE_ID.'" >'.$result->COURSE_NAME.' </option>';

        }
      ?>
			  </select>
		  </div>
          </address>
        </div> 
        <!-- /.col -->
           <!-- /.col -->
        <div class="col-sm-2 invoice-col"> 
        <br/>
        <address>
        <div class="form-group"> 
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </div>
		  
        </address>

        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-xs-12">
          <!-- <h2 class="page-header">
            <i class="fa fa-globe"></i>Thanlyin Technology University
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2> -->
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->

      <!-- /.row -->
      <!-- title row -->
  
   <div class="row">
        <div class="col-xs-12">
        	<h1 class="page-header">First Year </h1>
          <!-- <h2 class="page-header">
            <i  class="fa fa-globe">First Year Student List</i>
              <small class="pull-right"> <?php echo (isset($_POST['Course'])) ? 'Course/Year :' .$_POST['Course'] : ''; ?></small>
          </h2> -->
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12 table-responsive">
          <table class="table table-bordered table-striped" style="font-size:11px" cellspacing="0" >
            <thead>
            <tr>
              <th>Roll No.</th>
              <th>Name</th> 
              <th>Address</th>
              <th>Sex</th> 
              <th>AGE</th>
              <th>Score</th>
              <th>Contact No.</th>
              <th>Civil Status</th>
              <th>Course</th>
              <!-- <th>Status</th> -->
            </tr>
            </thead>
            <tbody>
              <?php
                $tot = 0;
               if(isset($_POST['submit'])){ 

			$COURSE_ID = $_POST['COURSE_ID'];
          		
          		$currentyear = date('Y');
			$nextyear =  date('Y') + 1;
			$sy = $currentyear .'-'.$nextyear;

                 // $sql ="SELECT * FROM `schoolyr` sy, `tblstudent`  s ,`course` c, ,`tblstuddetails` sd WHERE sy.`IDNO`=s.`IDNO` AND s.`COURSE_ID`=c.`COURSE_ID` AND sy.`COURSE_ID`= '$COURSE_ID' AND sy.`AY`= '$sy' ORDER BY sd.TOTAL_SCORE DESC";

			$sql= "SELECT sy.*, s.*, c.*, sd.*, d.*
			        FROM `schoolyr` sy
			        JOIN `tblstudent` s ON sy.`IDNO` = s.`IDNO`
			        JOIN `course` c ON s.`COURSE_ID` = c.`COURSE_ID`
			        JOIN `tblstuddetails` sd ON s.`IDNO` = sd.`IDNO`
			        JOIN `department` d ON c.`DEPT_ID` = d.`DEPT_ID`
			        WHERE sy.`COURSE_ID` = '$COURSE_ID'
			          AND sy.`AY` = '$sy'
			        ORDER BY sd.`TOTAL_SCORE` DESC";


                $mydb->setQuery($sql);
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                $cur = $mydb->loadResultList();
               	
                  if ($row_count > 0){
                    foreach ($cur as $result) {

                      $dbirth =  date($result->BDAY);
                      $today = date('Y-M-d'); 
              ?>
                      <tr> 

                        <td>I <?php echo $result->DEPARTMENT_NAME.' - ' .$result->ROLLNO;?></td>
                        <!-- <td><?php echo $result->IDNO;?></td> -->
                        <td><?php echo $result->FNAME . ' ' .  $result->MNAME . '  ' .  $result->LNAME;?></td>
                        <td><?php echo $result->HOME_ADD;?></td>
                        <td><?php echo $result->SEX;?></td>
                        <td><?php echo  date_diff(date_create($dbirth),date_create($today))->y;?></td>
                        <td><?php echo $result->TOTAL_SCORE;?></td>
                        <td><?php echo $result->CONTACT_NO;?></td>
                        <td><?php echo $result->STATUS;?></td>
                        <td><?php echo $result->COURSE_NAME?></td>
                        <!-- <td><?php echo $result->student_status;?></td> -->
                      </tr>
              <?php  	
                        $tot =  count($cur);
                    } 
                    	
                       // $_SESSION['tot'] = $tot;
                  } 
 
           
             }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="8" align="right"><h4>Total Number of Student/s : </h4></td><td><h4><?php echo $tot ; ?></h4></td>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <div class="row no-print">
            <div class="col-xs-12">
            	<!-- <?php echo $COURSE_ID; ?> -->
             <span class="pull-right"> <a title="Update Roll No." href="controller.php?action=update&IDNO=<?php echo $COURSE_ID; ?>"    class="btn btn-primary">Update Roll No <span class="fa fa-info-circle fw-fa"></span></a></span>  
          </div>
      </div>
      
</form>
	 
    <!-- <form action="printcourseyear.php" method="POST" target="_blank">
    <input type="hidden" name="Course" value="<?php echo (isset($_POST['Course'])) ? $_POST['Course'] : ''; ?>">  -->
          <!-- this row will not appear when printing -->
          <!-- <div class="row no-print">
            <div class="col-xs-12">
             <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
          </div>
          </div> 
    </form>
 -->    <!-- /.content -->
    <div class="clearfix"></div>
 
</div>
<!-- ./wrapper -->
  