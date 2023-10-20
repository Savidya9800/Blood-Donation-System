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
        <title>Life Blood Save a Life</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/after_login.css">
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
                <div class="sub-menu-wrap" id="subMenu" style = "z-index: 1;">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="img/user profile icons/user.png">
                            <?php echo ' 
                            <h3>'.$REGISTER_FIRSTNAME.' '.$REGISTER_LASTNAME.'</h3>';
                            ?>
                        </div>
                        <hr>
                        <a href="edit_profile.php" class="sub-menu-link">
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
                        <a href="login.php" class="sub-menu-link">
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
                <!--Code-->
                <section class="container6">
                    <div class="slider-wrapper">
                        <div class="slider">
                            <img id="slider-1" src="img/Home page img/bl24.jpg">
                            <img id="slider-2" src="img/Home page img/bl31.jpeg.jpg">
                            <img id="slider-3" src="img/Home page img/bl48.jpg">
                        </div>
                        <div class="slider-nav">
                            <a href="#slider-1"></a>
                            <a href="#slider-2"></a>
                            <a href="#slider-3"></a>
                        </div>
                    </div>
                </section>
            </div>
    <!--footer-->
    <footer>
        <div class="container">
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
        </div>
        <hr color="white" width="100%"><br>
        <p class="copyright">@Copyright; Designed by Groupe_4.2</p>
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