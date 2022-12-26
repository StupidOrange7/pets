<?php
session_start();
include ("conn.php");
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$id = isset($_GET['animid']) ? $_GET['animid'] : '';
$idd = isset($_GET['value']) ? $_GET['value'] : '';
$sql = "DELETE FROM animals WHERE id='$id' ";
if (!mysqli_query($con, $sql))
{
  $_SESSION['message'] = $con->error;
  $msg =$_SESSION['message'];
  echo "hi<br>".$id.$email.$idd;
//  header("Location: error_adding_animal.php");
    echo $msg;
exit;
}
else
{
  echo "hi<br>".$id.$email.$idd;
  //header("Location: MyAnimals.php");
  exit;
}?>