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
<?php include 'header.php';?></header>
<body>

  <div >
    <center><br><br><br>
    <?php echo '<img class="pic" src="images/'. $_SESSION["image"] .'" height="150" width="150">';?>
    </p>
    <form class="form-style-7" action="update_user.php" method="post">
<ul>
<li>
    <label for="name">First Name</label>
    <input type="text" name="fname" maxlength="30">
</li>
<li>
    <label for="name">Last Name</label>
    <input type="text" name="lname" maxlength="30">
</li>
<li>
    <label for="email">Email</label>
    <?php echo $_SESSION["email"]; ?></li>
<li>
    <label for="address">Address</label>
    <input type="text" name="address" placement maxlength="100">
</li>
<li>
    <label for="age">Age</label>
    <input type="number" name="age" maxlength="2">
</li>       
<li>
</li>
</ul>
<input type="submit" value="Update" class="inner_button">
</form>
  </div>
</body>
<footer><?php include 'footer.html'; ?></footer>

</html>