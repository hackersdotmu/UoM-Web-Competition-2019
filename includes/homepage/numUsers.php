<?php
include('../config.php');

$query = mysqli_query($GLOBALS['con'], "SELECT * FROM users");
$number=mysqli_num_rows($query);

echo $number;