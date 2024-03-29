<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script>
        function login() {
            location.href = "login.php";
        }
    </script>
</head>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="universal.css">

<body>
    <div class="navbar">
        <div class="nav1">
            <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt=""
                class="PetShop_logo">
            <h1 class="nav-name">PetShop</h1>
            <button class="login-button" onclick="login()">Login</button>
        </div>
        <div class="nav2">
            <div class="nav-tabs">
                <a class="tab" href="homepage.php" style="color: black;font-weight:600">HOME</a>
                <a class="tab" href="login.php">PROFILE</a>
                <a class="tab" href="login.php">ABOUT</a>
            </div>
        </div>
    </div>
    <div class="mid-box">
        <img src="petshop.jpg" alt="" class="homepage-img">
        <p class="quote">If having a soul means being able to feel love and loyalty and gratitude, then animals are
            better off than a lot of humans.</p>
    </div>
    <div class="head-box">
        <p class="category-head">Category</p>
    </div>
    <div class="category-box">
        <a href="login.php" class="branch-box-anchor">
            <div class="branch-box">
                <img src="dog.jpg" alt="" class="branch-img">
                <p class="branch-text">Dog</p>
            </div>
        </a>
        <a href="login.php" class="branch-box-anchor">
            <div class="branch-box">
                <img src="https://cdn.shopify.com/s/files/1/0812/5745/products/cat_2.9x3.0_700x700.jpg?v=1608058269"
                    alt="" class="branch-img">
                <p class="branch-text">Cat</p>
            </div>
        </a>
        <!-- <a href="login.php" class="branch-box-anchor">
            <div class="branch-box">
                <img src="https://www.pickastick.in/wp-content/uploads/2021/11/parrot_L2.png" alt="" class="branch-img">
                <p class="branch-text">Parrot</p>
            </div>
        </a>
        <a href="login.php" class="branch-box-anchor">
            <div class="branch-box">
                <img src="rabbit.jpg" alt="" class="branch-img">
                <p class="branch-text">Rabit</p>
            </div>
        </a> -->
        <a href="login.php" class="branch-box-anchor">
            <div class="branch-box">
                <img src="https://ii1.pepperfry.com/media/catalog/product/w/a/800x880/wall-stickers-blue-love-birds--6424-wall-stickers-blue-love-birds--6424-toizy6.jpg"
                    alt="" class="branch-img">
                <p class="branch-text">Love Birds</p>
            </div>
        </a>
        <a href="login.php" class="branch-box-anchor">
            <div class="branch-box">
                <img src="https://img.freepik.com/premium-vector/set-items-pet-shop_24877-60841.jpg?w=740" alt=""
                    class="branch-img">
                <p class="branch-text">Pet Food</p>
            </div>
        </a>
    </div>
    <div class="footer">
        <div class="foo1">
            <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt=""
                class="footer_logo">
            <h1 class="foo-name">Petshop</h1>
            <div class='social-logo'>
                <a href="https://www.instagram.com/pillaiscollege/"><img
                        src="https://www.nicepng.com/png/full/356-3563301_instagram-instagram-circle-icon.png" alt=""
                        class="insta-logo" /></a>
                <a href="https://twitter.com/pillaiscollege"><img
                        src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png"
                        alt="" class="twitter-logo" /></a>
                <a href="https://www.facebook.com/pillaicollege"><img
                        src="https://www.edigitalagency.com.au/wp-content/uploads/Facebook-logo-blue-circle-large-transparent-png.png"
                        alt="" class="facebook-logo" /></a>
            </div>
        </div>
        <div class="foo2">
            <div class="projectby">
                <p class="foo2-head">Project By</p>
                <p class="foo2-item" style="margin-top: 10px;">Prathamesh Panse</p>
                <p class="foo2-item">Aswini Nambiar</p>
                <p class="foo2-item">Harshada Pawar</p>
                <p class="foo2-item">Priyanka Sekhar</p>
            </div>
            <div class="projectby">
                <p class="foo2-head">Support</p>
                <p style="margin-top: 10px;"><a href="mailto:prathamesh21comp@student.mes.ac.in"
                        class="foo2-item">prathamesh21comp@student.mes.ac.in</a></p>
                <p><a href="mailto:aswini21comp@student.mes.ac.in" class="foo2-item">aswini21comp@student.mes.ac.in</a>
                </p>
                <p><a href="mailto:harshada21comp@student.mes.ac.in"
                        class="foo2-item">harshada21comp@student.mes.ac.in</a></p>
                <p><a href="mailto:priyanka21comp@student.mes.ac.in"
                        class="foo2-item">priyanka21comp@student.mes.ac.in</a></p>
            </div>
            <div class="projectby" style="width: 37%;">
                <p class="foo2-head">Location</p>
                <p style="margin-top: 10px;width:90%"><a href="https://goo.gl/maps/568aA67ydMaCWZhr9"
                        class="foo2-item">Dr. K. M. Vasudevan Pillai Campus, Plot No. 10, Sector 16, New Panvel East,
                        Navi Mumbai, Maharashtra 410206</a></p>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434283395!2d73.12548141489991!3d18.990200987137168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1674372496022!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    </div>

</body>

</html>