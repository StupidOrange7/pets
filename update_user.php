<?php
session_start();
include ("conn.php");
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

$sql = "Update info(fname, lname, age, address VALUES ('$fname','$lname','$age','$address') WHERE email = "."'$email'".";";
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