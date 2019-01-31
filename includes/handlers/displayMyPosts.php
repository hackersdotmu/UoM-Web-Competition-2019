<?php

include('../config.php');

$user = $_SESSION['userLoggedIn'];

$result = mysqli_query($GLOBALS['con'], "SELECT * FROM post WHERE createdBy = '$user' AND visible=1");
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);


echo json_encode($row);
