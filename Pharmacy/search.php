<?php

session_start();

if(!isset($_GET["Searchval"]))
{
header("Location:pharmacy.php");
exit();
}

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
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
			$Medid=$row["Mid"];
	        $Medname=$row["Mname"];		
		    $Medcomp=$row["Composition"];	
			$Medprice=$row["Mprice"];
			$Medman=$row["Manufacturer"];
			$Medsize=$row["Size"];
			$Medtype=$row["Mtype"];
		    
			$string=urlencode($Medname);
			
			$output0 = $Medname;
			$output1 = "<h3>".$Medcomp."</h3>";
			$output2 = "<label>".$Medman."</label";
		    $output3 = "<div>".$Medprice."</div>";
			$output4 = "<div>".$Medsize."</div>";
            $output5 = "<div>".$Medtype."</div>";
        ?>
		
<div id="per3" ><div id="mrp">MRP.</div><i id="rupee" class="fa fa-inr"></i><div id="money"><?php echo $output3; ?></div></div>
		
		  <?php echo "<a id='per0' href='products.php?id=$Medid&name=$string'>$output0</a>";?>
		  
		  <div id="per4" ><?php echo $output4; ?></div>
		  
		  
		  <?php 
		 
		  //echo "<div id='minus'><i class='fa fa-minus-square fa-lg'></i></div>";
			//echo "<div id='plus'><i class='fa fa-plus-square fa-lg'></i></div>";					  
           echo "<form method='GET' action='../cart/cart.php'>";
		   echo "<input id='number' type='number' name='quantity' min='1' value='1'>";
		   echo "<input type='hidden' name='id' value='$Medid'>";
		  echo "<input type='hidden' name='name' value='$Medname'>";
		   ?>
            
			
			
			 <!-- <a title="Add to cart" id='cartplus' href='../cart/cart.php?id=<?php //echo $Medid;?>&name=<?php //echo $Medname;?>'>--> 
			 <button id='cartplus' title="Add to cart" type="submit"><i id="basket" class='fa fa-shopping-basket fa-2x'></i></button><!--</a>-->
			</form>
            <div id="per1" ><?php echo $output1; ?></div>
			<div id="per5" ><?php echo $output5; ?></div>	
            <div id="per2" ><?php echo "Mfg: ".$output2; ?></div>
				   
			
            <br>
		   <br>
             <hr id="mainline">
      <?php			 
             		
		}
		
	}
	
	
	
	}
	
	}






?>
