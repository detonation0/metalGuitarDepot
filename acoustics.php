<!DOCTYPE html>

<!-- ** Comment Box ** --> 
<!--    Mathew Ruff	   -->
<!--   CIS-425/71091   -->
<!--      Project      -->
<!--MetalHead Guitar Depot Acoustic Guitars-->
<!-- ***************** -->


<?php
	// Import necessary globals and functions
	include("include/projectdb.php");
	//include("include/projectproductfunctions.php");
		
	/*if($_REQUEST['command'] == 'add' && $_REQUEST['productid'] > 0)
	{
		$product_id = $_REQUEST['productid'];
		add_to_cart($product-id, 1);
		header("Location:customercart.php");
		exit();
	}*/
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
	
	<script type="text/javascript">
		// This js is necessary to determine which button on the 
		// form the user clicked.
		function addtocart(prod_id)
		{
			document.productform.productid.value = prod_id;
			document.productform.command.value = 'add';
			document.productform.submit();
		}
	</script>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="ddpowerzoomer.js">

	/***********************************************
	* Image Power Zoomer- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
	* This notice MUST stay intact for legal use
	* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
	***********************************************/

	</script>

	<script type="text/javascript">

	jQuery(document).ready(function($){ //fire on DOM ready

		
		EXAMPLE 1:
		$('#shopping_img').addpowerzoom()
		/*
		EXAMPLE 2:
		$('img.vacation').addpowerzoom({
			defaultpower: 2,
			powerrange: [2,5],
			largeimage: null,
			magnifiersize: [100,100] //<--no comma following last option!
		})
		*/

	})

	</script>
	
    <!-- Web Page Title -->
    <title>MGD - Acoustic Guitars</title>
	<link rel="shortcut icon" href="images/guitar.ico" />
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
	
	<!--<div id="greeting">
		<?php
			echo "Hello" .$_SESSION['username'];
		?>
	</div>-->
	
	
<!-- Main Body Content -->
	
<div id="main">
	<form id="productform" action="">
		<input type="hidden" name="productid" />
		<input type="hidden" name="command" />			
		<table id="product_table">
			<?php
				$query = "SELECT * FROM mgd_acoustic";
				$result = mysqli_query($dbc,$query) or die("Error querying database");
				while($row = mysqli_fetch_array($result))
				{
					echo 
					'<tr>
					<td><img id="shopping_img" src="' . $row['image'] . '" /></td>
					<td><p><strong>' . $row['name'] . '</strong></p>
					<p>' . $row['description'] . '</p>
					<p>Price:<strong> &#36;' . $row['price'] . '</strong></p>
					</td>
					<td><input type="button" value="Add to Cart" onclick="addtocart(' . $row['id'] . ')" />
					</td>
					</tr>';
				}
			?>
		</table>	
	</form>
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