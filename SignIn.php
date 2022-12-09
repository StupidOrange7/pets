
<?php
session_start();
require 'Config.php';
require 'UserFunctions.php';
if(checkLogin())
	header("LOCATION: index.php");

if(count($_POST)>0)
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(login($email,$password))
		header("LOCATION: index.php");
	else
    header("LOCATION: SignIn.php");
		echo 'invalid login data';
}
?>
<!DOCTYPE html>
<html>
<header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php">&nbsp &nbsp &nbsp Adopt</a></p>
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
					<input class="buttonn" type="submit" value="Login" onclick="fun()"></button>
					<button class="buttonn"type="submit" value="Sign Up" onclick="fun2()"></button>
				</form>
				<script>function fun(){window.location.href = "";}
				function fun2(){window.location.href = "";}</script>
			</div>
		</div>
		</center>
		<footer id="colophon" class="site-footer" style="position: relative; top:100px;">
            <div class="social-wrapper">
              <ul>
                <li>
                  <a href="#" target="_blank">
                    <img src="https://www.mchenryvillage.com/images/instagram-icon.png" alt="Instagram Logo" class="instagram-icon"></a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <img src="https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170" alt="Youtube Logo" class="youtube-icon"></a>
                </li>
              </ul>
            </div>
          </footer>
    </body>
</html>
