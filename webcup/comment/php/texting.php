<?php
$con = mysqli_connect("localhost","root","","demo");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  	echo "connected <br>"; 
  	$result = mysqli_query($con,"SELECT * FROM `parents`");
  	while ($row = $result->fetch_assoc()) {
    echo $row['id'].$row['user'].$row['text']."<br>";
}
  }
?>