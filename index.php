<!DOCTYPE html>
<html>
<?php
session_start();
require_once('Config.php') ;
?>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="index.css">
      <header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php">&nbsp &nbsp &nbsp Adopt</a></p>
            <?php
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
          if($email!='')
          {?> <button class="btn heart">
                <a href="favourites.php"><img src="heart1.png" width="35px"></a>
           </button>
          <div class="dropdown"> <button class="dropbtn">
            </button>
            <div class="dropdown-content">
                <a href="Uploads_Bought.php">My Animals</a>
                <a href="Account.php">Account</a>
                <a href="Setting.php">Setting</a>
                <a href="logout.php">Logout</a>
                </div>
            </div>
            <?php 
          }
            else
            {;
                ?>
                <div class="link">
                <a href="SignUp.php" ><button style="border:none; cursor:pointer;"><p class="link"> Sign Up</p></button></a>
                <a href="SignIn.php"><button style="border:none;cursor:pointer;"><p class="link">Login</button></p></a>
                </div>
                <?php
            }
            ?>
        </header>
      <body>
        <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav-->
        <div class="search">
            <center>
             <form action="result.php" method="post">
                 <input type="text"
                     placeholder="      Search Dogs, Cats"
                     name="search">
                <button class="butt" type="submit" formaction="result.php">
                    <img src="search.png" width="60px">
                 </button>
             </form>
             <p class="friend" style="margin-bottom: 0.01%">
                Choose your new <br>friend!
            <p class="friend" style="font-size:150%;margin-bottom: 1%;">Browse in shelters over 150 pet available<br>
            </p>
        </p>  
             </center>
         </div><center>
            <a href="cats.php">
            <button class="buttons cat">
            </button></a>
            <a href="dogs.php"><button class="buttons dog"></button> </a>
            <article class="pets"><p>Cats</p><p> Dogs </p></article>
        </center>
         <div style="border: dotted 6px;"> <center>
            <img src="tyler.jpg" height="15%" width="15%">
            <img src="tyler.jpg" height="15%" width="15%">
            <img src="tyler.jpg" height="15%" width="15%">
            <img src="tyler.jpg" height="15%" width="15%">
            <img src="tyler.jpg" height="15%" width="15%">
            <img src="tyler.jpg" height="15%" width="15%">
            
        </center>
         </div>
         <footer id="colophon" class="site-footer">
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
          </nav>
          </footer>
    </body>
</html>