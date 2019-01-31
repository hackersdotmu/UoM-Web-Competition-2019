<?php
include('../config.php');

$postId = $_POST['postId'];
$user = $_SESSION['userLoggedIn'];

$check =  mysqli_query($GLOBALS['con'], "SELECT * FROM voted WHERE user = '$user' AND pid = '$postId'");


if(mysqli_num_rows($check) > 0){
    echo 'error';
}else{
    $vote = mysqli_query($GLOBALS['con'], "SELECT votes FROM post WHERE id = '$postId';");
    $row=mysqli_fetch_array($vote,MYSQLI_ASSOC);
    
    $v = $row['votes']+1;
    
    $query = mysqli_query($GLOBALS['con'], "UPDATE post SET votes = '$v' WHERE id = '$postId';");
    $query2 = mysqli_query($GLOBALS['con'], "INSERT INTO voted VALUES ('','$user','$postId')");
    echo 'success';
}

