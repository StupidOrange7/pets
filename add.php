<?php
session_start();
include ("conn.php");
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : '';

$sql = "INSERT INTO info(fname, lname, email, password, age, address, image) VALUES ('$fname','$lname','$email','$password','$age','$address','$image');";
if (! mysqli_query($con, $sql))
{
    $msg= 'error adding new user';
  header("Location: SignUp.php,$msg");
}
else
  header("Location: indexx.php");
?>