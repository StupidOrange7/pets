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
    <?php echo '<img class="pic" src="images/'. $_SESSION["image"] .'" height="150" width="150">';?>
      
    <form class="form-style-7" action="update.php" method="post">
<ul>
<li>
    <label for="name">First Name</label>
   <p> <?php echo $_SESSION["fname"]; ?></p>
    </li>
    <li>
    <label for="name">Last Name</label>
    <p><?php echo $_SESSION["lname"]; ?></p>
    </li>
<li>
    <label for="email">Email</label>
    <p> <?php echo $_SESSION["email"]; ?></p>
</li>
<li>
    <label for="address">Address</label>
    <p> <?php echo $_SESSION["address"]; ?></p>
</li>
    <li>
    <label for="age">Age</label>
   <p> <?php echo $_SESSION["age"]; ?></p>
</li>
<li>

</ul>
<a style="text-decoration: none;" href="update.php"><img src="update_button.png" height="40" width="85"></a>
</form>
</center>
  </div>
</body>
<footer><?php include 'footer.html'; ?></footer>

</html>