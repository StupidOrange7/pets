<link rel="stylesheet" href="trial.css">
<p class="left_header_adopt"> <a href="home.php"><img src="images/logoo.png" width="90" height="80"></a></p>
<?php
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
if ($email != '') {
  echo $email; ?>
  <div class="dropdown"> <button class="dropbtn">
    </button>
    <div class="dropdown-content">
      <a href="MyAnimals.php">My Animals</a><br>
      <a href="Account.php">Account</a><br>
      <a href="logout.php">Logout</a><br>
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
    <a href="SignUp.php"><button style="height: 4px;border:none; cursor:pointer;">
        <p class="link"> Sign Up</p>
      </button></a>
    <a href="SignIn.php"><button style="height: 4px;border:none;cursor:pointer;">
        <p class="link">Login
      </button></p></a>
  </div>
<?php
}
?>
</header>