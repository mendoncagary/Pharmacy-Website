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

	
	$query=mysql_query("SELECT * FROM Medicine WHERE Mname LIKE '$searchq%' OR Composition LIKE '%$searchq%' OR Symptoms LIKE '%$searchq%'") or die("Could Not Search!");
    
	// Mysql_num_row is counting table row
    $count=mysql_num_rows($query);

	if(strlen($searchq)<1)
	{
		echo "<h3>No Search Results Found.</h3>";
	}
	
	else
	{
	
    if($count==0)
	{
		 $output0 = "Sorry, there are no matching results";
		
		
		
		
		echo "<h3>".$output0."</h3>";
		
		
	}
	
	else
	{
		while($row=mysql_fetch_array($query))
		{
	        $Medname=$row["Mname"];		
		    $Medcomp=$row["Composition"];	
			$Medprice=$row["Mprice"];
			$Medman=$row["Manufacturer"];
			$Medsize=$row["Size"];
			$Medtype=$row["Mtype"];
		    
			$output0 = $Medname;
			$output1 = "<h3>".$Medcomp."</h3>";
			$output2 = "<label>".$Medman."</label";
		    $output3 = "<div>".$Medprice."</div>";
			$output4 = "<div>".$Medsize."</div>";
            $output5 = "<div>".$Medtype."</div>";
        ?>
		
		
<div id="per3" ><div id="mrp">MRP.</div><i id="rupee" class="fa fa-inr"></i><div id="money"><?php echo $output3; ?></div></div>
		
		  <a id="per0" href="#"> <?php echo $output0;?></a>
		  
		  <div id="per4" ><?php echo $output4; ?></div>
		  
		  
								  
            

		  
            <div id="per1" ><?php echo $output1; ?></div>
			<div id="per5" ><?php echo $output5; ?></div>	
            <div id="per2" ><?php echo "Mfg: ".$output2; ?></div>
				   
			
            <br>
		   
             <hr id="mainline">
      <?php			 
             		
		}
		
	}
	
	
	
	}
	
	}






?>
