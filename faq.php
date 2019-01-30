<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="topnav">
	  <a href="index.php">Home</a>
	  <a class="active" href="#">FAQ</a>
	  <a href="forum.php">Forum</a>
	  <a id="signin" style = "float:right;" href="login.php">Login/SignUp</a>
	  <a  class ="user_name" id="user_name" style = "float:right;"><?php echo $_SESSION['username']; ?></a>
	</div>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<script> 
			 var log = document.getElementById('signin');
			 log.innerHTML = "Log out";
			 log.href = "index.php?logout='1'";
			 log.style = "margin-left:0;float:right;background-color: red;";
			 var user_style = document.getElementById('user_name');
			 user_style.style = "float:right;background:0;color: white;font: bold;outline: 3px dashed white;outline-offset: -3px;";
			</script>
		<?php endif ?>
</div>
<div class="ques_cont">
</div>
<div class="ques">
<p>How much time will it take to get a response for my post?</p>
<p style="padding-left:20px;">  It depends on the number of users having knowledge in that field.</p>
<br>
<p>What to do if i forget my password?</p>
<p style="padding-left:20px;">Just give us the mail on which your account is registered and we will send you a link to reset your password.</p>
</div>
<div class="ques_cont" style="margin-top:400px;">
</div>
<div class="ques" style="margin-top:400px;">
<p>Contact:</p>
<p style="padding-left:20px;"><a target="_blank" href="https://fb.com/AKHlLESH.BOODHUN" style="color:white;">Akhilesh Boodhun</a></p>
<p style="padding-left:20px;"><a target="_blank" href="https://fb.com/hitasha.kisoon" style="color:white;">Hitasha Kisoon</p>
<p style="padding-left:20px;"><a target="_blank" href="https://fb.com/yadhav.kumar.98" style="color:white;">Yadhav Kumar Nundlall</p>
<p style="padding-left:20px;"><a target="_blank" href="https://fb.com/mohall.yogesh" style="color:white;">Yogeshdass Mohall</p>

</div>
		
</body>
</html>