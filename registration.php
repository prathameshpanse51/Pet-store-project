<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="petshop";

$conn = new mysqli($servername, $username, $password,$database);

session_start();
if(isset($_POST['name'])){
  $sql = 'INSERT INTO `user_info` VALUES ("'.$_POST['name'].'","'.password_hash($_POST['pass'],PASSWORD_DEFAULT).'","'.$_POST['email'].'","'.$_POST['m_number'].'","'.$_POST['address'].'");';
  $conn->query($sql);
  $_SESSION['email']=$_POST['email'];
  echo '<script>window.location.href="homepage.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
  <script>
    function validateForm() {

      var Password = document.RegForm.Password.value;
      var StudentName = document.RegForm.StudentName.value;
      var EmailId = document.RegForm.EmailId.value;
      var MobileNumber = document.RegForm.MobileNumber.value;
      var format1 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
      var format2 = /[abcdefghijklmnopqrstuvwzyzABCDEFGHIJKLMNOPQRSTUVWXYZ]+/;
      var format3 = /[1234567890]+/;


      if (Password == "") {
        alert("Enter Password");
        return false;
      }
      if (Password != "") {
        if (format1.test(Password) == false) {
          alert("Please Enter Numbers,Characters,Special Symbols (@,#,_)");
          return false;
        }
        if (format2.test(Password) == false) {
          alert("Please Enter Numbers,Characters,Special Symbols (@,#,_)");
          return false;
        }
        if (format3.test(Password) == false) {
          alert("Please Enter Numbers,Characters,Special Symbols (@,#,_)");
          return false;
        }
      }
      if (StudentName == "") {
        alert("Enter Student Name");
        return false;
      }
      if (EmailId == "") {
        alert("Enter Email ID");
        return false;
      }
      if (MobileNumber.length != 10) {
        alert("Invalid Mobile Number");
        return false;
      }
      else {
        return true;
      }
    }
  </script>
</head>
<link rel="stylesheet" href="register.css">

<body>
  <div class="box">
    <h1 id="head">Register</h1>
    <form name="RegForm" action="registration.php" onsubmit="return validateForm()" method="POST">
      <label for="name" id="sn">Name</label><br>
      <input type="text" name="name" id="name"><br>
      <label for="email" id="mi">Email Id</label><br>
      <input type="text" name="email" id="email"><br>
      <label for="m_number" id="mn">Mobile Number</label><br>
      <input type="text" name="m_number" id="m_number"><br>
      <label for="pass" id="ps">Password</label><br>
      <input type="password" name="pass" id="pass"><br>
      <label for="address" id="address">Address</label><br>
      <input type="text" name="address" id="add"><br>
      <input type="submit" value="REGISTER" id="button2" style="cursor: pointer;">
    </form>
    <p class="existing">Already an existing user?</p>
    <a href="login.php" class="for_btn">Login</a>
  </div>
</body>

</html>