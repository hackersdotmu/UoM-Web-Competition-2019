<?php

	//Opens up template to set up a connection and use database
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csacportal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "SELECT id, firstname, lastname FROM MyGuests";


	
	//Capture info. form text box
	$email = $_POST['member_email'];
	
	
	// $email = mysql_real_escape_string($email);
	// $password = mysql_real_escape_string($password);
	
	$query = "SELECT * FROM login WHERE email = '$email' ;";
	$result = mysqli_query($conn, $query) or die ("Failed to query database" . mysqli_connect_error());

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        if ($row['email'] == $email)
		{
			$pass=$row["password"];
			$email=$row["email"];
			$msg = "Please find attached your password".$pass;
			$msg = wordwrap($msg,70);
			mail($email,"Password Reset",$msg);
			
		}
		
		
	
    }
	
	
	
	}
				echo "Login failed !";


?>