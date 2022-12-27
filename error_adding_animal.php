<?php
session_start();
include ("conn.php");
$msg = $_SESSION['message'];
    echo "<h1>Error Adding New Animal, please fill the information correctly!</h1><br>". $msg;
?>
<button button id=favorite class="inner_button" onclick="location.href='upload.php'">Back</button>
