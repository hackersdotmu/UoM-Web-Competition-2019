<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "demo");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image) VALUES ('$image')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images WHERE id=48");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student and Employee Website</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link  href="profile.css" rel="stylesheet" type="text/css">
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
    	<a href="profile.php" style="color: inherit;float: right;">Profile</a>
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
  <div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="profile.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    
      <input type="file" name="image">
    
    
    
      <button type="submit" name="upload">POST</button>
    
  </form>


</div>


  <form action="profile.php" method="post">
  <div class="row">
	  
	  
		  <div class="column" style="background-color:#aaa;">
		  <div class="hcol"><h2>Personal Details</h2></div>
			<div>
				
					<label for="fname">First Name</label>
					<input  type="text" id="fname" name="fname" placeholder="Your name..">
					
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lname" placeholder="Your last name..">
					
					<label for="lname">Address</label>
					<input type="text" style="height: 150px;" id="lname" name="address" placeholder="Your last name..">
					<label for="lname">Telephone Number</label>
					<input type="text" id="lname" name="telnum" placeholder="Your last name..">

					<label for="lname">Mobile Phone Number</label>
					<input type="text" id="lname" name="mobnum" placeholder="Your last name..">

					<label for="lname">Mobile Phone Number</label>
					<input type="text" id="lname" name="mobnum" placeholder="Your last name..">

					<select name="fieldofstudy">
					  <option value="Engineering">Engineering</option>
					  <option value="Law">Law</option>
					  <option value="Medicine">Medicine</option>
					  <option value="Hospitality">Hospitality</option>
					  <option value="Finance">Finance</option>
					  <option value="Accounting">Accounting</option>
					</select>


					<label for="country">Email address</label>
					<input type="email" id="lname" name="email" placeholder="Email@gmail.com">

					
				  
				</div>
			  
			  
		  </div>
		  
		  
		  <div class="column" style="background-color:#bbb;">
		  <div class="hcol">
		    <h2>Accademic Details</h2></div>
			<div>
					<label for="fname">1. Education</label>
					<input type="text" id="fname" name="edu1name" placeholder="Tertiary institution">
					
					<label for="lname">Course Name</label>
					<input type="text" id="lname" name="edu1course" placeholder="Course Name">
					Details
					<input type="text" style="height: 150px;" id="lname" name="edu1detail" placeholder="Details">
					<label for="fname">2. Education</label>
					<input type="text" id="fname" name="edu2name" placeholder="Tertiary institution">
					
					<label for="lname">Course Name</label>
					<input type="text" id="lname" name="edu2course" placeholder="Course Name">
					Details
					<input type="text" style="height: 150px;" id="lname" name="edu2detail" placeholder="Details">

					
			</div>
		  </div>
		  
		  
		  <div class="column" style="background-color:#ccc;">
		  <div class="hcol">
		    <h2>Career Details</h2></div>
			<div>
					<label for="fname">1. Company name</label>
					<input type="text" id="fname" name="comp1name" placeholder="Company name">

					<label for="lname">Job Post</label>
					<input type="text" id="lname" name="comp1post" placeholder="Occupied seat">
					
					<label for="lname">Details and achievements</label>
					<input type="text" style="height: 150px;" id="lname" name="comp1detail" placeholder="Achievements">
					
					<label for="fname">1. Company name</label>
					<input type="text" id="fname" name="comp2name" placeholder="Company name">

					<label for="lname">Job Post</label>
					<input type="text" id="lname" name="comp2post" placeholder="Occupied seat">
					
					<label for="lname">Details and achievements</label>
					<input type="text" style="height: 150px;" id="lname" name="comp2detail" placeholder="Achievements">

					
				</div>
		  </div>
		  
		  <br><br>
		  <input type="submit"  name="save" value="Submit">
		  
</div>
  
</form>
  
  <?php

//connect to db
$db = mysqli_connect('localhost', 'root', '', 'demo');


if (isset($_POST['save'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $telnum = mysqli_real_escape_string($db, $_POST['telnum']);
  $fieldofstudy = mysqli_real_escape_string($db, $_POST['fieldofstudy']);
  $mobnum = mysqli_real_escape_string($db, $_POST['mobnum']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $edu1name = mysqli_real_escape_string($db, $_POST['edu1name']);
  $edu1course = mysqli_real_escape_string($db, $_POST['edu1course']);
  $edu1detail = mysqli_real_escape_string($db, $_POST['edu1detail']);
  $edu2name = mysqli_real_escape_string($db, $_POST['edu2name']);
  $edu2course = mysqli_real_escape_string($db, $_POST['edu2course']);
  $edu2detail = mysqli_real_escape_string($db, $_POST['edu1detail']);
  $comp1name = mysqli_real_escape_string($db, $_POST['comp1name']);
  $comp1post = mysqli_real_escape_string($db, $_POST['comp1post']);
  $comp1detail = mysqli_real_escape_string($db, $_POST['comp1detail']);
  $comp2name = mysqli_real_escape_string($db, $_POST['comp2name']);
  $comp2post = mysqli_real_escape_string($db, $_POST['comp2post']);
  $comp2detail = mysqli_real_escape_string($db, $_POST['comp2detail']);

  //insert into db
  $query = "INSERT INTO profile(id,fname, lname, address, telnum, fieldofstudy, mobnum, email, edu1name, edu1course, edu1detail, edu2name, edu2course, edu2detail, comp1name, comp1post, comp1detail, comp2name, comp2post, comp2detail) VALUES ('','$fname','$lname','$address','$telnum','$fieldofstudy','$mobnum','$email','$edu1name','$edu2course','$edu1detail','$edu2name','$edu2course','$edu2detail','$comp1name','$$comp1post','$comp1detail','$comp2name','$$comp2post','$comp2detail')";
    mysqli_query($db, $query);
  }
?>
  
  
  
  <br><br>
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
