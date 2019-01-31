<?php
 session_start();
?>
<?php
$Nic_num=$Surname=$First_name=$Maiden_name=$Marital_status=$Gender=$DOB=$Telephone_num=$Mobile_num=$Address=$Country=$District=$Town_Village=$Postal_code=$Email=$Hashed_password=$Past_background=$Disability=$Passport_num=$Passport_exp_date=$Languages=$Preferred_job_occupation=$Preferred_economic_sector=$Driving_license=$CPE_result=$CPE_year=$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

?>
<?php

require_once('db_connect.php');

$Nic_num = $_POST["Nic_num"];
$Surname = $_POST["Surname"];
$First_name = $_POST["First_name"];
$Maiden_name = $_POST["Maiden_name"];
$Marital_status = $_POST["Marital_status"];
$Gender= $_POST["Gender"];
$DOB = $_POST["DOB"];
$Telephone_num = $_POST["Telephone_num"];
$Mobile_num = $_POST["Mobile_num"];
$Address = $_POST["Address"];
$Country = $_POST["Country"];
$District = $_POST["District"];
$Town_village = $_POST["Town_village"];
$Postal_code = $_POST["Postal_code"];
$Email = $_POST["Email"];
$Hashed_password= $_POST["Hashed_password"];
$Past_background = $_POST["Past_background"];
$Disability = $_POST["Disability"];
$Passport_num = $_POST["Passport_num"];
$Passport_exp_date = $_POST["Passport_exp_date"];
$Languages = $_POST["Languages"];
$Preferred_job_occupation = $_POST["Preferred_job_occupation"];
$Preferred_economic_sector = $_POST["Preferred_economic_sector"];
$Driving_license = $_POST["Driving_license"];
$CPE_result = $_POST["CPE_result"];
$CPE_yesr = $_POST["CPE_year"];
$work_exp_date_from = $_POST["work_exp_date_from"];
$work_exp_date_to = $_POST["work_exp_date_to"];
$work_exp_date_position = $_POST["work_exp_date_position"];
$work_exp_date_employer_name= $_POST["work_exp_date_employer_name"];
$work_exp_sector = $_POST["work_exp_sector"];
$work_exp_desc = $_POST["work_exp_desc"];
$CV = $_POST["CV"];
$covering_letter = $_POST["covering_letter"];
$scanned_id_card = $_POST["scanned_id_card"];
$morality_certificate = $_POST["morality_certificate"];



 $query = "INSERT INTO registration(`Nic_num`, `Surname`, `First_name`, `Maiden_name`, `Marital_status`, `Gender`, `DOB`, `Telephone_num`, `Mobile_num`, `Address`, `Country`, `District`, `Town_Village`, `Postal_code`, `Email`, `Hashed_password`, `Past_background`, `Disability`, `Passport_num`, `Passport_exp_date`, `Languages`, `Preferred_job_occupation`, `Preferred_economic_sector`, `Driving_license`, `CPE_result`, `CPE_year`, `work_exp_date_from`, `work_exp_date_to`, `work_exp_position`, `work_exp_employer_name`, `work_exp_sector`, `work_exp_desc`, `cv`, `covering_letter`, `scanned_id_card`, `morality_certificate`, `sc_id`, `hsc_id`, `tertiary_id`) VALUES ('$Nic_num','$Surname','$First_name','$Maiden_name','$Marital_status','$Gender','$DOB','$Telephone_num','$Mobile_num','$Address','$Country','$District','$Town_Village','$Postal_code','$Email','$Hashed_password','$Past_background','$Disability','$Passport_num','$Passport_exp_date','$Languages','$Preferred_job_occupation','$Preferred_economic_sector','$Driving_license','$CPE_result','$CPE_year','$work_exp_date_from','$work_exp_date_to','$work_exp_position','$work_exp_employer_name','$work_exp_sector','$work_exp_desc','$cv','$covering_letter','$scanned_id_card','$morality_certificate')";
 $query1="INSERT INTO `hsc_table`(`hsc_id`, `YEAR 1`, `Subject1`, `Grade1`, `Subject2`, `Grade2`, `Subject3`, `Grade3`, `Subject4`, `Grade4`, `Subject5`, `Grade5`) VALUES ($Subject1,$Grade1,$Subject2,$Grade2,$Subject3,$Grade3,$Subject4,$Grade4,$Subject5,Grade5)";
$query2="INSERT INTO `tertiary_table`(`tertiary_id`, `start_year`, `end_year`, `course_name`, `qualification`) VALUES ($tertiary_id, $start_year, $end_year, $course_name, $qualification)";
$query3="INSERT INTO `sc_table`(`sc_id`, `YEAR1`, `Subject1`, `Grade1`, `Subject2`, `Grade2`, `Subject3`, `Grade3`, `Subject4`, `Grade4`, `Subject5`, `Grade5`, `Subject6`, `Grade6`, `Subject7`, `Grade7`, `Subject8`, `Grade8`, `Subject9`, `Grade9`, `Subject10`, `Grade10`) VALUES ($sc_id, $YEAR1, $Subject1, $Grade1, $Subject2, $Grade2, $Subject3, $Grade3, $Subject4, $Grade4, $Subject5, $Grade5, $Subject6, $Grade6, $Subject7, $Grade7, $ubject8, $Grade8, $Subject9, $Grade9, $Subject10, $Grade10)";
 if(!mysqli_query($con,$query) && !mysqli_query($con,$query1) && !mysqli_query($con,$query2) && !mysqli_query($con,$query3) ){
	echo'fail';
}
else{
	echo'success';
}

mysqli_close($con);

?>