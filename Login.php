<?php
session_start();
require 'Config.php';
require 'UserFunctions.php';

if(checkLogin())
	header("LOCATION: home.php");

if(count($_POST)>0)
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(login($email,$password))
		header("LOCATION: home.php");
	else
	{$msg='invalid login data';
    header("LOCATION: home.php".$msg);
}
		
}