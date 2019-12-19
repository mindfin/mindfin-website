<?php
	ob_start();
	include_once "../config/constant.php";
	include_once "../config/db_connection.php";
	
	$admin_id = $_SESSION['idcustomer'];
	
	session_destroy();
	session_unset();	
	header('Location:../subvendor_login.php?auth=signout');
?>