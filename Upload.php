<!DOCTYPE html>
<html>
<header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php">&nbsp &nbsp &nbsp Adopt</a></p>
                <div class="link">
                <a href="SignUp.php" ><button style="border:none; cursor:pointer;"><p class="link"> Sign Up</p></button></a>
                <a href="SignIn.php"><button style="border:none;cursor:pointer;"><p class="link">Login</button></p></a>
                </div>
        </header>
	
<link rel="stylesheet"  href="SignIn.css">
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<body style="background-color:#c5b5e2" onunload="return myFunction()">
	<center>
		<div class="main" style="height: 600px;">  	
			<div class="signup">
				<form action="addAnimals.php" method="post" >
					<label style="font-weight: bold;">Upload Your pet Now!</label>
					<input type="text" name="name" placeholder="Name of your pet" required="">
					<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female
					<input type="number" name="price" placeholder="Is your pet up for adoption or is it being sold?" required="">
                    <input type="file" name="image" placeholder="image">
					<input type="number" name="month" placeholder="how old is your pet? IN MONTHS" required="">
                    <select name="type">
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                        <option value="fish">Fish</option>
                        <option value="turtle">Turtle</option>
                    </select>
					<button class="buttonn" type="submit" value="Upload"></button>
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
