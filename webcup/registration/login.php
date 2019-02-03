<?php include('server.php') ?> 

<!--//session_start();

/**if(isset($_POST['login_user'])){
$username=$_POST['username'];
$password=$_POST['password'];


$con = mysqli_connect("localhost", "root", "") or die("could not connect".mysql_error());
		//selecting database
		$db = mysqli_select_db($con,"registration") or die ("could not select database".mysql_error());
		
$query=mysqli_query($con,"SELECT * FROM users WHERE password='$password' AND username='$username'");
$rows=mysqli_num_rows($query);
if($rows==1){
$_SESSION['login']=$username;
header("location: index.php");
}else{
//echo"Username or password invalid";
}
mysqli_close($con);
}
?>
*/


/**if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }
$username="";
$password="";

if(isset($_POST['login_user'])&& $_POST['username']==$username && $_POST['password']==$password)
{
header("Location: index.php");
}
else{


-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap-combobox/css/bootstrap-combobox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  .bg{
  background-color:lightblue;
  width:500px;
  border-radius:15px;
  margin-top:100px;
  }
  
  </style>
</head>
<body>
<div class="container-fluid bg body" id="formlogin"> 
  <div class="header" align="center">
  	<h2>Login</h2>
  </div>
	

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	
  	<table align="center" id="tablelogin" >
  	<div class="form-group">
  	<tr><td><div class="username" col-lg-12"><label for="username">Username</label></div></td><td>
  	<div class="username col-lg-12"><input type="text" class="form-control" name="username"  placeholder="Enter username" value="<?php echo $username; ?>">
  	</td></tr></div>
  	
  		<div class="form-group">
  	<tr><td><div class="password" col-lg-12"><label for="password">Password</label></div></td><td>
  	<div class="password col-lg-12"><input type="text" class="form-control" name="password"  placeholder="Enter password" >
  	</td></tr></div>
  	
  	
  <!--	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>-->
  	</div>
  	<div class="container-fluid">
	<td><button type="submit" class="btn" name="login_user" id="login_user">Login</button></td></div>
  	
  	<!--<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>-->
  	<div class="form-group">
  	<tr><td>
  	<p>
  		Not yet a member? <a href="register(1).php">Sign up</a>
  	</p></tr></td>
  	</table>
  	</div>
  	
  </form></div>
</body>
</html>
