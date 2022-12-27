<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet"  href="SignIn.css">
<link rel="stylesheet" href="main_new.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<header class="header" style="background-color:#efeef1; ">
<?php include 'header.php';?>
        </header>
<body style="background-color:#c5b5e2" onunload="return myFunction()">
	<center>
		<div class="main" style="height: 820px;">  	
			<div class="signup">
				<form action="contactSoon.php" method="post" >
					<label>Animal Form</label>
					<input type="text" name="reason" placeholder="Why do you want to adopt this animal?" required="">
					<input type="number" name="number" placeholder="How many people live in your home?" required="">
					<input type="tel" name="phone" placeholder="Phone Number" required="">
					<input type="text" name="allergy" placeholder="Are you sure that no one in your home is allergic to this animal?" required="">
                    I am willing to take care of this animal
					<input type="checkbox" name="" placeholder="" required="">
                    Accept terms and conditions
					<input type="checkbox" name="password" placeholder="" required="">
                    Upload Video of your home
					<input type="file" name="image" placeholder="image">
					<button class="button_submit" type="submit" value="Adopt"><p style="position: relative;bottom: 0.3em;">Adopt</p></button>
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
