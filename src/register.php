<?php
include "connect.php";

$REGISTER_FIRSTNAME = $_POST ['firstName'];
$REGISTER_LASTNAME = $_POST ['lastName'];
$REGISTER_AGE = $_POST ['age'];
$REGISTER_WEIGHT = $_POST ['weight'];
$REGISTER_EMAIL = $_POST ['email'];
$REGISTER_ADDRESS = $_POST ['address'];
$REGISTER_BIRTHDAY = $_POST ['birthday'];
$REGISTER_B_GROUP = $_POST ['b_group'];
$REGISTER_GENDER = $_POST ['gender'];
$REGISTER_USERNAME = $_POST ['userName'];
$REGISTER_PASSWORD = $_POST ['password'];

$sql="INSERT INTO register (R_Firstname, R_Lastname, R_Age, R_Weight, R_Email, R_Address, R_Birthday, R_Bloodgroup, R_Gender, R_Username, R_Password) VALUES ('$REGISTER_FIRSTNAME','$REGISTER_LASTNAME','$REGISTER_AGE','$REGISTER_WEIGHT', '$REGISTER_EMAIL', '$REGISTER_ADDRESS', '$REGISTER_BIRTHDAY', '$REGISTER_B_GROUP', '$REGISTER_GENDER', '$REGISTER_USERNAME', '$REGISTER_PASSWORD')";

// Execute the query
$result = mysqli_query($CONNECT, $sql);

if($result) {

    header("location:home.html");

    echo "<script>alert('Inserted successfully!')</script>";
} else {
    echo "<script>alert('Insertion failed!')</script>";
}

?>
