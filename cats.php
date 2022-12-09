<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="cats.css">
<?php
session_start();
require_once('aids/Config.php') ;
?>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="index.css">
      <header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php">&nbsp &nbsp &nbsp Adopt</a></p>
            <?php
          $username = $_SESSION['username'];
          if($_SESSION['username']==null)
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
</body>
<footer id="colophon" class="site-footer" style="position: relative; top: 50px;px;">
    <div class="social-wrapper">
      <ul>
        <li>
          <a href="#" target="_blank">
            <img src="https://www.mchenryvillage.com/images/instagram-icon.png" alt="Instagram Logo" class="instagram-icon"></a>
        </li>
        <li>
          <a href="#" target="_blank">
            <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
        </li>
        <li>
          <a href="#" target="_blank">
            <img src="https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170" alt="Youtube Logo" class="youtube-icon"></a>
        </li>
      </ul>
    </div>
</center>
  </footer>
</html>