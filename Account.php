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
    <?php echo $_SESSION["fname"]; ?>
    </li>
    <li>
    <label for="name">Last Name</label>
    <?php echo $_SESSION["lname"]; ?>
    </li>
<li>
    <label for="email">Email</label>
    <?php echo $_SESSION["email"]; ?></li>
<li>
    <label for="address">Address</label>
    <?php echo $_SESSION["address"]; ?></li>
    <li>
    <label for="age">Age</label>
    <?php echo $_SESSION["age"]; ?></li>
<li>

</ul>
<a style="text-decoration: none;" href="update.php"><img src="update_button.png" height="40" width="85"></a>
</form>
<!--
      
      <label style="font-size: larger; color:#7c09a8" >Name: </p> </label>

      <label style="font-size: larger;color:#7c09a8">Age: </p></label>

      <label style="font-size: larger;color:#7c09a8">Address: <?php echo $_SESSION["address"]; ?></p></label>

      <label style="font-size: larger;color:#7c09a8">Email: </p></label>
--></center>
  </div>
</body>
<footer><?php include 'footer.html'; ?></footer>

</html>