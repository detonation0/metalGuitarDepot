<!DOCTYPE html>

<!-- ** Comment Box ** --> 
<!--    Mathew Ruff	   -->
<!--   CIS-425/71091   -->
<!--      Project      -->
<!--MetalHead Guitar Depot-->
<!-- ***************** -->

<?php
	session_start();
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
    <title>MGD - Home</title>
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
	
	<div id="start">
	<div id="moduleheader"><br /></div>
	<span align="left"><p>Metal Guitar Depot was founded in 2012 as a class project by a metal fan and guitar player of 9 years. The purpose of this website
		is to provided a place for the metal fan to get the gear they want without all of that other stuff that the competition throws in. </p></span>
		
	<span align="left"><p>We wanted a slim, less bulky website that was simple to use and provided the content that our users wanted. Hopefully we've hit
		the nail on the head and will continue to update in the future. Send us your comments and thanks for the support! </p></span>
	
	</br>
	</br>
	
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