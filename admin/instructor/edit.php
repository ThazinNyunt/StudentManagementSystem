<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$INST_ID = $_GET['id'];
    if($INST_ID==''){
  redirect("index.php");
}
 

  $subject = New Instructor();
  $inst = $subject->single_instructor($INST_ID);

  // $user = New User();
  // $singleuser = $user->single_user($INST_ID);

    $sql = "SELECT * FROM useraccounts WHERE EMPID='" .$INST_ID."'";
    $res = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
    $userresult = mysqli_fetch_assoc($res);


?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

    
           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Edit Instructor</h1>
          </div>
        </div> 
                   
                  <!--   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_ID">ID:</label>

                      <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="INST_ID" name="INST_ID" placeholder=
                            "Instructor Full Name" type="hidden" value="<?php echo $inst->INST_ID ; ?>">
                     <!--  </div>
                    </div>
                  </div> -->
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_NAME">Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="INST_NAME" name="INST_NAME" placeholder=
                            "Instructor Full Name" type="text" value="<?php echo $inst->INST_NAME ; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_CONTACT">Contact No.:</label>
                      <div class="col-md-8">                        
                         <input class="form-control input-sm" id="INST_CONTACT" name="INST_CONTACT" placeholder=
                            "Contact Number." type="text" value="<?php echo $inst->INST_CONTACT ; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_CONTACT">Email:</label>
                      <div class="col-md-8">                        
                         <input class="form-control input-sm" id="INST_EMAIL" name="INST_EMAIL" placeholder=
                            "Email Address" type="email" value="<?php echo $inst->INST_EMAIL ; ?>" required>
                      </div>
                    </div>
                  </div>  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_USERNAME">Username:</label>
                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                            "Username" type="text" value="<?php echo $userresult['ACCOUNT_USERNAME']; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_PASS">Password:</label>
                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder=
                            "Account Password" type="Password" value="">
                      </div>
                    </div>
                  </div>
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>


          
  </form>
      

     