<?php
	// Login Into Facebook
	if(isset($_POST['loginbutton']))
	{
		$email=$_POST['email_login'];
		$pass=$_POST['pass_login'];
		echo "Login Details are as follows::";
		echo nl2br("\n");
		echo "You have entered email::  ".$email;
		echo nl2br("\n");
		echo "You have entered password::  ".$pass;
	}
	// Register Into Facebook	
	elseif(isset($_POST['registerbutton']))
	{
		$first=$_POST['first'];
		$last=$_POST['last'];
		$email=$_POST['email_register'];
		$pass=$_POST['pass_register'];
		echo "Registeration Details are as follows::";
		echo nl2br("\n");
		echo "First Name:: ".$first;
		echo nl2br("\n");
		echo "Last Name:: ".$last;
		echo nl2br("\n");
		echo "Email id:: ".$email;
		echo nl2br("\n");
		echo "Password:: ".$pass;
		echo nl2br("\n");
	}
	else
	{
		echo "Connection Not Established";
	}
?>