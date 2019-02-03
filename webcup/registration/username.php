<?php

//connect to db
$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['save'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  //insert into db
  $query = "INSERT INTO username (username) 
  			  VALUES('$username')";
  	mysqli_query($db, $query);
  }
?>

<!DOCTYPE html>
<html>
<head>
<style>

</style>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap-combobox/css/bootstrap-combobox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="container-fluid bg body" id="formregister">
  <!--<div class="header">-->
  <div id="registertitle">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="username.php" name="username" id="usernameform">
  	
  	<table align="center" id="tableregister" cellspacing="10">
  	<div class="form-group">
  	<tr><td><div class="username" col-lg-12"><label for="username">Username</label></div></td><td>
  	<div class="username col-lg-12"><input type="text" class="form-control" name="username"  placeholder="Enter username" >
  	</td></tr></div>
  	
  	
  	
  	 	<div class="container">
<tr><td><input type="submit" class="btn btn-defaul" value="Register" name="save" />
</td></tr></div>
</form>
</table>
</body>
</html>