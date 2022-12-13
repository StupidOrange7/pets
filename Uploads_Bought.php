<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css">
<style>
    .empty {
        position: relative;
        top: 50%;
        left: 1%;
        right: 50%;
        bottom: 50%;
        font-size: 200%;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        gap: 15px 15%;
        flex-flow: row;
        justify-content: center;
        list-style: none;
        position: relative;
        top: 5%;
    }

    .button {
        height: 19em;
        width: 17em;
        border-radius: 2em;
        overflow: hidden;
    }

    .button .img {
        height: 70%;
        width: auto;
        display: block;
        position: relative;
        left: 5%;
    }

    .button:hover {
        background-color: rgb(144, 138, 144);
    }

    .button:active {
        background-color: green;
        opacity: 0.5;
    }

    .inner_button {
        height: 2em;
        width: 5em;
        position: absolute;
        border-radius: 6px;
        left: 34%;
        right: 20%;
        bottom: 4%;
    }

    .inner_button:hover {
        background-color: green;
    }

    .inner_button:active {
        background-color: rgb(30, 30, 30);
    }
</style>
<?php
session_start();
require_once('Config.php');
?>

<body>
    <header style="background-color: white;">
        <?php include 'header.php'; ?>
    </header>
    <center>
        <div style="background-color: #efeef1;height: 90vh; width:100%">
            <?php
            $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
            if (!$connection) {
                echo "Error connecting to MySQL: " . mysqli_connect_error();
                die;
            }
            $email = isset($_SESSION["email"]) ? $_SESSION["email"] : '';
            $sql = "SELECT name,gender,price,image,age,type FROM animals WHERE email_ani LIKE '$email'";
            $result = $connection->query($sql);

            if ($result->num_rows > 0 ) {
                while ($row = $result->fetch_assoc()) {
            ?> <div> <button class="button"><img src="<?php echo $row["image"] ?>" class="button img">
                            <?php if ($row["price"] == 0) { ?><p>Up for adoption</p>
                            <?php } else {
                                echo $row["price"];
                            } ?></button>
                        <button id=application class="inner_button" onclick="location.href='application.php'">Get</button>
                        <button id=favorite class="inner_button" onclick="location.href='add_fav.php'">Favourite</button>
                    </div>
            <?php }
            } else
                echo "0 results";
            $connection->close(); ?>
        </div>
</body>
<footer><?php include 'footer.html'; ?></footer>

</html>