<?php  
	error_reporting(E_ERROR | E_PARSE);
	$con = new mysqli("localhost","root","","kezabite_original");
	// keira123
	if($con->connect_errno){
		die('Sorry we have some problems with the Database! Try again later');
	} 
?>