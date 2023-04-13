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
                <img src="limsys_logo.png" alt="" class="limsys_logo">
                <img src="login_sticker.jpg" alt="" class="logo">
                <div class='social-logo'>
                <img src="https://www.nicepng.com/png/full/356-3563301_instagram-instagram-circle-icon.png" alt="" 
                class="insta-logo"/>
                <img src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" alt="" class="twitter-logo"/>
                <img src="https://www.edigitalagency.com.au/wp-content/uploads/Facebook-logo-blue-circle-large-transparent-png.png" alt="" class="facebook-logo"/>
            </div>
            </div>
            <div class="forgot-box">
                <h1 id="head">Forgot Password</h1>
                <form action="" name="ForgotForm" method="POST" class="form">
                    <label for="mnum" class="no">Mobile Number</label><br>
                    <input type="number" name="mnum" id="mnum" required><br>
                    <input type="submit" value="Send OTP" id="button2">
                </form>
                <p class="forgot-existing">Already an existing user?</p>
                <a href="login.php" class="for_btn">Login</a>
            </div>
        </div>
    </div>
</body>
</html>