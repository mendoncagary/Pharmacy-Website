<?php

session_start();

if(!isset($_SESSION["login"]))
{
header("Location:pharmacy.php");
exit();
}

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="LAWRANCE,291296"; // Mysql password
$db_name="Pharmacy"; // Database name
$tbl_name="Medicine"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("Cannot connect!");
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_GET["Searchval"]))
{
	$searchq=$_GET["Searchval"];
    $searchq=preg_replace("#[^0-9a-z]#i"," ",$searchq);	
	
	$query=mysql_query("SELECT * FROM Medicine WHERE Mname LIKE '%$searchq%' OR Composition LIKE '%$searchq%' OR Symptoms LIKE '%$searchq%'") or die("Could Not Search!");
    
	// Mysql_num_row is counting table row
    $count=mysql_num_rows($query);

    if($count==0)
	{
		$output = "No Search Results Found";
		
	}
	
	else
	{
		while($row=mysql_fetch_array($query))
		{
	        $Medname=$row["Mname"];		
		    $MedComp=$row["Composition"];	
			$Medprice=$row["Mprice"];
			$Medman=$row["Manufacturer"];
			$Medsize=$row["Size"];
			$Medtype=$row["Mtype"];
		    
			$output = "<div>".$Medname."</div>";
       
        
		}
	}
	
	
	
	
	
	}

echo $output;





?>
