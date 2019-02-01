<?php include('../config.php');
$user = $_SESSION['userLoggedIn'];

$result = mysqli_query($GLOBALS['con'], "SELECT * FROM inbox WHERE receiver = '$user' ORDER BY date");

$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

$arr = json_encode($rows);

echo $arr;
?>