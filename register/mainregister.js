
window.onload = function () {
	document.getElementById("passinput").onchange = validatePassword;
	document.getElementById("confpassinput").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("passinput").value;
var pass1=document.getElementById("confpassinput").value;
if(pass1!=pass2)
	document.getElementById("confpassinput").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("confpassinput").setCustomValidity('');	 
//empty string means no validation error
}


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
		
		
		
