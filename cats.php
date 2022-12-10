<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="cats.css">
<?php
session_start();
require_once('Config.php') ;
?>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="index.css">
      <header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php">&nbsp &nbsp &nbsp Adopt</a></p>
            <?php
          $email = $_SESSION['email'];
          if($email=='')
          { ?> <button class="btn heart">
                <a href="favourites.php"><img src="heart1.png" width="35px"></a>
           </button> 
          
          <div class="dropdown"> <button class="dropbtn">
            </button>
            <div class="dropdown-content">
                <a href="Uploads_Bought.php">My Animals</a>
                <a href="Account.php">Account</a>
                <a href="Setting.php">Setting</a>
                </div>
            </div>
            <?php 
          }
            else
            {
                ?>
                <div class="link">
                <a href="SignUp.php" ><button style="border:none; cursor:pointer;"><p class="link"> Sign Up</p></button></a>
                <a href="SignIn.php"><button style="border:none;cursor:pointer;"><p class="link">Login</button></p></a>
                </div>
                <?php
            }
            ?>
        </header>
        <center>
        <div>
        <div class="wrapper">
            <div> <button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button><button class="inner_button">Favourite</button></div>
            <div> <button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button></div>
            <div><button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button></div>
            <div><button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button></div>
            <div><button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button></div>
            <div><button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button></div>
            <div> <button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button><button class="inner_button">Get</button></div>
            </div>
    </div>
    <footer><?php include 'footer.html';?></footer>
</body>
</html>