<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="website icon" type="jpg"
        href="https://img.freepik.com/free-vector/cute-pug-dog-bite-bone-cartoon-vector-icon-illustration-animal-nature-icon-concept-isolated-premium_138676-7370.jpg?w=740&t=st=1678242323~exp=1678242923~hmac=7496c32ceec53940367a7be716fa245f2af25b27ef5131091735444a1d324e9c">
    <script>
        function login() {
            location.href = "login.php";
        }
    </script>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="universal.css">
</head>

<body>
    <div class="navbar">
        <!-- <a href="homepage.php"> -->
        <div class="nav1">
            <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt=""
                class="PetShop_logo">
            <h1 class="nav-name">PetShop</h1>
            <!-- </a> -->
            <form action="search.php" method="POST" name="searchInput">
                <input type="text" placeholder="Search" class="search-bar" name="search" id="search">
                <button class="form-button">
                    <div class="search-btn">
                        <img src="search-icon.png" alt="" class="search-icon">
                    </div>
                </button>
            </form>
        </div>
        <div class="nav2">
        <div class="nav-tabs">
                <a class="tab" href="homepage.php">HOME</a>
                <a class="tab" href="profile.php">PROFILE</a>
                <a class="tab" href="about.php" style="color: black;font-weight:600">ABOUT</a>
                <a class="tab" href="cart.php">MY CART</a>
                <a class="tab" href="orders.php">MY ORDERS</a>
            </div>
        </div>
    </div>

    <div class="mid-box">
        <img src="https://img.freepik.com/free-vector/flat-people-bathing-pets_52683-65393.jpg?w=996&t=st=1675734090~exp=1675734690~hmac=68d9ad62c9ec45871963418536b90f64a5a0a69716d83f39d02b2b83bda60f86"
            alt="" class="about-img">
        <div class="info">
            <h4 class="heading-aboutUs" style="color: #a2d2ff;">About us</h4>
            <h2 class="info-1" style="color: #ffafcc;margin-top: 16px;">We are the best for your pet care services</h2>
            <p class="info-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, tempora reiciendis velit
                porro id
                recusandae
            </p>
            <ul>
                <li class="info-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li class="info-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li class="info-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            </ul>
        </div>
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