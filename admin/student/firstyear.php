<?php
 if (isset($_POST['submit'])) {

$_SESSION['STUDID']       =  $_POST['IDNO'];
$_SESSION['FNAME']        =  $_POST['FNAME'];
$_SESSION['LNAME']        =  $_POST['LNAME'];
$_SESSION['MI']           =  $_POST['MI'];
$_SESSION['PADDRESS']     =  $_POST['PADDRESS'];
$_SESSION['SEX']          =  $_POST['optionsRadios'];
$_SESSION['BIRTHDATE']    = date_format(date_create($_POST['BIRTHDATE']),'Y-m-d'); 
$_SESSION['NATIONALITY']  =  $_POST['NATIONALITY'];
$_SESSION['BIRTHPLACE']   =  $_POST['BIRTHPLACE'];
$_SESSION['RELIGION']     =  $_POST['RELIGION'];
$_SESSION['CONTACT']      =  $_POST['CONTACT'];
$_SESSION['CIVILSTATUS']  =  $_POST['CIVILSTATUS'];
$_SESSION['GUARDIAN_ADDRESS']     =  $_POST['GUARDIAN_ADDRESS'];
$_SESSION['GCONTACT']     =  $_POST['GCONTACT'];
$_SESSION['COURSEID']     =  $_POST['COURSE'];
// $_SESSION['SEMESTER']     =  $_POST['SEMESTER'];  
$_SESSION['USER_NAME']    =  $_POST['USER_NAME']; 
$_SESSION['PASS']         =  $_POST['PASS']; 
$_SESSION['NRC']          =  $_POST['NRC'];  
$_SESSION['UN_YEAR']      =  $_POST['UN_YEAR'];  
$_SESSION['SEAT_NO']      =  $_POST['SEAT_NO'];  
$_SESSION['EXAM_DEPT']    =  $_POST['EXAM_DEPT'];  
$_SESSION['TOTAL_SCORE']  =  $_POST['TOTAL_SCORE'];  
$_SESSION['EMAIL']        =  $_POST['EMAIL'];  
$_SESSION['FATHER_NAME']        =  $_POST['FATHER_NAME'];  
$_SESSION['FATHER_OCCUPATION']  =  $_POST['FATHER_OCCUPATION'];  
$_SESSION['FATHER_NRC']         =  $_POST['FATHER_NRC'];  
$_SESSION['MOTHER_NAME']        =  $_POST['MOTHER_NAME'];  
$_SESSION['MOTHER_OCCUPATION']  =  $_POST['MOTHER_OCCUPATION'];  
$_SESSION['MOTHER_NRC']         =  $_POST['MOTHER_NRC'];

$sem = new Semester();
$resSem = $sem->single_semester();
$_SESSION['SEMESTER'] = $resSem->SEMESTER; 


$currentyear = date('Y');
$nextyear =  date('Y') + 1;
$sy = $currentyear .'-'.$nextyear;
$_SESSION['SY'] = $sy;

  $student = New Student();
  $res = $student->find_all_student($_POST['LNAME'],$_POST['FNAME'],$_POST['MI']);

if ($res) {
  # code...
  message("Student already exist.", "error");
    redirect("index.php?view=firstyear");

 }else{

$sql="SELECT * FROM tblstudent WHERE ACC_USERNAME='" . $_SESSION['USER_NAME'] . "'";
$userresult = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
$userStud  = mysqli_fetch_assoc($userresult);

if($userStud){
  message("Username is already taken.", "error");
    redirect(web_root."admin/student/index.php?view=firstyear");
}else{
  if($_SESSION['COURSEID']=='Select' || $_SESSION['SEMESTER']=='Select' ){
    message("Select course and semester exactly"."error");
    redirect(web_root."admin/student/index.php?view=firstyear");

  }else{

  $age = date_diff(date_create($_SESSION['BIRTHDATE']),date_create('today'))->y;

    if ($age < 15){
       message("Cannot Proceed. Must be 15 years old and above to enroll.", "error");
       redirect(web_root."admin/student/index.php?view=firstyear");

    }else{
    $student = New Student();
    $student->IDNO        = $_SESSION['STUDID'];
    $student->FNAME       = $_SESSION['FNAME'];
    $student->LNAME       = $_SESSION['LNAME'];
    $student->MNAME       = $_SESSION['MI'];
    $student->SEX         = $_SESSION['SEX'];
    $student->BDAY        = $_SESSION['BIRTHDATE'];
    $student->BPLACE      = $_SESSION['BIRTHPLACE'];
    $student->STATUS      = $_SESSION['CIVILSTATUS'];
    $student->NATIONALITY = $_SESSION['NATIONALITY'];
    $student->RELIGION    = $_SESSION['RELIGION'];
    $student->CONTACT_NO  = $_SESSION['CONTACT'];
    $student->HOME_ADD    = $_SESSION['PADDRESS'];
    $student->ACC_USERNAME= $_SESSION['USER_NAME'];
    $student->ACC_PASSWORD= sha1($_SESSION['PASS']);
    $student->COURSE_ID   = $_SESSION['COURSEID'];
    $student->SEMESTER    = $_SESSION['SEMESTER'];  
    $student->NRC         = $_SESSION['NRC']; 
    $student->EMAIL       = $_SESSION['EMAIL']; 
    $student->student_status ='New';
    $student->YEARLEVEL     = 1; 
    $student->NewEnrollees  = 1;
    $student->create();

    $studentdetails = New StudentDetails();
    $studentdetails->IDNO         = $_SESSION['STUDID'];
    $studentdetails->GUARDIAN_ADDRESS     = $_SESSION['GUARDIAN_ADDRESS'];
    $studentdetails->GCONTACT     = $_SESSION['GCONTACT'];
    $studentdetails->UN_YEAR      = $_SESSION['UN_YEAR']; 
    $studentdetails->SEAT_NO      = $_SESSION['SEAT_NO']; 
    $studentdetails->EXAM_DEPT    = $_SESSION['EXAM_DEPT']; 
    $studentdetails->TOTAL_SCORE  = $_SESSION['TOTAL_SCORE']; 
    $studentdetails->FATHER_NAME  = $_SESSION['FATHER_NAME']; 
    $studentdetails->FATHER_OCCUPATION = $_SESSION['FATHER_OCCUPATION']; 
    $studentdetails->FATHER_NRC   = $_SESSION['FATHER_NRC']; 
    $studentdetails->MOTHER_NAME  = $_SESSION['MOTHER_NAME']; 
    $studentdetails->MOTHER_OCCUPATION = $_SESSION['MOTHER_OCCUPATION']; 
    $studentdetails->MOTHER_NRC   = $_SESSION['MOTHER_NRC']; 
    $studentdetails->create(); 

    $studAuto = New Autonumber();
    $studAuto->studauto_update();


    $extension = array('jpeg', 'jpg', 'png', 'gif', 'pdf');

    $filename1 = $_FILES['STUDPHOTO']['name'];
    $filename2 = $_FILES['STUDNRC']['name'];
    $filename3 = $_FILES['PSLIP']['name'];
    $filename_tmp1 = $_FILES['STUDPHOTO']['tmp_name'];
    $filename_tmp2 = $_FILES['STUDNRC']['tmp_name'];
    $filename_tmp3 = $_FILES['PSLIP']['tmp_name'];
    $ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
    $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
    $ext3 = pathinfo($filename3, PATHINFO_EXTENSION);

    $targetDirectory1 = '../../images/student_photo/';
    $targetDirectory2 = '../../images/student_nrc/';
    $targetDirectory3 = '../../images/student_payment/';
    $targetFile1 = $targetDirectory1 . basename($filename1);
    $targetFile2 = $targetDirectory2 . basename($filename2);
    $targetFile3 = $targetDirectory3 . basename($filename3);


    $finalimg='';
    if(in_array($ext1,$extension) && in_array($ext2,$extension) && in_array($ext3,$extension)){
      if(!file_exists($targetFile1) && !file_exists($targetFile2) && !file_exists($targetFile3)){
        move_uploaded_file($filename_tmp1, $targetFile1);
        move_uploaded_file($filename_tmp2, $targetFile2);
        move_uploaded_file($filename_tmp3, $targetFile3);
        echo $finalimg1 = $filename1;
        echo $finalimg2 = $filename2;
        echo $finalimg3 = $filename3;
      }else{
        $filename1 = str_replace('.','-',basename($filename1,$ext1));
        $filename2 = str_replace('.','-',basename($filename2,$ext2));
        $filename3 = str_replace('.','-',basename($filename3,$ext3));
        $newfilename1 = $filename1.time().".".$ext1;
        $newfilename2 = $filename2.time().".".$ext2;
        $newfilename3 = $filename3.time().".".$ext3;
        move_uploaded_file($filename_tmp1, $targetDirectory1.$newfilename1);
        move_uploaded_file($filename_tmp2, $targetDirectory2.$newfilename2);
        move_uploaded_file($filename_tmp3, $targetDirectory3.$newfilename3);
        $finalimg1 = $newfilename1;
        $finalimg2 = $newfilename2;
        $finalimg3 = $newfilename3;
      }

      $sql = "UPDATE tblstudent SET STUDPHOTO = '$finalimg1', STUDNRC = '$finalimg2', NewEnrollees = 0 WHERE IDNO ='".$_SESSION['STUDID']."'";
      mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));

      $sql1 = "INSERT INTO tblpayment(IDNO, COURSE_ID, SY, SEMESTER, PSLIP, DATETIME) VALUES ('{$_SESSION['STUDID']}', '{$_SESSION['COURSEID']}', '{$_SESSION['SY']}', '{$_SESSION['SEMESTER']}', '$finalimg3', NOW())";
      mysqli_query($mydb->conn,$sql1) or die(mysqli_error($mydb->conn));

      redirect(web_root."admin/student/controller.php?action=confirm&IDNO=".$_SESSION['STUDID']);

      
    }else{
      message("Sorry, you are not allowed to upload this file type", "error");
        redirect(web_root."admin/student/index.php?view=firstyear");
    }

      
    // redirect(web_root."admin/student/index.php");

    }

    
  }
}


  # code...
// unset($_SESSION['STUDID']);
// unset($_SESSION['FNAME']);
// unset($_SESSION['LNAME']);
// unset($_SESSION['MI']);
// unset($_SESSION['PADDRESS']);
// unset($_SESSION['SEX']);
// unset($_SESSION['BIRTHDATE']); 
// unset($_SESSION['BIRTHPLACE']);
// unset($_SESSION['RELIGION']);
// unset($_SESSION['CONTACT']);
// unset($_SESSION['CIVILSTATUS']);
// unset($_SESSION['GUARDIAN']);
// unset($_SESSION['GCONTACT']);
// unset($_SESSION['COURSEID']);
// unset($_SESSION['SEMESTER']); 
// unset($_SESSION['USER_NAME']);
// unset($_SESSION['PASS']); 


  

  
 }
}


  $currentyear = date('Y');
  $nextyear =  date('Y') + 1;
  $sy = $currentyear .'-'.$nextyear;
  $_SESSION['SY'] = $sy; 


  $studAuto = New Autonumber();
  $autonum = $studAuto->stud_autonumber();
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
         
<!--/col-3-->
<div class="col-sm-9"> 
<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="table-responsive">
  <div class="col-md-14"><h2>Add New Student (First Year Form)</h2><br></div>
    <table class="table"> 
    <tr style="display: none;" >
        <td><label>Id</label></td>
        <td >
          <input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_SESSION['STUDID']) ? $_SESSION['STUDID'] : $autonum->AUTO; ?>">
        </td>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td><label>Firstname</label></td>
        <td colspan="2">
          <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo isset($_SESSION['FNAME']) ? $_SESSION['FNAME'] : ''; ?>">
        </td>
        <td><label>Lastname</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="<?php echo isset($_SESSION['LNAME']) ? $_SESSION['LNAME'] : ''; ?>">
        </td> 
        <td style="display: none;">
          <input class="form-control input-md" id="MI" name="MI" placeholder="MI" type="text"  ?>">
        </td>
      </tr>
      <tr>
        <td ><label>Sex </label></td> 
        <td colspan="2">
          <label>
            <input checked id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female 
            <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male
          </label>
        </td>
        <td><label>Date of birth</label></td>
        <td colspan="2"> 
        <div class="input-group " >
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  required="true" name="BIRTHDATE"  id="BIRTHDATE"  type="text" class="form-control input-md"   data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo isset($_SESSION['BIRTHDATE']) ? $_SESSION['BIRTHDATE'] : ''; ?>">
           </div>             
        </td>
      </tr>
      <tr>
        <td><label>NRC</label></td>
        <td colspan="5"  >
        <input required="true"  class="form-control input-md" id="NRC" name="NRC" placeholder="NRC Number" type="text" value="<?php echo isset($_SESSION['NRC']) ? $_SESSION['NRC'] : ''; ?>">
        </td> 
      </tr>
      <tr>
        <td><label>Year of Matriculation</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="UN_YEAR" name="UN_YEAR" placeholder="XXXX" type="number"value="<?php echo isset($_SESSION['UN_YEAR']) ? $_SESSION['UN_YEAR'] : ''; ?>">
        </td>
        <td><label>Seat Number</label></td>
        <td colspan="2">
            <input required="true"  class="form-control input-md" id="SEAT_NO" name="SEAT_NO" placeholder="Seat Number" type="text"value="<?php echo isset($_SESSION['SEAT_NO']) ? $_SESSION['SEAT_NO'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Examination Department</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="EXAM_DEPT" name="EXAM_DEPT" placeholder="Examination Department" type="text"value="<?php echo isset($_SESSION['EXAM_DEPT']) ? $_SESSION['EXAM_DEPT'] : ''; ?>">
        </td>
        <td><label>Total Score</label></td>
        <td colspan="2">
            <input required="true"  class="form-control input-md" id="TOTAL_SCORE" name="TOTAL_SCORE" placeholder="Total Score" type="number"value="<?php echo isset($_SESSION['TOTAL_SCORE']) ? $_SESSION['TOTAL_SCORE'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Nationality</label></td>
        <td colspan="2"><input required="true"  class="form-control input-md" id="NATIONALITY" name="NATIONALITY" placeholder="Nationality" type="text" value="<?php echo isset($_SESSION['CONTACT']) ? $_SESSION['CONTACT'] : ''; ?>">
              </td>
        <td><label>Religion</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="RELIGION" name="RELIGION" placeholder="Religion" type="text" value="<?php echo isset($_SESSION['RELIGION']) ? $_SESSION['RELIGION'] : ''; ?>">
        </td>
        
      </tr>
      

      <tr>
        <td><label>Place of Birth</label></td>
        <td colspan="2">
        <input required="true"  class="form-control input-md" id="BIRTHPLACE" name="BIRTHPLACE" placeholder="Place of Birth" type="text" value="<?php echo isset($_SESSION['BIRTHPLACE']) ? $_SESSION['BIRTHPLACE'] : ''; ?>">
         </td>
        <td><label>Civil Status</label></td>
        <td colspan="2">
          <select class="form-control input-sm" name="CIVILSTATUS">
            <option value="<?php echo isset($_SESSION['CIVILSTATUS']) ? $_SESSION['CIVILSTATUS'] : 'Select'; ?>"><?php echo isset($_SESSION['CIVILSTATUS']) ? $_SESSION['CIVILSTATUS'] : 'Select'; ?></option>
             <option value="Single">Single</option>
             <option value="Married">Married</option> 
             <option value="Widow">Widow</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label>Contact No.</label></td>
        <td colspan="6"><input required="true"  class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number" type="number" maxlength="11" value="<?php echo isset($_SESSION['CONTACT']) ? $_SESSION['CONTACT'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Email</label></td>
        <td colspan="6"><input required="true"  class="form-control input-md" id="EMAIL" name="EMAIL" placeholder="Email" type="email" value="<?php echo isset($_SESSION['EMAIL']) ? $_SESSION['EMAIL'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Address</label></td>
        <td colspan="5"  >
        <input required="true"  class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo isset($_SESSION['PADDRESS']) ? $_SESSION['PADDRESS'] : ''; ?>">
        </td> 
      </tr>
      <tr>
      <td><label>Course/Year</label></td>
        <td colspan="5">
          
          <select class="form-control input-sm" name="COURSE" required>
                <?php
                if(isset($_SESSION['COURSEID'])){
                  $course = New Course();
                      $singlecourse = $course->single_course($_SESSION['COURSEID']);
                      echo '<option value='.$singlecourse->COURSE_ID.' >'.$singlecourse->COURSE_NAME.'-'.$singlecourse->COURSE_LEVEL.' </option>';

                }else{
                  echo '<option value="Select">Select Course You Want To Attend</option>';
                }
                
                ?>
                <?php 

                $mydb->setQuery("SELECT * FROM `course` WHERE COURSE_LEVEL=1");
                $cur = $mydb->loadResultList();

                foreach ($cur as $result) {
                  echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.'-'.$result->COURSE_LEVEL.' </option>';

                }
                ?>
            </select> 


        </td>
      </tr>
      <tr>
        <td><label>Username</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="USER_NAME" name="USER_NAME" placeholder="Username" type="text"value="<?php echo isset($_SESSION['USER_NAME']) ? $_SESSION['USER_NAME'] : ''; ?>">
        </td>
        <td><label>Password</label></td>
        <td colspan="2">
            <input required="true"  class="form-control input-md" id="PASS" name="PASS" placeholder="Password" type="password"value="<?php echo isset($_SESSION['PASS']) ? $_SESSION['PASS'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Father Name</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="FATHER_NAME" name="FATHER_NAME" placeholder="Father's Name" type="text"value="<?php echo isset($_SESSION['FATHER_NAME']) ? $_SESSION['FATHER_NAME'] : ''; ?>">
        </td>
        <td><label>Occupation</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="FATHER_OCCUPATION" name="FATHER_OCCUPATION" placeholder="Father's Occupation" type="text" value="<?php echo isset($_SESSION['FATHER_OCCUPATION']) ? $_SESSION['FATHER_OCCUPATION'] : ''; ?>"></td>
      </tr>
      <tr>
        <td><label>Father's NRC</label></td>
        <td colspan="5">
          <input required="true"  class="form-control input-md" id="FATHER_NRC" name="FATHER_NRC" placeholder="Father's NRC Number" type="text" value="<?php echo isset($_SESSION['FATHER_NRC']) ? $_SESSION['FATHER_NRC'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Mother's Name</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="MOTHER_NAME" name="MOTHER_NAME" placeholder="Mother Name" type="text"value="<?php echo isset($_SESSION['MOTHER_NAME']) ? $_SESSION['MOTHER_NAME'] : ''; ?>">
        </td>
        <td><label>Occupation</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="MOTHER_OCCUPATION" name="MOTHER_OCCUPATION" placeholder="Mother's Occupation" type="text" value="<?php echo isset($_SESSION['MOTHER_OCCUPATION']) ? $_SESSION['MOTHER_OCCUPATION'] : ''; ?>"></td>
      </tr>
      <tr>
        <td><label>Mother's NRC</label></td>
        <td colspan="5">
          <input required="true"  class="form-control input-md" id="MOTHER_NRC" name="MOTHER_NRC" placeholder="Mother's NRC Number" type="text" value="<?php echo isset($_SESSION['MOTHER_NRC']) ? $_SESSION['MOTHER_NRC'] : ''; ?>">
        </td>
      </tr>
      <tr>
        <td><label>Gaurdian Address</label></td>
        <td colspan="2">
          <input class="form-control input-md" id="GUARDIAN_ADDRESS" name="GUARDIAN_ADDRESS" placeholder="Address" type="text"value="<?php echo isset($_SESSION['GUARDIAN_ADDRESS']) ? $_SESSION['GUARDIAN_ADDRESS'] : ''; ?>">
        </td>
        <td><label>Contact No.</label></td>
        <td colspan="2"><input required="true" class="form-control input-md" id="GCONTACT" name="GCONTACT" placeholder="Contact Number" type="number" value="<?php echo isset($_SESSION['GCONTACT']) ? $_SESSION['GCONTACT'] : ''; ?>"></td>
      </tr>
      <tr>
        <td><label>Student Photo</label></td>
        <td colspan="5">
          <input required id="STUDPHOTO" name="STUDPHOTO" type="file">
        </td>
      </tr>
      <tr>
        <td><label>Student NRC</label></td>
        <td colspan="5">
          <input required id="STUDNRC" name="STUDNRC" type="file">
        </td>
      </tr>
      <tr>
        <td><label>Payment Slip</label></td>
        <td colspan="5">
          <input required id="PSLIP" name="PSLIP" type="file">
        </td>
      </tr>

      <tr>
      <td></td>
        <td colspan="5">  
          <button class="btn btn-success btn-lg" name="submit" type="submit" >Save</button>
        </td>
      </tr>
    </table>
  </div>
</form>
</div>


 