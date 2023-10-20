<?php
include 'con_connect.php';
$no=$_GET['updateno'];
$sql="select * from contact where no=$no";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql="update contact set no=$no, name='$name',email='$email',phone='$phone' where no=$no"; 
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "update successfully";
        header("location:con_display.php");
    }else{
        echo "Not inserted";
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Life Blood Save a Life | Contact</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <div class="hero">
             <nav>
                <!--logo_txt-->
                <a href="after_login.html"><img class="logo" src="img/Life Blood.png" alt="logo"></a>
            <ul class="nav_links">
                <li><a href="home.html">Home</a></li>
                <li><a href="donation.html">Donation</a></li>
                <li><a href="blood_bank.html">Blood Bank</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
            <!--user image-->
                <img class="user_pic" src="img/user profile icons/user.png" onclick="toggleMenu()">
                <!--User Profile-->
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="img/user profile icons/user.png">
                            <h3>Savidya Jayalath</h3>
                        </div>
                        <hr>
                        <a href="edit_profile.html" class="sub-menu-link">
                            <img src="img/user profile icons/profile.png">
                            <p>Edit Profile</p>
                            <span>></span>
                        </a>
                        <a href="setting_privacy.html" class="sub-menu-link">
                            <img src="img/user profile icons/setting.png">
                            <p>Setting & Privacy</p>
                            <span>></span>
                        </a>
                        <a href="https://www.who.int/campaigns/world-blood-donor-day/2018/who-can-give-blood" target="_blank" class="sub-menu-link">
                            <img src="img/user profile icons/help.png">
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="login.html" class="sub-menu-link">
                            <img src="img/user profile icons/logout.png">
                            <p>Logout</p>
                        </a>
                    </div>
                </div>
                <!--Login Button-->
                <a href="login.html"><button class="login_b">LOGIN</button> </a>
            </nav>
            <!--Logo image-->
            <img class="logo_img" src="img/life blood logo.png" alt="logo_img BLOOD LIFE">
            <!--Seach bar-->
                <div class="container2">
                <form action="https://www.google.com/search" method="get" class="seach-bar">
                    <input type="text" placeholder="Search..." name="q">
                    <button type="submit"><img src="img/search.png"></button>
                </form>
                </div>
                <div class="contact-form">
                    <h1>Contact Us</h1>
                    <div class="container">
                        <div class="main">
                            <div class="content">
                                <h2>Contact Us</h2>
                                <form action="#" method="post">
                                    <input type="text" name="name" placeholder="Enter Your Name" value=<?php echo $name;?>>
                                  
                                    <input type="email" name="email" placeholder="Enter Your Email" value=<?php echo $email;?>>
                                    <input name="phone" placeholder="Mobile Number" value=<?php echo $phone;?>>                  
                         <button type="submit" class="btn" name="submit">Update <i class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                            <div class="form-img">
                                <img src="img/bg1.png" alt="contact">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
    </body>
</html>