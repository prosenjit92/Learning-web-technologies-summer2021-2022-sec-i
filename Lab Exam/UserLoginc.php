<?php 
	session_start();

	$userId = $_REQUEST['userId'];
	$password = $_REQUEST['password'];
	
	

	if ($userId== null || $password == null) {
		echo "invalid username/password<br>";
	}



?>