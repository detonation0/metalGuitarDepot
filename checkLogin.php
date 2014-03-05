<?php

	// Import necessary globals and functions
	include("include/projectdb.php");
	
	//PHP variables for user-entered data
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	
	// Set up db connection
	$dbc = mysqli_connect($host,$user,$pw,$db)
		or die('Unable to connect! Process aborted...');
		
	// Build username query
	$query = "SELECT name FROM mgd_users WHERE username = '$uname'";
	
	// Run username query
	$result = mysqli_query($dbc,$query)
		or die('Unable to read from db (un)! Process aborted...');
		
	// Check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: customerLogin.php?lerror=1');
		exit;
	}
	
	// If we got here, we can verify username.
	
	// Build password query
	$query = "SELECT * FROM mgd_users WHERE username = '$uname' AND password = '$pass'";
	
	// Run password query
	$result = mysqli_query($dbc,$query)
		or die('Unable to read from db (pw)! Process aborted...');
		
	// Check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: customerLogin.php?lerror=2');
		exit;
	}
	
	// If we got here, we can verify username and password. 
	
	// Close the db connection
	mysqli_close($dbc);
	
	// Start a PHP session
	session_start();
	
	// Get and store our PHP session variable(s) also for showing product info from database
	$row = mysqli_fetch_array($result);
	$_SESSION['name'] = $row['name'];
	header('Location: customerWelcome.php');
	exit;	
	
	// Pass a '3' back to customerLogin.php for testing
	header('Location: customerLogin.php?lerror=3');
	exit;

?>