<?php
$email = $_POST['email'];
$to = "$email";
$subject = "Metal Guitar Depot Newsletter";
$message = "Hello! Thank you for registering for our newletter!";
$from = "noreply@mgd.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>