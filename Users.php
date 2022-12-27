<!DOCTYPE html>
<html>
<link rel="stylesheet" href="cats.css">
<?php
session_start();
require_once('Config.php');
?>
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="index.css">
<header class="header" style="background-color:#efeef1; ">
  <?php include 'header.php'; ?>
</header>
<center>
  <div style="background-image: url('bgg.jpg');background-repeat: none;">
    <div class="wrapper">
      <?php
      $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
      if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
      }
      $result = mysqli_query($connection, "SELECT * FROM info");
      if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) 
        {
      ?> <div>
            <button class="button"> 
              <?php echo '<img src="images/' . $row["image"] . '" style="height: 90%;width: 90%;margin-left: auto;margin-right: auto;border-radius: 13px;"/>';?>
            </button>
            <div>
                <form method="POST" action="displayUser.php">
                <input class="inner_button" type="submit" value="View User">
                <input type="hidden" name="useremail" value="<?php echo $row["email"]; ?>">
            </form>
            </div>
          </div>
    <?php 
            }
          } else
            echo "0 results";
          $connection->close(); ?>
    </div>
    <footer><?php include 'footer.html'; ?></footer>
    </body>
</html>