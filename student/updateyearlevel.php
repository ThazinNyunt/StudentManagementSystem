<br/>
<?php
$student = New Student();
$res = $student->single_student($_SESSION['IDNO']);

$studdetails = New StudentDetails();
$details = $studdetails->single_StudentDetails($_SESSION['IDNO']); 

?>
 
<form action="student/controller.php?action=edit" class="form-horizontal " method="post" >
	<div class="table-responsive">
	<div class="col-md-8"><h2>Update Accounts</h2></div>
	<div class="col-md-4"><label>Academic Year - <?php echo $_SESSION['SY'] ; ?></label></div>
		<table class="table">
			<tr style="display: none;">
				<td><label>Id</label></td>
				<td >
					<input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_SESSION['IDNO']) ? $_SESSION['IDNO'] : '' ?>">
				</td>
				

			</tr>
			<tr>
				<td colspan="2"><label>Name </label></td>
				<td>
					<input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo $res->FNAME; ?>">
 				</td>
 				<td colspan="2"><label>NRC </label></td>
				<td>
					<input required="true"   class="form-control input-md" id="NRC" name="NRC" placeholder="NRC Number" type="text" value="<?php echo $res->NRC; ?>">
 				</td>
			</tr>
			<tr>
				<td ><label>Gender</label></td> 
				<td colspan="2">
					<label>
					<?php
					 if ($res->SEX=='Female') {
					 	# code...
					 	echo '<input id="optionsRadios2"  name="optionsRadios" type="radio" value="Male"> Male
					 	<input checked id="optionsRadios1" checked="true"  name="optionsRadios" type="radio" value="Female">Female 
						 ';
					 }else{
					 		echo '<input id="optionsRadios2"  checked="true"  name="optionsRadios" type="radio" value="Male"> Male
					 		<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female 
						 ';
					 }
					?>
					</label>
				</td>
				<td    ><label>Date of birth</label></td>
				<td colspan="2"> 
				<div class="input-group" >
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  required="true" name="BIRTHDATE"  id="BIRTHDATE"  type="text" class="form-control input-md"   
                  data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo date_format(date_create($res->BDAY),'m/d/Y'); ?>">
				   </div>             
				</td>
				 
			</tr>
			<tr>
			<td><label>Contact No.</label></td>
				<td colspan="2">
				  <input required="true"  class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number" type="text" value="<?php echo $res->CONTACT_NO; ?>">
			</td>
			<td><label>Email</label></td>
				<td colspan="2">
				  <input required="true"  class="form-control input-md" id="EMAIL" name="EMAIL" placeholder="Email Address" type="email" value="<?php echo $res->EMAIL; ?>">
			</td>
			</tr>
			<tr>
				<td><label>Address</label></td>
				<td colspan="5"  >
				<input required="true"  class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo $res->HOME_ADD; ?>">
				</td> 
			</tr>
			<tr>
				<td><label>Username</label></td>
				<td colspan="2">
				  <input required="true"  class="form-control input-md" id="USER_NAME" name="USER_NAME" placeholder="Username" type="text"value="<?php echo $res->ACC_USERNAME; ?>">
				</td>
				<td><label>Password</label></td>
				<td colspan="2">
				  <input required="true"  class="form-control input-md" id="PASSWWORD" name="PASSWWORD" placeholder="Password" type="password"value="">
				</td>
		 
			</tr>
			<tr>
				<td><label>Father Name</label></td>
				<td colspan="2">
					<input required="true"  class="form-control input-md" id="FATHER_NAME" name="FATHER_NAME" placeholder="Father Name" type="text"value="<?php echo $details->FATHER_NAME; ?>">
				</td>
				<td><label>Occupation</label></td>
				<td colspan="2"><input  required="true" class="form-control input-md" id="FATHER_OCCUPATION" name="FATHER_OCCUPATION" placeholder="Father Occupation" type="text"value="<?php echo $details->FATHER_OCCUPATION; ?>"></td>
			</tr>
			<tr>
				<td><label>Mother Name</label></td>
				<td colspan="2">
					<input required="true"  class="form-control input-md" id="MOTHER_NAME" name="MOTHER_NAME" placeholder="Mother Name" type="text"value="<?php echo $details->MOTHER_NAME; ?>">
				</td>
				<td><label>Occupation</label></td>
				<td colspan="2"><input  required="true" class="form-control input-md" id="MOTHER_OCCUPATION" name="MOTHER_OCCUPATION" placeholder="Mother Occupation" type="text"value="<?php echo $details->MOTHER_OCCUPATION; ?>"></td>
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