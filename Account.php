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
            <label style="font-size: medium;">Name: <?php echo $_SESSION["fname"];?> </label>
            
            <label style="font-size: medium;">Age: <?php echo $_SESSION["age"];?></label>
            
            <label style="font-size: medium;">Address: <?php echo $_SESSION["address"];?></label>
            
            <label style="font-size: medium;">Email: <?php echo $_SESSION["email"];?></label>
    </div>
        </body>
        <footer><?php include 'footer.html';?></footer>
