<?php
session_start();
include ("conn.php");
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$sql = "DELETE FROM animals WHERE id=;";
if (!mysqli_query($con, $sql)||$a_image==''||$a_name==''||$month==''||$a_gender==''||$price=='')
{
  $_SESSION['message'] = $con->error;
  $msg =$_SESSION['message'];
  echo "hi".$a_name.$type.$a_gender.$a_image.$price.$month.'<br>';
//  header("Location: error_adding_animal.php");
    echo $msg;
exit;
}
else
{
  header("Location: MyAnimals.php");
  exit;
}?>