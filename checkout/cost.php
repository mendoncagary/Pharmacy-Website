<?php

session_start();

if(isset($_GET["value"]))
{
	
	$output=$_GET["value"];
	
	$tax=0.04*$_SESSION["total"];
	
	$ordertotal=$_SESSION["total"]+$tax+$output;
	
	
	echo "<i class='fa fa-inr'></i> ".$output;
	
//	echo "<div>".$ordertotal."</div>";
	
}




?>