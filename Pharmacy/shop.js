$(document).ready(function() {


$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
		
		$("#content").hover(function(){
			$("#submenu").hide();
			
		});
		
		
		$("#searchcontainer").click(function(){
			
			
			$("#searchform").submit();
			
		});
		
		
		});