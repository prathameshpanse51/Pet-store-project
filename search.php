<?php
$server='localhost';
$username='root';
$password='';
$database='petshop';

$conn= new mysqli($server,$username,$password,$database);

$name = $_POST['search'];
$sql='SELECT * FROM petinfo WHERE pet_name like "%'.$name.'%"';

$r1=$conn->query($sql);
$result=$r1->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs</title>
    <link rel="stylesheet" href="universal.css">
    <link rel="stylesheet" href="dog.css">
</head>
<div class="navbar">
    <div class="nav1">
        <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt=""
            class="PetShop_logo">
        <h1 class="nav-name">PetShop</h1>
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
                <a class="tab" href="homepage.php" style="color: black;font-weight:600">HOME</a>
                <a class="tab" href="profile.php">PROFILE</a>
                <a class="tab" href="about.php">ABOUT</a>
                <a class="tab" href="cart.php">MY CART</a>
                <a class="tab" href="orders.php">MY ORDERS</a>
            </div>
    </div>
</div>
<section class="main-body">
    <div class="head-box" style="text-decoration: none;">
        <p class="category-name" style="font-size: 2rem;word-spacing: 10px;width:max-content;top:50px;text-decoration: none;left:0px;width:100%">Searched for "<?php echo $_POST['search']?>"</p>
    </div>
    <div class="category-box">
    <?php
        if(count($result)>0){
        for($i=0;$i<count($result);$i++){
            echo '<a class="branch-box-anchor" style="margin-top: 130px; background-color: #ffe4ef;">';
            echo '<div class="branch-box">';
            echo '<img src="'.$result[$i][2].'" alt=""';
            echo 'class="branch-img">';
            echo '<div class="main-info">';
            echo '<p class="breed-name">'.$result[$i][3].'</p>';
            echo '<p class="breed-info">'.$result[$i][4].'</p>';
            echo '<div class="breed-info2">';
            echo '<p class="breed-origin">Origin : </p>';
            echo '<p class="breed-origin-info">'.$result[$i][5].'</p>';
            echo '<p class="breed-group">Group : </p>';
            echo '<p class="breed-group-info">'.$result[$i][6].'</p>';
            echo '</div>';
            echo '<h2 class="breed-price">₹'.$result[$i][7].'</h2>';
            echo '<button class="breed-buy" onclick="addtocart()">Add to cart</button>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
        }
    }
    else{
        echo '<h2 class="no-prd">No Product Found!!</h2>';
    }
        ?>
</section>


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
            <p><a href="mailto:harshada21comp@student.mes.ac.in" class="foo2-item">harshada21comp@student.mes.ac.in</a>
            </p>
            <p><a href="mailto:priyanka21comp@student.mes.ac.in" class="foo2-item">priyanka21comp@student.mes.ac.in</a>
            </p>
        </div>
        <div class="projectby" style="width: 37%;">
            <p class="foo2-head">Location</p>
            <p style="margin-top: 10px;width:90%"><a href="https://goo.gl/maps/568aA67ydMaCWZhr9" class="foo2-item">Dr.
                    K. M. Vasudevan Pillai Campus, Plot No. 10, Sector 16, New Panvel East,
                    Navi Mumbai, Maharashtra 410206</a></p>
        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434283395!2d73.12548141489991!3d18.990200987137168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1674372496022!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
</div>

<body>

</body>

</html>