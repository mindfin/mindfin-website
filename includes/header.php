<header>
  <div class="top-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <ul class="top-left-menu">
            <li>
              <img class="topbar-icon" src="./images/topbar-phone.jpg" alt="phone">
              <span><a href="tel:+919513040055" style="color:#2e66c1">+91 95130 40055</a></span>
            </li>
            <!-- <li>
              <img class="topbar-icon" src="./images/topbar-whatsapp.jpg" alt="phone">
              <span><a target="_blank" href="https://web.whatsapp.com/send?phone=+919513723355&amp;text=Hi, I would like to get more information.." style="color:#2e66c1">+91 95137 23355</a></span>
            </li> -->
            <li><img class="topbar-icon" src="./images/topbar-email.jpg" alt="email">
              <span><a href="mailto:info@mindfin.co.in" style="color:#2e66c1">info@mindfin.co.in</a></span></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="top-right-menu">
            <li>
              <a href="#" data-toggle="modal" data-target="#myModal">
                <img class="topbar-icon" src="./images/topbar-track-app.jpg" alt="phone">
                Track application
              </a>
            </li>
            <!-- <li>
               <a href="#">
                 <img class="topbar-icon" src="./images/credit-icon.png" alt="cibil">
                   Check Your Free Cibil
               </a>
             </li> -->
            <li><a href="comingsoon"><button class="login-btn">Subvendor Login</button></a></li>
            <li>
              <button class="side-menu">
                <img class="topbar-icon" src="./images/right-hamburger.png" alt="menu">
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="./images/mindfin-logo.png" alt="Mind Fin Logo"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "active" : ""); ?>"><a href="index.php">Home </a></li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/about-us.php" ? "active" : ""); ?>"><a href="about-us.php">About Us</a></li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/business_loan.php" ? "active" : ""); ?>"><a href="business_loan.php">Business Loans</a></li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/mortgages.php" ? "active" : ""); ?>"><a href="mortgages.php">Mortgages</a></li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/personal_loan.php" ? "active" : ""); ?>"><a href="personal_loan.php">Personal Loans</a></li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/other_loan.php" ? "active" : ""); ?>"><a href="other_loan.php"> Other Loans</a></li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/contact.php" ? "active" : ""); ?>"><a href="contact.php">Contact Us</a></li>
          <li class="apply-item "><a class="btn btn-default apply-btn" href="register" role="button">Apply Now</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
<div class="news-letter-wrapper3 blink ">
  <a target="_blank" title="Contact Us On WhatsApp" href="https://web.whatsapp.com/send?phone=+919513040055&amp;text=Hi, I would like to get more information.." class="whatsapplink hideweb" style="width:60px; height:60px;  border-radius: 50%;">
    <img class="topbar-icon1" src="./images/WhatsApp_Logo_2.png" alt="phone">
  </a>
</div>
<div class="news-letter-wrapper2 blink">
  <a target="_blank" title="Contact Us On WhatsApp" href="https://api.whatsapp.com/send?phone=+919513040055&text=Hi,%20I%20would%20like%20to%20get%20more%20information.." class="whatsapplink hideweb" style="width:60px; height:60px;  border-radius: 50%;">
    <img class="topbar-icon1 " src="./images/WhatsApp_Logo_2.png" alt="phone">
  </a>
</div>
<div class="news-letter-wrapper4">
  <a title="Call us" href="tel:+919513040055" class="whatsapplink hideweb" >
    <img class="topbar-icon1 " src="./images/call.png" alt="phone">
  </a>
</div>
<!-- contact form start -->
<div id="slider" style="right:-342px;z-index:9999;">
  <div id="sidebar" onclick="open_panel()">
    <p style="transform: rotate(90deg);padding-bottom: 0px;color: #fff;margin: 0px -10px;">Call Back</p>
  </div>
  <div id="header">
    <center>
      <h4 style="font-size:26px;">Call Back</h4>
    </center>
    <form id="slider_form" action="register/actions/form_action.php?f=callback" method="POST">
      <input type="text" name="name" class="former form-control" required placeholder="Name" autocomplete="off">
      <input type="email" name="email" class="former form-control" required placeholder="Email" autocomplete="off">
      <input type="number" name="mobile" class="former form-control" maxlength="15" required placeholder="Mobile" autocomplete="off">
      <center><button type="submit" class="button btn btn-small border-radius-4 btn-dark-gray">Send Message</button></center>
    </form>
  </div>
</div>
<!-- contact form end -->
<!-- social link form start -->
<div id="slider1" style="right:-342px;z-index:9999;">
  <div id="sidebar2" onclick="open_panel1()">
    <p style="transform: rotate(90deg);padding-bottom: 0px;color: #fff;margin: 0px -10px;">Follow Us</p>
  </div>
  <div id="header1">
    <ul class="footer-social-links" align="center">
      <li>
        <a target="_blank" class="facebook" href="https://www.facebook.com/mindfinser/" title="@mindfinser">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li>
        <a target="_blank" class="Linkdin" href="https://www.instagram.com/mindfin_ser_pvt_ltd/" title="@mindfin_ser_pvt_ltd">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a target="_blank" class="twitter" href="https://www.linkedin.com/company/mindfin/" title="@mindfin">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </li>
      <li>
        <a target="_blank" class="Google-plus" href="https://twitter.com/mindfinser" title="@mindfinser">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li>
        <a target="_blank" class="Youtube" href="https://www.youtube.com/channel/UCakZtPkEsR88sllkJqqs6Mw" title="@mindfinser">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- End Of Social LinkS -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5de76341d96992700fcaa727/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
<!-- contact form script started  -->
<script>
  function open_panel() {
    slideIt();
    var a = document.getElementById("sidebar");
    a.setAttribute("id", "sidebar1");
    a.setAttribute("onclick", "close_panel()");
  }

  function slideIt() {
    var slidingDiv = document.getElementById("slider");
    var stopPosition = 0;
    if (parseInt(slidingDiv.style.right) < stopPosition) {
      slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
      setTimeout(slideIt, 1);
    }
  }

  function close_panel() {
    slideIn();
    a = document.getElementById("sidebar1");
    a.setAttribute("id", "sidebar");
    a.setAttribute("onclick", "open_panel()");
  }

  function slideIn() {
    var slidingDiv = document.getElementById("slider");
    var stopPosition = -342;
    if (parseInt(slidingDiv.style.right) > stopPosition) {
      slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
      setTimeout(slideIn, 1);
    }
  }
</script>
<!-- contact form script end -->
<!-- Follow us On script started -->
<script>
  function open_panel1() {
    slideIt1();
    var a = document.getElementById("sidebar2");
    a.setAttribute("id", "sidebar3");
    a.setAttribute("onclick", "close_panel1()");
  }

  function slideIt1() {
    var slidingDiv = document.getElementById("slider1");
    var stopPosition = 0;
    if (parseInt(slidingDiv.style.right) < stopPosition) {
      slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
      setTimeout(slideIt1, 1);
    }
  }

  function close_panel1() {
    slideIn1();
    a = document.getElementById("sidebar3");
    a.setAttribute("id", "sidebar2");
    a.setAttribute("onclick", "open_panel1()");
  }

  function slideIn1() {
    var slidingDiv = document.getElementById("slider1");
    var stopPosition = -342;
    if (parseInt(slidingDiv.style.right) > stopPosition) {
      slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
      setTimeout(slideIn1, 1);
    }
  }
</script>
<!-- Follow us on script end -->