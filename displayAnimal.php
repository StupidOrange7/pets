<?php
session_start();
require_once('Config.php');
?>
<!doctype html>
<html>
<link rel="stylesheet" href="account.css">
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="form.css">
<header class="header" style="background-color:#efeef1;">
<p class="left_header_adopt"> <a href="home.php"><img src="images/logoo.png" width="90" height="80"></a></p>
<?php
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
if ($email != '') {
  echo $email; ?>
  <div class="dropdown"> <button class="dropbtn">
    </button>
    <div class="dropdown-content">
      <a href="Uploads_Bought.php">My Animals</a>
      <a href="Account.php">Account</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
   <button class="btn heart">
     <a href="favourites.php"><img src="images/heart.png" width="35px"></a>
  </button>
  <p class="uploadd"> <a href="upload.php"><img src="images/upload.png" width="60" height="60"></a></p>

  <div>
<?php
} else {;
?>
  <div class="link">
    <a href="SignUp.php"><button style="border:none; cursor:pointer;">
        <p class="link"> Sign Up</p>
      </button></a>
    <a href="SignIn.php"><button style="border:none;cursor:pointer;">
        <p class="link">Login
      </button></p></a>
  </div>
<?php
}
?>
</header>
<body>
<?php
    $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
    if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
    }
    $id = isset($_POST['animid']) ? $_POST['animid'] : '';  
    $sql = "SELECT * FROM animals WHERE id='$id'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc()
?>
  <div>
    <center><br><br><br>
        <?php echo '<img class="pic" src="images/' . $row["a_image"] . '" height="150" width="150"></p>' ?>
      
    <form class="form-style-7">
<ul>
<li>
    <label for="name">Name</label>
    <?php echo $row["a_name"]; ?>
    </li>
    <li>
    <label for="name">Type</label>
    <?php echo $row["type"]; ?>
    </li>
<li>
    <label for="email">Gender</label>
    <?php echo $row["a_gender"]; ?></li>
<li>
    <label for="address">Price</label>
    <?php echo '$'.$row["price"]; ?></li>
    <li>
    <label for="age">Age</label>
    <?php echo $row["month"].' months'; ?></li>
<li>

</ul>
</form>
<!--
      
      <label style="font-size: larger; color:#7c09a8" >Name: </p> </label>

      <label style="font-size: larger;color:#7c09a8">Age: </p></label>

      <label style="font-size: larger;color:#7c09a8">Address: <?php #echo $_SESSION["address"]; ?></p></label>

      <label style="font-size: larger;color:#7c09a8">Email: </p></label>
--></center>
  </div>
</body>
<?php $connection->close();?>
<footer><?php include 'footer.html'; ?></footer>

</html>