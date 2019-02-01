<?php

include('../config.php');
// include('register-handler.php');

    $t = sanitizeFormString($_POST['title']);
    $d = sanitizeFormString($_POST['description']);
    $tag = $_POST['tag'];
    $user = $_SESSION['userLoggedIn'];
    $date = date("Y/m/d");


    $result = mysqli_query($GLOBALS['con'], "INSERT INTO post VALUES ('','$t','$d','$user','$tag',0,0,'$date',1)");

    if($result){
        echo 'true';
    }

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}