<?php 
include "connect.php";

session_start();

if(isset($_SESSION['username'])){
    $REGISTER_USERNAME = $_SESSION['username'];
}

$sql = "SELECT * FROM `register` WHERE `R_Username` = '$REGISTER_USERNAME' ";

$output = mysqli_query($CONNECT, $sql);

if($output){
    while($row =mysqli_fetch_assoc($output)){
        $REGISTER_FIRSTNAME = $row ['R_Firstname'];
        $REGISTER_LASTNAME = $row ['R_Lastname'];
    }
}
else{
    echo "0 results";
}    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Life Blood Save a Life | Location</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/locations.css">
    </head>
    <body>
        <div class="hero">
             <nav>
                <!--logo_txt-->
                <a href="after_login.php"><img class="logo" src="img/Life Blood.png" alt="logo"></a>
            <ul class="nav_links">
            <li><a href="home.html">Home</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="blood_bank.php">Blood Bank</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about_us.php">About us</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
            <!--user image-->
                <img class="user_pic" src="img/user profile icons/user.png" onclick="toggleMenu()">
                <!--User Profile-->
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="img/user profile icons/user.png">
                            <?php echo ' 
                            <h3>'.$REGISTER_FIRSTNAME.' '.$REGISTER_LASTNAME.'</h3>';
                            ?>
                        </div>
                        <hr>
                        <a href="edit_profile.php">
                            <img src="img/user profile icons/profile.png">
                            <p>Edit Profile</p>
                            <span>></span>
                        </a>
                        <a href="setting_privacy.php" class="sub-menu-link">
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
                <!--content-->
                <div class="page">
                <div class="locate">
                    <h2 class="topic">HCA Houston Healthcare Kingwood</h2>
                    <img class="images" src="img/Locations/houston.jpeg" alt="houston">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58289879.356659815!2d-140.41290931374937!3d26.912002641933125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b2cc48607aff%3A0xdebaf346a277ba57!2sHCA%20Houston%20Healthcare%20Kingwood!5e0!3m2!1sen!2slk!4v1696351231750!5m2!1sen!2slk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="text">
                        <li>US-59 N, Kingwood, TX 77339, United States</li>
                        <li>+12813488000</li>
                    </ul>
                </div>
                <div class="locate">
                    <h2 class="topic">Methodist Hospital</h2>
                    <img class="images" src="img/Locations/methodist.jpeg" alt="methodist">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58289879.356659815!2d-140.41290931374937!3d26.912002641933125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5dfe2037aab7%3A0x3ad01b1df0f9457a!2sMethodist%20Hospital!5e0!3m2!1sen!2slk!4v1696352032783!5m2!1sen!2slk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="text">
                        <li>Main Entrance, 7700 Floyd Curl Dr, San Antonio, TX 78229, United States</li>
                        <li>+12105754000</li>
                    </ul>
                </div>
                <div class="locate">
                    <h2 class="topic">Texoma Medical Center</h2>
                    <img class="images" src="img/Locations/texoma.jpeg" alt="texoma">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58289879.356659815!2d-140.41290931374937!3d26.912002641933125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c860607adff2b%3A0x6ac2e6eb09461105!2sTexoma%20Medical%20Center!5e0!3m2!1sen!2slk!4v1696352164739!5m2!1sen!2slk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="text">
                        <li>5016 US-75, Denison, TX 75020, United States</li>
                        <li>+19034164000</li>
                    </ul>
                </div>
                <div class="locate">
                    <h2 class="topic">Morton Plant Hospital</h2>
                    <img class="images" src="img/Locations/morton.jpeg" alt="morton">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58289879.356659815!2d-140.41290931374937!3d26.912002641933125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f0c138d641eb%3A0x2d1e689a3c35c217!2sMorton%20Plant%20Hospital!5e0!3m2!1sen!2slk!4v1696352297300!5m2!1sen!2slk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="text">
                        <li>300 Pinellas St, Clearwater, FL 33756, United States</li>
                        <li>+17274627000</li>
                    </ul> 
                </div>
                <div class="locate">
                    <h2 class="topic">Medical City Dallas Hospital</h2>
                    <img class="images" src="img/Locations/dallas.png" alt="dallas">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58289879.356659815!2d-140.41290931374937!3d26.912002641933125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c206c8613d5c9%3A0xdbf77bd697c1fbda!2sMedical%20City%20Dallas%20Hospital!5e0!3m2!1sen!2slk!4v1696352366582!5m2!1sen!2slk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="text">
                        <li>7777 Forest Ln, Dallas, TX 75230, United States</li>
                        <li>+19725667000</li>
                    </ul>
                </div>
            </div>
        </div>
    <!--footer-->
    <footer>
        <div class="fcontainer">
            <div class="row">
                  <div class="col">
                      <img src="img/Life Blood.png" alt="" class="logo">
                      <p>
                        Donate blood and save lives. Instead of giving your blood to mosquitoes, give it to someone who needs it. One bag of blood can bring back one from the dead. The bond of blood is stronger than anything.
                      </p>
                      <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                  </div>

                  <div class="col">
                     <h4>Links</h4>
                     <div class="links">
                        <a href="home.html">Home</a>
                    <a href="donation.html">Donation</a>
                    <a href="blood_bank.html">Blood Bank</a>
                    <a href="contact.html">Contact</a>
                    <a href="about_us.html">About us</a>
                     </div>
                  </div>

                  <div class="col">
                      <h4>Contact</h4>
                      <div class="contact-details">
                         <i class="fa fa-envelope"></i>
                         <p>lifeblood@gmail.com</p>
                      </div><br><br>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>+94110000000</p>
                      </div><br><br>
                      <div class="contact-details">
                        <i class="fa fa-globe"></i>
                        <p>www.LifeBloodSaveaLife.com</p>
                     </div>
                  </div>
            </div>
                <div class="copyright">
                <p class="copyright">@Copyright; Designed by Groupe_4.2</p>  
            </div>
        </div>
       
     </footer>            
    <!--js link-->        
        <script src="js/myscript.js"></script>   
        <script>
        let subMenu = document.getElementById("subMenu");
                function toggleMenu(){
                    subMenu.classList.toggle("open-menu");
                }  
        </script>
    </body>
</html>