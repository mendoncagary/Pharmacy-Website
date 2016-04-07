<?php

session_start();

if(!isset($_SESSION["login"]))
{
header("Location:../login/switch.php");
exit();
}

if(!isset($_GET["id"]) && !isset($_GET["name"]))
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

if(isset($_GET["id"]) && isset($_GET["name"]))
{
	$var1=$_GET["id"];
	$var2=$_GET["name"];
	$var3=urldecode($var2);
	$query=mysql_query("SELECT * FROM $tbl_name WHERE Mid ='$var1' AND Mname='$var3'") or die("Could Not Search!");

	$count=mysql_num_rows($query);
	if($count==0)
	{
		echo "No Result";
	}
	else{
    while($row=mysql_fetch_array($query))
	{
		$Medid=$row["Mid"];
		$Medname=$row["Mname"];
		$Medtype=$row["Mtype"];
		$Medmfg=$row["Manufacturer"];
	$Medsize=$row["Size"];
	$Medprice=$row["Mprice"];
	$Medcomp=$row["Composition"];
	$Meddesc=$row["Description"];
	$Meddosage=$row["Dosage"];
	$Medsymptoms=$row["Symptoms"];
	}
	
	}

	
}

?>



<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Create account">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>Products</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="products.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="products.js"></script>
		
    </head>

<body>


<div id="header">
	
	<nav id="mainmenu">
	<ul id="menu">
	<li class="menuitem"><a class="link1" href="../aboutus/aboutus.php">About us</a></li>
	<li class="menuitem"><a class="link1" href="../pharmacy/pharmacy.php"><i class="fa fa-plus-square"></i> Pharmacy</a></li>
	<li class="menuitem"><a id="menulogo" class="link1" href="../index.php"><img src="../img/img5.png" alt="logo"></a></li>
	<li class="menuitem"><a class="link1" href="../faqs/faqs.php">FAQS</a></li>
	<li class="menuitem"><a class="link1" href="../contact/contact.php">Contact</a></li>
	
	<div id="usermenu">
     <div><i id="icon" class="fa fa-list fa-2x"></i></div>
	 
	 <div >
	 <ul id="submenu">
	 <li id="homelink"><a>
	 Welcome 
     <?php
	 
	 echo $_SESSION["myusername"];
     ?>
	 </a></li>
	 <li id="profilelink"><a href="../dashboard/dashboard.php" >Dashboard</a></li>
	 <li id="cartlink"><a href="../cart/cart.php" ><i id="cartlogo" class="fa fa-shopping-cart"></i><div id="carttext">Cart</div></a></li>
	 
	 <li id="loglink"><a href="../login/switch.php" >Logout</a></li>
	 </ul>
	 </div>
	
     </div>
	
	</ul>
	
	</nav>
	
	</div>


	<div id="mholder">
	<a href="pharmacy.php" title="Go Back" id="chevronback"><i class="fa fa-chevron-circle-left fa-2x"></i></a>
	<div id="mname"><?php echo $Medname;?></div>
	<div id="mcomp"><?php echo $Medcomp;?></div>
	<div id="mmfgtitle">Brand</div>
   <div id="mmfg"><?php echo $Medmfg;?></div>
	
	<div id="mpricetitle">MRP : <i class="fa fa-inr"></i></div>
	<div id="mprice"><?php echo $Medprice;?></div>
	<div id="msize"><?php echo $Medsize;?></div>
	<div id="mtype"><?php echo $Medtype;?></div>
	</div>
	
	
	<div id="mdesctitle">Drug Description</div>
	<div id="mdosagetitle">Typical Usage</div>
	<hr id="longline">
	<div id="mdesc"><?php echo $Meddesc;?></div>
	<div id="mdosage"><?php echo $Meddosage;?></div>


		     
		   
                      							
							<footer>
        <div class="footer-logo">
            <img src="../img/img4.png" alt="Medicarelogo">
        </div>
		
        <div class="footer-info">
		
            <div class="info-container">
                <label class="footerlabel">Company</label>
                <ul>
                    <li><a href="../aboutus/aboutus.php">About Medicare</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>

            <div class="info-container">
                <label class="footerlabel">Policy Information</label>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                </ul>
				
            </div>
            <div class="info-container">
                <label class="footerlabel">Need Help?</label>
                <ul>
                    <li><a href="../faqs/faqs.php">FAQS</a></li>
                    <li><a href="../contact/contact.php">Contact us </a></li>
                </ul>
				
            </div>
            <div class="info-container">
                <label class="footerlabel">Account information</label>
                <ul>
                    
                    <li><a href="../login/switch.php">Logout</a></li>
                   <!-- <li><a href="mainregister.html">Create Account</a></li>  -->
                    <li><a href="#">Track Order</a></li>
                </ul>
            </div>
			
            <div class="info-container">
                <label class="footerlabel">Connect with Us</label>
                <ul class="social">
                    <li><a class="fbicon" href="https://facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a class="twittericon" href="https://twitter.com/" title="twitter" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a class="googleicon" href="https://plus.google.com/" title="google+" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a class="pinteresticon" href="https://www.pinterest.com/" title="Pinterest" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a class="linkedinicon" href="https://www.linkedin.com/" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>

        </div>
		</div>
        <div class="footer-copyright">
            <p> Copyright© 2016 Medicare. All Rights Reserved</p>
        </div>
    </footer>

							
			

	
	
</body>

</html> 
