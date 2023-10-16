<?php
include "connect.php";

if(isset($_GET['user_delete'])){
    $ID = $_GET['user_delete'];
}

$sql = "DELETE FROM `register` WHERE `R_Username` = '$ID' ";

$output = mysqli_query($CONNECT, $sql);

if($output){

header("location:home.html");
}
else{
    echo "<script>('Profile Delete not successfull')</script>";
}
?>