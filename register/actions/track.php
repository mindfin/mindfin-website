<?php 
ob_start();
	include_once "../config/db_connection.php";
	include_once "../library/form.php";
	date_default_timezone_set('Asia/Calcutta');
	
	$feature=$_GET['g'];
	
	switch($feature){	
		case 'add_customer':addCustomer(); break;		
	}
	
	function addCustomer(){
		$applieddate = date('Y-m-d');
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$dob = $_REQUEST['dob'];
		$gender = $_REQUEST['gender'];
		$mobile = $_REQUEST['mobile'];
		$altmobile = $_REQUEST['altmobile'];
		$address = $_REQUEST['address'];
		$emptype = $_REQUEST['emptype'];
		$cname = $_REQUEST['cname'];
		$designation = $_REQUEST['designation'];
		$loanpurpose = $_REQUEST['loanpurpose'];
		$salary = $_REQUEST['salary'];
		$status = 'active';
		
		
		$InsertCustomerFormObj = new Website();
		// $result = $InsertCustomerFormObj->InsertCustomerForm($name,$email,$dob,$gender,$mobile,$altmobile,$address,$emptype,$cname,$designation,$loanpurpose,$salary,$status,$applieddate);
		// $idcustomer	 = mysql_insert_id();
		
		$phone_no="";
// 		$z = count($_REQUEST['idloantype']);
// 		for ($i=0; $i <$z ; $i++) { 
			
// 			$optionArray = $_REQUEST['idloantype'];	
// 			$idloantype.= $optionArray[$i];
			
// 			$optionArray = $_REQUEST['loanamount'];	
// 			$loanamount.= $optionArray[$i];
			
// 			$optionArray = $_REQUEST['idbank'];	
// 			$idbank.= $optionArray[$i]; 
			
// 			$InsertPreviousBankDetailsObj = new Website();
// 			$resultfrendnumber = $InsertPreviousBankDetailsObj->InsertPreviousBankDetails($idcustomer,$idloantype,$loanamount,$idbank);
// 		}
		
		

// 		 if($result!=0){
// 				header('Location:../index.php?auth=success');
// 				exit;
// 				} else {
// 				header('Location:../index.php?auth=fail');
// 				exit;
// 			}
				
	}

	?>