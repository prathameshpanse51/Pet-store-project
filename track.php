<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'petshop';

$conn = new mysqli($server, $username, $password, $database);

session_start();

$sql = 'SELECT * FROM user_info where email_id="' . $_SESSION['email'] . '"';
$r1 = $conn->query($sql);
$result = $r1->fetch_all();

$sql3 = 'SELECT * FROM orders_info where email="' . $_SESSION['email'] . '" and order_id='.$_GET['id'].'';
$r3 = $conn->query($sql3);
$result3 = $r3->fetch_all();

$sql4 = 'SELECT * FROM cart where email_id="' . $_SESSION['email'] . '"';
$r4 = $conn->query($sql4);
$result4 = $r4->fetch_all();

$date=date("M d, Y");
$comp="";
if($date>$result3[0][3]){
    $comp="completed";
    $loc1="Reached Pet Shop Warehouse, Yoganand Society, Ashok Nagar, Yogi Nagar, Borivali, Mumbai, Maharashtra 400091";
}

$comp2="";
if($date>=$result3[0][4]){
    $comp2="completed";
    $loc1="Delivered at ".$result3[0][5];
}

if($date==$result3[0][3]){
    $loc1="Left Pet Shop Warehouse, Bakrol Road, near Galaxy Hotel, Ahmedabad, Gujarat - 382210";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='UTF-8'>
    <title>Track</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="track.css">
    <link rel="stylesheet" href="order_placed.css">
    <link rel="stylesheet" href="universal.css">
    <script>
        function navToHome(){
        window.location.href="homepage.php";
    }
    </script>
</head>
<div class="navbar" style="padding: 0;">
    <div class="nav1">
        <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt="" class="PetShop_logo">
        <h1 class="nav-name">PetShop</h1>
        <form action="search.php" method="POST" name="searchInput">
            <input type="text" placeholder="Search" class="search-bar" name="search" id="search">
            <button class="form-button">
                <div class="search-btn" style="left: 669px;top: 8.5px;">
                    <img src="search-icon.png" alt="" class="search-icon">
                </div>
            </button>
        </form>
    </div>
    <div class="nav2">
        <div class="nav-tabs" style="border: none">
                <a class="tab" href="homepage.php" style="color:white;text-decoration: none;">HOME</a>
                <a class="tab" href="profile.php" style="color:white;text-decoration: none;">PROFILE</a>
                <a class="tab" href="about.php" style="color:white;text-decoration: none;">ABOUT</a>
                <a class="tab" href="cart.php" style="color:white;text-decoration: none;">MY CART</a>
                <a class="tab" href="orders.php" style="color:white;text-decoration: none;">MY ORDERS</a>
            </div>
    </div>
</div>
</div>
<body>
    <div class="order-outer-div">
        <h1 class="order-text">Your Order</h1>
        <div class="order-inner-div1">
            <div class="order-head-text">
                <p style="font-weight:bold">Order Number</p>
                <p style="color:#79879A">#<?php echo $result3[0][1] ?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Date</p>
                <p style="color:#79879A"><?php echo $result3[0][3] ?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Total</p>
                <p style="color:#79879A">₹<?php echo $result3[0][2] ?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Shipped To</p>
                <p style="color:#79879A"><?php echo $result[0][0] ?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Address</p>
                <p style="color:#79879A"><?php echo $result3[0][5] ?></p>
            </div>
            <div class="order-head-text">
                <button onclick="navToHome()" style="cursor: pointer;">Return To Homepage</button>
            </div>
        </div>
        <div class="order-inner-div2">
            <div class="order-shipping-div">
                <div class="order-green-div" style="width: 100%;">
                    <p class="order-green-head">Shipped</p>
                    <p class="order-green-text">Est. delivery between <?php echo $result3[0][3] ?> - <?php echo $result3[0][4] ?></p>
                </div>
            </div>
            <div class="container" style="width: 100%;margin-right:0">
                <div class="row">
                    <div class="col-12 col-md-10 hh-grayBox pt45 pb20" style="background-color: #f9fafb;">
                        <div class="row justify-content-between">
                            <div class="order-tracking completed">
                                <span class="is-complete"></span>
                                <p>Ordered<br><span><?php echo $result3[0][3] ?></span></p>
                            </div>
                            <div class="order-tracking <?php echo $comp ?>">
                                <span class="is-complete"></span>
                                <p>Shipped<br><span><?php echo date("M d, Y",strtotime($result3[0][3].'+1 days')); ?></span></p>
                            </div>
                            <div class="order-tracking <?php echo $comp2 ?>">
                                <span class="is-complete"></span>
                                <p>Delivered<br><span><?php echo $result3[0][4] ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="font-size: 18px;">
                <p><b>Status: </b><?php echo $loc1 ?></p>
                <p><b>Estimated Delivery Date: </b><?php echo $result3[0][4] ?></p>
                <p><b>Delivery Partner: </b>Bluedart Express</p>
            </div>
        </div>
    </div>
</body>

</html>