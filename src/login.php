<?php
    include 'connect.php';

    session_start();

    if(isset($_POST['login'])){
        $uname = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM `register` WHERE (`R_Username` = '$uname' OR `R_Email` = '$uname') AND `R_Password` = '$pass' ";

        $loggedin = mysqli_query($CONNECT, $sql);

        if($loggedin){
            $row = mysqli_num_rows($loggedin);

            if($row == 1){
                $_SESSION['username'] = $uname;
                echo "<script>alert('Login successful!')</script>";
                header("location: after_login.php");
            }
            else{
                echo "<script>alert('Login failed!')</script>";
            }
        }
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Life Blood Save a Life | Login</title>
        <!--set an icon to browser-->
        <link rel="shortcut icon" type="x-icon" href="img/logo icon 123.png">
        
        <link rel="stylesheet" href="styles/login.css">
    </head>
    
    <body>
        <div class="center">
            <h1>Login</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label for="username">Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="pass" required>
                    <span></span>
                    <label for="pass">Password</label>
                </div>
                
                <!-- <input type="submit" value="Login"> -->
                <button class="button" name="login">Login</button>
                <div class="signup_link">
                    Not a member ? <a href="register.html">Signup</a>
                </div>
            </form>
        </div>
        
    </body>
</html>