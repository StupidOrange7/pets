<!DOCTYPE html>
<html>
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="cats.css">
<link rel="stylesheet" href="index.css">
<?php
session_start();
require_once('Config.php');
?><center>
<body class="window_fit">
        <header class="header" style="background-color:#efeef1; ">
        <?php include 'header.php'; ?>
        </header>
        
            <div>
                <div class="wrapper">
                <?php
                $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
                if (!$connection) {
                    echo "Error connecting to MySQL: " . mysqli_connect_error();
                    die;
                }
                $search = isset($_POST['search']) ? $_POST['search'] : '';
                $result = mysqli_query($connection, "SELECT * FROM animals WHERE a_name LIKE '$search' OR a_gender LIKE '$search' OR price LIKE '$search' OR month LIKE '$search' OR type LIKE '$search';");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) 
                    {
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
            <form method="POST" action="displayAnimal.php">
                <input type="submit" value="View Animal">
                <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
            </form>
            <form method="POST" action="animalForm.php">
                <input type="submit" value="Buy/Adopt">
                <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
            </form>
            <form method="POST" action="remove_fav.php">
                <input type="submit" value="Remove from Favorites">
                <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
            </form>
              <?php if ($_SESSION['email'] == 'admin@gmail.com') { ?>
                <form method="POST" action="delete_pet.php">
                <input type="submit" value="Delete">
                <input type="hidden" name="animid" value="<?php echo $row["id"];?>">
                </form>
    <?php }?></div></div><?php
            }
          }
          else
          {
          ?><p class="no_res"><?php echo "0 results"; 
          }?>
          <?php $connection->close(); ?>
    </div>
    </body>
        </center>
     <footer><?php include 'footer.html'; ?></footer>
</html>