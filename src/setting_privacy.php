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
        <title>Life Blood Save a Life | Edit Profile</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/edit_profile.css">
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
                <div class="container light-style flex-grow-1 container-p-y">
                    <h3 class="font-weight-bold py-3 mb-4">
                        Account settings
                    </h3>
                    <div class="card overflow-hidden" id="container4">
                        <div class="row no-gutters row-bordered row-border-light">
                            <div class="col-md-3 pt-0">
                                <div class="list-group list-group-flush account-settings-links">
                                    <a class="list-group-item list-group-item-action" data-toggle="list"
                                        href="#account-general">Account</a>
                                    <a class="list-group-item list-group-item-action active" data-toggle="list"
                                        href="#account-change-password">Security</a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list"
                                        href="#account-info">Info</a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list"
                                        href="#account-social-links">Social links</a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list"
                                        href="#account-connections">Connections</a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list"
                                        href="#account-notifications">Notifications</a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="account-general">
                                        <div class="card-body media align-items-center">                                       
                                            <img src="img/user profile icons/user.png" alt
                                                class="d-block ui-w-80">
                                            <div class="media-body ml-4">
                                                <label class="btn btn-outline-primary">
                                                    Upload new photo
                                                    <input type="file" class="account-settings-fileinput">
                                                </label><br><br>
                                                <div id="txt">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                            </div>
                                        </div>
                                        <hr class="border-light m-0">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="form-label">Username</label>
                                                <!--Username shoud be updated which recorded in registation-->
                                                <input type="text" class="form-control mb-1" value="Savidya9800">
                                            </div>
                                            <div class="form-group">
                                                <!--First name shoud be updated which recorded in registation-->
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" value="Savidya">
                                            </div>
                                            <div class="form-group">
                                                <!--Last name shoud be updated which recorded in registation-->
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" value="Jayalath">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">E-mail</label>
                                                <input type="text" class="form-control mb-1" value="Savidyajayalath@icloud.com">
                                                <div class="alert alert-warning mt-3">
                                                    Your email is not confirmed. Please check your inbox.<br>
                                                    <a href="javascript:void(0)">Resend confirmation</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" value="400 Broome St, New York, NY 10013, USA">
                                            </div><br>
                                            <div class="form-group">
                                                <button class="btn_del">Delete Account</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="account-change-password">
                                        <div class="card-body pb-2">
                                            <div class="form-group">
                                                <label class="form-label">Current password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">New password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Confirm new password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-info">
                                        <div class="card-body pb-2">
                                            <div class="form-group">
                                                <label class="form-label">Bio</label>
                                                <textarea class="form-control"
                                                    rows="5">A dedicated blood donor, has saved countless lives through his selfless contributions. With over 50 donations, he exemplifies compassion and community service. Generosity embodies the true spirit of altruism, making him a hero in the eyes of those he's helped.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Birthday</label>
                                                <input type="text" class="form-control" value="Aug 25,2002">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <select class="custom-select">
                                                    <option selected>USA</option>
                                                    <option>Canada</option>
                                                    <option>UK</option>
                                                    <option>Sri Lanka</option>
                                                    <option>France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr class="border-light m-0">
                                        <div class="card-body pb-2">
                                            <h6 class="mb-4">Contacts</h6>
                                            <div class="form-group">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control" value="+12 (946) 237 05">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control" value>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-social-links">
                                        <div class="card-body pb-2">
                                            <div class="form-group">
                                                <label class="form-label">Twitter</label>
                                                <input type="text" class="form-control" value="https://twitter.com/user">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Facebook</label>
                                                <input type="text" class="form-control" value="https://www.facebook.com/user">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Google+</label>
                                                <input type="text" class="form-control" value>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">LinkedIn</label>
                                                <input type="text" class="form-control" value>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Instagram</label>
                                                <input type="text" class="form-control" value="https://www.instagram.com/user">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-connections">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-twitter">Connect to
                                                <strong>Twitter</strong></button>
                                        </div>
                                        <hr class="border-light m-0">
                                        <div class="card-body">
                                            <h5 class="mb-2">
                                                <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                                        class="ion ion-md-close"></i> Remove</a>
                                                <i class="ion ion-logo-google text-google"></i>
                                                You are connected to Google:
                                            </h5>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="f9979498818e9c9595b994989095d79a9694">[email&#160;protected]</a>
                                        </div>
                                        <hr class="border-light m-0">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-facebook">Connect to
                                                <strong>Facebook</strong></button>
                                        </div>
                                        <hr class="border-light m-0">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-instagram">Connect to
                                                <strong>Instagram</strong></button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-notifications">
                                        <div class="card-body pb-2">
                                            <h6 class="mb-4">Activity</h6>
                                            <div class="form-group">
                                                <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked>
                                                    <span class="switcher-indicator">
                                                        <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Email some one who liked to get my blood</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked>
                                                    <span class="switcher-indicator">
                                                        <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Email some one who answer my forum thread</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="switcher">
                                                    <input type="checkbox" class="switcher-input">
                                                    <span class="switcher-indicator">
                                                        <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Email me when someone follows me</span>
                                                </label>
                                            </div>
                                        </div>
                                        <hr class="border-light m-0">
                                        <div class="card-body pb-2">
                                            <h6 class="mb-4">Application</h6>
                                            <div class="form-group">
                                                <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked>
                                                    <span class="switcher-indicator">
                                                        <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">News and announcements</span>
                                                </label>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </div>
                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript">
            
                </script>
            </div>
          
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