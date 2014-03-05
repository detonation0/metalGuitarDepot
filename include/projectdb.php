<?php
	//Project Database Connection Functions:
	
	// SQL Connection Variables LocalHost
	$host = 'localhost';
	$user = 'root';
	$pw	  =	'';
	$db   =	'hmwk2127'; 
	
	/*// Class server Connection Variables
	$host = 'localhost'; // Stays the same
	$user = 'meruff';	// ASURite user id
	$pw	  =	'kalena1';  // Your PHPMyAdmin password (cis425)
	$db   =	'meruff';  // Your ASURite user idf */
	
	$dbc = mysqli_connect($host,$user,$pw,$db)
		or die('Unable to connect! Process aborted...');
	
	// Begin Session
	session_start();
?>