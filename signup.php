<?php
$email = $_POST['email'];
$password = $_POST['password'];
$passwordr = $_POST['password-repeat'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "nexus";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
} else {
    if ($_POST['password']!= $_POST['password-repeat'])
    {
        echo '<script type="text/javascript">
                window.onload = function () { alert("PASSWORD DID NOT MATCH. TRY AGAIN."); }
            </script>';
    } else {
        $insert = "INSERT INTO user(email, pass_word) 
        values ('$email', '$password')";
        if ($conn->query($insert)){
            echo '<script type="text/javascript">
                window.onload = function () { alert("SUCCESFULLY CREATED AN ACCOUNT. GET INTO LOGIN PAGE TO LOGIN."); }
            </script>';
        } else{
            echo '<script type="text/javascript">
                window.onload = function () { alert("CONNECTION ERROR."); }
            </script>';
        }
        $conn->close();
    }
}
?>