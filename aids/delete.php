<?php
session_start();
include ("conn.php");
$username = $_SESSION['username'];
$sql = "DELETE FROM user WHERE username='$username'";$sql1 = "DELETE FROM history WHERE username='$username'";
if (! mysqli_query($con, $sql)&&! mysqli_query($con, $sql1))
{
  echo "Error ".mysqli_error($con);
}
else
echo 'deleted';
?>
    <a href="logout.php"> <input type="button" value="Go Back "/> </a>
 