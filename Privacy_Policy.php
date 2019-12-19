<!DOCTYPE html>
<html lang="en">
<?php include_once "includes/headfiles.php"; ?>
<head>
  <title>Privacy Policy - MindFin</title>
  <meta name="description" content="Mindfin, was established in 15+ years ago with a oncept of bringing all financial institutions and their services under one umbrella, We came into existence to help the customers to choose the most suitable financial packages for them. Our main objective is to fulfill the financial needs of the customers through smooth bank policies.">
  <meta name="keywords" content="MIND FIN SER,mindfin,Financial Services in Bengaluru,Financial Services Companies in Bengaluru
  Financial Services Companies,Investment Management,Mortgage loan in Bengaluru,Mortgage Calculator,Mortgage
  Mortgage Payment Calculator,Mortgage Rates,Loans,Payday Loans,Quicken Loans,Personal Loans,Personal Loans in Bengaluru,
  Finance,Financial Planning,what is financial services,financial products and services,finance and insurance industry,
  fsa,Business loan, Business loan in Bengaluru,ITR, GST Returns, Mind fin ser Pvt. Ltd, Bengaluru base Finacial Services,
  Home Loan, Home Loan in Bengaluru, EDC Swiping Machine, Swiping machine loan,Machinary loan, machinary loan in bengaluru, Finacial service companies in India,
  Financial services in India, Financial  service in Karnataka, Business loan in Karnataka, Business Loans in India,
  Personal loans in karnataka, Personal loans in India, Financial institutions, Financial institutions in Bengaluru,
  Financial institutions in Karnataka, Financial institutions in India, Unsecured Business loan, Secured Loan, Unsecured loan,
  with out any colletralls,Lending, MSME Finance, MSME Loan in Bengaluru, MEME loan in Karnataka, MSME loans in India,
  SME Loans, SME loans in Bengaluru,SME lonas in Karnataka, SME loans in India, Trust Funding,Educational Trust funding,
  School and Colleges Funding, Accessories funding, Infrastructure Funding ">
</head>
<body>
    <?php include_once "includes/header.php"; ?>
    <section class="portfolio-detail-sec">
        <div class="container">
        <h2>Privacy Policy of <a href="https://mindfin.co.in">https://mindfin.co.in</a></h2>

        <p>At <span class="website_name">Mind Fin Ser</span>, we collect and manage user data according to the following Privacy Policy.</p>

        <h3>Data Collected</h3>

        <p>We collect information you provide directly to us. For example, we collect information when you create an account, subscribe, participate in any interactive features of our services, fill out a form, request customer support or otherwise communicate with us. The types of information we may collect include your name, email address, postal address, credit card information and other contact or identifying information you choose to provide.</p>

        <p>We collect anonymous data from every visitor of the Website to monitor traffic and fix bugs. For example, we collect information like web requests, the data sent in response to such requests, the Internet Protocol address, the browser type, the browser language, and a timestamp for the request.</p>

        <p>We also use various technologies to collect information, and this may include sending cookies to your computer. Cookies are small data files stored on your hard drive or in your device memory that helps us to improve our services and your experience, see which areas and features of our services are popular and count visits. We may also collect information using web beacons (also known as "tracking pixels"). Web beacons are electronic images that may be used in our services or emails and to track count visits or understand usage and campaign effectiveness.</p>

        <h3>Use of the Data</h3>


        <p>We employ industry standard techniques to protect against unauthorized access of data about you that we store, including personal information.</p>

        <p>We do not share personal information you have provided to us without your consent, unless:</p>

        <ul>
            <li>Doing so is appropriate to carry out your own request</li>
            <li>We believe it's needed to enforce our legal agreements or that is legally required</li>
            <li>We believe it's needed to detect, prevent or address fraud, security or technical issues</li>
        </ul>

        <h3>Sharing of Data</h3>

        <p>We don't share your personal information with third parties. Aggregated, anonymized data is periodically transmitted to external services to help us improve the Website and service.</p>

        <p>We may allow third parties to provide analytics services. These third parties may use cookies, web beacons and other technologies to collect information about your use of the services and other websites, including your IP address, web browser, pages viewed, time spent on pages, links clicked and conversion information.</p>

        <p>We also use social buttons provided by services like Twitter, Google+, LinkedIn and Facebook. Your use of these third party services is entirely optional. We are not responsible for the privacy policies and/or practices of these third party services, and you are responsible for reading and understanding those third party services' privacy policies.</p>

        <h3>Opt-Out, Communication Preferences</h3>

        <p>You may modify your communication preferences and/or opt-out from specific communications at any time. Please specify and adjust your preferences.</p>

        <h3>Security</h3>

        <p>We take reasonable steps to protect personally identifiable information from loss, misuse, and unauthorized access, disclosure, alteration, or destruction. But, you should keep in mind that no Internet transmission is ever completely secure or error-free. In particular, email sent to or from the Sites may not be secure.</p>

        <h3>About Children</h3>

        <p>The Website is not intended for children under the age of 13. We do not knowingly collect personally identifiable information via the Website from visitors in this age group.</p>

        <h3>Changes to the Privacy Policy</h3>

        <p>We may amend this Privacy Policy from time to time. Use of information we collect now is subject to the Privacy Policy in effect at the time such information is used.</p>

        <p>If we make major changes in the way we collect or use information, we will notify you by posting an announcement on the Website or sending you an email.</p>
    </div>
    </section>
    <?php include_once "includes/footer.php"; ?>

    <!--Modal-->
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

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
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