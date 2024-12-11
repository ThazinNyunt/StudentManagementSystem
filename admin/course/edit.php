<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$COURSE_ID = $_GET['id'];
    if($COURSE_ID==''){
  redirect("index.php");
}
  $course = New Course();
  $singlecourse = $course->single_course($COURSE_ID);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Course/Year</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
      
                        
                         <input class="form-control input-sm" id="COURSE_ID" name="COURSE_ID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singlecourse->COURSE_ID; ?>">
                    
                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE_NAME">Course:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="COURSE_NAME" name="COURSE_NAME" placeholder=
                            "Course" type="text" value="<?php echo $singlecourse->COURSE_NAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE_LEVEL">Year:</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" name="COURSE_LEVEL" id="COURSE_LEVEL"> 
                          <option value="1"  <?php echo ($singlecourse->COURSE_LEVEL==1) ? 'selected="true"': '' ; ?>>First Year</option>
                          <option value="2" <?php echo ($singlecourse->COURSE_LEVEL==2) ? 'selected="true"': '' ; ?> >Second Year</option> 
                          <option value="3" <?php echo ($singlecourse->COURSE_LEVEL==3) ? 'selected="true"': '' ; ?> >Third Year</option>
                          <option value="4" <?php echo ($singlecourse->COURSE_LEVEL==4) ? 'selected="true"': '' ; ?> >Fourth Year</option> 
                          <option value="5" <?php echo ($singlecourse->COURSE_LEVEL==5) ? 'selected="true"': '' ; ?> >Fifth Year</option> 
                          <option value="6" <?php echo ($singlecourse->COURSE_LEVEL==6) ? 'selected="true"': '' ; ?> >Final Year</option> 
                        </select>
                      </div>
                    </div>
                  </div> 

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DEPT_ID">Department:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="DEPT_ID" id="DEPT_ID"> 
                          <?php 

                            $mydb->setQuery("SELECT * FROM `department` WHERE DEPT_ID=". $singlecourse->DEPT_ID);
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->DEPT_ID.' >'.$result->DEPARTMENT_NAME.' [ '.$result->DEPARTMENT_DESC .' ]</option>';

                            }
                          ?> 
                          <?php 

                            $mydb->setQuery("SELECT * FROM `department` WHERE DEPT_ID!=". $singlecourse->DEPT_ID);
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                              echo '<option value='.$result->DEPT_ID.' >'.$result->DEPARTMENT_NAME.' [ '.$result->DEPARTMENT_DESC .' ]</option>';

                            }
                          ?>

                         
                        </select> 
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                        </div>
                    </div>
                  </div>

              
             <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->