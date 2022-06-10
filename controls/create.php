<?php
	
	include_once('config.php');

	$website = isset($_GET['website'])?$_GET['website']:"";
	$lading = isset($_GET['lading'])?$_GET['lading']:"";
	$maintenance = isset($_GET['maintenance'])?$_GET['maintenance']:"";

	$result = mysqli_query($connexao,"INSERT INTO nome(website)VALUES('$website')");
	$result = mysqli_query($connexao,"INSERT INTO nome2(lading)VALUES('$lading')");
	$result = mysqli_query($connexao,"INSERT INTO nome3(maintenance)VALUES('$maintenance')");

?>