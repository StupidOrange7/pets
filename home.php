<!DOCTYPE html>
<html>
<?php
session_start();
require_once('Config.php') ;
?>
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="index.css">
      <header style="background-color:#efeef1; ">
      <?php include 'header.php';?>
      </header>
      <body>
        <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav-->
        <div class="search">
            <center>
             <form action="result.php" method="post">
                 <input type="text"
                     placeholder="      Search for the type of the animal, preferred name, preferred  or even age (IN MONTHS)"
                     name="search">
                <button class="butt" type="submit" formaction="result.php">
                    <img src="images/search.png" width="60px">
                 </button>
             </form>
             <p class="friend" style="margin-bottom: 0.01%">
                Choose your new <br>furriend!
            <p class="friend" style="font-size:150%;margin-bottom: 1%;">Browse in shelters over 150 pet available<br>
            </p>
        </p>  
             </center>
         </div><center>
            <a href="cats.php">
                <button class="buttons cat">
                </button>
            </a>
            <a href="dogs.php">
                <button class="buttons dog">
                </button> 
            </a>
            <a href="fish.php">
                <button class="buttons fish">
                </button>
            </a>
            <a href="turtle.php">
                <button class="buttons turtle">
                </button> 
            </a>
            <article class="pets"><p>Cats</p><p> Dogs </p><p>Fish</p><p> Turtles </p></article>
            
            <article class="pets"></article>
        </center>
         <div style="border: dotted 6px;"> <center>
         <!--
            <img src="images/tyler.jpg" height="15%" width="15%">
            <img src="images/tyler.jpg" height="15%" width="15%">
            <img src="images/tyler.jpg" height="15%" width="15%">
            <img src="images/tyler.jpg" height="15%" width="15%">
            <img src="images/tyler.jpg" height="15%" width="15%">
            <img src="images/tyler.jpg" height="15%" width="15%">
        -->
        <?php
            $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
            if (!$connection) 
            {
                echo "Error connecting to MySQL: " . mysqli_connect_error();
                die;
            }
            $sql1 = "SELECT * FROM animals";
            $result = $connection->query($sql1);
            $x=1;
            while ($row = $result->fetch_assoc()) {
                $x++;
            }
            $random= mt_rand(1,intval($x));
            $sql = "SELECT * FROM animals WHERE id = '$random'"; //EDITED HERE YA SARA FL WHERE
            $result = $connection->query($sql);

            if ($result->num_rows > 0) 
            {
                while ($row = $result->fetch_assoc()) 
                {
                    echo '<img src="images/' . $row["a_image"] . '" style="height: 15%;width: 15%;margin-left: auto;margin-right: auto;border-radius: 13px;"/>';
                }
            }?>
        </center>
         </div>
</body>
<?php $connection->close();?>
<footer><?php include 'footer.html';?></footer>
</html>