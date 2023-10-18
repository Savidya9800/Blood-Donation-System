<?php
include "app_connect.php";
if(isset($_GET['deleteno'])){
    $no=$_GET['deleteno'];

    $sql="delete from appointment where no=$no";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:app_display.php');
    }else{
        echo "Not deleted";
    }
}

?>