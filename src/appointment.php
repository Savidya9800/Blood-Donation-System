<?php
include "app_connect.php";
if(isset($_POST['submit'])){
    $donorID=$_POST['donorID'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $date=$_POST['date'];
    
    //insert query
    $sql="insert into appointment (no,donorID,name,age,weight,email,type,date)
    values('$no','$donorID', '$name','$age','$weight','$email','$type','$date')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:app_display.php');
    }
    else{
        echo "Not inserted";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Make an Appointment</title>
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/appointment.css">
    </head>
    <body>
        <div class="deco">
            <h2>Make an Appointment</h2> 
            <form method="post">
            <div class="text_field">
                    <label>Donor ID</label>
                    <input type="text" placeholder="Enter Donor ID" name="donorID"> 
                </div>
                <div class="text_field">
                    <label>Name</label>
                    <input type="text" placeholder="Enter Full Name" name="name"> 
                </div>       
                <div class="text_field">
                    <label id="age_text">Age</label>
                    <input type="text" placeholder="Enter Age" name="age"> 
                </div>    
                <div class="text_field">
                    <label>Weight</label>
                    <input type="text" placeholder="Enter Weight" name="weight"> 
                </div>
                <div class="text_field">
                    <label>Email</label>
                    <input type="text" placeholder="Enter Email" name="email"> 
                </div>      
                <div class="type">
                    <label>Appoinment Type</label>
                    <div class="appoinment_type">
                        <input type="radio" value="b" name="type">
                        <label for="blood">Blood</label>
                        <input type="radio" value="p" name="type">
                        <label for="plasma">Plasma</label>
                    </div>
                </div>
                <p>I would like to schedule an appoinment for a blood donation. My preffered date for the appoinment is as follows.</p>
                <div class="text_field">
                    <label>Date</label>
                    <input type="date" placeholder="Date" name="date">
                </div>
                <p>I understand the importance of blood donation and I love to contribute to this.</p>
                <button type="submit" class="btn" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>