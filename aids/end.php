<html>
  <body >
<?php
session_start();
include ("conn.php");
$username = $_SESSION['username'];
$guests = $_SESSION['guests'];
$days = $_SESSION['days'];
$transport = $_SESSION['transport'];
$photo = $_SESSION['photo'];
$total = $_SESSION['total'];

$sql = "insert into history (username, guests, days, transport , trip, total) values ('$username','$guests','$days','$transport','$photo','$total') ";
if (! mysqli_query($con, $sql))
{
  echo "Error ".mysqli_error($con);
}
else
?>
<br><br><br><br><br>
<center><div style="background-color:white;border-radius:10px;height:200px;
  top: 60%;
  left: 50%;
  width: 400px;
  "><h1> Thanks  <?php echo $_SESSION['username']; ?> for booking with us!</h1>
      <br>
      <a href="home.php"> <input type="button" value="Book another trip! " formaction="home.php"/> </a>
      <a href="index.php"> <input type="button" value="Exit" formaction="index.php" /> </a>
    </div>
    <img src="thank you.png" style=" width: 400px; height:200px; float:bottom;" />
  </center>
  </body>
      </html>

