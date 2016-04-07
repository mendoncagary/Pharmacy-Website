<?php
session_start();

if(!isset($_SESSION["login"]))
{
header("Location:../login/switch.php");
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


if(!isset($_GET["id"]) && !isset($_GET["name"]) && !isset($_GET["quantity"]))
{
$id=NULL;
$name=NULL;
$quantity=NULL;		
}
else
{

$id=$_GET["id"];
$name=urldecode($_GET["name"]);
$quantity=$_GET["quantity"];
}

 $sql=mysql_query("SELECT * FROM $tbl_name WHERE Mid='$id' AND Mname='$name'") or die("Could Not Search!");
$product=mysql_fetch_object($sql);

class Item{
	
	var $id;
	var $name;
	var $price;
	var $quantity;
	

}


	
if(isset($id))
//if(isset($id))
{
$item=new Item();	
	$item->id=$product->Mid;
	$item->name=$product->Mname;
	$item->price=$product->Mprice;
	$item->quantity=$quantity;
	
	//Checking Product exists in cart
	$index=-1;
	$cart=unserialize(serialize($_SESSION["cart"]));
			 for($i=0;$i<count($cart);$i++)
			 {
			 
			    if($cart[$i]->id==$id )
				{
					$index=$i;
					break;
				}	
			 } 
				if($index==-1)
				{
	               $_SESSION["cart"][]=$item;				
				}
				else
				{
					$cart[$index]->quantity=$cart[$index]->quantity+$quantity;
					$_SESSION["cart"]=$cart;
					
				}
	
			
			 
	
}





?>



<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
		
		<meta name="description" content="Create account">
		
   	   <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0">
	   
	    <title>Cart</title>
		
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="cart.css">
		
		<script type="text/javascript" src="../assets/jquery/jquery-2.2.js"></script>
		
		<script type="text/javascript" src="cart.js"></script>
		
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
	 <li id="homelink"><a>
	 Welcome 
     <?php
	 
	 echo $_SESSION["myusername"];
     ?>
	 </a></li>
	 <li id="profilelink"><a href="../dashboard/dashboard.php" >Dashboard</a></li>
	 <li id="cartlink"><a href="cart.php" ><i id="cartlogo" class="fa fa-shopping-cart"></i><div id="carttext">Cart</a></li>
	 
	 <li id="loglink"><a href="../login/switch.php" >Logout</a></li>
	 </ul>
	 </div>
	
     </div>
	
	</ul>
	
	</nav>
	
	</div>



		     <table id="tableheading">
			 <tr>
			 <th>Product Id</th>
			 <th class="namecol">Product</th>
			 <th>Price</th>
			 <th>Quantity</th>
			 <th>Sub Total</th>
			 </tr>
			 </table>
			 <?php
			// if(isset($id))
			// {
			 $cart=unserialize(serialize($_SESSION["cart"]));
			 $s=0;
			 ?>
              
			<table id="carttable">
                <?php			
			for($i=0;$i<count($cart);$i++){
				
				$s+=$cart[$i]->price*$cart[$i]->quantity;
				
				 ?>
				 
				 
			 <tr id="trmain">
			 <td><?php echo $cart[$i]->id;?></td>
			 <td class="namecol"><?php echo $cart[$i]->name;?></td>
			 <td><?php echo "<i class='fa fa-inr'></i> ". $cart[$i]->price;?></td>
			 <td><?php echo $cart[$i]->quantity;?></td>
			 <td><?php echo "<i class='fa fa-inr'></i> ". $cart[$i]->price*$cart[$i]->quantity;?></td>
			 </tr>
			 <?php }?>
			 <tr id="tablefooter">
			 <?php
			 if($_SESSION["cart"]==NULL)
			 {
			  echo "<td id='empty'>You have no Items in your Cart.</td></tr>";
			 }
			 
			 else{
			 echo "<td id='total'>";
			 
			 
			 
			 echo "Total"?></td>
			<td id="secondtd"></td>
			<td></td>
			<td></td>
			 <td id="sum"><?php echo "<i class='fa fa-inr'></i>" .$s; echo "</td>";
			 echo "</tr>";
			 $_SESSION["total"]=$s;
			 
			 }?>
			 
           </table>
            
            



			 
	
			 <a id="continue" href="../pharmacy/pharmacy.php"><div>Continue Shopping</div></a>
		    <a href="../checkout/checkout.php"><div id="proceed">Proceed to Checkout</div></a>
                      	<div id="mycart"><i class="fa fa-shopping-cart fa-lg"></i> Cart</div>						
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
                    
                    <li><a href="../login/mainlogin.html">Logout</a></li>
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
