<?php  
    $student = New Student();
    $res = $student->single_student($_GET['id']);

    $studentdetails = New StudentDetails();
    $resguardian = $studentdetails->single_StudentDetails($_GET['id']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);

    $payment = New Payment();
    $resPayment = $payment->single_payment($_GET['id'], $res->COURSE_ID);

    $department = New Department();
    $resdept = $department->single_departments($resCourse->DEPT_ID);
              
    $studentdata = New StudentData();
    $resdata = $studentdata->single_StudentData($resguardian->ADMISSION_NO);

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

   ?>
    
  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  a > img {
    width: 100%;
    height:auto;
}


  </style>
      <div class="col-sm-3">
 
          <div class="panel">            
            <div id="img_profile" class="panel-body">
            <a href="" data-target="#myModal" data-toggle="modal" >
            <img title="profile image" class="img-hover"   src="<?php echo web_root. 'images/student_photo/'.  $res->STUDPHOTO; ?>">
            </a>
             </div>
          <ul class="list-group">
          
         
              <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> <?php echo $res->FNAME; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Roll No.</strong></span> <?php echo $Year.' '.$resdept->DEPARTMENT_NAME.' - ' . $resdata->ROLL; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Admission No.</strong></span> <?php echo $resguardian->ADMISSION_NO; ?> </li>
              
                
            
          </ul> 
                
        </div>
    </div>
         
        <!--/col-3-->
<div class="col-sm-9"> 
   <!-- `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`,
 `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `ACC_PASSWORD`, `student_status`, `schedID`, `course_year` -->
<?php
  $currentyear = date('Y');
  $nextyear =  date('Y') + 1;
  $sy = $currentyear .'-'.$nextyear;
  $_SESSION['SY'] = $sy;
  // $newDate    = Carbon::createFromFormat('Y-m-d',$_SESSION['SY'] )->addYear(1);

?>

<form action="controller.php?action=edit" class="form-horizontal" method="post" >
  <div class="table-responsive">
  <div class="col-md-8"><h2>Student Information</h2></div>
    <table class="table"> 
    <tr style="display: none;">
        <td><label>Id</label></td>
        <td >
          <span><?php echo isset($_GET['id']) ? $_GET['id'] : '' ?></span>
        </td>
        <td colspan="4"></td>

      </tr>
      <tr>
        <td><label>Name</label></td>
        <td colspan="2">
          <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo  $res->FNAME; ?>" disabled>
        </td>
        <td><label>NRC</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="NRC" name="NRC" placeholder="NRC" type="text" value="<?php echo $res->NRC; ?>" disabled>
        </td> 
        <td style="display: none;">
          <input required="true"  class="form-control input-md" id="RollNo" name="RollNo" placeholder="Roll No" type="text" value="<?php echo $resdata->ROLL; ?>" disabled>
        </td> 
      </tr>
      <tr>
        <td ><label>Sex </label></td> 
        <td colspan="2">
          <label>
          <?php
            if ($res->SEX=='Male') {
              # code...
              echo 'Male';
            }else{
                 echo 'Female';
            }

          ?>
          </label>
        </td>
        <td><label>Date of birth</label></td>
        <td colspan="2"> 
        <div class="input-group " >
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  required="true" name="BIRTHDATE"  id="BIRTHDATE"  type="text" class="form-control input-md"   data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo date_format(date_create($res->BDAY),'m/d/Y'); ?>" disabled>
           </div>             
        </td>
      </tr>
      <tr>
        <td><label>Contact No.</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number" type="text" value="<?php echo $res->CONTACT_NO; ?>" disabled>
        </td>
        <td><label>Email</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="EMAIL" name="EMAIL" placeholder="Permanent Address" type="text" value="<?php echo $res->EMAIL; ?>" disabled>
        </td> 
      </tr>
      <tr>
        <td><label>Address</label></td>
        <td colspan="4"  >
        <input required="true"  class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo $res->HOME_ADD; ?>" disabled>
        </td> 
      </tr>
      <tr>
        <td><label>Applied Course</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="COURSE_NAME" name="COURSE_NAME" placeholder="COURSE_NAME" type="text" value="<?php echo $resCourse->COURSE_NAME; ?> " disabled>
        </td>
        <td><label>Year</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="YEARLEVEL" name="YEARLEVEL" placeholder="YEARLEVEL" type="text" value="<?php echo $Level; ?>" disabled>
        </td>
      </tr>
      <tr>
        <td><label>Father Name</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="FATHER_NAME" name="FATHER_NAME" placeholder="Father Name" type="text" value="<?php echo $resguardian->FATHER_NAME; ?>" disabled>
        </td>
        <td><label>Occupation</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="FATHER_OCCUPATION" name="FATHER_OCCUPATION" placeholder="Occupation" type="text" value="<?php echo $resguardian->FATHER_OCCUPATION; ?>" disabled>
        </td> 
      </tr>
      <tr>
        <td><label>Mother Name</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="MOTHER_NAME" name="MOTHER_NAME" placeholder="Mother Name" type="text" value="<?php echo $resguardian->MOTHER_NAME; ?>" disabled>
        </td>
        <td><label>Occupation</label></td>
        <td colspan="2"  >
        <input required="true"  class="form-control input-md" id="MOTHER_OCCUPATION" name="MOTHER_OCCUPATION" placeholder="Occupation" type="text" value="<?php echo $resguardian->MOTHER_OCCUPATION; ?>" disabled>
        </td> 
      </tr>
      <tr>
        <td><label>Student Photo</label></td>
        <td colspan="2"  >
          <?php if($res->STUDPHOTO != "") { 
                $filename = $res->FNAME ." photo";
                $filepath = web_root. 'images/student_photo/'.  $res->STUDPHOTO;
                echo "<span>";
                echo strtoupper($filename).".".pathinfo($res->STUDPHOTO, PATHINFO_EXTENSION);
                echo "</span>";
           ?>
        </td> 
        <td colspan="2">
          <a href="<?php echo $filepath; ?>" class="btn btn-primary" download="<?php echo strtoupper($filename); ?>">Download</a>
        </td>
      <?php } else { ?>
          <span>No File Uploaded.</span>
        </td> 
        <td colspan="2">
        </td>
      <?php } ?>
      </tr>

      <tr>
      <td></td>
        <td colspan="4">  
          <!-- <br> <a class="btn btn-primary btn-lg" href="controller.php?action=confirm&IDNO=<?php echo $res->IDNO; ?>">Confirm</a> -->
          <a class="btn btn-primary btn-lg" href="controller.php?action=confirm&IDNO=<?php echo $res->IDNO; ?>&ROLL=<?php echo $resdata->ROLL; ?>&YEAR=<?php echo $resdata->YEAR; ?>">Confirm</a>
          <br>
        </td>
      </tr>
    </table>
    <br>
  </div>
</form>
</div>


 