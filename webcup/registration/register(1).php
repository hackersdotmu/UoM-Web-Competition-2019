<?php include('server.php') ?>
<?php include('process.php')?>
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
	
  <form method="post" action="register(1).php" name="register" id="registerform">
  	<?php include('errors.php'); ?>
  	
  	<table align="center" id="tableregister" cellspacing="10">
  	<div class="form-group">
  	<tr><td><div class="username" col-lg-12"><label for="username">Username</label></div></td><td>
  	<div class="username col-lg-12"><input type="text" class="form-control" name="username"  placeholder="Enter username" value="<?php echo $username; ?>">
  	</td></tr></div>
  	
  	
  	<div class="form-group">
  	<tr><td><div class="email" col-lg-12"><label for="email">Email</label></div></td><td>
  	<div class="email col-lg-12"><input type="email" class="form-control" name="email"  placeholder="Enter email" value="<?php echo $email; ?>">
  	</td></tr></div>
    
 	<div class="form-group">
  	<tr><td><div class="password" col-lg-12"><label for="password_1">Password</label></div></td><td>
  	<div class="password col-lg-12"><input type="password" class="form-control" name="password_1"  placeholder="Enter password">
  	</td></tr></div>
  	
  	<div class="form-group">
  	<tr><td><div class="password" col-lg-12"><label for="password_2">Confirm Password</label></div></td><td>
  	<div class="password col-lg-12"><input type="password" class="form-control" name="password_2"  placeholder="Confirm password">
  	</td></tr></div>
    
    <div class="form-group">
  	<tr><td><div class="firstName" col-lg-12"><label for="firstName">First Name</label></div></td><td>
  	<div class="firstName col-lg-12"><input type="firstName" class="form-control" name="firstName"  placeholder="Enter first name">
  	</td></tr></div>
    
     <div class="form-group">
  	<tr><td><div class="lastName" col-lg-12"><label for="lastName">Last Name</label></div></td><td>
  	<div class="lastName col-lg-12"><input type="lastName" class="form-control" name="lastName"  placeholder="Enter last name">
  	</td></tr></div>
  	
  	<div class="form-group">
	<tr><td>
	<div class="gender col-lg-12"><label for="gender">Gender </label></div></td><td>
	<div class="gender col-lg-12"><select class="form-control" name="gender" id="gender">
 	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Others">Others</option>
	</select></td></tr></div>
  	
  	<div class="form-group">
	<tr><td>
	<div class="fieldOfStudy col-lg-12"><label for="fieldOfStudy">Field of Study </label></div></td><td>
	<div class="fieldOfStudy col-lg-12"><select class="form-control" name="fieldOfStudy" id="fieldOfStudy">
	<option value="IT">IT</option>
		<option value="Engineering">Engineering</option>
		<option value="Medicine">Medicine</option>
		<option value="Finance">Finance</option>
		<option value="Law">Law</option>
		</select></td></tr></div>
  
  <div class="form-group">
	<tr><td>
	<div class="levelOfStudy col-lg-12"><label for="levelOfStudy">Level of Study </label></div></td><td>
	<div class="levelOfStudy col-lg-12"><select class="form-control" name="levelOfStudy" id="levelOfStudy">
	<option value="Diploma">Diploma</option>
		<option value="Undergraduate">Undergraduate</option>
		<option value="Postgraduate">Postgraduate</option>
		</select></td></tr></div>
  
  	
  	<div class="container">
<tr><td><input type="submit" class="btn btn-defaul" value="Register" name="reg_user" onsubmit="functionmessage()"/>
</td></tr></div>
  	
  	<!--<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"name="reg_user">Register</button>
      </div>
    </div>-->
  	<!--<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>-->
  	<div class="container">
  	<tr><td>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p></td></tr>
  	</div>
  	</table>
  </form>
</body>
</html>