<?php
session_start();

if(isset($_SESSION["login"]))
{
header("Location:../index.php");
exit();
}



?>



<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Create account">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>Create Account</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="mainregister.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="mainregister.js"></script>
		
    </head>

<body>


<div id="header">
	
	<nav id="mainmenu">
	<ul id="menu">
	<li class="menuitem"><a class="link1" href="../aboutus/aboutus.php">About us</a></li>
	<li class="menuitem"><a class="link1" href="../pharmacy/pharmacy.php"><i class="fa fa-plus-square"></i> Pharmacy</a></li>
	<li class="menuitem"><a id="menulogo" class="link1"><img src="../img/img5.png" alt="logo"></a></li>
	<li class="menuitem"><a class="link1" href="../faqs/faqs.php">FAQS</a></li>
	<li class="menuitem"><a class="link1" href="../contact/contact.php">Contact</a></li>
	
	
	<div id="usermenu">
     <div><i id="icon" class="fa fa-list fa-2x"></i></div>
	 
	 <div >
	 <ul id="submenu">
	 <li id="homelink"><a>Welcome User
	</a></li>
	 <li id="profilelink"><a href="../dashboard/dashboard.php" >Dashboard</a></li>
	 <li id="cartlink"><a href="../cart/cart.php" ><i id="cartlogo" class="fa fa-shopping-cart"></i><div id="carttext">Cart</div></a></li>
	 <li id="loglink"><a href="switch.php">
	 
	 Login
	
	 </a></li>
	 </ul>
	 </div>
	
     </div>
	
	
	</ul>
	
	</nav>
	
	</div>


           <div id="background">
                        <div id="register">
                            <form action="checkregister.php" method="POST" autocomplete="off"> 
							
                                <div id="formheading">Register</div> 
								
                             
                                 
                                    <input id="userinput" name="Username" required="required" placeholder="Username" type="text" title="Username">
                              
								
								
                                    <input id="emailinput" name="Emailid" required="required" placeholder="Email address" type="email" title="Email address">
						
                                
                                    <input id="passinput" name="Password" required="required" placeholder="Password" type="password" pattern=".{6,}" title="Password must contain atleast 6 characters"> 
                                
							
                                    <input id="confpassinput" name="ConfirmPassword" required="required" placeholder="Confirm Password" type="password"> 
                     
							<hr id="line1">
								<input id="fnameinput" name="Fname" required="required" placeholder="First Name" type="text"  title="First Name" maxlength="30"> 
								
								
								<input id="lnameinput" name="Lname" required="required" placeholder="Last Name" type="text" title="Last Name" maxlength="30"> 
						
							
								<select id="select" name="Gender" required="required">
								<option disabled="disabled" selected value="0">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
								</select>
								
								
								<input id="toccheck" name="toccheck" type="checkbox" required="required">
								 <div id="toc1">I agree to the</div><a href="#" id="toc2">Terms of Service</a>
								
								
								
								<input id="newscheck" name="newscheck" type="checkbox" title="Optional">
								<div id="newsbox">I want to recieve news and special offers</div>
				
								<hr id="line2">
								
                                <div> 
                                    <input id="submit" value="Submit" name="Submit" type="submit"> 
								</div>
								
                                <div id="already">
									Already a Member ?
									<a href="../login/switch.php">Log In</a>
								</div>
								
                            </form>
							
							
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
                    <li><a href="../faqs/faqs.php">FAQS</a></li>
                    <li><a href="../contact/contact.php">Contact us </a></li>
                </ul>
				
            </div>
            <div class="info-container">
                <label class="footerlabel">Account information</label>
                <ul>
                    
                    <li><a href="../login/switch.php">Login</a></li>

                    <li><a href="mainregister.php">Create Account</a></li>
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
