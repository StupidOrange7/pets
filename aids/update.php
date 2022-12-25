<?php
session_start();
$age = $_SESSION['age'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$name = $_SESSION['name'];
?>

<html>
<form action="updateBack.php" method="POST">
	<center>
	<table>
	<tr>
		<th>Username</th><td><input type="text" name="username" value=<?php echo $username;?> /><br /></td>
        </tr>
		<tr>
		<th>Name</th><td><input type="text" name="name" value=<?php echo $name;?> /><br /></td>
        </tr>
		<tr>
		<th>Password</th><td> <input type="password" name="password" value= <?php echo $password;?>  /><br /></td>
        </tr>
		<tr>
		<th>Email</th><td>  <input type="text" name="email" value=<?php echo $email;?> /><br /></td>
        </tr>
		<tr>
		<th>Phone</th><td><input type="text" name="phone" value=<?php echo $phone;?> /><br /></td>
        </tr>
		<tr>
		<th>Age</th><td><input type="number" name="age" maxlength = "100" value= <?php echo $age;?> /><br /></td>
        </tr>
     
</table>
<br>

	<button type="submit">Confirm</button>
</center>
	</form>
</html>

<?php
$age = $_SESSION['age'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$name = $_SESSION['name'];
?>