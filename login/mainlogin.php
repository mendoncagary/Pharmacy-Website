<?php
session_start();

if(isset($_SESSION["login"]))
{
header("Location:../dashboard/dashboard.php");
exit();
}	 

?>


<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Login page">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>Log In</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="mainlogin.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="mainlogin.js"></script>
		
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
	 <li id="loglink"><a href="switch.php" >
	 
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
                        <div id="login">
                            <form action="checklogin.php" method="POST" autocomplete="on"> 
                                <div id="formheading">Log In</div> 
                                
								<div> 
                                    <label id="userlabel">Username </label><br>
                                    <input id="userinput" name="Username" required="required" placeholder="Username" type="text">
                                </div>
								
                                <div> 
                                    <label id="passwordlabel"> Password </label><br>
                                    <input id="passwordinput" name="Password" required="required" placeholder="Password" type="password"> 
                                </div>
								
								<a id="forgotpassword" href="#">Forgot password?</a>
								
                                <div id="keeplogin"> 
									<input name="loginkeeping" type="checkbox"> 
									<label>Keep me logged in</label>
								</div>
								
                                <p> 
                                    <input id="loginbutton" value="Login" name="Submit" type="submit"> 
								</p>
								
                                <p id="createaccount">
									Not a member yet ?
									<a id="createlink" href="../register/mainregister.php">Create Account</a>
								</p>
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
                    
                    <li><a href="switch.php">
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
                    <li><a href="../register/mainregister.php">Create Account</a></li>
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
