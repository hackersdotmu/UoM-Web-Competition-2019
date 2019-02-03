<?php include('server.php') ?>
<?php include('process.php')?>
<!DOCTYPE html>
<html>
<head>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table align="centre" >
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstName" id="firstName ">
  	</div>
  	
  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastName" id="lastName">
  	</div>
  	
  	<div class="input-group">
  	  <label>Gender</label>
  	  <select name="gender">
  	  <option value="Male">Male</option>
  	   <option value="Female">Female</option>
  	    <option value="Others">Others</option>
  	    </select>
  	    </div>
  	
  	<div class="input-group">
  	  <label>Field of Study</label>
  	  <select name="fieldOfStudy">
  	  	<option value="IT">IT</option>
		<option value="Engineering">Engineering</option>
		<option value="Medicine">Medicine</option>
		<option value="Finance">Finance</option>
		<option value="Law">Law</option>
		</select>
  	</div>
  	
  	<div class="input-group">
  	  <label>Level of Study</label>
  	  <select name="levelOfStudy">
  	  	<option value="Diploma">Diploma</option>
		<option value="Undergraduate">Undergraduate</option>
		<option value="Postgraduate">Postgraduate</option>
		
		</select>
  	</div>
  	
  	</table>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>