<?php

    $con=new mysqli('localhost','root','','blood_donation_system');

    if($con){
        //echo "Connection successfull";
    }else{
        echo "Not connected";

    }
    
?>