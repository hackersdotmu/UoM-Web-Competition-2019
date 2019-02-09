<?php 
include('../config.php');

$errorArray = array();

$passwordsDoNoMatch = "Your passwords don't match";
$passwordNotAlphanumeric = "Your password can only contain numbers and letters";
$passwordCharacters = "Your password must be between 5 and 30 characters";
$emailInvalid = "Email is invalid";
$emailTaken = "This email is already in use";
$lastNameCharacters = "Your last name must be between 2 and 25 characters";
$firstNameCharacters = "Your first name must be between 2 and 25 characters";
$usernameCharacters = "Your username must be between 5 and 25 characters";
$usernameTaken = "This username already exists";

$username = sanitizeFormUsername($_POST['username']);
$firstName = sanitizeFormString($_POST['fname']);
$lastName = sanitizeFormString($_POST['lname']);
$email = sanitizeFormString($_POST['email']);
$password = sanitizeFormPassword($_POST['pwd']);
$password2 = sanitizeFormPassword($_POST['pwd2']);
$completed = sanitizeFormString($_POST['completed']);
$sector = sanitizeFormString($_POST['sector']);
$current = sanitizeFormString($_POST['current']);
$institution = sanitizeFormString($_POST['institution']);
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];

$secretKey = '6LeKFY4UAAAAACm-gpvwPuvzbMoZ3ktLm8fVNnVy';
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
$response = file_get_contents($url);
$response = json_decode($response);


if(validateAll($firstName,$lastName,$username,$email,$password, $password2) == true){
	if($response->success){
		$wasSuccessful = register($firstName, $lastName,$username,$dob,$mobile,$email, $password, $password2,$current,$completed,$institution,$sector);
           if($wasSuccessful){
			$_SESSION['userLoggedIn'] = $username;
			echo 'true';
		   }else{
			array_push($errorArray, "Error inserting into database.");
			echo json_encode($errorArray);
		   }
    }else{
        array_push($errorArray, "Recaptcha verification failed! Please try again.");
        echo json_encode($errorArray);
    }
}else{
    echo json_encode($errorArray);
}



function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}
function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}
function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}
function validateUsername($un) {
   if(strlen($un) > 25 || strlen($un) < 5) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['usernameCharacters']);
	   return;
   }
   $checkUsernameQuery = mysqli_query($GLOBALS['con'], "SELECT username FROM users WHERE username='$un'");
   if(mysqli_num_rows($checkUsernameQuery) != 0) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['usernameTaken']);
	   return;
   }
}
function validateFirstName($fn) {
   if(strlen($fn) > 25 || strlen($fn) < 2) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['firstNameCharacters']);
	   return;
   }
}
function validateLastName($ln) {
   if(strlen($ln) > 25 || strlen($ln) < 2) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['lastNameCharacters']);
	   return;
   }
}
function validateEmail($em) {
   if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['emailInvalid']);
	   return;
   }
   $checkEmailQuery = mysqli_query($GLOBALS['con'], "SELECT email FROM users WHERE email='$em'");
   if(mysqli_num_rows($checkEmailQuery) != 0) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['emailTaken']);
	   return;
   }
}
function validatePasswords($pw, $pw2) {
   
   if($pw != $pw2) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['passwordsDoNoMatch']);
	   return;
   }
   if(preg_match('/[^A-Za-z0-9]/', $pw)) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['passwordNotAlphanumeric']);
	   return;
   }
   if(strlen($pw) > 30 || strlen($pw) < 5) {
	   array_push($GLOBALS['errorArray'], $GLOBALS['passwordCharacters']);
	   return;
   }
}
 function insertUserDetails($fn, $ln, $un, $dob, $mobile, $em, $pw,$current,$comp,$inst,$sector) {
	$encryptedPw = md5($pw);
		
	$result = mysqli_query($GLOBALS['con'], "INSERT INTO users VALUES ('', '$fn', '$ln', '$un', '$dob', '$mobile', '$em', '$encryptedPw','$current','$comp','$inst','$sector','basic')");
	
	if($result){
		return true;
	}else{
		array_push($GLOBALS['errorArray'], "Error inserting into database");
		return false;
	}
	// var_dump($result);
}
function register($fn, $ln, $un, $dob, $mobile, $em, $pw,$pw2,$current,$comp,$inst,$sector) {
	return insertUserDetails($fn, $ln, $un, $dob, $mobile, $em, $pw,$current,$comp,$inst,$sector);
}
	
function validateAll($fn,$ln,$un,$em,$p1,$p2){
    validateFirstName($fn);
    validateLastName($ln);
    validateUsername($un);
    validateEmail($em);
    validatePasswords($p1,$p2);

    return empty($GLOBALS['errorArray']);
}