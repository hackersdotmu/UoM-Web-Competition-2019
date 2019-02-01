<?php
    //$photo = file_get_contents($_FILES['avatar-file']['tmp_name']);
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $courses = $_POST['courses'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "nexus";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $pinsert = "INSERT INTO userprofile(firstname, lastname, courses, add_ress, email, bio) 
        values ('$firstname', '$lastname', '$courses', '$address', '$email', '$bio')";
        if ($conn->query($pinsert)){
            echo '<script type="text/javascript">
                window.onload = function () { alert("DATA ENTERED SUCCESSFULLY."); }
            </script>';
        } else{
            echo '<script type="text/javascript">
                window.onload = function () { alert("CONNECTION ERROR."); }
            </script>';
        }
        $conn->close();
    }
?>
