<!--id doesnt work-->
<?php
session_start();
include("conn.php");

$email = isset($_SESSION["email"]) ? $_SESSION["email"] : '';
$id = isset($_POST['animid']) ? $_POST['animid'] : '';
$idd = isset($_POST['value']) ? $_POST['value'] : '';

$sql = "INSERT INTO favorite(email_fav,id_fav) VALUES ('$email','$id');";
if (!mysqli_query($con, $sql)||$id==''||$email=='') {
    header("Location: error_favorite_animal.php");
    exit;
} else {
    header("Location: favourites.php");
    exit;
}
?>