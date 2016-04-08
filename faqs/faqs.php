<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Frequently Asked Questions">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>Faqs</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="faqs.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="faqs.js"></script>
		
    </head>

<body>

<div id="header">
	
	<nav id="mainmenu">
	<ul id="menu">
	<li class="menuitem"><a class="link1" href="../aboutus/aboutus.php">About us</a></li>
	<li class="menuitem"><a class="link1" href="../pharmacy/pharmacy.php"><i class="fa fa-plus-square"></i> Pharmacy</a></li>
	<li class="menuitem"><a id="menulogo" class="link1"><img src="../img/img5.png" alt="logo"></a></li>
	<li class="menuitem"><a class="link1" href="faqs.php">FAQS</a></li>
	<li class="menuitem"><a class="link1" href="../contact/contact.php">Contact</a></li>
	
	<div id="usermenu">
     <div><i id="icon" class="fa fa-list fa-2x"></i></div>
	 
	 <div >
	 <ul id="submenu">
	 <li id="homelink"><a>Welcome 
	 
	 <?php
	 
	 session_start();
	 
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
                      
							<div id="fcontainer">
							<div id="fheading">Frequently Asked Questions</div>
							
							<div class="ftitle">
							What is MediCare?
							</div>
							<div class="fbody">
							We are a Lead Generating Platform that uses the best in Web Technology to make sure that you get access to the best and most genuine health products, with the highest savings in the shortest time possible.
							We believe that everyone should have access to good health, and that technology has a huge role to play in it.
							</div>
							
							
                           <div class="ftitle">
						    Do you deliver medicines in emergency situations?
							</div>
							<div class="fbody">
                             The network and pharmacies for whom we act as lead generation platforms, take pride in our quick service times, MediCare is NOT to be used in emergency situations.
							 Please visit your nearest hospital for Emergency Medical Services.
							</div>
							
							<div class="ftitle">
						     Where does MediCare obtain the information on medicines?
							</div>
							<div class="fbody">
                             We have tied up with many pharmacies, who have multiple qualified pharmacists onboard who scan thousands of products to provide you the relevant and useful information about your medicines. We periodically review and update the information you use.
							 Please read our Terms & conditions to understand your responsibilities and liabilities.
							</div>
							
							
							
							
							
							
							</div>
							
							
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
                    <li><a href="faqs.php">FAQS</a></li>
                    <li><a href="../contact/contact.php">Contact us </a></li>
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
