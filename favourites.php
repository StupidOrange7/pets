<!DOCTYPE html>
<html>
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="cats.css">
<link rel="stylesheet" href="index.css">
<?php
session_start();
require_once('Config.php');
?>
<body class="window_fit">
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
                $email = $_SESSION['email'];
                $result = mysqli_query($connection, "SELECT * FROM animals,favorite WHERE email_fav='$email' AND id_fav=id;");
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
                <form method="POST" action="unfavourite.php">
                <input type="submit" class="inner_button delete" id="delete" value="Unfavourite">
                  </button>
                <input type="hidden" name="animid" value="<?php echo $row["id"];?>">
                </form>
            </div>
                            
                        </div>
                <?php }
                } else
                    echo "0 results";
                $connection->close(); ?>
            </div>
            <footer><?php include 'footer.html'; ?></footer>
        </div>
        </body>
</html>