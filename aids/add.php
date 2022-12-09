<?php
session_start();

include ("conn.php");
$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$password = $_POST['password'];
	$username = $_POST['username'];

$sql = "INSERT INTO user(name, username, email, password, age, phone) VALUES ('$name','$username','$email','$password','$age','$phone');";
if (! mysqli_query($con, $sql))
  echo 'error adding new user';
else
echo 'user added successfully';
?>
