<?php
session_start();
include ("conn.php");
$a_name= isset($_POST['a_name']) ? $_POST['a_name'] : '';
$a_gender = isset($_POST['a_gender']) ? $_POST['a_gender'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$a_image = isset($_POST['a_image']) ? $_POST['a_image'] : '';
$type= isset($_POST['type']) ? $_POST['type'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$sql = "INSERT INTO animals(a_name,a_gender,price,month,a_image,email_ani,type) VALUES ('$a_name','$a_gender','$price','$month','$a_image','$email','$type');";
if (!mysqli_query($con, $sql)||$a_image==''||$a_name==''||$month==''||$a_gender==''||$price=='')
{
  header("Location: error_adding_animal.php");
    echo $msg;
exit;
}
else
{
  header("Location: MyAnimals.php");
  exit;
}?>