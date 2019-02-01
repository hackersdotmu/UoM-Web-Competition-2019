<?php
include('../config.php');

$message = $_POST['message'];
$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$title = $_POST['title'];
$date = date("Y/m/d");

$query = mysqli_query($GLOBALS['con'], "INSERT INTO inbox VALUES ('','$message','$sender','$receiver','$title','$date');");

if($query){
    echo 'success';
}else{
    echo 'error';
}