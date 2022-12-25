<?php
require "Includes/History.php";
$guests = $_POST['guests'];
$days = $_POST['days'];
$transport = $_POST['transport'];
session_start();
$_SESSION["transport"] = $transport;
$_SESSION["guests"] = $guests;
$_SESSION["days"] = $days;
$photo = $_SESSION['photo'];
$total = 500;
if($transport == "Yes")
$total+=200;
if($photo == "hawaii")
$total+=1000;
if($photo == "maldives")
$total+=1700;
if($photo == "Turkey")
$total+=600;
if($photo == "Prague")
$total+=2000;
if($photo == "Amesterdam")
$total+=3000;
if($photo == "Albania")
$total+=1250;
$total=$total*$days*$guests;
        echo " your total ".$total;
$_SESSION["total"] = $total;
        ?>
<html>

        <head>
        <style>
    .background {
  /* The image used */
  background-image: url("ggg.png");
  background-repeat: no-repeat;
  width: 200px;
  height:200px;
}
</style> 
        </head>
        <body  >
                <br><br>
                <a href="end.php"> <input type="button" value="Confirm" formaction="end.php"/> </a>
                <a href="home.php"> <input type="button" value="Decline" formaction="home.php" /> </a>
                <img src="ggg.png" style=" width: 700px; height:600px; float:right;" />
                <div class="background"></div>
</body>
</html>
