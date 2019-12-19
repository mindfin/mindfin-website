<?php
	header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
	header("Pragma: no-cache"); //HTTP 1.0
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	
	define('BASE_URL','http://'.$_SERVER["SERVER_NAME"].'/mindfin/subvendor/');
	date_default_timezone_set('Asia/Calcutta');
	session_start();
	
?>