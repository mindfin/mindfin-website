<?php
    include_once "../register/config/db_connection.php";
	include_once "../register/library/form.php";
	include_once "function.php";
    $trackid=decrypt($_REQUEST['trackid']);
    
    $fetchtrackinginfoobj = new Website();
    $result = $fetchtrackinginfoobj->fetchtrackinginfo($trackid);
    
?>
<!doctype html>
<html>
<head>
<title>Track Your Loan Status</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shipment Track Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image: url('backgroundimage.jpg'); height: auto;">

<div class="header">
	<h1 style="color:#000;">Tracking Status</h1>
</div>

<div class="content">
	<div class="content1">
		<h2>Tracking ID: <?php echo $result[0]['autoid'];?></h2>
	</div>
	<div class="content2">
		<div class="content2-header1">
			<p>Customer Name : <?php echo $result[0]['name'];?><span></span></p>
		</div>
		<div class="content2-header1">
			<p>Mobile No : <?php echo $result[0]['mobile'];?><span></span></p>
		</div>
		<div class="content2-header1">
			<p>Loan Type: <?php echo $result[0]['loantype'];?><span></span></p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="content3">



<?php if($result[0]['status']=='disburse'){?>
        <div class="shipment">
			<div class="confirm">
                <div class="imgcircle">
                    <img src="images/confirm.png" alt="LOGIN">
            	</div>
				<span class="line"></span>
				<p>LOGIN</p>
			</div>
			<div class="process">
           	 	<div class="imgcircle">
                	<img src="images/delivery.png" alt="PD">
            	</div>
				<span class="line"></span>
				<p>PD</p>
			</div>
			<div class="process">
				<div class="imgcircle">
                	<img src="images/check.jpg" alt="quality">
            	</div>
				<span class="line"></span>
				<p>APPROVED</p>
			</div>
		
			<div class="quality">
				<div class="imgcircle">
                	<img src="images/disburse.jpg" alt="DISBURSED">
				</div>
				<p>DISBURSED</p>
			</div>
			<div class="clear"></div>
		</div>


<?php }elseif( $result[0]['status'] =='login'){?>
		<div class="shipment">
				<div class="confirm">
					<div class="imgcircle">
						<img src="images/confirm.png" alt="LOGIN">
					</div>
					<span class="line"></span>
					<p>LOGIN</p>
				</div>
				<div class="dispatch">
						<div class="imgcircle">
						<img src="images/delivery.png" alt="PD">
					</div>
					<span class="line"></span>
					<p>PD</p>
				</div>
				<div class="dispatch">
					<div class="imgcircle">
						<img src="images/check.jpg" alt="quality">
					</div>
					<span class="line"></span>
					<p>APPROVED</p>
				</div>
			
				<div class="dispatch">
					<div class="imgcircle">
						<img src="images/disburse.jpg" alt="DISBURSED">
					</div>
					<p>DISBURSED</p>
				</div>
				<div class="clear"></div>
			</div>

			<?php }elseif( $result[0]['status'] =='pd'){?>

			<div class="shipment">
					<div class="confirm">
						<div class="imgcircle">
							<img src="images/confirm.png" alt="LOGIN">
						</div>
						<span class="line"></span>
						<p>LOGIN</p>
					</div>
					<div class="process">
							<div class="imgcircle">
							<img src="images/delivery.png" alt="PD">
						</div>
						<span class="line"></span>
						<p>PD</p>
					</div>
					<div class="dispatch">
						<div class="imgcircle">
							<img src="images/check.jpg" alt="quality">
						</div>
						<span class="line"></span>
						<p>APPROVED</p>
					</div>
					<div class="dispatch">
						<div class="imgcircle">
							<img src="images/disburse.jpg" alt="DISBURSED">
						</div>
						<p>DISBURSED</p>
					</div>
					<div class="clear"></div>
				</div>

				<?php }elseif($result[0]['status'] =='approve'){?>

				<div class="shipment">
						<div class="confirm">
							<div class="imgcircle">
								<img src="images/confirm.png" alt="LOGIN">
							</div>
							<span class="line"></span>
							<p>LOGIN</p>
						</div>
						<div class="process">
								<div class="imgcircle">
								<img src="images/delivery.png" alt="PD">
							</div>
							<span class="line"></span>
							<p>PD</p>
						</div>
						<div class="process">
							<div class="imgcircle">
								<img src="images/check.jpg" alt="quality">
							</div>
							<span class="line"></span>
							<p>APPROVED</p>
						</div>
						<div class="dispatch">
							<div class="imgcircle">
								<img src="images/disburse.jpg" alt="DISBURSED">
							</div>
							<p>DISBURSED</p>
						</div>
						<div class="clear"></div>
					</div>
	

<?php }else{?>

<div class="shipment">
		<!-- <div class="confirm"> -->
			<!-- <div class="imgcircle">
		<!--		<img src="images/confirm.png" alt="LOGIN">-->
		<!--	</div> -->
			<!-- <span class="line"></span> -->
		<!--	<h2>TRACKING ID IS INVALID</h2>-->
		<!-- </div> -->
	 <!--<div class="process">-->
		<!--		<div class="imgcircle">-->
		<!--		<img src="images/delivery.png" alt="PD">-->
		<!--	</div>-->
		<!--	<span class="line"></span>-->
		<!--	<p>PD</p>-->
		<!--</div>-->
		<!--<div class="process">-->
		<!--	<div class="imgcircle">-->
		<!--		<img src="images/check.jpg" alt="quality">-->
		<!--	</div>-->
		<!--	<span class="line"></span>-->
		<!--	<p>APPROVED</p>-->
		<!--</div> -->
		<!-- <div class="dispatch">-->
		<!--	<div class="imgcircle">-->
		<!--		<img src="images/delivery.png" alt="DISBURSED">-->
		<!--	</div>-->
		<!--	<p>DISBURSED</p>-->
		<!--</div> -->
		<center><h2>TRACKING ID IS INVALID</h2></center>
		<div class="clear"></div>
	</div>

<?php } ?>

	</div>
</div>

<div class="footer">
	<!-- <p>Copyright © Shipment Track Widget. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p> -->
</div>
</body>
</html>