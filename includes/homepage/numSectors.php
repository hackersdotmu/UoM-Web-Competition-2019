<?php
include('../config.php');


$arr = array();

$arr = array_push_assoc($arr,"finance",getNumSectors("finance"));
$arr = array_push_assoc($arr,"engineering",getNumSectors("engineering"));
$arr = array_push_assoc($arr,"law",getNumSectors("law"));
$arr = array_push_assoc($arr,"it",getNumSectors("it"));
$arr = array_push_assoc($arr,"agriculture",getNumSectors("agriculture"));
$arr = array_push_assoc($arr,"science",getNumSectors("science"));


echo json_encode($arr);

function getNumSectors($sector){
    $query = mysqli_query($GLOBALS['con'], "SELECT * FROM users WHERE sector = '$sector';");
    $number=mysqli_num_rows($query);
    return $number;
}

function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
    }