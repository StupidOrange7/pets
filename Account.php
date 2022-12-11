<?php
session_start();
require_once('Config.php') ;
?>
<link rel="stylesheet" href="main.css">
      <header class="header" style="background-color:#efeef1; ">
      <?php include 'header.php';
      $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';?>
        </header>
        <body>
          <div>
        <?php 

          	echo $email." hello ".$_SESSION["fname"]. " ".$_SESSION["address"] ;?>
    </div>
        </body>
        <footer><?php include 'footer.html';?></footer>
