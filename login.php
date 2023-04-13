<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="petshop";

$conn = new mysqli($servername, $username, $password,$database);

session_start();
if(isset($_POST['email'])){
  $sql = 'SELECT password FROM user_info WHERE email_id="'.$_POST['email'].'";';
  $r1=$conn->query($sql);
  $result=$r1->fetch_all();
  if(count($result)>0){
    if(password_verify($_POST["pass"],$result[0][0])){
        $_SESSION['email']=$_POST['email'];
        echo '<script>window.location.href="homepage.php";</script>';
    }
    else{
        echo "<script>alert('Invalid Credentials!!')</script>";
      }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" href="login_pg.css">

<body>
    <div class="outer">
        <div class="inner-box">
            <div class="image-box">
                <img src="login_sticker.jpg" alt="" class="logo">
                <div class='social-logo'>
                    <a href="https://www.instagram.com/pillaiscollege/"><img
                            src="https://www.nicepng.com/png/full/356-3563301_instagram-instagram-circle-icon.png"
                            alt="" class="insta-logo" /></a>
                    <a href="https://twitter.com/pillaiscollege"><img
                            src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png"
                            alt="" class="twitter-logo" /></a>
                    <a href="https://www.facebook.com/pillaicollege"><img
                            src="https://www.edigitalagency.com.au/wp-content/uploads/Facebook-logo-blue-circle-large-transparent-png.png"
                            alt="" class="facebook-logo" /></a>
                </div>
            </div>
            <div class="box">
                <h1 id="head">Login</h1>
                <form action="login.php" name="LogForm" class="form" method="POST">
                    <label for="emailid">Email Id</label><br>
                    <input type="text" name="email" id="Emailid" required><br>
                    <label for="pass">Password</label><br>
                    <input type="password" name="pass" id="pass" required>
                    <input type="submit" value="LOGIN" id="button1">
                </form>
                <a href='forgot.php' style="text-decoration: none">
                    <h2 id="forgot">Forgot Password?</h2>
                </a>
                <p class="existing">Not an existing user?</p>
                <a href="registration.php" class="reg_btn">Register</a>
            </div>
        </div>
    </div>

</body>

</html>