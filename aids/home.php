<?php
session_start();
require_once('Includes/Config.php') ;
?>
<html>
<style>
  
  .dropdown {
  float: right;
  overflow: auto;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding:1px;
  background-color: black;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.dropdown:hover .dropbtn {
  background-color: #a7a7a7;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  text-decoration:none;
  z-index: auto;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: white;
   padding: 0px 0px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add an underline to dropdown links on hover */
.dropdown-content a:hover {
  text-decoration:underline;
  
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
  .navbar {
  width: 100%;
  background-color: black;
 overflow: hidden;
 positon: relative;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
text-decoration:none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #a7a7a7;
}
body {
  background-color: white;
}
</style>
<body>

<div class="navbar" >
<a href="update.php">update</a>
<a href="his.php">history</a>
<div class="dropdown">
<button class="dropbtn">
<span style="float:right;">
<?php
$username =$_SESSION['username']; ?>
<h2 style="color:white;display:inline-block;font-size:18px;">Welcome <?php echo $_SESSION['username']; ?></h2>
</span></button>
<div class="dropdown-content">
<a href="delete.php">delete</a>
<a href="logout.php" >logout</a>
</div> </div>

</div>
<form action="Questions.php" method="post">
<figure style="display:inline-block;">
		<img src="hawaii.jpg" alt itemprop="image" style="width:290px;height:330px;border-radius:10px;">
		<figcaption itemprop="name" style="text-align:center;">Hawaii <br>
                    <button name="photo" value="hawaii">Reserve</button></figcaption>
           </figure>
           <figure style="display:inline-block;">
		<img src="maldives.jpg" alt itemprop="image" style="width:290px;height:330px;border-radius:10px;">
		<figcaption itemprop="name" style="text-align:center;">Maldives <br>
                    <button name="photo" value="maldives">Reserve</button></figcaption>
           </figure>        

           <figure style="display:inline-block;">
		<img src="Albania.jpg" alt itemprop="image" style="width:290px;height:330px;border-radius:10px;">
		<figcaption itemprop="name" style="text-align:center;">Albania <br>
                    <button name="photo" value="Albania">Reserve</button></figcaption>
           </figure>
           <figure style="display:inline-block;">
		<img src="Amesterdam.jpg" alt itemprop="image" style="width:290px;height:330px;border-radius:10px;">
		<figcaption itemprop="name" style="text-align:center;">Amesterdam <br>
                    <button name="photo" value="Amesterdam">Reserve</button></figcaption>
           </figure>    
           <figure style="display:inline-block;">
		<img src="Prague.jpg" alt itemprop="image" style="width:290px;height:330px;border-radius:10px;">
		<figcaption itemprop="name" style="text-align:center;">Prague <br>
                    <button name="photo" value="Prague">Reserve</button></figcaption>
           </figure>  
           <figure style="display:inline-block;">
		<img src="Turkey.jpg" alt itemprop="image" style="width:290px;height:330px;border-radius:10px;">
		<figcaption itemprop="name" style="text-align:center;">Turkey <br>
                    <button name="photo" value="Turkey">Reserve</button></figcaption>
           </figure>  

    
</form>
   </body>
</html>