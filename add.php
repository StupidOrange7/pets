<?php
session_start();
include ("conn.php");
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

$sql = "INSERT INTO info(fname, lname, email, password, age, address) VALUES ('$fname','$lname','$email','$password','$age','$address');";
if (! mysqli_query($con, $sql))
{
    $msg= 'error adding new user';
  header("Location: SignUp.php,$msg");
}
else
  header("Location: index.php");
?>