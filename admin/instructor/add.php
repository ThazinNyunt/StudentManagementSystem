                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Instructor</h1>
          </div>
        </div> 
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_NAME">Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="INST_NAME" name="INST_NAME" placeholder=
                            "Instructor Full Name" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INS_MAJOR">Major:</label>
                      <div class="col-md-8">                        
                         <input class="form-control input-sm" id="INST_MAJOR" name="INST_MAJOR" placeholder=
                            "Major" type="text" value="1">
                      </div>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_CONTACT">Contact No.:</label>
                      <div class="col-md-8">                        
                         <input class="form-control input-sm" id="INST_CONTACT" name="INST_CONTACT" placeholder=
                            "Contact Number." type="text" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "INST_CONTACT">Email:</label>
                      <div class="col-md-8">                        
                         <input class="form-control input-sm" id="INST_EMAIL" name="INST_EMAIL" placeholder=
                            "Email Address" type="email" value="" required>
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
                            "Username" type="text" value="" required>
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
                            "Account Password" type="Password" value="" required>
                      </div>
                    </div>
                  </div>
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>
                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>
                       </div>
                    </div>
                  </div>

    
          
        </form>
       