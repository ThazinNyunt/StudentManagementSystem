<?php  
 if (!isset($_SESSION['IDNO'])){
      redirect("index.php");
     }

    $currentyear = date('Y');
    $nextyear =  date('Y') + 1;
    $sy = $currentyear .'-'.$nextyear;
    $_SESSION['SY'] = $sy;

    $student = New Student();
    $res = $student->single_student($_SESSION['IDNO']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);

    $sql="SELECT * FROM schoolyr WHERE AY='" . $_SESSION['SY'] . "' AND IDNO = '". $_SESSION['IDNO'] ."'";
    $userresult = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
    $userStud  = mysqli_fetch_assoc($userresult);

          if ($userStud['COURSE_ID'] == 1) {
                  $Year  = 'I';
              } elseif ($userStud['COURSE_ID'] == 2) {
                  $Year  = 'II';  
              } elseif ($userStud['COURSE_ID'] == 3) {
                  $Year  = 'III'; 
              } elseif ($userStud['COURSE_ID'] == 4) {
                  $Year  = 'IV';  
              } elseif ($userStud['COURSE_ID'] == 5) {
                  $Year  = 'V'; 
              } else {
                  $Year  = 'VI';
              }

    $sql2="SELECT * FROM course c, department d WHERE c.DEPT_ID = d.DEPT_ID AND c.COURSE_ID ='". $res->COURSE_ID ."'";
    $deptresult = mysqli_query($mydb->conn,$sql2) or die(mysqli_error($mydb->conn));
    $dept  = mysqli_fetch_assoc($deptresult);

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
               <li class="list-group-item text-right"><span class="pull-left"><strong>Roll No.</strong></span> <?php echo $Year .' '.$dept['DEPARTMENT_NAME'].' - '.$userStud['ROLLNO']; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Major</strong></span> <?php echo $resCourse->COURSE_NAME; ?> </li>
               
            
          </ul> 
                
        </div>
    </div>
         
        <!--/col-3-->
<div class="col-sm-9"> 

<div class="panel">            
  <div class="panel-body">
   <?php
       check_message();   
       ?>
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#home" data-toggle="tab">Schedule</a></li> 
    <li><a href="#grades" data-toggle="tab">Grades</a></li>
    <?php 
    if ($res->student_status=='Irregular' || $res->student_status=='Transferee' && $res->NewEnrollees==0) {
      # code... 
    ?>
    <li style="display: none;"><a href="#adddrop" data-toggle="tab">Adding and Dropping</a></li>
    <?php 
    }
    ?>
    <li><a href="#settings" data-toggle="tab">Update Account</a></li>
  </ul>
              
  <div class="tab-content">
    <div class="tab-pane active" id="home">
    <br/>
    <div class="col-md-12">
     <h3>Schedule</h3> 
    </div>
      <div class="table-responsive" style="margin-top:5%;"> 
             <form action="customer/controller.php?action=delete" Method="POST">            
                    <table  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0"  > 
                      <thead>
                        <tr> 
                          <th>Day</th> 
                          <th>Time</th> 
                          <th>Code</th>
                          <th>Name</th>
                        </tr> 
                        
                      </thead>   
                    <tbody>
                    <?php
                    $sql ="SELECT * 
                          FROM  tblstudent st, studentsubjects ss, `subject` sub, `tblschedule` s
                          WHERE  st.IDNO=ss.IDNO AND ss.`SUBJ_ID` = sub.`SUBJ_ID` AND sub.`SUBJ_ID` = s.`SUBJ_ID`
                          AND ss.`IDNO`=" .$_SESSION['IDNO']." 
                          AND s.sched_semester = '".$_SESSION['SEMESTER']."' AND LEVEL='".$resCourse->COURSE_LEVEL."'
                          ORDER BY CASE sched_day
                              WHEN 'Monday' THEN 1
                              WHEN 'Tuesday' THEN 2
                              WHEN 'Wednesday' THEN 3
                              WHEN 'Thursday' THEN 4
                              WHEN 'Friday' THEN 5
                              ELSE 6 
                          END,
                              STR_TO_DATE(time_from, '%h:%i %p')";

                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();

                      foreach ($cur as $result) {
                        echo '<tr>'; 
                        echo '<td>'.$result->sched_day  .'</td>';
                        echo '<td>'.$result->sched_time  .'</td>';      
                        echo '<td>'.$result->SUBJ_CODE.'</td>';
                        echo '<td>'.$result->SUBJ_DESCRIPTION.'</td>';                
                        echo '</tr>';
                      }
                    ?> 
                    </tbody>
                      <!-- <footer>
                        <tr>
                          <td colspan="7"><a class="btn btn-primary btn-sm" href="">Print</a></td>
                        </tr>     
                      </footer> -->
                      
                    </table>
                     
                 </form>
                 <!--  <form action="student/printschedule.php" method="POST" target="_blank">
                <input type="hidden" name="Course" value="<?php echo $resCourse->COURSE_LEVEL; ?>"> -->
                <!-- this row will not appear when printing -->
                    <!-- <div class="row no-print">
                      <div class="col-xs-12">
                       <span class="pull-right"> <button type="submit" name="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
                    </div>
                    </div> 
                  </form>    -->    
         
              </div><!--/table-resp-->
               
             </div><!--/tab-pane-->
            <div class="tab-pane" id="grades">
         
              <?php require_once  ("studentgrades.php"); ?>
          
       
            </div>
             <div class="tab-pane" id="adddrop">
         
              
              <?php //require_once  ("changingdropping.php"); ?>
          
       
            </div>
             <div class="tab-pane" id="settings">
         
              <?php require_once  ("updateyearlevel.php"); ?>
          
       
            </div><!--/tab-pane-->
  </div><!--/tab-content-->
 </div>
</div><!--/col-9--> 
</div>




    <!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="student/controller.php?action=photos" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "photo" name="photo" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
   