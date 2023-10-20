<?php
include 'con_connect.php';
if(isset($_GET['deleteno'])){
    $no=$_GET['deleteno'];

    $sql="delete from contact where no=$no";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfull";
        header("location:con_display.php");
    }else{
        echo "Not deleted";
    }
}

?>