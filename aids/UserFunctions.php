<?php 
//require "Includes/Config.php";
function addUser($name,$username,$email,$password,$phone,$age)
{
    //1-connection
    $connection = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
    if (!$connection) {
		echo "Error connecting to MySQL: ".mysqli_connect_error();
		die; 
	}
    //2-query
    $query = mysqli_query($connection,"INSERT INTO user('name','username','email','password','age','phone') VALUES ($name,$username,$email,$password,$age,$phone);");

    if(mysqli_affected_rows($connection) >0)
    {
        mysqli_close($connection);
        return true;
    }
    //3- close
    mysqli_close($connection);
    return false;
}
function deleteUser($username)
{
    //1-connection
    $connection = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
    if (!$connection) {
		echo "Error connecting to MySQL: ".mysqli_connect_error();
		die; 
	}
    //2-query
    $query = mysqli_query($connection,"DELETE FROM user WHERE username='$username'");
    $query1 = mysqli_query($connection,"DELETE FROM history WHERE username='$username'");
    if(mysqli_affected_rows($connection) >0)
    {
        //3- close
        mysqli_close($connection);
        return true;
    }
    //3- close
    mysqli_close($connection);
    return false;
}

function login($username,$password)
{
//	echo "the username is : ".$username;
//	echo "the pass is : ".$password;
    $connection  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
	if (!$connection) {
		echo "Error connecting to MySQL: ".mysqli_connect_error();
		die; 
	}
	//$query = mysqli_query($connection,"SELECT * FROM user WHERE 'username'= '$username' AND 'password'='$password'");
//	echo "<br>the name is: ".$query;
	$query = mysqli_query ($connection, "Select * from user where username = '$username' AND password = '$password' ");
	//echo $query;
	$res = mysqli_fetch_array($query); //,MYSQLI_NUM
	//echo $res;
	if($query->num_rows != 0)
	{
		
		if ($res['username'] ==  $username){
		mysqli_close($connection);
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["name"] = $res['name'];
		$_SESSION["email"] = $res['email'];
		$_SESSION["password"] = $res['password'];
		$_SESSION["age"] = $res['age'];
		$_SESSION["phone"] = $res['phone'];

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
	if(isset($_SESSION['username']))
		return true;

	return false;
}

function logout()
{
	session_destroy();
}
   