<?php
$server="localhost";
$username="root";
$password="";
$database="petshop";

$conn= new mysqli($server,$username,$password,$database);
session_start();
$name=$_GET['name'];
$sql1='SELECT * FROM petinfo WHERE pet_name="'.$name.'"';
$r1=$conn->query($sql1);
$result1=$r1->fetch_all();
$sql2='INSERT INTO `cart` VALUES ("'.$_SESSION['email'].'","'.$result1[0][3].'",'.$result1[0][7].',"'.$result1[0][2].'",1)';
$r2=$conn->query($sql2);
echo '<script>window.location.href="cart.php";</script>';

?>