<?php
session_start();

if(!isset($_SESSION["login"]))
{
header("Location:../login/switch.php");
exit();
}


if($_SESSION["cart"]== NULL)
{
	$_SESSION["total"]=0;
	
}



if(isset($_GET["value"]))
{
	
	$output=$_GET["value"];
	
	
	
	
	
}



?>



<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Frequently Asked Questions">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>CheckOut</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="checkout.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="checkout.js"></script>
		
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
	 <li id="cartlink"><a href="../cart/cart.php"><i id="cartlogo" class="fa fa-shopping-cart"></i><div id="carttext">Cart</div></a></li>
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
                      
							
							
							<div id="title">MediCare <span id="title2">Checkout</span></div>
						   <?php
                         if($_SESSION["cart"]!=NULL)
						 {?>							 
							<div id="shippayrewiew">
							<div id="shipping">1. Shipping</div>
							<div id="payment">2. Payment</div>
							<div id="placeorder">3. Review and Place Order</div>
							</div>
							
							<a href="../cart/cart.php" id="backcart"><i class="fa fa-angle-left"></i> Back to Cart</a>
							
							<form action="submit.php" method="POST" onsubmit="return confirm('Do you really want to place the order?');">
							<div id="shipaddress">Enter Shipping Address</div>
							<div id="useraddress">Address</div>
							<input id="addressinput" name="address" type="text" required>
							<div id="usercity">City</div>
							<input id="cityinput" name="city" type="text" required>
							<div id="userstate">State</div>
							
<select name="state" required id="stateinput">
<option selected disabled>Please Select</option>
<option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
<option value='Andhra Pradesh'>Andhra Pradesh</option>
<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
<option value='Assam'>Assam</option>
<option value='Bihar'>Bihar</option>
<option value='Chandigarh'>Chandigarh</option>
<option value='Chhattisgarh'>Chhattisgarh</option>
<option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
<option value='Daman and Diu'>Daman and Diu</option>
<option value='Delhi'>Delhi</option>
<option value='Goa'>Goa</option>
<option value='Gujarat'>Gujarat</option>
<option value='Haryana'>Haryana</option>
<option value='Himachal Pradesh'>Himachal Pradesh</option>
<option value='Jammu and Kashmir'>Jammu and Kashmir</option>
<option value='Jharkhand'>Jharkhand</option>
<option value='Karnataka'>Karnataka</option>
<option value='Kerala'>Kerala</option>
<option value='Lakshadweep'>Lakshadweep</option>
<option value='Madhya Pradesh'>Madhya Pradesh</option>
<option value='Maharashtra'>Maharashtra</option>
<option value='Manipur'>Manipur</option>
<option value='Meghalaya'>Meghalaya</option>
<option value='Mizoram'>Mizoram</option>
<option value='Nagaland'>Nagaland</option>
<option value='Odisha'>Odisha</option>
<option value='Puducherry'>Puducherry</option>
<option value='Punjab'>Punjab</option>
<option value='Rajasthan'>Rajasthan</option>
<option value='Sikkim'>Sikkim</option>
<option value='Tamil Nadu'>Tamil Nadu</option>
<option value='Telengana'>Telengana</option>
<option value='Tripura'>Tripura</option>
<option value='Uttar Pradesh'>Uttar Pradesh</option>
<option value='Uttarakhand'>Uttarakhand</option>
<option value='West Bengal'>West Bengal</option>
</select>
							
							<div id="userzipcode">Zip Code</div>
							<input name="zipcode" id="zipcodeinput" pattern="[0-9]{6}" type="text" required oninvalid="setCustomValidity('Your zipcode must be 6 digits long')" onchange="try{setCustomValidity('')}catch(e){}">
							
							<div id="userphone">Contact</div>
							<input name="phone" id="phoneinput" pattern="[0-9]{8,10}" type="text" required oninvalid="setCustomValidity('Please enter a valid Phone number')" onchange="try{setCustomValidity('')}catch(e){}">
							
							
							<input id="continue" type="submit" value="Place Order">
							
							
							<div id="delivery">
							
							<div id="deliverymethod">Delivery Method</div>
							<input id="standardradio" checked="checked" class="radio" name="radio" value="0" type="radio" oninvalid="setCustomValidity('Please select a payment method')" onchange="try{setCustomValidity('')}catch(e){}" required>
							<div id="standard">Standard Delivery</div>
							<span id="free">FREE (3 to 6 days)</span>
							<input id="expressradio" class="radio" name="radio" value="30" type="radio">
							<div id="express">Express Delivery</div>
							<span id="free1">Rs 30 (1 to 2 days)</span>
							<input id="samedayradio" class="radio" name="radio" value="60" type="radio">
							<div id="sameday">Same day Delivery</div>
							<span id="free2">Rs 60 (Within 1 day)</span>
							</div>
					
					        <div id="paymentoptions">Payment Options</div>
							<label title="Visa" id="visa"><input checked oninvalid="setCustomValidity('Please select a payment method')" onchange="try{setCustomValidity('')}catch(e){}" hidden id="radio2" required value="Visa" name="payment" type="radio"></input><i class="fa fa-cc-visa fa-3x"></i></label>
					         <label title="MasterCard" id="mastercard"><input hidden id="radio3" value="Mastercard" name="payment" type="radio"></input><i class="fa fa-cc-mastercard fa-3x"></i></label>
							 <label title="AmericanExpress" id="amex"><input hidden id="radio4" value="AmericanExpress" name="payment" type="radio"></input><i class="fa fa-cc-amex fa-3x"></i></label>
							 <label title="Paypal" id="paypal" ><input hidden id="radio5" value="Paypal" name="payment" type="radio"></input><i class="fa fa-cc-paypal fa-3x"></i></label>
	                         <label title="CashonDelivery" id="cashondelivery"><input hidden id="radio6" value="CashonDelivery" name="payment" type="radio"></input><i class="fa fa-money fa-3x"></i></label>
	  
	  
							 <div></div>
							</form>
							
							<div id="ordersummary">
							<div id="orderheader">Order Summary</div>
							<div id="ordersub">
							<div id="subtotal">SubTotal :</div>
							<?php 
							echo "<div id='sessiontotal'>";
							echo "<i class='fa fa-inr'></i> ";
							echo $_SESSION['total'];
							echo "</div>";
							?>
							<div id="ship2">Shipping :</div>
							<div id="shipcost"></div>
							<?php echo "<div id='dummyship'><i class='fa fa-inr'></i> 0</div>";?>
							<div id="tax">Tax :</div>
							<?php 
							$tax=0.04*$_SESSION["total"];
							echo "<div id='taxcost'><i class='fa fa-inr'></i> ".$tax."</div>"; ?>
							<br>
							<hr id="breakline">
							<div id="ordertotal">Order Total :</div>
			                  <div id="finalcost"></div>
							  <div id="dummycost"><?php 
							  $dummycost=$tax+$_SESSION["total"];
							  echo "<i class='fa fa-inr'></i> ".$dummycost;
							  
							  ?></div>
							</div>
							<i id="lock" class="fa fa-lock"></i>
							<div id="securecheckout">Secure Checkout</div>
							<div id="securesub">Shopping is always <a id="safeandsecure">safe and secure</a></div>
							</div>
						 <?php }
						 else 
						 {
							 ?>
							 <div id="missing">Are you missing items in your cart?</div>
							 <div id="gotop">Shop for the medicines you need and add them to your cart</div>
							 <a href="../pharmacy/pharmacy.php"><div id="goback">Continue Shopping <i class="fa fa-angle-down fa-lg"></i></div></a>
							 
						 <?php
						 }
						 
						 ?>
							
							
						
							
							
							
							
							
							
							
						
							
							
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
