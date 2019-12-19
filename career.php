<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>

<head>
	<title>Career - MindFin</title>
	<meta name="description" content="MIndfin Career ">
	<meta name="keywords" content="">
	<link href="https://mindfin.co.in/career.php" hreflang="en-in" rel="alternate">
</head>

<body>
	<?php include_once "includes/header.php"; ?>
	<section class="breadcums-sec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Career</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php if (isset($_REQUEST['auth'])) { ?>
	<?php if ($_REQUEST['auth'] == 'success') {
			echo "<script>
							alert(Thank you for contacting us, You will get a reply within 24 hours.);
			
		</script>";
		} else {
			echo "<script>
								alert('sorry somthing went wrong! please try agin after sometime')
								</script>";
			// exit;
		}
	} ?>

	<section class="contact-input-sec">

		<div class="container-fluid">
			<div class="contact-input-sec-wrapper">

				<div class="contact-input-sec-left">
					<div class="contact-us-image-wrapper">
						<section id="content">
							<h2 class=sub-head-primary>Requirements</h2>
							<div class="content-wrap">

								<div class="container clearfix">

									<div class="col_three_fifth nobottommargin">



										<!-- <a href="#" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a> -->

										<div class="divider divider-short"><i class="icon-star3"></i></div>

										<div class="fancy-title title-bottom-border">
											<h3 class=sub-head-secondary><u>Telesales Representative</u></h3>
										</div>
										<div class="accordion accordion-bg clearfix">

											<!-- <div class=sub-head-primary>Requirements</div> -->
											<div class="acc_content clearfix">
												<ul>
													<li>SSLC, PUC, Under Graduate</li>
												</ul>
											</div>

											<h4 class=sub-head-primary>Job Description</h4>
											<div class="acc_content clearfix">
												We are looking for an enthusiastic Telesales Representative to contribute in generating sales for our company. <br>
												You will be responsible for closing sales deals over the phone and maintaining good customer relationships.<br>
												<h4 class=sub-head-primary>Responsibilities</h4>
												<div class="acc_content clearfix">
													• Contact potential or existing customers to inform them about a product or service,<br>
													• Answer questions about products or the company,<br>
													• Enter and update customer information in the database<br>


												</div>
												<br>
											</div>

											<!-- <a href="#" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a> -->

											<!-- <div class="divider divider-short"><i class="icon-star3"></i></div> -->
											<!-- <div class="header-bottom-border"></div> -->

											<div class="fancy-title title-bottom-border">
												<h3 class=sub-head-secondary><u>Relationship Manager</u></h3>
											</div>
											<h4 class=sub-head-primary>Job Description</h4>
											<div class="accordion accordion-bg clearfix">

												Maintain good relationships with clients so that the business can maximize the value of those relationships.<br>
												Identify key contacts at potential client companies to establish and foster a relationship.<br>
												Resolve any customer complaints in a prompt and professional manner.
												<!-- <div class=sub-head-primary>Requirements</div> -->


												<div class="sub-head-primary">Responsibilities</div>
												<div class="acc_content clearfix">
													• Excellent communication and listening skills.<br>
													• Confidence and Presentation skills.<br>
													• Understanding and interest in financial / banking products and markets.<br>
													• Ability to explain complex information clearly and simply.<br>
													• Enter and update customer information in the database<br>
												</div>

											</div>

											<!-- <a href="#" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a> -->



											<!-- <a href="#" data-scrollto="#job-apply" data-highlight="yellow" class="button button-3d button-black nomargin">Apply Now</a> -->

										</div>


									</div>

								</div>

						</section>
						<!-- #content end -->
					</div>
				</div>

				<div class="contact-input-sec-right">
					<p class=sub-head-primary>Apply Now</p>
					<form action="register/actions/form_action.php?f=career" method="post" enctype="multipart/form-data" novalidate="novalidate">
						<div class="form-group contact-form">
							<input type="text" class="form-control" name="name" placeholder="Name" required="required">
						</div>
						<div class="form-group contact-form">
							<input type="email" class="form-control" name="email" placeholder="Email" required="required">
						</div>
						<div class="form-group contact-form">
							<input type="number" class="form-control" name="mobile" placeholder="Mobile No" maxlength="10" required="required">
						</div>
						<div class="form-group">
							<label>Gender</label><br>
							<select name="gender" class="form-control">
								<option>- Gender -</option>
								<option value="Male"> male </option>
								<option value="Female"> female </option>

							</select>
						</div>

						<div class="form-group contact-form">
							<!-- <label for="template-jobform-age">Age <small>*</small></label> -->
							<input type="text" class="form-control" name="age" placeholder="age" />
						</div>

						<div class="form-group contact-form">
							<!-- <label for="template-jobform-experience">Experience <small>*</small></label> -->
							<input type="text" class="form-control" name="experience" placeholder="experience" required="required" />
						</div>


						<div class="form-group">
							<label>Position </label>
							<select class="form-control" name="position">
								<option value="">-- Select Position --</option>
								<option value="Tele Caller">Tele Caller</option>
								<option value="Relationship Manager">Relationship Manager</option>
							</select>
						</div>

						<button type="submit" class="btn btn-default mf-btn-primary contact-send-request-btn">Send Application</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include_once "includes/footer.php"; ?>

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-sm" style="width:350px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Track your loan Status</h4>
				</div>
				<form class="form-horizontal" action="register/actions/form_action.php?f=track" method="post" onsubmit="return c_validation()">
					<div class="modal-body">
						<input type="text" class="form-control" name="track_no" placeholder="Enter your Mobile No*" required="required">
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary btn-block" name="submit" value="submit" style="margin-right:120px; border-radius:15px;">Submit</button>
						<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="js/slick.min.js"></script>
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
</body>

</html>