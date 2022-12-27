<?php
session_start();
require_once('Config.php');
?>
<!doctype html>
<html>
<link rel="stylesheet" href="account.css">
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="form.css">
<header class="header" style="background-color:#efeef1;">
<?php include 'header.php';?>
  <div>
</header>
<body>
<?php
    $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
    if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
    }
    $id = isset($_POST['animid']) ? $_POST['animid'] : '';  
    $sql = "SELECT * FROM animals WHERE id='$id'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc()
?>
  <div>
    <center><br><br><br>
        <?php echo '<img class="pic" src="images/' . $row["a_image"] . '" height="150" width="150"></p>' ?>
      
    <form class="form-style-7">
<ul>
<li>
    <label for="name">Name</label>
    <?php echo $row["a_name"]; ?>
    </li>
    <li>
    <label for="name">Type</label>
    <?php echo $row["type"]; ?>
    </li>
<li>
    <label for="email">Gender</label>
    <?php echo $row["a_gender"]; ?></li>
<li>
    <label for="address">Price</label>
    <?php echo '$'.$row["price"]; ?></li>
    <li>
    <label for="age">Age</label>
    <?php echo $row["month"].' months'; ?></li>
<li>
</ul>
</form>
<div class="inner_button">
            <form method="POST" action="add_fav.php">
                <input type="submit" value="Favorite">
                <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
            </form>
            <form method="POST" action="animalForm.php">
                <input type="submit" value="Buy/Adopt">
                <input type="hidden" name="animid" value="<?php echo $row["id"]; ?>">
            </form>
              <?php if ($_SESSION['email'] == 'admin@gmail.com') {?>
                <form method="POST" action="delete_pet.php">
                <input type="submit" value="Delete">
                <input type="hidden" name="animid" value="<?php echo $row["id"];?>">
                </form>
                <button button id=favorite class="inner_button" onclick="location.href='home.php'">Back</button>
    <?php }?></div>
<!--
      
      <label style="font-size: larger; color:#7c09a8" >Name: </p> </label>

      <label style="font-size: larger;color:#7c09a8">Age: </p></label>

      <label style="font-size: larger;color:#7c09a8">Address: <?php #echo $_SESSION["address"]; ?></p></label>

      <label style="font-size: larger;color:#7c09a8">Email: </p></label>
--></center>
  </div>
</body>
<?php $connection->close();?>
<footer><?php include 'footer.html'; ?></footer>
</html>