<?php 
  
    $student = New Student();
    $res = $student->single_student($_GET['IDNO']);

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
            <img title="profile image" class="img-hover"   src="<?php echo web_root. 'images/student_photo/'.  $res->STUDPHOTO; ?>">
            </a>
             </div>
          <ul class="list-group">
          
         
               <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> <?php echo $res->FNAME; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Course</strong></span> <?php echo $resCourse->COURSE_NAME .' - '.$res->YEARLEVEL; ?> </li>
              
                
            
          </ul> 
                
        </div>
    </div>
         
        <!--/col-3-->
<div class="col-sm-9">
  <form class="" action="send.php" method="post" class="form-horizontal">
      <div class="table-responsive">
      <div class="col-md-12"><h2>Send Username and Password</h2></div>
        <table class="table">
        <tr style="display: none;" >
        <td><label>Id</label></td>
        <td >
          <input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo  $res->IDNO; ?>">
        </td>
        <td colspan="4"></td>
      </tr> 
        <tr style="display: none;" >
          <td><label>Student Name</label></td>
          <td colspan="2">
            <input required="true"   class="form-control input-md" id="name" name="name" placeholder="UserName" type="text" value="<?php echo $res->FNAME; ?>">
          </td>
          <td colspan="2"></td>
        </tr>
        <tr>
          <td><label>Username</label></td>
          <td colspan="2">
            <input required="true"   class="form-control input-md" id="username" name="username" placeholder="UserName" type="text" value="" >
          </td>
          <td colspan="2"></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td colspan="2">
            <input required="true"   class="form-control input-md" id="password" name="password" placeholder="PASSWORD" type="text" value="" >
          </td>
          <td colspan="2"></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td colspan="2">
            <input required="true"   class="form-control input-md" id="email" name="email" placeholder="EMAIL" type="text" value="<?php echo  $res->EMAIL; ?>">
          </td>
          <td colspan="2"></td>
        </tr>
         <tr>
      <td></td>
        <td colspan="4">  
          <br>
          <button class="btn btn-primary btn-lg" type="submit" name="send">Send Email</button>
          <br>
        </td>
      </tr>
          
        </table>
      </div>
    </div>
  

  </form>
</div>