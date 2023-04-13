<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'petshop';

$conn = new mysqli($server, $username, $password, $database);

session_start();
$sql2 = 'SELECT * FROM user_info where email_id="' . $_SESSION['email'] . '"';
$r2 = $conn->query($sql2);
$result2 = $r2->fetch_all();

$sql = 'SELECT * FROM cart where email_id="' . $_SESSION['email'] . '"';

$r1 = $conn->query($sql);
$result = $r1->fetch_all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="universal.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="dog.css">
</head>
<div class="navbar">
    <div class="nav1">
        <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt="" class="PetShop_logo">
        <h1 class="nav-name">PetShop</h1>
        <form action="search.php" method="POST" name="searchInput">
            <input type="text" placeholder="Search" class="search-bar" name="search" id="search">
            <button class="form-button">
                <div class="search-btn" style="left: 659px;top: 8.5px;">
                    <img src="search-icon.png" alt="" class="search-icon">
                </div>
            </button>
        </form>
    </div>
    <div class="nav2">
        <div class="nav-tabs" style="border: none;">
                <a class="tab" href="homepage.php">HOME</a>
                <a class="tab" href="profile.php">PROFILE</a>
                <a class="tab" href="about.php">ABOUT</a>
                <a class="tab" href="cart.php" style="color: black;font-weight:600">MY CART</a>
                <a class="tab" href="orders.php">MY ORDERS</a>
            </div>
    </div>
</div>
</div>
<body>
    <div class="body">
        <div class="left-section">
            <div style=" margin: 2%">
                <h2 style="margin-left: 30%;">SHOPPING CART</h2>
                <section id="cart-container" class="container my-5">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>Remove</td>
                                <td>Images</td>
                                <td>Product</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Add</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if (count($result) != 0) {
                                for ($i = 0; $i < count($result); $i++) {
                                    echo '<tr>';
                                    echo '<td><a href="remove.php?name=' . $result[$i][1] . '"><img src="./delete-bin-6-fill.png" style="width: 25px; height: auto;"></a> </td>';
                                    echo '<td><img src="' . $result[$i][3] .'"></td>';
                                    echo '<td><h5 style="font-size: 16px;font-family:math;">' . $result[$i][1] . '</h5></td>';
                                    echo '<td><h5 style="font-size: 18px;font-family:math;">₹' . $result[$i][2] . '</h5></td>';
                                    echo '<td><p class="w-25 pl-1" style="margin:auto">' . $result[$i][4] . '</td>';
                                    echo '<form action="add.php?add=' . $result[$i][1] . '" method="POST">';
                                    echo '<td><input class="w-25 pl-1" style="width:60% !important;padding-left:10px;margin-top:20px;" value="0" type="number" name="qty"><input type="submit" class="add-prd" value="ADD"/></td>';
                                    echo '</form>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr>';
                                echo '<td><a href="#"><img src="./delete-bin-6-fill.png" style="width: 25px; height: auto;"></a> </td>';
                                echo '<td><p class="w-25 pl-1" style="margin:auto">empty</td>';
                                echo '<td><h5 style="font-size: 16px;font-family:math;">empty</h5></td>';
                                echo '<td><h5 style="font-size: 18px;font-family:math;">empty</h5></td>';
                                echo '<td><p class="w-25 pl-1" style="margin:auto">empty</td>';
                                echo '<td><input class="w-25 pl-1" style="width:60% !important;padding-left:10px;margin-top:20px;" value="0" type="number" name="qty"><input type="submit" class="add-prd" value="ADD"/></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>
        <div class="right-section" style="background-color: beige;">
            <section id="cart-bottom" class="container">
                <div class="col">
                    <div class="total ">
                        <div style="text-align: center;">
                            <h5>TOTAL</h5>
                            <?php
                            for ($i = 0; $i < count($result); $i++) {
                                echo '<div class="d-flex justify-content-between">';
                                echo '<h6 style="font-weight: 100;font-family:math">' . $result[$i][1] . '</h6>';
                                echo ' <p tyle="font-weight: 100;">' . $result[$i][2] * $result[$i][4] . '.00</p>';
                                echo '</div>';
                            }
                            ?>
                            <div class="d-flex justify-content-between">
                                <h6>Subtotal</h6>
                                <?php
                                $subtot = 0;
                                for ($i = 0; $i < count($result); $i++) {
                                    $subtot = $subtot + ($result[$i][2] * $result[$i][4]);
                                }
                                echo '<p>' . $subtot . '.00</p>';
                                ?>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Shipping</h6>
                                <?php
                                if(count($result)>0){
                                    echo '<p>40.00</p>';
                                }else{
                                    echo '<p>0.00</p>';
                                }
                                ?>
                            </div>
                            <hr class="second-hr">
                            <div class="d-flex justify-content-between">
                                <h6>Total</h6>
                                <?php
                                if(count($result)>0){
                                    echo '<p>' . ($subtot + 40) . '.00</p>';
                                }else{
                                    echo '<p>' . ($subtot) . '.00</p>';
                                }
                                ?>
                            </div>
                            <p style="position: relative;top:15px;">Only COD Available</p>
                            <a class="btn btn-lg" style="background-color: aquamarine;margin-top:20px;" href="order_backend.php?total=<?php echo ($subtot + 40) ?>" role="button">Place Order</a>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</body>
<div class="footer">
    <div class="foo1">
        <img src="https://www.shutterstock.com/image-vector/pet-shop-logo-template-260nw-1053368123.jpg" alt="" class="footer_logo">
        <h1 class="foo-name">Petshop</h1>
        <div class='social-logo'>
            <a href="https://www.instagram.com/pillaiscollege/"><img src="https://www.nicepng.com/png/full/356-3563301_instagram-instagram-circle-icon.png" alt="" class="insta-logo" /></a>
            <a href="https://twitter.com/pillaiscollege"><img src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" alt="" class="twitter-logo" /></a>
            <a href="https://www.facebook.com/pillaicollege"><img src="https://www.edigitalagency.com.au/wp-content/uploads/Facebook-logo-blue-circle-large-transparent-png.png" alt="" class="facebook-logo" /></a>
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
            <p style="margin-top: 10px;"><a href="mailto:prathamesh21comp@student.mes.ac.in" class="foo2-item">prathamesh21comp@student.mes.ac.in</a></p>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434283395!2d73.12548141489991!3d18.990200987137168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1674372496022!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
</div>

<body>

</body>

</html>