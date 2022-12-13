
<?php
session_start();
require 'Config.php';
require 'UserFunctions.php';

if(count($_POST)>0)
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(login($email,$password))
		header("LOCATION: index.php");
	else
	{
		$msg = 'invalid login data';
    header("LOCATION: SignIn.php");}
		
}
?>
<!DOCTYPE html>
<html>
<header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php"><img src="logoo.png" width="130" height="100"></a></p>
                <div class="link">
                <a href="SignUp.php" ><button style="border:none; cursor:pointer;"><p class="link"> Sign Up</p></button></a>
                <a href="SignIn.php"><button style="border:none;cursor:pointer;"><p class="link">Login</button></p></a>
                </div>
        </header>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="SignIn.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<body style="background-color:#c5b5e2">
	<center>
		<div class="main">  	
			<div class="signup">
				<form  method="POST">
					<label>Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input class="buttonn" type="submit" value="Login" onclick="fun()">
					<input class="buttonn" type="submit" value="Sign Up" onclick="fun2()">
				</form>
				<script>function fun(){window.location.href = "SignIn.php";}
				function fun2(){window.location.href = "SignUp.php";}</script>
			</div>
		</div>
		</center> </body>
		<footer><?php include 'footer.html';?></footer>
</html>
