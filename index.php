<!DOCTYPE html>
<html>
<?php
session_start();
require_once('Config.php') ;
?>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="index.css">
      <header class="header" style="background-color:#efeef1; ">
      <?php include 'header.php';?>
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
</body>
<footer><?php include 'footer.html';?></footer>
</html>