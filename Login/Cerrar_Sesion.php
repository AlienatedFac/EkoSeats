<?php
session_start();
$varsesion = $_SESSION['u'];

if($varsesion == null || $varsesion = "")
{
	echo "No permissions available";
	die();
}
session_destroy();
header("location:Login.html");
?>