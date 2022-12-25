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
  <div>
    <div class="wrapper">
      <?php
      $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
      if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
      }
      $sql = "SELECT id,name,gender,price,image,age,type,email_ani FROM animals WHERE type = cat"; //EDITED HERE YA SARA FL WHERE
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?> <div> <button class="button"><img src="<?php echo $row["image"] ?>" class="button img">
              <?php if ($row["price"] == 0) { ?><p>Up for adoption</p>
              <?php } else {
                echo $row["price"];
              } ?></button>

<form method="post" action="">
        <input type="submit" name="action" value="Edit"/>
        <input type="submit" name="action" value="Update"/>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      </form>
      
          </div>
      <?php }
      } else
        echo "0 results";
      $connection->close(); ?>
    </div>
    <footer><?php include 'footer.html'; ?></footer>
    </body>

</html>