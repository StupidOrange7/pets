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
<body>
<center>
  <div style="background-image: url('bgg.jpg');background-repeat: none;">
    <div class="wrapper" >
        <?php
      $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
      if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
      }
      $email = $_SESSION['email'];
      $result = mysqli_query($connection, "SELECT * FROM animals WHERE email_ani LIKE '".$email."'");
       $num_rows = mysqli_num_rows($result);
       if ($num_rows > 0) { 
        while ($row = $result->fetch_assoc()) {
      ?>
    <div  id="<?php echo $row["id"] ?>">
     <button class="button"> 
        <?php  echo '<img src="images/'.$row["a_image"].'" style="height: 90%;width: 90%;margin-left: auto;margin-right: auto;border-radius: 13px;"/>';
        if ($row["price"] == 0) { ?><p>Up for adoption</p>
        <?php }else {
            echo $row["price"]."$";}
        ?></button>
        <div class="inner_button" > <button id=favorite onclick="location.href='sell.php'">Sell</button>

        </div>
            <?php }}
        else
        echo "0 results";
      $connection->close();?>
</center>    
</body>
    <footer><?php include 'footer.html'; ?></footer>
</html>