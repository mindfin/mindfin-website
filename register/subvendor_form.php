<?php
	include_once "config/db_connection.php";
	include_once "config/constant.php";
	include_once "config/subvendor_auth.php";
	include_once "library/form.php";
		
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<title>MindFin Apply Form</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/paper-5.jpg')">
	    <div class="logo-container">
	            <!--<div >-->
	            <!--    <img src="assets/img/logo.png" style="max-height:60px;">-->
	            <!--</div>-->
	            
	        </div>
	        <?php if(isset($_REQUEST['auth'])){ ?>
						<?php if($_REQUEST['auth']=='success'){ 
							echo "<script>
			alert('Thank for Sharing your Information with Us');
			
		</script>"; 
							}  } ?>
						
		<!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizard">
		                <form action="actions/form_action.php?f=add_customer" method="post">
		                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">Apply Now</h3>
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
									</div>
									<ul>
										<li>
											<a href="#info_hotel" data-toggle="tab">
												
											</a>
										</li>
										<li>
											<a href="#info_cus" data-toggle="tab">
												
											</a>
										</li>
										<li>
											<a href="#info_cus1" data-toggle="tab"></a>
										</li>
			                            
			                        </ul>
								</div>
		                        <div class="tab-content" style="padding: 51px 20px 10px;">
		                        	<div class="tab-pane" id="info_hotel">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Personal Information</h5>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
			                                	<div class="form-group">
			                                       <label class="control-label">Name</label><br>
										            <input type="text" name="name" class="form-control"  placeholder="Name *" required="required">
			                                    </div>
			                                </div>
		                                	<div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Company Email</label>
			                                      <input type="email" name="cemail" class="form-control"  placeholder="Company Email ">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                     <div class="form-group">
			                                        <label>Personal Email*</label>
			                                        <input type="email" name="pemail" class="form-control"  placeholder="Personal Email *" required="required">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5 col-sm-offset-1">
			                                     <div class="form-group">
			                                        <label  >Date Of Birth </label>
                                                    <input type="date"  name="dob"  class="form-control" id="dob" >
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                	<div class="form-group">
			                                         <label>Gender</label><br>
		                                            <select name="gender" class="form-control">
		                                                <option disabled="" selected="">- Gender -</option>
		                                                <option value="Male"> Male </option>
		                                                <option value="Female"> Female </option>
		                                               
		                                            </select>
			                                    </div>
			                                </div>
			                                <div class="col-sm-5 col-sm-offset-1" >
			                                	<div class="form-group">
			                                       <label  for="contact_number">Contact Number*</label>
                                                    <input type="text" name="mobile" class=" form-control" maxlength = "10" placeholder="Contact Number..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="required">

			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                	<div class="form-group">
			                                       <label  for="contact_number">Alternative Contact Number</label>
                                                    <input type="text" name="altmobile" class=" form-control" maxlength = "10" placeholder="Alternative Contact Number..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />

			                                    </div>
			                                </div>
			                                <div class="col-sm-10 col-sm-offset-1">
			                                	<div class="form-group">
			                                       <label class="control-label">Address</label><br>
										            <textarea name="address" rows="4"  class="form-control"></textarea>
			                                    </div>
			                                </div>
			                                
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="info_cus">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text">Professional Informaltion :</h5>
											</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label for="emptype">Employee Type</label>
                                                    <select name="emptype"  class="emptype form-control">
                                                        <option value="">--Select Employee Type--</option>
                                                        <?php 
                                                            $fetchEmploeeTypeObj = new Website();
                                                            $result_emp_type = $fetchEmploeeTypeObj->fetchEmploeeType();
                                                            foreach($result_emp_type as $result_emp_type) {
                                                        ?>
                                                        <option value="<?php echo $result_emp_type['idemployeetype'];?>"><?php echo $result_emp_type['emp_type'];?></option>
                                                        <?php } ?>
                                                    </select>
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                     <div class="form-group">
			                                        <label  for="cname">Company Name</label>
                                                    <input type="text" name="cname" class="company_name form-control" placeholder="Company Name..." />
			                                    </div>
			                                </div>
			                                <div class="col-sm-5 col-sm-offset-1">
			                                     <div class="form-group">
			                                        <label  for="salary">Designation</label>
                                                    <input type="text" name="designation" class="company_name form-control" placeholder="Designation..." />
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                     <div class="form-group">
			                                        <label  for="salary">Salary</label>
                                                    <input type="text" name="salary" class="salary form-control" placeholder="Salary..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
			                                    </div>
			                                </div>
			                                <div class="col-sm-5 col-sm-offset-1">
			                                     <div class="form-group">
			                                        <label for="loan_amount">Loan Amount</label>
                                                    <input type="text" name="loan_amount" class="loan_amount form-control" placeholder="Loan Amount..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                     <div class="form-group">
			                                        <label  for="loanpurpose">Loan Purpose</label>
                                                    <select name="loanpurpose" class="loan_purpose form-control"  required="required">
                                                        <option value="">--Select Loan Purpose--</option>
                                                        <?php 
                                                            $fetchLoanPurposeObj = new Website();
                                                            // $result_lone_pur = $fetchLoanPurposeObj->fetchLoanPurpose();
                                                            foreach($result_lone_pur as $result_lone_pur) {
                                                        ?>
                                                        <option value="<?php echo $result_lone_pur['idloantype'];?>"><?php echo $result_lone_pur['loantype'];?></option>
                                                        <?php } ?>
                                                    </select>
			                                    </div>
			                                </div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="info_cus1">
		                            	<div class="row">
		                                	
		                                <div class="form-group">  
												
									<div class="table-responsive">  
										 <table class="table table-bordered" id="dynamic_field">  


											   <thead>  
													   <tr class="replace-inputs">
														   <th>Loan Type</th>
														   <th>Loan Amount</th>
														   <th>Bank</th>
														   <th>Action</th>
													   </tr>
													 </thead>

													 <tbody>
											  <tr>  
												   <td> 
    												   <select name="idloantype[]" class="form-control">
    												   <option disabled="" selected="">-- Loan Type -- </option>
                            								   <?php 
                                                                    $fetchLoanPurposeObj = new Website();
                                                                    // $result_lone_pur = $fetchLoanPurposeObj->fetchLoanPurpose();
                                                                    foreach($result_lone_pur as $result_lone_pur) {
                                                                ?>
                                                            <option value="<?php echo $result_lone_pur['idloantype'];?>"><?php echo $result_lone_pur['loantype'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>  
												   <td><input type="text" name="loanamount[]" placeholder="Loan Amount" class="form-control" /></td> 
												   <td>
												       <select name="idbank[]" class="form-control">
    												   <option disabled="" selected="">-- Bank Name --</option>
                            								   <?php 
                                                                    $fetchBankInfoObj = new Website();
                                                                    $result_bankname = $fetchBankInfoObj->fetchBankInfo();
                                                                    foreach($result_bankname as $result_bankname) {
                                                                ?>
                                                            <option value="<?php echo $result_bankname['idbank'];?>"><?php echo $result_bankname['bankname'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
												   <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
    											  </tr>  
    											  </tbody>
    										 </table>  
    									   
    									   </div>  
    								
    						  </div>
			                                
			                                
		                            	</div>
		                            </div>
		                            
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
									</div>

	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <!--<div class="footer">-->
	    <!--    <div class="container text-center">-->
	    <!--    Made with <i class="fa fa-heart heart"></i> by <a href="http://www.mavyah.com">Mavyah</a>   </div>-->
	    <!--</div>-->
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="dist/emotion-ratings.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
      //Disable full page
      $("body").on("contextmenu", function(e) {
        return false;
      });

      //Disable full page
      $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
      });

      //Disable cut copy paste
      $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
      });
      //Disable ctrl+shift+i, ctrl+shift+j, ctrl+u
      document.onkeydown = function(e) {
        if (event.keyCode == 123) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
          return false;
        }
      }
    });
  </script>
</html>
