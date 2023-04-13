<?php
$server='localhost';
$username='root';
$password='';
$database='petshop';

$conn= new mysqli($server,$username,$password,$database);

session_start();
$sql='SELECT * FROM user_info where email_id="'.$_SESSION['email'].'"';
$r1=$conn->query($sql);
$result=$r1->fetch_all();

$sql3='SELECT * FROM orders_info where order_id="'.$_GET['id'].'"';
$r3=$conn->query($sql3);
$result3=$r3->fetch_all();

$sql4='SELECT * FROM cart where email_id="'.$_SESSION['email'].'"';
$r4=$conn->query($sql4);
$result4=$r4->fetch_all();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Cart - Craftizen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="order_placed.css">
    <link rel="stylesheet" href="universal.css">
    <script>
        function navToHome(){
        window.location.href="homepage.php";
    }
    function navToTrack(id){
        window.location.href="track.php?id="+id;
    }
    </script>
</head>
<div class="navbar">
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
        <div class="nav-tabs">
                <a class="tab" href="homepage.php">HOME</a>
                <a class="tab" href="profile.php">PROFILE</a>
                <a class="tab" href="about.php">ABOUT</a>
                <a class="tab" href="cart.php">MY CART</a>
                <a class="tab" href="orders.php">MY ORDERS</a>
            </div>
    </div>
</div>
</div>
<body style="background-color: white;">
    <div class="order-outer-div">
        <h1 class="order-text">Your Order</h1>
        <div class="order-inner-div1">
            <div class="order-head-text">
                <p style="font-weight:bold">Order Number</p>
                <p style="color:#79879A">#<?php echo $result3[0][1]?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Date</p>
                <p style="color:#79879A"><?php echo $result3[0][3]?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Total</p>
                <p style="color:#79879A">₹<?php echo $result3[0][2]?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Shipped To</p>
                <p style="color:#79879A"><?php echo $result[0][0]?></p>
            </div>
            <div class="order-head-text">
                <p style="font-weight:bold">Address</p>
                <p style="color:#79879A"><?php echo $result3[0][5]?></p>
            </div>
            <div class="order-head-text">
                <button onclick="navToHome()">Return To Homepage</button>
            </div>
        </div>
        <div class="order-inner-div2">
            <div class="order-shipping-div">
                <div class="order-green-div">
                    <p class="order-green-head">Shipped</p>
                    <p class="order-green-text">Est. delivery between <?php echo $result3[0][3]?> - <?php echo $result3[0][4]?></p>
                </div>
                <div class="order-green-button">
                    <button onclick="navToTrack(<?php echo $result3[0][1] ?>)">Track Shipment</button>
                </div>
            </div>
            <?php 
            for($i=0;$i<count($result4);$i++){
            echo '<div class="order-prd-div">';
            echo '<img src="'.$result4[$i][3].'" alt="" class="order-prd-img">';
            echo '<div style="display: block;margin-left:20px;line-height:10px;margin-top:5px">';
            echo '<p style="font-size: 16px;"><b>'.$result4[$i][1].'</b></p>';
            echo '<p><b>Price: </b>₹'.$result4[$i][2].'</p>';
            echo '<p><b>Quantity: </b>'.$result4[$i][4].'</p>';
            echo '</div>';
            echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>