<?php

//logout.php Project

session_start();
session_unset();
session_destroy();
header('Location: customerLogin.php');

?>