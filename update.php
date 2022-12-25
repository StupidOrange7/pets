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

  <div>
    <center><br><br><br>
        <img class="pic" src= height="150" width="150"></p>
      
    <form class="form-style-7" action="update.php" method="post">
<ul>
<li>
    <label for="name">Name</label>
    <input type="text" name="name" maxlength="30">
    </li>
<li>
    <label for="email">Email</label>
    <?php echo $_SESSION["email"]; ?></li>
<li>
    <label for="address">Address</label>
    <input type="text" name="address" maxlength="100"></li>
    <li>
    <label for="age">Age</label>
    <input type="number" name="age" maxlength="2"></li>
<li>

</ul>
<a style="text-decoration: none;" href="update_user.php"><img src="update_button.png" height="40" width="85"></a>
</form>
  </div>
</body>
<footer><?php include 'footer.html'; ?></footer>

</html>