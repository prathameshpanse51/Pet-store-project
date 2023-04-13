<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$server='localhost';
$username='root';
$password='';
$database='petshop';

$conn= new mysqli($server,$username,$password,$database);

session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
}
$sql='SELECT * FROM user_info where email_id="'.$email.'"';
$r1=$conn->query($sql);
$result=$r1->fetch_all();

$total=$_GET['total'];
$orid=random_int(10000000, 99999999);
$q1='INSERT INTO `orders_info` VALUES ("'.$email.'","'.$orid.'","'.$total.'","'.date("M d, Y").'","'.date("M d, Y",strtotime(date("y-m-d").'+3 days')).'","'.$result[0][4].'")';
$conn->query($q1);

$sql2='SELECT * FROM orders_info where order_id='.$orid.'';
$r2=$conn->query($sql2);
$result2=$r2->fetch_all();

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'prathamesh21comp@student.mes.ac.in';
$mail->Password = 'ftdwfukpxfcpoens';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('prathamesh21comp@student.mes.ac.in');
$mail->addAddress($_SESSION['email']);
$mail->isHTML(true);
$message = "<b>Pet Shop</b> <br>";
$message .= "Woo hoo! Your order is on its way. Your order details can be found below. <br><br>";
$message .= "<b>ORDER SUMMARY</b><br><br>";
$message .= "<b>Order #:</b> ".$result2[0][1]." <br>";
$message .= "<b>Order Date:</b> ".$result2[0][3]." <br>";
$message .= "<b>Order Total:</b> ₹".$result2[0][2]." <br><br>";
$message .= "<b>SHIPPING ADDRESS:</b> ".$result2[0][5]." <br><br>";
$message .= "<b>Thank you for placing your order!</b> <br><br>";
$message .= "<b>We hope you enjoyed your shopping experience with us and that you will visit us again soon.</b> <br>";
$mail->Body = $message;
$mail->Subject = "Pet Shop";
$mail->send();

echo '<script>window.location.href="order_placed.php?id='.$result2[0][1].'"</script>';
?>