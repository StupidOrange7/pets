<?php
session_start();
require_once('Config.php') ;
include ("conn.php"); 
$name = isset($_POST['name']) ? $_POST['name'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : '';

$sql = "INSERT INTO animals(name,gender,price,image,age,type,email_ani) VALUES ('$name','$gender','$price','$image','$month','$type','$email');";
if (! mysqli_query($con, $sql))
{
    $msg= 'error adding new animal';
    header("Location: Upload.php");
}
else
  header("Location: indexx.php");
?>