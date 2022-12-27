<?php
session_start();
include ("conn.php");
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$id = isset($_POST['animid']) ? $_POST['animid'] : '';
$sql = "DELETE FROM animals WHERE id='$id' ";
$sql1 = "DELETE FROM favorite WHERE id_fav='$id' AND email_fav='$email'";
if (!mysqli_query($con, $sql1) || !mysqli_query($con, $sql))
{
  $_SESSION['message'] = $con->error;
  $msg =$_SESSION['message'];
  header("Location: error_adding_animal.php");
exit;
}
else
{
  header("Location: MyAnimals.php");
  exit;
}?>