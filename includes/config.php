<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Indian/Mauritius");

	$con = mysqli_connect("localhost", "root", "", "portal");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>