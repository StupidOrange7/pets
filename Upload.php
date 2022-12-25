<!DOCTYPE html>
<html>
<?php
session_start();
require'Config.php' ;
?>

<link rel="stylesheet"  href="SignIn.css">
<link rel="stylesheet" href="trial.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<header class="header" style="background-color:#efeef1; ">
    <?php include 'header.php';?>
</header>
<body style="background-color:#c5b5e2" onunload="return myFunction()">
	<center>
		<div class="main" style="height: auto;">  	
			<div class="signup">
				<form action="add_pet.php" method="post" >
					<label style="font-weight: bold;">Upload Your pet Now!</label>
					<input type="text" name="a_name" placeholder="Name of your pet" required="">
					<span><input style="float:left;position: relative;right:30px;" type="radio" name="a_gender" value="Male"><span style="float: left;position: relative;right: 147px;top: 21px;font-family: system-ui;">Male</span>
                    <input style="float:left;position: relative;left:118px;bottom: 60px;" type="radio" name="a_gender" value="Female"><span style="position: relative;right: 98px;top: 21px;font-family: system-ui;">Female</span>
					</span><input type="number" name="price" placeholder="Is your pet up for adoption or is it being sold?" required="">
                    <input type="file" name="a_image" placeholder="image">
					<input type="number" name="month" placeholder="how old is your pet? IN MONTHS">
                    Type&nbsp;&nbsp;&nbsp;&nbsp;<select name="type">
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                        <option value="fish">Fish</option>
                        <option value="turtle">Turtle</option>
                    </select>
					<button class="button_submit" style="width: 40%;"> <span class="button_submit" style="position: relative; height: 2px;top:8px;width: 40%;font: system-ui;">Upload</span></button>
				</form>
        
        <script>
            function myFunction() {
            return "Are you sure you want to close the site?";
            }
        </script>
			</div>
		</div>
		</center>
    <footer>
      <?php include 'footer.html';?>
    </footer>
    </body>
</html>
