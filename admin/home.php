<style type="text/css">
 body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.dashboard {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns */
    gap: 20px; /* Space between boxes */
    padding: 20px;
    margin: 20px auto;
    max-width: 1200px;
}

.box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s;
}

.box:hover {
    transform: scale(1.05);
}

h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

#total-enrollees-count,
#total-subjects-count,
#total-instructors-count,
#active-courses-count {
    font-size: 30px; /* Larger font size for emphasis */
    font-weight: bold;
    color: #007BFF; /* Bootstrap primary color */
}

<?php


admin_confirm_logged_in();

  $sql1 = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE NewEnrollees=1";
  $mydb->setQuery($sql1); 
  $enrollees = $mydb->loadSingleResult(); 

  $sql2 = "SELECT count(*) as 'students' FROM tblstudent";
  $mydb->setQuery($sql2); 
  $students = $mydb->loadSingleResult(); 

  $sql3 = "SELECT count(*) as 'subjects' FROM subject";
  $mydb->setQuery($sql3); 
  $subjects = $mydb->loadSingleResult();

  $sql4 = "SELECT count(*) as 'instructors' FROM tblinstructor";
  $mydb->setQuery($sql4); 
  $instructors = $mydb->loadSingleResult();
 


   
  ?> 
 <?php
if (isset($_SESSION['admingvCart'])){
  if (count($_SESSION['admingvCart'])>0) {
    $cart = '<span class="carttxtactive">('.count($_SESSION['admingvCart']) .')</span>';
  } 
 
} 
?>
</style>
<div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Welcome to the <?php echo $_SESSION['ACCOUNT_TYPE'] ?> Panel</h1>
          </div>
         <div class="dashboard">
            <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') { ?>
             <div class="box total-enrollees">
                 <h3>New Enrollees</h3>
                 <p id="total-enrollees-count"><?php echo isset($enrollees->enrollees) ? $enrollees->enrollees : 0; ?></p>
             </div>
             <?php } ?>         
             <div class="box active-students">
                 <h3>Total Students</h3>
                 <p id="active-courses-count"><?php echo isset($students->students) ? $students->students : 0; ?></p>
             </div>
             <div class="box total-subjects">
                 <h3>Total Subjects</h3>
                 <p id="total-subjects-count"><?php echo isset($subjects->subjects) ? $subjects->subjects : 0; ?></p>
             </div>
             <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') { ?>
             <div class="box total-instructors">
                 <h3>Total Instructors</h3>
                 <p id="total-instructors-count"><?php echo isset($instructors->instructors) ? $instructors->instructors : 0; ?></p>
             </div>
          <?php } ?>
         </div>
 </div>

