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
          ?>   <a href="favourites.php"><img src="heart1.png" width="35px"></a>
           </button> 
          
          <div class="dropdown"> <button class="dropbtn">
            </button>
            <div class="dropdown-content">
                <a href="Uploads_Bought.php">My Animals</a>
                <a href="Account.php">Account</a>
                <a href="Setting.php">Setting</a>
                </div>
            </div>
        </header>
        <footer><?php include 'footer.html';?></footer>
