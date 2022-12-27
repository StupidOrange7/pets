<?php
session_start();
include ("conn.php");
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

$sql = "Update info SET fname = '$fname',lname = '$lname',age = '$age',address = '$address' WHERE email = '$email'";
if (! mysqli_query($con, $sql)||$fname==''||$lname==''||$email==''||$address=='')
{
  header("Location: error_adding_user.php");
  exit;
}
else
{
  header("Location: home.php");
  exit;
}

?>