
<?php
session_start();

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student and Employee Website</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
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
       <a href="http://localhost/webcup/index.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Home</a>
        </li>
        
        <li><a href="http://localhost/webcup/memberseng.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Members</a></li>
        
       	<li> <div class="dropdown">
			  <button class="dropbtn">Statistics</button>
				  <div class="dropdown-content">
					<a href="http://localhost/webcup/statistics.php">Stats Department</a>
					<a href="http://localhost/webcup/statistics2.php">Stats Boys</a>
					<a href="http://localhost/webcup/statistics3.php">Stats Girls</a>
				  </div>
			</div> 
       </li>
		<li>
       <a href="http://localhost/webcup/comment/forum.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Project Forum</a>
        </li>
        
        
       
    	
        <li><a href="http://192.168.64.2/webcup/register/login.php" style="text-decoration: none;cursor:pointer; color: inherit;">Login/Register</a></li>
        
         <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: black;">Logout</a> </p>

    <?php endif ?>
    	
        	
    


       <!-- <li>
       <a href="register/login.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Login/Register</a>
        </li>-->

        <li>
       <a href="http://localhost/webcup/comment/forum.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Contact us</a>
        </li>
        
      </ul>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    
    <article class="left_article">
      <h3>WHO ARE WE ?</h3>
      <p style="color:#0e3470">Our mission is empowering employment. We are striving to organize all the world’s human capital data and make it meaningful for society.</p>
      <p style="color:#0e3470">Each day we help job seekers and companies connect, giving people a chance to find their calling and many employers a chance to find and hire top talent to help grow their business.</p>
    </article>
    
    <aside class="right_article"><img src="images/placeholder.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
 <!-- <div class="row">
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/bkg_06.jpg" alt="" class="thumbnail"/> </p>
      <h4>TITLE</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
  </div>
  <div >
    <h2 style="align-items: center; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'; background-color: #52bad5;padding: 15px;">Our Sponsor</h2>
  </div>-->
  <div class="social">
    <p class="social_icon"><img src="images/img1.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/img2.png" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/img3.png" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
  
  <br>
  <footer class="mainfooter">
      <br>
      <a href="https://www.facebook.com/Curepipe-Starlight-Sports-Club-105270796211751/" target="_blank"><img src="images/fblogo1.png" style="width: 40px;height: 40px;"></a> &nbsp;
      <a href=""><img src="images/instalogo1.png" style="width: 40px;height: 40px;"></a> <br> <br>
      <a id="homepage" href="../csscfrontpage.html">Homepage</a>
      <p><a id="homepage" href="#"> Webmaster</a>
      <br>
      40 Forget Lane | Off Stevenson Street | Les Casernes <br> Curepipe , Mauritius | Tel : (230) 670 43 63, E-Mail Address: cssc.admin@intnet.mu
      
      
      </p>
    </footer>
</div>
</body>
</html>
