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
        <title>Life Blood Save a Life | About us</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="styles/about_us.css">
    </head>
    <body>
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
            </nav><br><br><br><br><br>
           
            <!--about us 1 section-->
                <div class="`container_i">
                    <div class="collage_wrap">
                        <div class="colage_item">
                            <div class="collage_item_inner">
                                <img src="img/bloodd1.jpg" alt="blood" height="600px" width="800px">
                            </div>
                        </div>
                        <div class="colage_item">
                            <div class="inner-section">
                                <h1>About Us</h1><br>
                                <p class="text"><b>
                                    Each day, thousands of people - people just like you - provide compassionate care to those in need. Our network of generous donors,
                                     volunteers and employees share a mission of preventing and relieving suffering, here at home and around the world.
                                    We roll up our sleeves and donate time, money and blood. We learn or teach life-saving skills so our communities can be better prepared when the need arises. 
                                    We do this every day because the Red Cross is needed - every day</b>
                                </p>
                                <div class="contacbtn">
                                    <a href="contact.html">
                                    <button>Contact Us</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
            <!--infromation boxes-->
                <div class="container_info">
                    <div class="info_pic">
                        <img src="img/1info.png"width="250px">      
                        <div class="desc"><p>100</p><br>100% of blood donors are voluntory non rermunerated donors.</div>
                    </div>
                    <div class="info_pic">
                        <img src="img/2info.png"width="250px">
                        <div class="desc"><p>3</p><br>Your precious donation of blood can save as many as 3 lives.</div>
                    </div>
                    <div class="info_pic">
                        <img src="img/3info.png"width="250px">     
                        <div class="desc"><p>4</p><br>You can donate blood in every 4 months time.</div>
                    </div>
                    <div class="info_pic">
                        <img src="img/4info.png"width="250px">                   
                        <div class="desc"><p>14th June</p><br>World Blood Donor Day.</div>
                    </div>
                </div><br>
  <!--footer-->
  <footer>
    <div class="container">
        <div class="row">
              <div class="col">
                <img src="img/Life Blood.png" alt="" class="logo">
                  <p>
                    Donate blood and save lives. Instead of giving your blood to mosquitoes, give it to someone who needs it.<br> One bag of blood can bring back one from the dead. The bond of blood is stronger than anything.
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