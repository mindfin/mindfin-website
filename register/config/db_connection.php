<?php
	

	$dbhost = 'localhost';
	$dbname ='mindfin'; 
	$dbuser ='root'; 
	$dbpass ='mindfin@098';

	// $dbhost = 'localhost';
	// $dbname ='mindfin'; 
	// $dbuser ='root'; 
	// $dbpass ='';

	// $dbhost = 'localhost';
	// $dbname ='id10851388_mindfin'; 
	// $dbuser ='id10851388_root'; 
	// $dbpass ='mindfin@098';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die(mysqli_connect_error());
	mysqli_select_db($con,$dbname) or die(mysqli_connect_error());
?>