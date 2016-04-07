<meta charset="utf-8">

<?php


session_start();


$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="Pharmacy"; // Database name
$tbl_name="User"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['Username'];
$myemailid=$_POST['Emailid'];
$mypassword=$_POST['Password'];
$myconfirmpassword=$_POST['ConfirmPassword'];
$myfname=$_POST['Fname'];
$mylname=$_POST['Lname'];
$mygender=$_POST['Gender'];

if($_POST['Username']==NULL || $_POST['Emailid']==NULL || $_POST['Password']==NULL || $_POST['ConfirmPassword']==NULL || $_POST['Fname']==NULL || $_POST['Lname']==NULL ||  $_POST['Gender']==NULL )

{
header("Location:mainregister.php");	
exit();
	
	
}



$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' OR Emailid='$myemailid'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

echo("Username or Email address already exists.");
}
else {
	
	$hash=md5($mypassword);
	
	date_default_timezone_get("Asia/Kolkata");
	$mydate=date("Y-m-d l h:i:s a");
	
$var1="INSERT INTO `user`(`Username`, `Password`, `Emailid`, `Fname`, `Lname`, `Gender`,`Date_of_join`) VALUES ('$myusername','$hash','$myemailid','$myfname','$mylname','$mygender','$mydate')";
	
	mysql_query($var1);
	
	$_SESSION["register"]="ok";
    header("location:registersuccess.php");

}
?>
