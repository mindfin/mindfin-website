<?php
ob_start();
include_once "../config/db_connection.php";
include_once "../config/constant.php";
include_once "../library/form.php";
include_once "function.php";
date_default_timezone_set('Asia/Calcutta');

$feature = $_GET['f'];

switch ($feature) {
		// case 'sub_vendor_login':subVendorLoginValidation(); break;
	case 'customeradd':
		customeradd();
		break;
	case 'track':
		trackCustomerDetails();
		break;
	case 'career':
		addcareer();
		break;
	case 'contact':
		addcontact();
		break;
	case 'callback':
		addcallback();
		break;
}

// function subVendorLoginValidation(){

// 	$username = $_REQUEST['username'];
// 	$password = sha1($_REQUEST['password']);

// 	$subvendorLoginValidationObj = new Website();
// 	$res = $subvendorLoginValidationObj->subvendorLoginValidation($username, $password);

// 	if(count($res)!=0){

// 		$_SESSION['idcustomer'] = $res[0]['idcustomer'];
// 		$_SESSION['name'] = $res[0]['name'];
// 		$_SESSION['msg_succ'] = 'Successfully Logged In.';
// 		header('Location:../subvendor_form.php');
// 		exit;
// 	} else {
// 		$_SESSION['msg_err'] = 'Invalid User Name Or Password';
// 		header('Location:../subvendor_login.php');
// 		exit;
// 	}		
// }

// function addCustomer()
// {
// 	$applieddate = date('Y-m-d');
// 	$name = $_REQUEST['name'];
// 	$cemail = $_REQUEST['cemail'];
// 	$pemail = $_REQUEST['pemail'];
// 	$dob = $_REQUEST['dob'];
// 	$gender = $_REQUEST['gender'];
// 	$mobile = $_REQUEST['mobile'];
// 	$altmobile = $_REQUEST['altmobile'];
// 	$address = $_REQUEST['address'];
// 	$emptype = $_REQUEST['emptype'];
// 	$cname = $_REQUEST['cname'];
// 	$designation = $_REQUEST['designation'];
// 	$salary = $_REQUEST['salary'];
// 	$loan_amount = $_REQUEST['loan_amount'];
// 	$loanpurpose = $_REQUEST['loanpurpose'];

// 	$con = mysqli_connect('localhost', 'root', 'mindfin@098', 'mindfin');
// 	$list = array();
// 	$sql = "INSERT INTO `customer`(`name`, `mobile`,`email`, `dob`, `altmobile`, `address`, `gender`, `emptype`, `cname`, `designation`, `applytype`, `salary`, `status`,`displaystatus`,`applieddate`,`source`,`cemail`,`amount`)
// 					VALUES('$name','$mobile','$pemail','$dob','$altmobile','$address','$gender','$emptype','$cname','$designation','$loanpurpose',
// 					'$salary','PENDING','PENDING','$applieddate','WEBSITE','$cemail','$loan_amount')";
// 	$result = mysqli_query($con, $sql);
// 	if ($result) {
// 		header("Location:/index.php?auth=success");
// 		die();
// 	} else {
// 		header("Location:/index.php?auth=fail");
// 		die();
// 	}
// 	mysqli_close($con);
// 	// return $result
// 	// $InsertCustomerFormObj = new Website();
// 	// $result = $InsertCustomerFormObj->InsertCustomerForm($name,$cemail,$pemail,$dob,$gender,$mobile,$altmobile,$address,$emptype,$cname,$designation,$salary,$loan_amount,$loanpurpose,$applieddate);
// 	// if($result!=0){

// 	// 	header("Location:/index.php?auth=success");
// 	// 	die();
// 	// 	} else {

// 	// 	header("Location:/index.php?auth=fail");
// 	// 	die();
// 	// }

// }
function customeradd()
{
	$applieddate = date('Y-m-d');
	$name = $_REQUEST['name'];
	$mobile = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$dob = $_REQUEST['dob'];
	$panno = $_REQUEST['panno'];
	$pincode = $_REQUEST['pincode'];
	$loanpurpose = $_REQUEST['loanpurpose'];
	$cname = $_REQUEST['cname'];
	$loan_amount = $_REQUEST['loan_amount'];

	$InsertCustomerObj = new Website();
	$result = $InsertCustomerObj->customeraddForm($applieddate, $name, $mobile, $email, $dob, $panno, $pincode, $loanpurpose, $cname, $loan_amount);
	if ($result != 0) {
		header("Location:/index.php?auth=success");
		die();
	} else {

		header("Location:/index.php?auth=fail");
		die();
	}
}
function addcareer()
{
	$applieddate = date('Y-m-d');
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$mobile = $_REQUEST['mobile'];
	$experience = $_REQUEST['experience'];
	$position = $_REQUEST['position'];

	$age = $_REQUEST['age'];


	$InsertwebsitcareerFormObj = new Website();
	$result = $InsertwebsitcareerFormObj->InsertcareerForm($name, $email, $gender, $mobile, $applieddate, $experience, $position, $age);
	if ($result != 0) {
		header("Location:/index.php?auth=success");
		die();
	} else {

		header("Location:/index.php?auth=fail");
		die();
	}
}
function addcontact()
{
	$applieddate = date('Y-m-d');
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];
	$message = $_REQUEST['msg'];

	$InsertContactFormObj = new Website();
	$result = $InsertContactFormObj->InsertcontactForm(
		$name,
		$email,
		$message,
		$mobile,
		$applieddate
	);
	if ($result != 0) {
		header("Location:/index.php?auth=success");
		die();
	} else {
		header("Location:/index.php?auth=fail");
		die();
	}
}
function addcallback()
{
	$applieddate = date('Y-m-d');
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];

	$InsertCallbackFormObj = new Website();
	$result = $InsertCallbackFormObj->InsertcallbackForm($name, $email, $mobile, $applieddate);
	if ($result != 0) {
		header("Location:/index.php?auth=success");
		die();
	} else {
		header("Location:/index.php?auth=fail");
		die();
	}
}
function trackCustomerDetails()
{

	$track_no = $_REQUEST['track_no'];
	$track_no_en = encrypt($track_no);
	header("Location:/track/index.php?trackid=$track_no_en");
	exit;
}
