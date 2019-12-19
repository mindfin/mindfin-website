<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>

<head>
  <title>Contact - Mindfin</title>
  <meta name="description" content="Mindfin,  Contact us to learn more. If you're in need of financial Obstacles in Business or Personal, please reach us No. 10, 1st Floor, Krishna Block,1st Main Road,Seshadripuram,Bangalore- 560020">
  <meta name="keywords" content="MIND FIN SER,mindfin,Financial Services in Bengaluru,Financial Services Companies in Bengaluru Financial Services Companies,Unsecured Business loan, Secured Loan, Unsecured loan,with out any colletralls,Financial institutions, Financial institutions in Bengaluru,Financial institutions in Karnataka, Financial institutions in India">
  <link href="https://mindfin.co.in/contact.php" hreflang="en-in" rel="alternate">
</head>
<?php include_once "includes/header.php"; ?>


<body>

  <section class="secondary-banner blog-details-banner contact-us-banner">
    <div class="secondary-banner-wrapper">
      <!-- <div class="banner-content">
                <h5>Details</h5>
                <h1>Short story about <span>alons</span></h1>               
            </div> -->
    </div>
  </section>

  <section class="breadcums-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Contact us</a></li>
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

  <section class="contact-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="pr-features-list contact-ways-list">
            <ul>
              <li class="contact-ways-list-item1">
                <div class="item">
                  <div><i class="fas fa-phone-volume contact-phone"></i></div>
                  <p>Phone : +91 95130 40055</p>
                  <p>Phone : +91 99169 17983</p>
                </div>
              </li>
              <li class="contact-ways-list-item2">
                <div class="item">
                  <div><i class="far fa-envelope contact-envelope"></i></div>
                  <p>Office : info@mindfin.co.in</p>
                  <p>Email : mindfinserve@gmail.com </p>
                </div>
              </li>
              <li class="contact-ways-list-item3">
                <div class="item">
                  <div><i class="fas fa-map-marker-alt contact-location"></i></div>
                  <p>No. 10, 1st Floor, Krishna Block, 1st Main Road, Seshadripuram, Bangalore- 560020</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-input-sec">
    <div class="container-fluid">
      <div class="contact-input-sec-wrapper">

        <div class="contact-input-sec-left">
          <div class="contact-us-image-wrapper">
            <!--<img src="images/contact-us.png" class="img-responsive" alt="image-map"/>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3887.6521769048118!2d77.57684091388332!3d12.994084590841156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo.10%2C+1st+Floor%2C+Krishna+Block%2C+1st+Main+Road%2C+Seshadripuram%2C+Bangalore+-+560020!5e0!3m2!1sen!2sin!4v1555677426614!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

        <div class="contact-input-sec-right">
          <p>Do you have any questions to ask please let us know.</p>
          <form action="register/actions/form_action.php?f=contact" method="post" enctype="multipart/form-data" novalidate="novalidate">
            <div class="form-group contact-form">
              <input type="text" class="form-control" name="name" placeholder="Your Name">
            </div>
            <div class="form-group contact-form">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="required">
            </div>
            <div class="form-group contact-form">
              <input type="number" class="form-control" name="mobile" placeholder="Mobile No" maxlength="10" required="required">
            </div>
            <div class="form-group contact-form">
              <textarea class="form-control" name="msg" placeholder="Messages"></textarea>
            </div>
            <button type="submit" class="btn btn-default mf-btn-primary contact-send-request-btn">Send Request</button>
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

</body>

</html>