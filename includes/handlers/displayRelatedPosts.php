<?php

include('../config.php');

$user = $_SESSION['userLoggedIn'];


$tag = mysqli_query($GLOBALS['con'], "SELECT sector FROM users WHERE username = '$user'");
$row=mysqli_fetch_array($tag,MYSQLI_ASSOC);

$tag = $row['sector'];

$result = mysqli_query($GLOBALS['con'], "SELECT * FROM post WHERE tag = '$tag' ORDER BY date DESC");
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);


echo json_encode($row);
