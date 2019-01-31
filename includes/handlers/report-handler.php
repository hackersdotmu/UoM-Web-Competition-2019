<?php
include('../config.php');

$postId = $_POST['postId'];
$user = $_SESSION['userLoggedIn'];

$check =  mysqli_query($GLOBALS['con'], "SELECT * FROM reported WHERE user = '$user' AND pid = '$postId'");


if(mysqli_num_rows($check) > 0){
    echo 'error';
}else{
    $report = mysqli_query($GLOBALS['con'], "SELECT spam FROM post WHERE id = '$postId';");
    $row=mysqli_fetch_array($report,MYSQLI_ASSOC);
    
    $v = $row['spam']+1;
    
    $query = mysqli_query($GLOBALS['con'], "UPDATE post SET spam = '$v' WHERE id = '$postId';");
    $query2 = mysqli_query($GLOBALS['con'], "INSERT INTO reported VALUES ('','$user','$postId')");
    echo 'success';
}