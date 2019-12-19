<?php
include_once "config/db_connection.php";
include_once "library/form.php";
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="shortcut icon" type="image/png" href="assets/img/head.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/head.png">
	<title>MindFin Apply Form</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<meta name="viewport" content="width=device-width">
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet">
	<!-- Fonts and Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
	<link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url(&quot;assets/img/paper-5.jpg&quot;); height: auto;">
		<div class="logo-container">
			<div>
				<a href="Home"><img src="../images/mindfin-logo.png" style="max-height:60px;"></a>
			</div>
		</div>
		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="green" id="wizard">
							<form action="actions/form_action.php?f=customeradd" method="post" enctype="multipart/form-data" novalidate="novalidate">
								<div class="wizard-header">
									<h3 class="wizard-title">Apply Now</h3>
								</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
										<div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="2" style="width: 12.5%;"></div>
									</div>
									<ul class="nav nav-pills">
										<li class="active" style="width: 25%;">
											<a href="#info_hotel" data-toggle="tab" aria-expanded="true"></a>
										</li>
										<li style="width: 25%;">
											<a href="#info_cus" data-toggle="tab"></a>
										</li>
									</ul>
								</div>
								<div class="tab-content" style="padding: 51px 20px 10px;">
									<div class="tab-pane active" id="info_hotel">
										<div class="row">
											<div class="col-sm-12">
												<h5 class="info-text"> Personal Information</h5>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label class="control-label">Name</label><br>
													<input type="text" name="name" class="form-control" placeholder="Name *" required="required" aria-required="true">
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label>Company Email</label>
													<input type="email" name="cemail" class="form-control" placeholder="Company Email ">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<label>Personal Email*</label>
													<input type="email" name="pemail" class="form-control" placeholder="Personal Email *" required="required" aria-required="true">
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label>Date Of Birth </label>
													<input type="date" name="dob" class="form-control" id="dob">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<label>Gender</label><br>
													<select name="gender" class="form-control">
														<option disabled="" selected="">- Gender -</option>
														<option value="Male"> male </option>
														<option value="Female"> female </option>
													</select>
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label for="contact_number">Contact Number*</label>
													<input type="text" name="mobile" class=" form-control" maxlength="10" placeholder="Contact Number..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="required" aria-required="true">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<label for="contact_number">Alternative Contact Number</label>
													<input type="text" name="altmobile" class=" form-control" maxlength="10" placeholder="Alternative Contact Number..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label class="control-label">Address</label><br>
													<textarea name="address" rows="4" class="form-control"></textarea>
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
													<select name="emptype" class="emptype form-control">
															<option value="">--Select Employee Type--</option>
															<option value="Salaried">Salaried</option>
															<option value="Partnership">Partnership</option>
															<option value="Self Employee">Self Employee</option>
															<option value="Business">Business</option>
															<option value="Director">Director</option>
													</select>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<label for="cname">Company Name</label>
													<input type="text" name="cname" class="company_name form-control" placeholder="Company Name...">
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label for="salary">Designation</label>
													<input type="text" name="designation" class="company_name form-control" placeholder="Designation...">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<label for="salary">Salary</label>
													<input type="text" name="salary" class="salary form-control" placeholder="Salary..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label for="loan_amount">Loan Amount</label>
													<input type="text" name="loan_amount" class="loan_amount form-control" placeholder="Loan Amount..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<label for="loanpurpose">Loan Purpose*</label>
													<select name="loanpurpose" class="loan_purpose form-control" required="required" aria-required="true">
														<option value="">--Select Loan Purpose--</option>
														<option value="2">Bussiness Loan</option>
														<option value="1">Personal Loan</option>
														<option value="3">Home Loan</option>
														<option value="4">Working Capital Loan Services</option>
														<option value="5">Car Loan</option>
														<option value="6">Mortage / LAP</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
										<input type="button" class="btn btn-next btn-fill btn-success btn-wd" name="next" value="Next">
										<input type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="finish" value="Finish" style="display: none;">
									</div>
									<div class="pull-left">
										<input type="button" class="btn btn-previous btn-default btn-wd disabled" name="previous" value="Previous">
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div> <!-- wizard container -->
				</div>
			</div> <!-- row -->
		</div> <!--  big container -->
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<!--  Plugin for the Wizard -->
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="dist/emotion-ratings.js"></script>
	<script>
		$(document).ready(function() {
			var i = 1;
			$('#add').click(function() {
				i++;
				$('#dynamic_field').append('<tr id="row' + i + '"><td> <select name="idloantype[]" class="form-control"><option disabled="" selected="">- Loan Type -</option><option value="1">Home Loan</option><option value="2">Bussiness Loan</option><option value="3">Mortage /LAP</option><option value="4">Working Capital Loan Services</option><option value="5">Car Loan</option></select></td><td><input type="text" name="loanamount[]" placeholder="Loan Amount" class="form-control name_list" /></td>	<td><select name="idbank[]" class="form-control"><option disabled="" selected="">-- Bank Name --</option><option value="1">CANARA BANK</option><option value="2">HDFC</option><option value="3">SBI</option><option value="4">BORADA</option><option value="5">MYSORE</option><option value="6">Vijaya BANK</option><option value="7">ANDRA BANK</option></select></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
			});
			$(document).on('click', '.btn_remove', function() {
				var button_id = $(this).attr("id");
				$('#row' + button_id + '').remove();
			});
		});
	</script>
</body>
</html>