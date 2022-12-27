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
<?php
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
if ($email != '') { ?>
  <?php include 'header.php';
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
    $email = isset($_POST['useremail']) ? $_POST['useremail'] : '';
    $admin = 'admin@gmail.com';
    $sql = "SELECT * FROM info WHERE email='$email'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc()
?>
  <div>
    <center><br><br><br>
    <?php echo '<img class="pic" src="images/' . $row["image"] . '" height="150" width="150"></p>' ?>
    <form class="form-style-7">
<ul>
<li>
    <label for="name">First Name</label>
    <?php echo $row["fname"]; ?>
    </li>
    <li>
    <label for="name">Last Name</label>
    <?php echo $row["lname"]; ?>
    </li>
<li>
    <label for="email">Email</label>
    <?php echo $row["email"]; ?></li>
<li>
    <label for="address">Address</label>
    <?php echo $row["address"]; ?></li>
    <li>
    <label for="age">Age</label>
    <?php echo $row["age"].' years'; ?></li>
<li>

</ul>
</form>
<button button id=favorite class="inner_button" onclick="location.href='Users.php'">Back</button>
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