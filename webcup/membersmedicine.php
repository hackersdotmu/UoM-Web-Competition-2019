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
    
    <nav class="secondary_header1" id="menu1">
      <ul>
        <ul>
        <li><a href="memberseng.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Engineering</a></li>
        <li><a href="memberslaw.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Law</a></li>
        <li><a href="membersmedicine.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Medicine</a></li>
        <li><a href="membershospitality.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Hospitality</a></li>
        <li><a href="membersfinance.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Finance</a></li>
        <li><a href="membersaccounting.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Accounting</a></li>
        
      </ul>
    </nav>
  </header>
<section id="boxesm" style="border-bottom: 5px solid #000000;" >
      <div class="containerm">
        <?php

$servername="localhost";
$username="root";
$password="";
$db="demo";

$conn= mysqli_connect($servername,$username,$password,$db);

if($conn->connect_error){
die("could not connect".$conn->connect_error);
}

//$db_select=mysqli_select_db($conn,"customer");
$sql="SELECT username,coursename FROM users WHERE fieldOfStudy ='Medicine'";
$result = $conn->query($sql);

if($result->num_rows>0){

  while($row=$result->fetch_assoc()){

//echo"<tr>";
//echo "<td>".$row["username"]."</td></tr><br>";

echo "  <div class='boxm'>
         <h1>".$row["username"]."</h1>
          <img src='images/profile.png'>
          <h3>".$row["coursename"]."</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
          <input type='submit' class='btn btn-defaul' value='Register' name='reg_user' onsubmit='functionmessage()'/>
        </div>";



}
echo "";
//echo"</table>";
}
else{
echo "0 result";
}

$conn->close();

?>
      </div>
    </section>
    
    
  
  
  
  
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
