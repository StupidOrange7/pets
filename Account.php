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
<?php include 'header.php'; ?>
</header>
<body>

  <div>
    <center><br><br><br>
    <?php echo '<img class="pic" src="images/'. $_SESSION["image"] .'" height="150" width="150">';
    $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
    if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
    }
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';  
    $sql = "SELECT * FROM info WHERE email='$email'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
?>
      
    <form class="form-style-7" action="update.php" method="post">
<ul>
<li>
    <label for="fname">First Name</label>
   <p> <?php echo $row["fname"]; ?></p>
    </li>
    <li>
    <label for="lname">Last Name</label>
    <p><?php echo $row["lname"]; ?></p>
    </li>
<li>
    <label for="email">Email</label>
    <p> <?php echo $row["email"]; ?></p>
</li>
<li>
    <label for="address">Address</label>
    <p> <?php echo $row["address"]; ?></p>
</li>
    <li>
    <label for="age">Age</label>
   <p> <?php echo $row["age"]." years"; ?></p>
</li>
<li>

</ul>
<?php if($_SESSION["email"]!="admin@gmail.com"){ ?>
<a style="text-decoration: none;" href="update.php"><img src="update_button.png" height="40" width="85"></a>
<?php }?>
</form>
</center>
  </div>
</body>
<footer><?php include 'footer.html'; ?></footer>

</html>