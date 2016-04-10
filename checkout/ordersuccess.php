<meta charset="utf-8">


<?php

session_start();

if(!isset($_SESSION["login"]))
{
header("Location:../login/switch.php");
exit();
}

if(!isset($_SESSION["orderid"]))
{
	header("Location:../pharmacy/pharmacy.php");
	exit();
}




$myusername=$_SESSION["myusername"];
$orderid=$_SESSION["orderid"];

class Item{
	
         	var $id;
	        var $name;
	        var $price;
	        var $quantity;
	

            }

			
			$cart=unserialize(serialize($_SESSION["cart"]));
			
		unset($_SESSION["orderid"]);


?>


<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Frequently Asked Questions">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>Thank you</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="ordersuccess.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="ordersuccess.js"></script>
		
    </head>

<body>

<div id="header">
	
	<nav id="mainmenu">
	<ul id="menu">
	<li class="menuitem"><a class="link1" href="#">About us</a></li>
	<li class="menuitem"><a class="link1" href="../pharmacy/pharmacy.php"><i class="fa fa-plus-square"></i> Pharmacy</a></li>
	<li class="menuitem"><a id="menulogo" class="link1"><img src="../img/img5.png" alt="logo"></a></li>
	<li class="menuitem"><a class="link1" href="../faqs/faqs.php">FAQS</a></li>
	<li class="menuitem"><a class="link1" href="#">Contact</a></li>
	
	<div id="usermenu">
     <div><i id="icon" class="fa fa-list fa-2x"></i></div>
	 
	 <div >
	 <ul id="submenu">
	 <li id="homelink"><a>Welcome 
	 
	 <?php
	 
	 
	 if(!isset($_SESSION["login"]))
	 {
	 echo("User");
	 
	 }
	 else{
	 echo $_SESSION["myusername"];
	 }
	 ?>
	</a></li>
	 <li id="profilelink"><a href="../dashboard/dashboard.php" >Dashboard</a></li>
	 <li id="cartlink"><a href="../cart/cart.php" ><i id="cartlogo" class="fa fa-shopping-cart"></i><div id="carttext">Cart</div></a></li>
	 <li id="loglink"><a href="../login/switch.php" >
	 
	 <?php
	 
	 if(!isset($_SESSION["login"]))
	 {
	 echo("Login");
	 
	 }
	 else{
	 echo "Logout";
	 }
	 ?>
	 </a></li>
	 </ul>
	 </div>
	
     </div>
	
	</ul>
	
	</nav>
	
	</div>



           <div id="background">
                      
					  <span id="thankyou">Thank you,</span> <span id="orderplaced">your order has been placed.</span>
						
                    <div id="ordernumber">Order Number :</div>	
                     
                     <?php
					 echo "<span id='orderid'>".$orderid."</span>";
					 $number=0;
					 for($i=0;$i<count($cart);$i++)
                     {
				     
				     $quantity=$cart[$i]->quantity;
					 $number+=$quantity;
			         }
					 echo "<div id='successstatement'><span id='number'>".$number."</span> item(s) will be delivered to <span id='username'>".$myusername."</span> from MediCare India.</div>";
           					 
							?>
							<footer>
        <div class="footer-logo">
            <img src="../img/img4.png" alt="Medicarelogo">
        </div>
		
        <div class="footer-info">
            <div class="info-container">
                <label class="footerlabel">Company</label>
                <ul>
                    <li><a href="/about-us">About Medicare</a></li>
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
                    <li><a href="#">Contact us </a></li>
                </ul>
				
            </div>
            <div class="info-container">
                <label class="footerlabel">Account information</label>
                <ul>
                    
                    <li><a href="../login/switch.php">
					<?php
					
					if(!isset($_SESSION[""]))
					if(!isset($_SESSION["login"]))
				
				    {
					echo("Login");	
						
					}
					else{
						echo "Logout";

					}
					?>
					</a></li>
                    <li><a href="../register/mainregister.php">
					
					<?php
					
					if(!isset($_SESSION["login"]))
					{
						echo "Create Account";
						
					}
					
					else{
						
						echo "";
					}
					?></a></li>
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

							
							
                       
</div>
 
	
	
</body>

</html> 
