<?php
include "app_connect.php";
$no=$_GET['updateno'];
$sql="Select * from appointment where no=$no";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$donorID=$row['donorID'];
$name=$row['name'];
$age=$row['age'];
$weight=$row['weight'];
$email=$row['email'];
$type=$row['type'];
$date=$row['date'];

if(isset($_POST['submit'])){
    $donorID=$_POST['donorID'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $date=$_POST['date'];

    $sql="update appointment set no=$no,donorID='$donorID',name='$name',age='$age',weight='$weight',email='$email',type='$type',date='$date' where no=$no";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Updated successfully";
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
                    <input type="text" placeholder="Enter Donor ID" name="donorID" value=<?php echo $donorID;?>> 
                </div>
                <div class="text_field">
                    <label>Name</label>
                    <input type="text" placeholder="Enter Full Name" name="name" value=<?php echo $name;?>> 
                </div>       
                <div class="text_field">
                    <label id="age_text">Age</label>
                    <input type="text" placeholder="Enter Age" name="age" value=<?php echo $age;?>> 
                </div>    
                <div class="text_field">
                    <label>Weight</label>
                    <input type="text" placeholder="Enter Weight" name="weight" value=<?php echo $weight;?>> 
                </div>
                <div class="text_field">
                    <label>Email</label>
                    <input type="text" placeholder="Enter Email" name="email" value=<?php echo $email;?>> 
                </div>      
                <div class="type">
                    <label>Appoinment Type</label>
                    <div class="appoinment_type">
                        <input type="radio" value="b" name="type" value=<?php echo $type;?>>
                        <label for="blood">Blood</label>
                        <input type="radio" value="p" name="type" value=<?php echo $type;?>>
                        <label for="plasma">Plasma</label>
                    </div>
                </div>
                <p>I would like to schedule an appoinment for a blood donation. My preffered date for the appoinment is as follows.</p>
                <div class="text_field">
                    <label>Date</label>
                    <input type="date" placeholder="Date" name="date" value=<?php echo $date;?>>
                </div>
                <p>I understand the importance of blood donation and I love to contribute to this.</p>
                <button type="submit" class="btn" name="submit">Update</button>
            </form>
        </div>
    </body>
</html>