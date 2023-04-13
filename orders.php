<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'petshop';

$conn = new mysqli($server, $username, $password, $database);

$sql = 'SELECT * FROM petinfo';

$r1 = $conn->query($sql);
$result = $r1->fetch_all();

session_start();

$sql2 = 'SELECT * FROM user_info where email_id="' . $_SESSION['email'] . '"';
$r2 = $conn->query($sql2);
$result2 = $r2->fetch_all();

$sql3 = 'SELECT * FROM orders_info where email="' . $_SESSION['email'] . '"';
$r3 = $conn->query($sql3);
$result3 = $r3->fetch_all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="orders.css">
    <link rel="stylesheet" href="universal.css">
</head>
<div class="navbar">
    <div class="nav1">
        <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt="" class="PetShop_logo">
        <h1 class="nav-name">PetShop</h1>
        <form action="search.php" method="POST" name="searchInput">
            <input type="text" placeholder="Search" class="search-bar" name="search" id="search">
            <button class="form-button">
                <div class="search-btn" style="left: 682px;top: 21.5px;">
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
                <a class="tab" href="orders.php" style="color: black;font-weight:600">MY ORDERS</a>
            </div>
    </div>
</div>
</div>
<body style="background-color: #fff4e6;">
    <div class="order-outer-div" id="outer">
        <?php
        if (count($result3) > 0) {
            echo '<p class="order-head-text">My Orders</p>';
            for ($i = 0; $i < count($result3); $i++) {
                echo '<div class="order-div">';
                echo '<div class="order-inner-div">';
                echo '<div style="display: block;width:65%;">';
                echo '<p style="font-size: 25px;font-family: sans-serif;margin-right: 10px;color:gray"><b style="color:black">Order </b>#' . $result3[$i][1] . '</p>';
                echo '<p style="font-size: 18px;font-family: sans-serif;margin-right: 10px;margin-top: 20px;"><b>Order Date: </b>' . $result3[$i][3] . '</p>';
                echo '<p style="font-size: 18px;font-family: sans-serif;margin-right: 10px;margin-top: 10px;"><b>Estimate Delivery Date: </b>' . $result3[$i][4] . '</p>';
                echo '<p style="font-size: 18px;font-family: sans-serif;margin-right: 10px;margin-top: 10px;"><b>Order Amount: </b>₹' . $result3[$i][2] . '</p>';
                echo '<p style="font-size: 18px;font-family: sans-serif;margin-right: 10px;margin-top: 10px;"><b>Payment Method: </b>Cash On Delivery</p>';
                echo '</div>';
                echo '<a class="order-track-btn" href="track.php?id=' . $result3[$i][1] . '">Track Order</a>';
                echo '<a class="order-cancel-btn" href="cancel.php?id=' . $result3[$i][1] . '">Cancel Order</a>';
                echo '</div>';
                echo '</div>';
            }
        }
        else{
            echo "<div class='no-order-outer'>";
            echo "<div class='no-order-left'>";
            echo "<h1>NO ORDERS FOUND</h1>";
            echo "<p>Looks like you haven't made your choice yet...</p>";
            echo "<a href='homepage.php'>Go Shopping</a>";
            echo "</div>";
            echo "<img src='no-order.png' alt='' class='no-order-img'>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>