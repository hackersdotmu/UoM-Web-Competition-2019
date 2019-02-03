<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="/vendor/bootstrap-combobox/css/bootstrap-combobox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
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
  	  <input type="text" name="firstName" >
  	</div>
  	
  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastName" >
  	</div>
  	
  	

  	
  	
  	<div class="input-group ">
  	  <label>Gender</label><select name="gender"><option>Male</option>
  	  <option>Female</option>
  	  <option>Other</option>
  	  </select>
  	</div>
  	
  	
  	<div class="input-group">
  	  <label>Field of Study</label><select name="fieldOfStudy">
  	  <option>IT</option>
  	  <option>Engineering</option>
  	  <option>Medicine</option>
  	  <option>Law</option>
  	  <option>Finance</option>
  	  <option>Hospitality</option>
  	  
  	  </select>
  	</div>
  	
  	<div class="input-group">
  	  <label>Course Name</label>
  	  <input type="text" name="coursename" >
  	</div>
  	
  	<div class="input-group">
  	  <label>Level of Study</label><select name="levelOfStudy">
  	  <option>Diploma</option>
  	  <option>Undergraduate</option>
  	   <option>Postgraduate</option>
  	  </select>
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>