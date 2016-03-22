<?php

session_start();


if(!isset($_SESSION["login"]))
{
	header("Location:mainlogin.php");
	
}
else{
	session_destroy();
	header("Location:mainlogin.php");
	
	
	
}

?>