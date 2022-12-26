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
<body class="window_fit">
<center>
  <div style="background-image: url('bgg.jpg');background-repeat: none;">
    <div class="wrapper">
      <?php
      $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
      if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
      }
      $result = mysqli_query($connection, "SELECT * FROM animals WHERE type LIKE 'turtle';");
      if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
      ?> <div>
            <button class="button">
              <?php echo '<img src="images/' . $row["a_image"] . '" style="height: 90%;width: 90%;margin-left: auto;margin-right: auto;border-radius: 13px;"/>';
              if ($row["price"] == 0) { ?>
                <p>Up for adoption</p>
              <?php } else {
                echo $row["price"];
              }
              ?>
            </button>
            <div class="inner_button">
            <form method="POST" action="add_fav.php">
                  <input type="submit" value="Favorite">
                  </button>
                  <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
                </form>
              <?php if ($_SESSION['fname'] == 'admin') { ?>
                <form method="POST" action="delete_pet.php">
                  <input type="submit" value="Delete">
                  </button>
                  <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
                </form>
            </div>
          </div>
    <?php }
            }
          } else
            echo "0 results";
          $connection->close(); ?>
    </div>
        </center>
    <footer><?php include 'footer.html'; ?></footer>
    </body>
  </div>
</html>