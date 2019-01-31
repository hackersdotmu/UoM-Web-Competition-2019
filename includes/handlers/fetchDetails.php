<?php
include('../config.php');

$user = $_SESSION['userLoggedIn'];

$check =  mysqli_query($GLOBALS['con'], "SELECT fname,lname,mobile,email,current FROM users WHERE username = '$user';");
$row=mysqli_fetch_array($check,MYSQLI_ASSOC);

echo json_encode($row);