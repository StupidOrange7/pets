<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="cats.css">
<?php
session_start();
require_once('Config.php') ;
?>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="index.css">
      <header class="header" style="background-color:#efeef1; ">
      <?php include 'header.php';?>
        </header>
        <center>
        <div>
        <div class="wrapper">
          <?php 
          	$connection  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
            if (!$connection) {
              echo "Error connecting to MySQL: ".mysqli_connect_error();
              die; 
            }
          $sql = "SELECT id,name,gender,price,image,age,type FROM animals";
          $result = $connection->query($sql);
          
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  ?> <div> <button class="button"><img src="<?php echo $row["image"]?>"class="button img">
                  <?php if($row["price"]==0) {?><p>Up for adoption</p>
                  <?php }else{$row["price"];}?></button>
                  <button class="inner_button">Get</button><a href="add_fav.php"><button class="inner_button">Favourite</button></a></div>
          <?php }
          } else
              echo "0 results";
          $connection->close();?>
    </div>
    <footer><?php include 'footer.html';?></footer>
</body>
</html>