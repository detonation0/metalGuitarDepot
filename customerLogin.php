<!DOCTYPE html>

<!-- ** Comment Box ** --> 
<!--    Mathew Ruff	   -->
<!--   CIS-425/71091   -->
<!-- customerLogin.php Project-->
<!-- ***************** -->

<?php
	// Start a PHP session
	session_start();
	
	// Check to see if user is already logged in
	if (isset($_SESSION["name"]))
	{
		header('Location: customerWelcome.php');
		exit;
	}
?>


<html lang="en">
  	
  <head>
    <!-- Meta tags -->
	<meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8" />

	<!-- Stylesheet -->
	<link type="text/css" rel="stylesheet" href="projectstylesheet.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" >
	$(document).ready(function()
	{

	$(".account").click(function()
	{
	var X=$(this).attr('id');
	if(X==1)
	{
	$(".submenu").hide();
	$(this).attr('id', '0'); 
	}
	else
	{
	$(".submenu").show();
	$(this).attr('id', '1');
	}

	});

	//Mouse click on sub menu
	$(".submenu").mouseup(function()
	{
	return false
	});

	//Mouse click on my account link
	$(".account").mouseup(function()
	{
	return false
	});


	//Document Click
	$(document).mouseup(function()
	{
	$(".submenu").hide();
	$(".account").attr('id', '');
	});
	});
	</script>
	
    <!-- Web Page Title -->
    <title>MGD - Login</title>
	<link rel="shortcut icon" href="images/guitar.ico">


  </head>

  <body>
   <div style="min-width: 960px; margin: 0 auto;">
	<div id="header">
<div id="headericon"><img src="images/guitar.ico" width="50px" height="50px" /></div>
		<div id="headertitle"><h4>METAL GUITAR DEPOT</h4></div>	
	
	<div id="navigation">
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="guitars.php">Guitars</a>
				<ul>
					<li><a href="acoustics.php">Acoustic</a></li>
					<li><a href="electrics.php">Electric</a></li>
				</ul>
			</li>
			<li><a href="accessories.php">Accessories</a>
				<ul>
					<li><a href="stringscables.php">Strings and Cables</a></li>
					<li><a href="hardware.php">Hardware</a></li>
				</ul>
			</li>
			<li><a href="aboutus.php">About us</a></li>
		</ul>
	</nav>
		
	</div>
	<div class="dropdown">
		<a class="account" >
			<?php
				if (!isset($_SESSION["name"]))
				{
					echo
					"<a href='customerLogin.php'>My Account</a>";
				}
				else
				{
					echo
					"<font color='gray'>Hello ".$_SESSION['name']."!</font>";
				}
			?>
		</a>
		<div class="submenu">
			<ul class="root">
			<li ><a href="mycart.php">My Cart</a></li>
			<li ><a href="customerLogin.php" >Log in</a></li>
			<li ><a href="logout.php" >Log out</a></li>
			</ul>
		</div>

		</div>	
	
	
	</div>
	
	<!-- Main Body Content -->
	<div id="main">
		
		<!-- action is what the form is going to do once it's submitted -->
		<form id="form" action="checkLogin.php" method="post">
		
			<?php
				// Check return codes from checkLogin.php
				if ($_GET["lerror"] == 1)
				{
					echo '<p class="loginerror">User Name not found!</p>';
				}
				
				if ($_GET["lerror"] == 2)
				{
					echo '<p class="loginerror">Invalid Password!</p>';
				}
				
				if ($_GET["lerror"] == 3)
				{
					echo '<p class="loginerror">Returned...</p>';
				}	
			?>
			<p>Welcome, please enter your information below to login. <br />Not a member? <a href="signup.php">Sign up.</a></p>
			<p>
				<!-- User Name -->
				<label for="username">User Name:</label>
				<input type="text" id="username" name="username" value="" 
				required autofocus placeholder="Enter Username" title="User Name: 4-15 chars, u/l case, and ?.!@#$%^*-_() only!"
				pattern="[a-zA-Z0-9?.!@#$%^*-_()]{4,15}" />
				<br />
				
				<!-- Password -->
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" value="" 
				required placeholder="Enter Password" title="Password: 5-15 chars, u/l, numbers and ?.!@#$%^*-_() only!"
				pattern="[a-zA-Z0-9?.!@#$%^*-_()]{5,15}" />
				<br />
			</p>
			
			<p class="submit">
			<!-- Submit Button -->
			<input type="submit" value=" Log me in! " />
			
			<!-- Reset Button -->
			<span class ="reset">
				<input type="reset" value=" Clear Form! "
					onclick="history.go(0)" />
			</span>
			</p>
			
		
		</form>
	<div id="trending">
		<div id="moduleheader"><h2>Trending</h2></div>
		<img src="images/ibanez.gif" width="120px" height="90px" />
			</br>
			<img src="images/jacksonlogo.gif" width="120px" height="50px" />
			</br>
			</br>
			<img src="images/bc_rich_logo.jpg" width="120px" height="50px" />
			</br>
			</br>
			</br>
	</div>
	</div>
	
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="right:0px; top:150px;">
	<a class="addthis_button_preferred_1"></a>
	<a class="addthis_button_preferred_2"></a>
	<a class="addthis_button_preferred_3"></a>
	<a class="addthis_button_preferred_4"></a>
	<a class="addthis_button_compact"></a>
	</div>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50be6d6809364797"></script>
	<!-- AddThis Button END -->
	
	
	<br />
	<br />
	
	<div id="footer">
	<table id="footertable" cellspacing="8">
		<tr>
			<td><a href="home.php">Home</a></td>
			<td><a href="aboutus.php">About us</a></td>
			<td><a href="electrics.php">Electric Guitars</a></td>
			<td><a href="guitars.php">All Guitars</a></td>
		</tr>
		<tr>
			<td><a href="signup.php">Sign up</a></td>	
			<td><a href="contactus.php">Contact us</a></td>			
			<td><a href="acoustics.php">Acoustic Guitars</a></td>
			<td>&copy; Mathew Ruff 2012</td>
		</tr>
	</table>	
	</div>
	</div>
  </body>

</html>