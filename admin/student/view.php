<?php  
    $student = New Student();
    $res = $student->single_student($_GET['id']);

    $studentdetails = New StudentDetails();
    $resguardian = $studentdetails->single_StudentDetails($_GET['id']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);

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
            <img title="profile image" class="img-hover"    src="<?php echo web_root. 'images/student_photo/'.  $res->STUDPHOTO; ?>">
            </a>
             </div>
         <ul class="list-group  ">
               <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> <?php echo $res->FNAME; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Major</strong></span> <?php echo $resCourse->COURSE_NAME; ?> </li>
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
        <td>
          <input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
        </td>
        <td colspan="4"></td>
                
      </tr>
      <tr>
        <td><label>Admission No</label></td>
        <td colspan="2">
          <input required="true"   class="form-control input-md" id="ADMISSION_NO" name="ADMISSION_NO" placeholder="Admission Number" type="number" value="<?php echo  $resguardian->ADMISSION_NO; ?>">
        </td>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td><label>Name</label></td>
        <td colspan="2">
          <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="Student Name" type="text" value="<?php echo  $res->FNAME; ?>">
        </td>
        <td><label>NRC</label></td>
        <td colspan="2">
          <input required="true"   class="form-control input-md" id="NRC" name="NRC" placeholder="NRC" type="text" value="<?php echo  $res->NRC; ?>">
        </td>
      </tr>
       <tr>
        <td ><label>Gender </label></td> 
        <td colspan="2">
          <label>
          <?php
            if ($res->SEX=='Male') {
              # code...
              echo '<input checked id="optionsRadios1" name="optionsRadios" type="radio"   value="Female">Female 
             <input id="optionsRadios2" name="optionsRadios" type="radio"  CHECKED="true"  value="Male"> Male';
            }else{
                 echo '<input checked id="optionsRadios1" name="optionsRadios" type="radio"  CHECKED="true"  value="Female">Female 
             <input id="optionsRadios2" name="optionsRadios" type="radio"   value="Male"> Male';
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
                  <input  required="true" name="BIRTHDATE"  id="BIRTHDATE"  type="text" class="form-control input-md"   data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo date_format(date_create($res->BDAY),'m/d/Y'); ?>">
           </div>             
        </td>
         
      </tr>
      <tr>
        <td><label>Contact No.</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="CONTACT_NO" name="CONTACT_NO" placeholder="Contact Number" type="number" value="<?php echo $res->CONTACT_NO; ?>">
        </td>
        <td><label>Email</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="EMAIL" name="EMAIL" placeholder="Email Address" type="email" value="<?php echo $res->EMAIL; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Address</label></td>
        <td colspan="4"  >
        <input required="true"  class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo $res->HOME_ADD; ?>">
        </td> 
      </tr>
      <tr>
        <td><label>Username</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="ACC_USERNAME" name="ACC_USERNAME" placeholder="Username" type="text" value="<?php echo $res->ACC_USERNAME; ?>">
        </td>
        <td><label>Password</label></td>
        <td colspan="2">
          <input class="form-control input-md" id="ACC_PASSWORD" name="ACC_PASSWORD" placeholder="Password" type="password" value="">
        </td>
      </tr><tr>
        <td><label>Father Name</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="FATHER_NAME" name="FATHER_NAME" placeholder="Father Name" type="text"value="<?php echo isset($resguardian->FATHER_NAME) ? $resguardian->FATHER_NAME : ''; ?>">
        </td>
        <td><label>Father Occupation</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="FATHER_OCCUPATION" name="FATHER_OCCUPATION" placeholder="Father Occupation" type="text"value="<?php echo isset($resguardian->FATHER_OCCUPATION) ? $resguardian->FATHER_OCCUPATION : ''; ?>"></td>
      </tr>     
      <tr>
        <td><label>Mother Name</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="MOTHER_NAME" name="MOTHER_NAME" placeholder="Mother Name" type="text"value="<?php echo isset($resguardian->MOTHER_NAME) ? $resguardian->MOTHER_NAME : ''; ?>">
        </td>
        <td><label>Mother Occupation</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="MOTHER_OCCUPATION" name="MOTHER_OCCUPATION" placeholder="Mother Occupation" type="text"value="<?php echo isset($resguardian->MOTHER_OCCUPATION) ? $resguardian->MOTHER_OCCUPATION : ''; ?>"></td>
      </tr>
      <tr>
      <td></td>
        <td colspan="4">  
          <button class="btn btn-success btn-lg" name="save" type="submit">Save</button>
        </td>
      </tr>
    </table>
  </div>
</form>
</div>


 