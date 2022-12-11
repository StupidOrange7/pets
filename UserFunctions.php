<?php 
function login($email,$password)
{
    $connection  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
	if (!$connection) {
		echo "Error connecting to MySQL: ".mysqli_connect_error();
		die; 
	}
	$query = mysqli_query ($connection, "Select * from info where email = '$email' AND password = '$password' ");
	//echo $query;
	$res = mysqli_fetch_array($query); //,MYSQLI_NUM
	//echo $res;
	if($query->num_rows != 0)
	{
		
		if ($res['email'] ==  $email){
		mysqli_close($connection);
		session_start();
		$_SESSION["email"] = $email;
		$_SESSION["fname"] = $res['fname'];
		$_SESSION["address"] = $res['address'];
		$_SESSION["password"] = $res['password'];
		$_SESSION["age"] = $res['age'];
		$_SESSION["lname"] = $res['lname'];
		$_SESSION["image"] = $res['image'];
		return true;
		}
	}
	else
	{
		mysqli_close($connection);

		return false;
	}
}
function checkLogin()
{
	if(isset($_SESSION['email']))
		return true;

	return false;
}
function logout()
{
	session_destroy();
}
   