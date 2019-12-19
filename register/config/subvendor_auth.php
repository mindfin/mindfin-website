<?php 
if((isset($_SESSION['idcustomer'])) && (isset($_SESSION['name']))) {} else { header('Location:https://'.$_SERVER["SERVER_NAME"].'/mindfin/subvendor/signout'); }
	// set timeout period in seconds
	$inactive = 6000;

// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
        { 
		// go to login page when idle
		header('Location:http://'.$_SERVER["SERVER_NAME"].'/mindfin/subvendor/signout');
	}
}
$_SESSION['timeout'] = time();
?>