<?php

	include('../config.php');

	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	$result = login($username,$password,$con);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		// header("Location: ../pages/dashboard.php");
	}else{
		echo 'false';
	}


function login($un, $pw,$con) {

	$pw = md5($pw);
	$result = mysqli_query($con, "SELECT * FROM users WHERE username='$un' AND pwd='$pw'");
	if(mysqli_num_rows($result)) {
		return true;
	}
	else {
		return false;
	}

}
?>