<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "nexus";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
session_start();
if (isset($_POST['email']) and isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE email='$email' and pass_word='$password'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['email'] = $email;
echo "<script type='text/javascript'>alert('Wrong Username or Password');
window.location='page1.php';
</script>";
if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    header("Location: feed.html");
    }
}else{
    echo '<script type="text/javascript">
    window.onload = function () { alert("INVALID EMAIL OR PASSWORD."); }
</script>';
$conn->close();
}
}

?>