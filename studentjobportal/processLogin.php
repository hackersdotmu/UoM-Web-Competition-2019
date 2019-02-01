.<?php
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
	$email = $_POST['login_username'];
	$password = $_POST['login_password'];
	
	// $email = mysql_real_escape_string($email);
	// $password = mysql_real_escape_string($password);
	
	$query = "SELECT * FROM registration WHERE email = '$email' AND Hash_Password = '$password';";
	$result = mysqli_query($conn, $query) or die ("Failed to query database" . mysqli_connect_error());

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        if ($row['email'] == $email && $row['password']=$password)
		{
			// Start the session
			session_start();
			
			$_SESSION['email']=$email;
			
			header("Location:index.php");
		}
		
		else
		{
			echo "Login failed !";
		}
    }
    
	}
	
	
?>