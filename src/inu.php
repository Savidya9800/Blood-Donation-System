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
                    <label>Name</label>
                    <input type="text" placeholder="Enter Full Name"> 
                </div>
                <div class="text_field">
                    <label>Address</label>
                    <input type="text" placeholder="Enter Address"> 
                </div>       
                <div class="text_field">
                    <label id="age_text">Age</label>
                    <input type="text" placeholder="Enter Age"> 
                </div>    
                <div class="text_field">
                    <label>Weight</label>
                    <input type="text" placeholder="Enter Weight"> 
                </div>
                <div class="text_field">
                    <label>Email</label>
                    <input type="text" placeholder="Enter Email"> 
                </div>      
                <div class="type">
                    <label>Appoinment Type</label>
                    <div class="appoinment_type">
                        <input type="radio" name="Appoinment Type">
                        <label for="blood">Blood</label>
                        <input type="radio" name="Appoinment Type">
                        <label for="plasma">Plasma</label>
                    </div>
                </div>
                <p>I would like to schedule an appoinment for a blood donation. My preffered date for the appoinment is as follows.</p>
                <div class="text_field">
                    <label>Date</label>
                    <input type="date" placeholder="Date">
                </div>
                <p>I understand the importance of blood donation and I love to contribute to this.</p>
                <div class="btn">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>
