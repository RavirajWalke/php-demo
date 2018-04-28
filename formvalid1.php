<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	if(empty($uname)or empty($pass))
		echo 'Username or Password is empty!';
	else
	{
		if($uname=="ravirajwalke9@gmail.com" and $pass=="123456789")
			echo 'you are successfully logged in.';
                elseif($uname!="ravirajwalke9@gmail.com")
                    echo 'Invalid Username';
		else
			echo 'Enter valid Username or Password!';
	}
}
else
    echo 'hi!';
?>