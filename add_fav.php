<!--id doesnt work-->
<?php
session_start();
require_once('Config.php');
include("conn.php");

$id = isset($_POST['id']) ? $_POST['id'] : '';
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : '';

$sql = "INSERT INTO favorite(email_fav,id_fav) VALUES ('$email','$id');";
if (!mysqli_query($con, $sql)||$id==''||$email=='') {
    header("Location: error_favorite_animal.php");
    exit;
} else {
    header("Location: cats.php");
    exit;
}
?>