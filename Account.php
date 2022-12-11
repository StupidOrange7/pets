<?php
session_start();
require_once('Config.php') ;
?>
<!doctype html>
<html>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="SignIn.css">
      <header class="header" style="background-color:#efeef1;">
      <?php include 'header.php';?>
        </header>
        <body >
          <div><center>
            <label style="font-size: large;">Name: <p style="font-size: medium;"><?php echo $_SESSION["fname"];?></p> </label>
            
            <label style="font-size: large;">Age: <p style="font-size: medium;"><?php echo $_SESSION["age"];?></p></label>
            
            <label style="font-size: large;">Address:<p style="font-size: medium;"> <?php echo $_SESSION["address"];?></p></label>
            
            <label style="font-size: large;">Email: <p style="font-size: medium;"><?php echo $_SESSION["email"];?></p></label>

            <label style="font-size: large;">Email: <p style="font-size: medium;"><img src="<?php echo $_SESSION["image"]?>"></p></label>
            </center></div>
        </body>
        <footer><?php include 'footer.html';?></footer>
        </html>