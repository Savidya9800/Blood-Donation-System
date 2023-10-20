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
<html lang="en">
    <head>
        <title>Life Blood Save a Life</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/donation.css">
        <link rel="stylesheet" href="styles/footer.css">

        
    </head>
<body>
    <!--Navbar-->
    <nav class="navbar">
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
        <img src="./img/menu.png" alt="" class="menu-btn">
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
    <header style="background-image: url('img/bl42.jpg');">
        <div class="header-content">
            <h2>Be A Hero</h2>
            <div class="line"></div>
            <h1>World Blood Donor Day</h1>
            <a href="https://en.wikipedia.org/wiki/World_Blood_Donor_Day" target="_blank" class="ctn">Learn More</a>
        </div>
    </header>

    <!--Events-->
    <section class="events">
        <div class="title">
            <h1>The Blood Donation Process</h1>
            <div class="line"></div>            
        </div>
        <div class="row">
            <div class="col">
                <img class="img-resize" src="./img/bl55.png" alt="">
                <h4>1. Getting Ready</h4>
                <p>To prepare for blood donation, it's important to nourish your body with a balanced meal and maintain good hydration to prevent lightheadedness. Additionally, ensure you get a good night's rest the day before and avoid strenuous physical activity just before your donation. These steps will help you feel your best during and after the donation process.</p>
                <a href="https://www.wikihow.com/Prepare-to-Donate-Blood" target="_blank" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img class="img-resize" src="./img/bl32.jpeg" alt="">
                <h4>2. Registration</h4>
                <p>During the registration process, we'll review your eligibility, request identification (like your driver's license), provide information about blood donation, and collect your complete address, which should include your PO Box, street/apartment number, and the address where you'll receive mail for the next 8 weeks after your donation.</p>
                <a href="https://server2.ehospital.gov.in/ebloodbank/pdf/selfregistrationdonor.pdf" target="_blank" class="ctn">Learn More</a>
            </div>            
        </div>
        <div class="row">
            <div class="col">
                <img class="img-resize" src="./img/bl50.jpg" alt="">
                <h4>3. Health History</h4>
                <p>In the health history check, you'll privately discuss your health and recent travel. Share details of any medications. We'll assess your temperature, pulse, blood pressure, and hemoglobin levels to ensure your eligibility for blood donation.</p>
                <a href="https://www.ncbi.nlm.nih.gov/books/NBK138211/" target="_blank" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img class="img-resize" src="./img/bl35.jpg" alt="">
                <h4>4. Your Donation</h4>
                <p>During the donation process, if you're giving whole blood, we'll use a sterile needle in your arm, which feels like a quick pinch and takes seconds. Platelet donations involve an apheresis machine connected to both arms. Whole blood donation lasts 8-10 minutes, with a bandage afterward. Platelet donation takes about 2 hours as it cycles blood, removing platelets, and returning the rest.</p>
                <a href="https://www.cedars-sinai.org/programs/blood-donor-services/about-donation.html" target="_blank" class="ctn">Learn More</a>
            </div>            
        </div>
    </section> 
    
    <section class="explore" style="background-image: url('img/bl38.jpg')">
        <div class="explore-content">
            <h1>Explore the Blood</h1>
            <div class="line"></div>
            <a href="https://www.pbslearningmedia.org/resource/idptv11.sci.life.reg.basic.d4kbld/blood/" target="_blank" class="ctn">Learn more</a>
        </div>
    </section>

    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1>Refreshment and Recovery</h1>
                <div class="line"></div>
                <ol>
                    <li>After donating blood, you'll have a snack and something to drink in the refreshment area.</li>
                    <li>You'll leave after 10-15 minutes and continue your normal routine.</li>
                    <li>Enjoy the feeling of accomplishment knowing you are helping to save lives.</li>
                    <li>Take a selfie, or simply share your good deed with friends. It may inspire them to become blood donors.</li>
                </ol>
                <a href="https://www.lifeblood.com.au/news-and-stories/vital-reads/refreshed-refreshments" target="_blank" class="ctn">Learn more</a>
            </div>     
        </div>
        <div class="col image-col">
            <div class="image-gallery">
                <img src="./img/bl88.webp" alt="">
                <img src="./img/bl82.jpg" alt="">
                <img src="./img/bl34.jpeg" alt="">
                <img src="./img/bl89.jpg" alt="">
            </div>
        </div>
    </section>
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
     
     <!--Js-->
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navLinks = document.querySelector('.nav_links')

        menuBtn.addEventListener('click',()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>

    <script src="js/myscript.js"></script> 
    <script>
    let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }  
    </script>
</body>
</html>