<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student and Employee Website</title>
<link href="../css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> Student &amp; Employee Website</h1>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li>
       <a href="index.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Home</a>
        </li>
        
        <li><a href="memberseng.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Members</a></li>
        
        	<li> <div class="dropdown">
			  <button class="dropbtn">Statistics</button>
				  <div class="dropdown-content">
					<a href="statistics.php">Stats Department</a>
					<a href="statistics2.php">Stats Boys</a>
					<a href="statistics3.php">Stats Girls</a>
				  </div>
			</div> 
       </li>
    <li>
       <a href="comment/forum.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Project Forum</a>
        </li>
        
        
       
    	
        <li><a href="register/login.php" style="text-decoration: none;cursor:pointer; color: inherit;">Login/Register</a></li>
        

        <li>
       <a href="profile.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Profile</a>
        </li>
        
      </ul>
    </nav>
  </header>





<?php require_once 'php/connect.php'; require_once 'php/functions.php'; ?>
<!doctype html>
<html>
	<head>
		<title>Comment</title>
		<meta charset="UTF-8" lang="en-US">
		<link rel="stylesheet" href="style.css">
		<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script src="js/global.js"></script>
	</head>
	<body>
		<div class="page-container">
			<?php 
				get_total();
				require_once 'php/check_com.php';
			?>
			<form action="" method="post" class="main">
			  <label>Post your project</label>
				<textarea name="comment" class="primary_header" id="comment" placeholder="Write your contents here"></textarea>
				<br />
				<input type="submit" class="form-submit" name="new_comment" value="post">
			</form>
			<?php get_comments(); ?>
		</div>
	</body>
</html>

<br>
  <footer class="mainfooter">
      <br>
      <a href="https://www.facebook.com/Curepipe-Starlight-Sports-Club-105270796211751/" target="_blank"><img src="images/fblogo1.png" style="width: 40px;height: 40px;"></a> &nbsp;
      <a href=""><img src="images/instalogo1.png" style="width: 40px;height: 40px;"></a> <br> <br>
      <a id="homepage" href="../csscfrontpage.html">Homepage</a>
      <p><a id="homepage" href="#"> Webmaster</a>
      <br>
      University of Mauritius | Reduit | Mauritius <br> | Tel : (230) 52 25 25 25 , E-Mail Address: admin@myweb.uom.ac.mu
      
      
      </p>
    </footer>
</div>
</body>
</html>