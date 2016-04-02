$(document).ready(function() {


$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
	
		$("#content").hover(function(){
			$("#submenu").hide();
			
		});
		
		
		$("#mdosagetitle").click(function(){
			
			$("#mdosagetitle").css({"border-bottom":"4px solid #264853"});
			$("#mdesctitle").css({"border-bottom":"none"});
			$("#mdosage").toggle();
			$("#mdesc").toggle();
			
		});
		
		$("#mdesctitle").click(function(){
			
			$("#mdesctitle").css({"border-bottom":"4px solid #264853"});
			$("#mdosagetitle").css({"border-bottom":"none"});
			$("#mdesc").toggle();
			$("#mdosage").toggle();
			
		});
		
		});