$(document).ready(function() {	
	
	
	
	$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
		
		$("#content").hover(function(){
			$("#submenu").hide();
			
		});
		
		
		
			$("#menulogo").click(function() {
    $(this).toggleClass('rotated');
  });
		
		$("#menulogo").click(function() {
    setTimeout(function() {
        window.location="../index.php";
    }, 5000);
     });
		
		
		
		});
		
		function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}

		
		
		