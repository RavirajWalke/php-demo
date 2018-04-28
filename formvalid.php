<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	if(empty($uname)or empty($pass))
		echo 'Username or Password is empty!';
	else
	{
		if($uname=="ravirajwalke9@gmail.com" and $pass="2014bcs021")
			echo 'you are successfully logged in.';
		else
			echo 'Enter valid Username or Password!';
	}
}
?>