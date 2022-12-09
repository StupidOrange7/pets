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
	{$msg='invalid login data';
    header("LOCATION: index.php".$msg);
}
		
}